<?php

namespace App\Http\Controllers;

use App\Services\GoogleMerchantFeedService;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ProductFeed extends Controller
{
    public function heurekaFeed(): Response
    {
        $path = public_path('xml/heureka_feed.xml');

        return response()->file($path, [
            'Content-Type' => 'application/xml; charset=UTF-8',
        ]);
    }

    public function googleMerchantFeed(GoogleMerchantFeedService $service): StreamedResponse
    {
        return $service->stream();
    }
}
