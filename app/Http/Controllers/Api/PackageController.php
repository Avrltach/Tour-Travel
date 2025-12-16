<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Http\Resources\PackageResource; 

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::latest()->get(); 
        return PackageResource::collection($packages);
    }
     public function show(Package $packages)
    {
        return new PackageResource($packages);
    }
}