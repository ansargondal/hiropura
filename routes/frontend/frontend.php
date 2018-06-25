<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
})->name('frontend.index');


Route::get('/categories', function () {
    return view('frontend.categories');
})->name('frontend.categories');


Route::get('/post', function () {
    return view('frontend.full-post');
})->name('frontend.post');