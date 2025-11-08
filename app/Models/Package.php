<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Package extends Model
{
    use HasFactory, softDeletes;
 
    protected $fillable = [
    'name_package',
    'category',
    'image',
    'location',
    'price',
    'duration',
    'description',
    'facility',
    ];
    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }

    public function promoCodes()
    {
        return $this->hasMany(PromoCode::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
