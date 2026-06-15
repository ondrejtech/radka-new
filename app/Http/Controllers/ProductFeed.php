<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class ProductFeed extends Controller
{
    public function heurekaFeed(): Response
    {
        $path = public_path('xml/heureka_feed.xml');

        return response()->file($path, [
            'Content-Type' => 'application/xml; charset=UTF-8',
        ]);
    }
}
