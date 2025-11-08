<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\softDeletes;


class Booking extends Model
{
    use HasFactory, softDeletes;
    
    protected $fillable = [
    'package_id',
    'hotel_id',
    'promo_code_id',
    'name',
    'email',
    'no_telp',
    'booking_date',
    'departure_date',
    'number_of_participants',
    'total_price',
    'status',
    'code_booking',
     ];
    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function promoCode()
    {
        return $this->belongsTo(PromoCode::class);
    }
}
