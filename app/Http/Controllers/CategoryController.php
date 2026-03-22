<?php

namespace App\Http\Controllers;

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

    public function index(): View
    {
        return view('welcome');
    }
}
