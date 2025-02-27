<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\User\WishlistController;
use App\Http\Controllers\Frontend\FrontendController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin_auth.php';



//frontend
Route::get('/', [FrontendController::class, 'index'])->name('frontend');

Route::get('product/details/{id}', [FrontendController::class, 'ProductDetails'])->name('product.details');

Route::get('category/product/{id}', [FrontendController::class, 'categoryproduct'])->name('category.product');
Route::get('subcategory/product/{id}', [FrontendController::class, 'subcategoryproduct'])->name('subcategory.product');

//modal
Route::get('/product/view/model/{id}', [FrontendController::class, 'productViewModal']);

//cart
Route::post('/cart/data/store/{id}', [CartController::class, 'addToCart'])->name('cart.store');

//cart details page
Route::post('/dcart/data/store/{id}', [CartController::class, 'addToCartDetailsP'])->name('cart.store.details');

//mini cart
Route::get('product/mini/cart', [CartController::class, 'addMiniCart']);

//cart remove
Route::get('minicart/product/remove/{id}', [CartController::class, 'removeMiniCart']);

//wishlist
Route::post('/add-to-wishlist/{id}', [WishlistController::class, 'addToWishList'])->name('wishlist.add');

Route::get('wishlist', [WishlistController::class, 'allWishList'])->name('wishlish');
