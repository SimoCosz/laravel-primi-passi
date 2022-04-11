<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Hello Word';
    return view('home', compact('title'));
});
