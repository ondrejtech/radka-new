<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function productDetail(string $slug, int $proId): View
    {
        return view('pages.product-detail', [
            'proId' => $proId,
        ]);
    }

    public function productCompare(Request $request): View
    {
        $catCode = (int) $request->query('pnc_id', 0);

        return view('pages.product-compare', [
            'catCode' => $catCode,
        ]);
    }

    public function basket(): View
    {
        return view('pages.cart.index');
    }

    public function companyMarketing(): View
    {
        return view('pages.company-marketing');
    }

    public function processingPersonalInfo(): View
    {
        return view('pages.processing-personal-info');
    }

        public function contact(): View
    {
        $persons = [
            [
                'id' => 202601,
                'name' => 'Zdena Altmanova',
                'role' => 'Jednatel/ka spolecnosti',
                'phone' => '721 178 847',
                'email' => 'altmanova@multishoping.eu',
                'role_title' => 'obchodní informace',
            ],
            [
                'id' => 202602,
                'name' => 'Pavel Burda',
                'role' => 'Obchodni manazer',
                'phone' => '',
                'email' => 'burda@multishoping.eu',
                'role_title' => 'obchodní informace',
            ],
            [
                'id' => 202603,
                'name' => 'Josef Psota',
                'role' => 'Obchodni manazer',
                'phone' => '',
                'email' => 'psota@multishoping.eu',
                'role_title' => 'obchodní informace',
            ],
        ];

        return view('pages.contact', [
            'persons' => array_map(fn (array $p) => (object) $p, $persons),
        ]);
    }
}
