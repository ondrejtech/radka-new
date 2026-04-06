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

    public function termService()
    {
        return view('pages.document.term-service');
    }

    public function claimProduct()
    {
        return view('pages.document.claim-product');
    }

    public function claimPolicy()
    {
        return view('pages.claim-policy');
    }
}
