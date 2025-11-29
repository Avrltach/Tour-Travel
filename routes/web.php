<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
})->name('home');

Route::get('/about', function () {
    return view('about.about');
})->name('about');

Route::get('/gallery', function () {
    return view('gallery.gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact');
