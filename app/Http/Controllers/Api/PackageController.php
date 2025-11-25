<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Package;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all()->map(function ($item) {

            $item->image_url = $item->image
                ? asset('storage/' . $item->image)
                : null;

            return $item;
        });

        return response()->json($packages);
    }
}
