<?php

namespace App\Http\Controllers;

use App\Services\NavigationService;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function __construct(private NavigationService $navigationService) {}

    public function index(): Response
    {
        $urls = $this->collectUrls();

        return response()
            ->view('sitemap', ['urls' => $urls])
            ->header('Content-Type', 'application/xml');
    }

    /** @return array<int, string> */
    private function collectUrls(): array
    {
        $urls = [url('/')];

        foreach ($this->navigationService->getNavigation() as $category) {
            if (! empty($category['url'])) {
                $urls[] = url($category['url']);
            }
        }

        return array_values(array_unique($urls));
    }
}
