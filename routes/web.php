<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/shop', function () {
    return view('shop');
})->name('shop');


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


Route::get('/shop', function () {
    return view('shop');
})->name('shop');


Route::get('/product-details', function () {
    return view('product-detail');
})->name('product.details');
