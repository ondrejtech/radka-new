<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CategoryController::class, 'home']);

// Category pages – URL pattern: /{seg1}/{seg2}/n-{superCatCode},{catCode},{extra}
// Examples:
//   /info/it/n-52,0,0            (level 1)
//   /info-other/notebooky/n-521,0,0   (level 2)
//   /notebooky/notebooky/n-521,12345,0 (level 3)
Route::get('/{seg1}/{seg2}/{nParam}', [CategoryController::class, 'index'])->where('nParam', 'n-[\w]+,\d+,\d+')->name('category.show');
