<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;

class AresController extends Controller
{
    public function lookup(string $ico): JsonResponse
    {
        $ico = preg_replace('/\D/', '', $ico);

        if (strlen($ico) !== 8) {
            return response()->json(['error' => 'IČ musí mít 8 číslic.'], 422);
        }

        $response = Http::timeout(5)
            ->get("https://ares.gov.cz/ekonomicke-subjekty-v-be/rest/ekonomicke-subjekty/{$ico}");

        if (! $response->ok()) {
            return response()->json(['error' => 'Subjekt s tímto IČ nebyl nalezen.'], 404);
        }

        $data = $response->json();
        $sidlo = $data['sidlo'] ?? [];

        $streetParts = array_filter([
            $sidlo['nazevUlice'] ?? ($sidlo['nazevObce'] ?? null),
            isset($sidlo['cisloDomovni']) ? $sidlo['cisloDomovni'] : null,
            isset($sidlo['cisloOrientacni']) ? '/'.$sidlo['cisloOrientacni'] : null,
        ]);

        return response()->json([
            'company_name' => $data['obchodniJmeno'] ?? '',
            'company_dic' => $data['dic'] ?? '',
            'street' => implode(' ', $streetParts),
            'city' => $sidlo['nazevObce'] ?? '',
            'zip' => isset($sidlo['psc']) ? str_replace(' ', '', (string) $sidlo['psc']) : '',
        ]);
    }
}
