<?php

use Illuminate\Support\Facades\Route;

require_once 'backend/backend.php';
require_once 'frontend/frontend.php';


Route::get('/{locale}/translations', function ($locale) {

    app()->setLocale($locale);

    echo __('About');
//    $category = \App\Category::first();
//    dump($category->name);
    die;
});

