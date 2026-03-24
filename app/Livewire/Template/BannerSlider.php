<?php

namespace App\Livewire\Template;

use Illuminate\View\View;
use Livewire\Component;

class BannerSlider extends Component
{
    public function render(): View
    {
        return view('livewire.template.banner-slider', [
            'isL1' => $this->isL1Page(),
        ]);
    }

    private function isL1Page(): bool
    {
        // Show banner on L1 and L2 pages — both have catCode=0 in URL (n-code,0,0)
        return (bool) preg_match('/n-\w+,0,\d+/', request()->path());
    }
}
