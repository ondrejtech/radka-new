<?php

namespace App\Http\Controllers;

use App\Models\ProductImage;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ProductImageController extends Controller
{
    /**
     * Proxy a product's main image.
     *
     * The upstream image host blocks crawlers via robots.txt, so the image is
     * fetched server-side and re-served from our own crawlable domain. This
     * lets Googlebot-Image fetch product images for Merchant Center.
     */
    public function show(int $proId): Response
    {
        $image = ProductImage::query()->where('ProId', $proId)->first();

        abort_if($image === null, 404);

        $url = $this->fullSize((string) $image->URL);

        abort_unless(Str::endsWith((string) parse_url($url, PHP_URL_HOST), 'edsystem.cz'), 404);

        $response = Http::timeout(15)->get($url);

        abort_unless($response->successful(), 404);

        return response($response->body(), 200, [
            'Content-Type' => $response->header('Content-Type') ?: 'image/jpeg',
            'Cache-Control' => 'public, max-age=2592000',
        ]);
    }

    /**
     * Drop the size suffix (e.g. "_9.jpg") to get the full-size variant.
     */
    private function fullSize(string $url): string
    {
        return (string) preg_replace('/_\d+\.jpg$/', '.jpg', $url);
    }
}
