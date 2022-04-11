<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $title = 'Hello Word';
//     return view('home', compact('title'));
// })->name('home');

Route::get('/', function () {
    return view('home', ['title' => 'Hello Word']);
})->name('home');

Route::get('/contacts', function(){
    $title_contacts = 'Contact Us';
    return view('contacts', compact('title_contacts'));
})->name('contacts');

Route::get('/about', function(){
    $title_about = 'About';
    return view('about', compact('title_about'));
})->name('about');

Route::get('/gallery', function(){
    $title_gallery = 'MyGallery';
    return view('gallery', compact('title_gallery'));
})->name('gallery');

Route::get('/where', function(){
    $title_where = 'We are here';
    return view('where', compact('title_where'));
})->name('where');