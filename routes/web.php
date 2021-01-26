<?php

use Illuminate\Support\Facades\Route;

Route::resource('products','ProductController');


Route::get('/', function () {
    return view('welcome');
});
