<?php

namespace App\Http\Controllers;

use App\Models\EventReservation;
use Illuminate\Http\Request;

class EventReservationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'event_type'      => 'required|in:Company Gathering,Family Gathering,Outing Kantor,Seminar,Workshop,Lainnya',
            'event_name'      => 'required|string|max:255',
            'institution'     => 'nullable|string|max:255',
            'greeting'        => 'nullable|string|max:255',
            'full_name'       => 'required|string|max:255',
            'whatsapp'        => 'required|string|max:20',
            'email'           => 'nullable|email|max:255',
            'event_date'      => 'required|date',
            'start_time'      => 'required',
            'end_time'        => 'required',
            'event_location'  => 'required|string|max:255',
            'city'            => 'nullable|string|max:255',
            'participants'    => 'nullable|integer|min:1',
            'event_duration'  => 'nullable|string|max:100',
            'services'        => 'nullable|string|max:255',
            'concept'         => 'nullable|string|max:255',
            'budget'          => 'nullable|string|max:100',
            'notes'           => 'nullable|string',
        ]);

        EventReservation::create($validated);

        return redirect()->back()->with([
            'success' => 'Reservasi Event Organizer berhasil dikirim. 
            Tim kami akan segera menghubungi Anda untuk konfirmasi.',
            'active_tab' => 'event'
        ]);
    }

}
