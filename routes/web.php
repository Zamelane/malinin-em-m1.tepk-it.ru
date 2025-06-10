<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/page1', 'page1/index')->name('page1.index');

//Route::resource('folder_name', ControllerName::class);
