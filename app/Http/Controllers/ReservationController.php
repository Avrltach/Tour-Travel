<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourReservation;
use App\Models\EventReservation;
use App\Models\TransportReservation;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        switch ($request->category) {

            case 'tour':
                TourReservation::create(
                    $request->except(['category', '_token'])
                );
                break;

            case 'event':
                EventReservation::create(
                    $request->except(['category', '_token'])
                );
                break;

            case 'transport':
                TransportReservation::create(
                    $request->except(['category', '_token'])
                );
                break;
        }

        return back()->with('success', 'Reservasi berhasil dikirim');
    }
}
