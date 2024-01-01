<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductDetailsController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Frontend\Shop;
use Illuminate\Support\Facades\Route;



// frontend controller
Route::group([],function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/product-details/{slug}', [ProductDetailsController::class, 'index'])->name('product.details');
    Route::get('/shop', [ShopController::class, 'index'])->name('shop');
});

// backend controller
Route::group(['middleware' => ['role:admin|moderator'], 'prefix' => 'dashboard'],function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('subcategory', SubCategoryController::class);
    Route::resource('tag', TagController::class);
    Route::get('product/get-subcategories/{category}', [ProductController::class, 'getSubcategories']);
    Route::resource('product', ProductController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('social', SocialController::class);

});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
