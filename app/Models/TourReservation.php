<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourReservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'whatsapp',
        'trip_type',
        'pickup_location',
        'destination',
        'participants',
        'departure_date',
        'pickup_time',
        'duration',
        'notes',
    ];
}
