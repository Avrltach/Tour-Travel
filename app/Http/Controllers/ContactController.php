<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'phone'   => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        Contact::create($request->only([
            'name', 'email', 'phone', 'message'
        ]));

        return back()->with('success', 'Pesan berhasil dikirim.');
    }
}
