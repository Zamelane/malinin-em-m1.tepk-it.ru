<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::resource('products', \App\Http\Controllers\ProductController::class);
