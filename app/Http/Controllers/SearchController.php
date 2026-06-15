<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SearchController extends Controller
{
    public function index(Request $request): View
    {
        $query = (string) $request->query('fulltext', '');

        return view('pages.search', [
            'fulltext' => $query,
        ]);
    }
}
