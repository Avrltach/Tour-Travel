<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomTour;

class CustomTourController extends Controller
{
    public function tourForm()
    {
        return view('custom.tour');
    }

    public function storeTour(Request $request)
    {
        $request->validate([
            'nama_lengkap'=>'required',
            'email'=>'required|email',
            'no_wa'=>'required',
            'jenis_perjalanan'=>'required',
            'lokasi_penjemputan'=>'required',
            'destinasi'=>'required',
            'jumlah_peserta'=>'required|integer',
            'tanggal_berangkat'=>'required|date',
            'waktu_penjemputan'=>'required',
            'durasi_tour'=>'required',
        ]);

        CustomTour::create($request->all());

        return back()->with('success','Reservasi berhasil dikirim!');
    }
}
