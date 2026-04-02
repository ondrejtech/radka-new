<?php

namespace App\Http\Controllers;

class DocumentController extends Controller
{
    public function order()
    {
        return view('pages.document.orderlist');
    }

    public function orderItem(int $orderId)
    {
        return view('pages.document.order', ['orderId' => $orderId]);
    }
}
