<?php

use Illuminate\Support\Facades\Route;

require_once 'backend/backend.php';
require_once 'frontend/frontend.php';


Route::group(['middleware' => 'language'], function () {

    Route::get('/translations/myowntranslations', function () {

        echo app()->getLocale();

        echo __('About');
//    $category = \App\Category::first();
//    dump($category->name);
        die;
    });

});

