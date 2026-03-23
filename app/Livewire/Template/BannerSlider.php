<?php

namespace App\Livewire\Template;

use App\Models\ProductSuperCategory;
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
        if (! preg_match('/n-(\w+),\d+,\d+/', request()->path(), $m)) {
            return false;
        }

        return ProductSuperCategory::where('ParentSuperCategoryCode', (int) $m[1])->exists();
    }
}
