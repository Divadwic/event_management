<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mengajukan;

class MengajukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mengajukan = Mengajukan::all();
        return view('home.mengajukan.index', compact(['mengajukan']));
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
        $berkas_proposal = $request->file('file_proposal');
        $namadokumen_proposal = time() . '_' . optional($berkas_proposal)->getClientOriginalName();
        if ($berkas_proposal) {
            $berkas_proposal->move(public_path('file_proposal'), $namadokumen_proposal);
        }
        
        $berkas_lampiran = $request->file('lampiran_peserta');
        $namadokumen_lampiran = time() . '_' . optional($berkas_lampiran)->getClientOriginalName();
        if ($berkas_lampiran) {
            $berkas_lampiran->move(public_path('lampiran_peserta'), $namadokumen_lampiran);
        }
        $validatedData = $request->validate([
            'id_pengaju' => 'required',
            'judul_acara' => 'required',
            'file_proposal' => 'required',
            'lampiran_peserta' => 'required', // Pastikan tidak ada username yang sama
            'id_jeniskegiatan' => 'required',
            'id_jeniskegiatan' => 'required',
            'id_pengaju' => 'required',
        ]);

        // Simpan data admin baru ke dalam database
        $mengajukan = new Mengajukan();
        $mengajukan->id_pengaju = $request->id_pengaju;
        $mengajukan->judul_acara = $request->judul_acara;
        $mengajukan->file_proposal = $request->file_proposal;
        $mengajukan->lampiran_peserta = $request->lampiran_peserta;
        $mengajukan->id_jeniskegiatan = $request->id_jeniskegiatan;
        $mengajukan->id_jeniskegiatan = $request->id_jeniskegiatan;
        $mengajukan->id_pengaju = $request->id_pengaju;
        $mengajukan->save();

        // Redirect pengguna kembali ke halaman indeks setelah menyimpan data
        return redirect()->route('home.mengajukan.index')->with('success', 'Admin baru berhasil ditambahkan');
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
        //
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
