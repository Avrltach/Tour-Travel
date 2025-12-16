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

Route::get('/package', function () {
    return view('package.package');
})->name('package');

Route::get('/reservasi', function () {
    return view('reservasi.reservasi');
})->name('reservasi');

Route::get('/packages/{id}', function ($id) {
    return view('package.detail', compact('id'));
})->name('packages.detail');
