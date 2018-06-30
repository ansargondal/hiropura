<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/', function () {
        return view('admin.index');
    })->name('home');

    Route::get('posts/{status}', 'PostController@posts')->name('posts.status');
    Route::resource('posts', 'PostController');
});


Route::get('/admin/change-categories', function () {
    return view('admin.change-categories');
})->name('admin.change.categories');


Route::get('admin/login', function () {
    return view('admin.login');
})->name('admin.login');


Route::get('/admin/manage-accounts', function () {
    return view('admin.manage-accounts');
})->name('admin.manage-accounts');

Route::group(['prefix' => 'admin'], function () {

    Route::resource('messages', 'MessageController');
});

