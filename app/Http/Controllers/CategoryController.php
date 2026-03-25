<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\NavigationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function home(NavigationService $navigationService): RedirectResponse
    {
        $navigation = $navigationService->getNavigation();
        $firstUrl = $navigation[0]['url'] ?? null;

        return redirect($firstUrl ?? route('category.show', ['seg1' => 'info', 'seg2' => 'it', 'nParam' => 'n-52,0,0']));
    }

    public function index(string $seg1, string $seg2, string $nParam): View
    {
        if (! preg_match('/n-(\w+),(\d+),(\d+)/', $nParam, $m)) {
            return view('welcome');
        }

        $catCode = (int) $m[2];

        if ($catCode === 0) {
            return view('welcome');
        }

        $vendors = Product::query()
            ->where('CategoryCode', $catCode)
            ->whereNotNull('ProducerName')
            ->where('ProducerName', '!=', '')
            ->distinct()
            ->orderBy('ProducerName')
            ->pluck('ProducerName')
            ->values();

        return view('categories.product-list', compact('catCode', 'vendors'));
    }
}
