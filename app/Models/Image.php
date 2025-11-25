<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'image', // path relatif, misal 'images/IMG_5944.jpg'
    ];

    protected $appends = ['url_path'];

    public function getUrlPathAttribute()
    {
        return $this->image 
            ? url($this->image) // langsung ke public/
            : null;
    }
}
