<?php
use App\Models\Image;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ImageController; 

Route::get('/images', [ImageController::class, 'index']); 
