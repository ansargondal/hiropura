<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/', function () {
        return view('admin.index');
    })->name('home');

    Route::resource('posts', 'PostController');
});


Route::get('/admin/change-categories', function () {
    return view('admin.change-categories');
})->name('admin.change.categories');


Route::get('/admin/posts/pending', function () {
    return view('admin.post.pending-posts');
})->name('admin.posts.pending');


Route::get('/admin/posts/approved', function () {
    return view('admin.post.approved-post');
})->name('admin.posts.approved');


Route::get('/admin/posts/rejected', function () {
    return view('admin.post.rejected-post');
})->name('admin.posts.rejected');


Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');


Route::get('/admin/manage-accounts', function () {
    return view('admin.manage-accounts');
})->name('admin.manage-accounts');

Route::group(['prefix' => 'admin'], function () {

    Route::resource('messages', 'MessageController');
});

