<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function productCompare(Request $request): View
    {
        $catCode = (int) $request->query('pnc_id', 0);

        return view('pages.product-compare', [
            'catCode' => $catCode,
        ]);
    }
}
