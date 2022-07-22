<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Perserta;
use App\Models\Mapel;

class SiswaController extends Controller
{
    public function index(){
        $siswa = Siswa::all();
        $perserta=Perserta::all();
        $mapel=mapel::all();
        return view('post.siswa',compact('siswa','perserta','mapel'));
        
    }
}
