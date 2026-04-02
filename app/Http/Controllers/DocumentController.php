<?php

namespace App\Http\Controllers;

class DocumentController extends Controller
{
    public function order()
    {
        return view('pages.document.orderlist');
    }
}
