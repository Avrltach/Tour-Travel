<?php

namespace App\Http\Controllers;

use App\Models\TourReservation;
use Illuminate\Http\Request;

class TourReservationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name'        => 'required|string|max:255',
            'email'            => 'nullable|email|max:255',
            'whatsapp'         => 'required|string|max:20',
            'trip_type'        => 'required|in:Group Tour,Private Tour,Study Tour',
            'pickup_location'  => 'required|string|max:255',
            'destination'      => 'required|string|max:255',
            'participants'     => 'required|integer|min:1',
            'departure_date'   => 'required|date',
            'pickup_time'      => 'required',
            'duration'         => 'nullable|string|max:100',
            'notes'            => 'nullable|string',
        ]);

        TourReservation::create($validated);

        return redirect()->back()->with([
            'success' => 'Terima kasih telah melakukan reservasi Tour Wisata. 
            Silakan tunggu beberapa menit, admin kami akan segera menghubungi Anda melalui WhatsApp.',
            'active_tab' => 'tour'
        ]);
    }
}
