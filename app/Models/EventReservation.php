<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventReservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_type',
        'event_name',
        'institution',
        'greeting',
        'full_name',
        'whatsapp',
        'email',
        'event_date',
        'start_time',
        'end_time',
        'event_location',
        'city',
        'participants',
        'event_duration',
        'services',
        'concept',
        'budget',
        'notes',
    ];
}
