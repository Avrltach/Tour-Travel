<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransportReservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'fleet_type',
        'fleet_count',
        'institution',
        'greeting',
        'full_name',
        'whatsapp',
        'email',
        'pickup_location',
        'destination',
        'participants',
        'travel_date',
        'travel_duration',
        'notes',
    ];

}
