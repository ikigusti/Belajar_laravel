<?php

namespace App\Http\Controllers;
use App\Models\karyawan;
use App\Models\pengunjung;
use App\Models\kamar;
use App\Models\detail;
use App\Models\transaksi;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function hotel(){
        $karyawan = karyawan::all();
        $pengunjung =pengunjung::all();
        $kamar = kamar::all();
        $detail=detail::all();
        $transaksi=transaksi::all();
        
        return view('hotel.karyawan',compact('karyawan','pengunjung','kamar','detail','transaksi'));
        
    }
}
