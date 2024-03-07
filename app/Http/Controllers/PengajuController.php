<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaju;

class PengajuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaju = Pengaju::all();
        return view('home.pengaju.index', compact(['pengaju']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pengaju' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'level' => 'required', // Pastikan tidak ada username yang sama
            'nama_instansi' => 'required',
        ]);

        // Simpan data admin baru ke dalam database
        $pengaju = new Pengaju();
        $pengaju->nama_pengaju = $request->nama_pengaju;
        $pengaju->no_telp = $request->no_telp;
        $pengaju->email = $request->email;
        $pengaju->level = $request->level;
        $pengaju->nama_instansi = $request->nama_instansi;
        $pengaju->save();

        // Redirect pengguna kembali ke halaman indeks setelah menyimpan data
        return redirect()->route('home.pengaju.index')->with('success', 'Admin baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $validatedData = $request->validate([
            'nama_pengaju' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'level' => 'required', // Pastikan tidak ada username yang sama
            'nama_instansi' => 'required',
        ]);
    
        // Temukan admin berdasarkan ID
        $pengaju = Pengaju::findOrFail($id);
    
        // Update data admin
        $pengaju->nama_pengaju = $request->nama_pengaju;
        $pengaju->no_telp = $request->no_telp;
        $pengaju->email = $request->email;
        $pengaju->level = $request->level;
        $pengaju->nama_instansi = $request->nama_instansi;
        $pengaju->save();
    
        // Redirect pengguna kembali ke halaman indeks setelah menyimpan data
        return redirect()->route('home.pengaju.index')->with('success', 'Admin berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
