<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

class GoogleAdsAuthController extends Controller
{
    private string $authUrl = 'https://accounts.google.com/o/oauth2/v2/auth';

    private string $tokenUrl = 'https://oauth2.googleapis.com/token';

    private string $scope = 'https://www.googleapis.com/auth/adwords';

    public function redirect(): RedirectResponse
    {
        $params = http_build_query([
            'client_id' => config('services.google_ads.client_id'),
            'redirect_uri' => config('services.google_ads.redirect_uri'),
            'response_type' => 'code',
            'scope' => $this->scope,
            'access_type' => 'offline',
            'prompt' => 'consent',
        ]);

        return redirect($this->authUrl.'?'.$params);
    }

    public function callback(Request $request): Response
    {
        if ($request->has('error')) {
            return response('OAuth error: '.$request->input('error'), 400);
        }

        $response = Http::asForm()->post($this->tokenUrl, [
            'code' => $request->input('code'),
            'client_id' => config('services.google_ads.client_id'),
            'client_secret' => config('services.google_ads.client_secret'),
            'redirect_uri' => config('services.google_ads.redirect_uri'),
            'grant_type' => 'authorization_code',
        ]);

        $data = $response->json();

        $refreshToken = $data['refresh_token'] ?? 'Refresh token nebyl vrácen – ujisti se, že máš access_type=offline a prompt=consent.';

        return response(
            '<pre style="font-family:monospace;font-size:16px;padding:20px">'.
            '<strong>REFRESH TOKEN:</strong>'.PHP_EOL.
            htmlspecialchars($refreshToken).PHP_EOL.PHP_EOL.
            '<strong>Celá odpověď:</strong>'.PHP_EOL.
            htmlspecialchars(json_encode($data, JSON_PRETTY_PRINT)).
            '</pre>'
        );
    }
}
