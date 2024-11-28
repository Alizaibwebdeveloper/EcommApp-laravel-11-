<?php

use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', function () {
    return view('index');
});


Route::get('/admin/login', function () {
    return view('admin-panel.login');
})->name('login');






Route::get('/shop', function () {
    return view('shop');
})->name('shop');


Route::get('/product-detail', function () {
    return view('product-detail');
})->name('product.details');


Route::get('/cart', function () {
    return view('cart');
})->name('cart');


Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');


Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');



Route::get('/admin/register',[RegisterController::class,'create'])->name('admin.register');
Route::post('admin/store',[RegisterController::class,'register'])->name('admin.store');
Route::post('admin/login',[loginController::class,'login'])->name('admin.login');
Route::get('admin/logout',[loginController::class,'logout'])->name('admin.logout');


Route::middleware('auth')->group(function(){
    Route::get('users/list',[UserController::class,'index'])->name('users.list');

    
Route::get('dashboard', function () {
    return view('admin-panel.dashboard');
})->name('dashboard');

    Route::prefix('products')->group(function () {
        Route::get('list', [ProductController::class, 'index'])->name('products.list');
        Route::get('create', [ProductController::class, 'create'])->name('products.create');
        Route::post('store', [ProductController::class, 'StoreProdcut'])->name('product.store');
    });
    
    
});
