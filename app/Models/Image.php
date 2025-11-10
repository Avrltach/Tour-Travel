<?php

// app/Models/Image.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage; 

class Image extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'image', 
    ];

    protected $appends = ['url_path']; 

    public function getUrlPathAttribute()
    {
        return $this->image 
            ? Storage::disk('public')->url($this->image) 
            : null;
    }
}