<?php

use App\Http\Controllers\AresController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\ProductFeed;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

Route::get('/', [CategoryController::class, 'home']);

Route::get('/product-feed/heureka.xml', [ProductFeed::class, 'heurekaFeed'])->name('product-feed.heureka');

Route::get('/pages/productcompare', [PagesController::class, 'productCompare'])->name('pages.product-compare');
Route::get('/pages/basket', [PagesController::class, 'basket'])->name('pages.basket.index');
Route::get('/pages/company-marketing', [PagesController::class, 'companyMarketing'])->name('pages.company-marketing');
Route::get('/pages/processing-personal-info', [PagesController::class, 'processingPersonalInfo'])->name('pages.processing-personal-info');
Route::get('/pages/contact', [PagesController::class, 'contact'])->name('pages.contact');

Route::get('/pages/documents/term-service', [DocumentController::class, 'termService'])->name('pages.documents.term-service');
Route::get('/pages/document/claim-product', [DocumentController::class, 'claimProduct'])->name('pages.documents.claim-product');
Route::get('/pages/document/claim-policy', [DocumentController::class, 'claimPolicy'])->name('pages.documents.claim-policy');

Route::get('/{slug}/product-{proId}', [PagesController::class, 'productDetail'])
    ->where('proId', '\d+')
    ->name('product.detail');

// Category pages – URL pattern: /{seg1}/{seg2}/n-{superCatCode},{catCode},{extra}
// Examples:
//   /info/it/n-52,0,0            (level 1)
//   /info-other/notebooky/n-521,0,0   (level 2)
//   /notebooky/notebooky/n-521,12345,0 (level 3)
Route::get('/{seg1}/{seg2}/{nParam}', [CategoryController::class, 'index'])->where('nParam', 'n-[\w]+,\d+,\d+')->name('category.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/pages/documents/orderlist', [DocumentController::class, 'order'])->name('pages.documents.orderlist');
    Route::get('/pages/documents/order-{orderId}', [DocumentController::class, 'orderItem'])->name('pages.documents.order');
});

Route::get('/search', [SearchController::class, 'index'])->name('products.search');

Route::get('/ares/lookup/{ico}', [AresController::class, 'lookup'])
    ->middleware('throttle:10,1')
    ->name('ares.lookup');

// PayPal – přihlášení uživatelé
Route::middleware('auth')->prefix('paypal')->name('paypal.')->group(function (): void {
    Route::post('/order/{order}/create', [PayPalController::class, 'createOrder'])->name('order.create');
    Route::get('/order/{order}/success', [PayPalController::class, 'success'])->name('order.success');
    Route::get('/order/{order}/cancel', [PayPalController::class, 'cancel'])->name('order.cancel');
});

// PayPal – hosté
Route::prefix('paypal/guest')->name('paypal.guest.')->group(function (): void {
    Route::post('/order/{order}/create', [PayPalController::class, 'createOrder'])->name('order.create');
    Route::get('/order/{order}/success', [PayPalController::class, 'success'])->name('order.success');
    Route::get('/order/{order}/cancel', [PayPalController::class, 'cancel'])->name('order.cancel');
});

// PayPal webhook – bez CSRF, bez auth
Route::post('/paypal/webhook', [PayPalController::class, 'webhook'])->name('paypal.webhook');

require __DIR__.'/auth.php';
