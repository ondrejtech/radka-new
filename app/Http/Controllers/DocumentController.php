<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DocumentController extends Controller
{
    public function order(): View
    {
        return view('pages.document.orderlist');
    }

    public function orderItem(int $orderId): View
    {
        return view('pages.document.order', ['orderId' => $orderId]);
    }

    public function termService(): View
    {
        return view('pages.document.term-service');
    }

    public function claimProduct(): View
    {
        return view('pages.document.claim-product');
    }

    public function claimPolicy(): View
    {
        return view('pages.claim-policy');
    }
}
