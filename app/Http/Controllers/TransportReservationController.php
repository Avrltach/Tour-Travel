<?php

namespace App\Http\Controllers;

use App\Models\TransportReservation;
use Illuminate\Http\Request;

class TransportReservationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fleet_type'       => 'required|in:Big Bus,Medium Bus,Shuttle Bus,MPV,Lainnya',
            'fleet_count'      => 'required|integer|min:1',
            'institution'      => 'nullable|string|max:255',
            'greeting'         => 'nullable|string|max:255',
            'full_name'        => 'required|string|max:255',
            'whatsapp'         => 'required|string|max:20',
            'email'            => 'nullable|email|max:255',
            'pickup_location'  => 'required|string|max:255',
            'destination'      => 'required|string|max:255',
            'participants'     => 'nullable|integer|min:1',
            'travel_date'      => 'required|date',
            'travel_duration'  => 'nullable|string|max:100',
            'notes'            => 'nullable|string',
        ]);

        TransportReservation::create($validated);

        return redirect()->back()->with([
            'success' => 'Reservasi Transportasi berhasil dikirim. 
            Silakan tunggu konfirmasi dari admin kami melalui WhatsApp.',
            'active_tab' => 'transport'
        ]);
    }
}
