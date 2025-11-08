<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\softDeletes;


class Hotel extends Model
{
    use HasFactory, softDeletes;
 
    protected $fillable = [
    'name_hotel',
    'location',
    'description',
    'rating',
    'contact',
    ];
    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
