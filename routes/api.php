<?php
use App\Models\Image;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ImageController; 
use App\Http\Controllers\Api\PackageController; 


Route::get('/images', [ImageController::class, 'index']); 
Route::get('/packages', [PackageController::class, 'index']); 
