<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductFeed extends Controller
{
    public function heurekaFeed()
    {
        $path = public_path('xml/heureka_feed.xml');

        return response()->file($path, [
            'Content-Type' => 'application/xml; charset=UTF-8',
        ]);
    }
}
