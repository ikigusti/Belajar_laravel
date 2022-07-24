<?php

namespace App\Http\Controllers;

use App\Models\Siswa2;
use Illuminate\Http\Request;

class Siswa2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model Siswa2
        $siswa2 = Siswa2::all();
        return view('siswa.index', compact('siswa2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nis' => 'required|unique:siswas|max:255',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $siswa2 = new Siswa2();
        $siswa2->nama = $request->nama;
        $siswa2->nis = $request->nis;
        $siswa2->jenis_kelamin = $request->jenis_kelamin;
        $siswa2->agama = $request->agama;
        $siswa2->tgl_lahir = $request->tgl_lahir;
        $siswa2->alamat = $request->alamat;
        $siswa2->save();
        return redirect()->route('siswa.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa2 = Siswa2::findOrFail($id);
        return view('siswa.show', compact('siswa2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa2 = Siswa2::findOrFail($id);
        return view('siswa.edit', compact('siswa2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nis' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $siswa2 = Siswa2::findOrFail($id);
        $siswa2->nama = $request->nama;
        $siswa2->nis = $request->nis;
        $siswa2->jenis_kelamin = $request->jenis_kelamin;
        $siswa2->agama = $request->agama;
        $siswa2->tgl_lahir = $request->tgl_lahir;
        $siswa2->alamat = $request->alamat;
        $siswa2->save();
        return redirect()->route('siswa.index')
            ->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa2 = Siswa2::findOrFail($id);
        $siswa2->delete();
        return redirect()->route('siswa.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
