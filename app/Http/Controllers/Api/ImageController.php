<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Http\Resources\ImageResource; 
use Illuminate\Http\Request;


class ImageController extends Controller
{
    /**
     * Mengambil daftar semua gambar.
     */
    public function index()
    {
        $images = Image::latest()->get();

        return ImageResource::collection($images); 
    }

    public function show(Image $image)
    {
        return new ImageResource($image); 
    }
}