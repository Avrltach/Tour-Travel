<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourReservationController;
use App\Http\Controllers\EventReservationController;
use App\Http\Controllers\TransportReservationController;
use App\Http\Controllers\ContactController; 

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

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store'); 

Route::get('/package', function () {
    return view('package.package');
})->name('package');

Route::get('/packages/{id}', function ($id) {
    return view('package.detail', compact('id'));
})->name('packages.detail');

Route::get('/reservasi', function () {
    return view('reservasi.reservasi');
})->name('reservasi');

Route::post('/reservasi/tour', [TourReservationController::class, 'store'])
    ->name('reservasi.tour.store');

Route::post('/reservasi/event', [EventReservationController::class, 'store'])
    ->name('reservasi.event.store');

Route::post('/reservasi/transport', [TransportReservationController::class, 'store'])
    ->name('reservasi.transport.store');
