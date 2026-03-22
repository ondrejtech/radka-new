<?php

namespace App\Livewire\Template;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Models\ProductProducer;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Livewire\Component;

class SearchForm extends Component
{
    public string $query = '';

    public array $results = [
        'producers' => [],
        'categories' => [],
        'products' => [],
    ];

    public bool $showAutocomplete = false;

    public function updatedQuery(): void
    {
        if (mb_strlen($this->query) >= 2) {
            $this->fetchResults();
            $this->showAutocomplete = true;
        } else {
            $this->results = ['producers' => [], 'categories' => [], 'products' => []];
            $this->showAutocomplete = false;
        }
    }

    public function fetchResults(): void
    {
        $term = $this->query;

        $producers = ProductProducer::query()
            ->where('ProducerName', 'like', '%'.$term.'%')
            ->limit(3)
            ->get(['ProducerId', 'ProducerCode', 'ProducerName'])
            ->toArray();

        $categories = ProductCategory::query()
            ->where('CategoryName', 'like', '%'.$term.'%')
            ->limit(3)
            ->get(['CategoryCode', 'CategoryName'])
            ->toArray();

        $products = Product::query()
            ->where(function ($q) use ($term) {
                $q->where('Name', 'like', '%'.$term.'%')
                    ->orWhere('Code', 'like', '%'.$term.'%')
                    ->orWhere('PartNumber', 'like', '%'.$term.'%');
            })
            ->leftJoinSub(
                ProductImage::query()
                    ->select('ProId', DB::raw('MIN(URL) as ImageUrl'))
                    ->groupBy('ProId'),
                'first_image',
                'first_image.ProId',
                '=',
                'Product.ProId'
            )
            ->limit(10)
            ->get(['Product.ProId', 'Product.Name', 'Product.Status', 'first_image.ImageUrl'])
            ->toArray();

        $this->results = [
            'producers' => $producers,
            'categories' => $categories,
            'products' => $products,
        ];
    }

    public function search(): void
    {
        $this->validate([
            'query' => ['required', 'min:2'],
        ]);

        $this->showAutocomplete = false;

        $this->redirect(route('products.search', ['fulltext' => $this->query]));
    }

    public function closeAutocomplete(): void
    {
        $this->showAutocomplete = false;
    }

    public function highlightTerm(string $text, string $term): string
    {
        if ($term === '') {
            return e($text);
        }

        $pattern = '/'.preg_quote($term, '/').'/iu';

        return preg_replace_callback($pattern, function ($matches) {
            return '<strong class="ui-autocomplete-term">'.e($matches[0]).'</strong>';
        }, e($text));
    }

    public function render(): View
    {
        return view('livewire.template.search-form');
    }
}
