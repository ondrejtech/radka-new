<?php

use App\Http\Controllers\AresController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CategoryController::class, 'home']);

Route::get('/pages/productcompare', [PagesController::class, 'productCompare'])->name('pages.product-compare');

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
});

Route::get('/ares/lookup/{ico}', [AresController::class, 'lookup'])->name('ares.lookup');

require __DIR__.'/auth.php';
