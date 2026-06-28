<?php

namespace App\Livewire\Template;

use App\Services\NavigationService;
use Illuminate\View\View;
use Livewire\Component;

class MainNavigation extends Component
{
    public function render(NavigationService $navigationService): View
    {
        return view('livewire.template.main-navigation', [
            'navigation' => $navigationService->getNavigation(),
        ]);
    }
}
