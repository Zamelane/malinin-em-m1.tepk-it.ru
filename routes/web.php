<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductController;

Route::view('/', 'home')->name('home');

Route::resource('products', ProductController::class);
