<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // function __construct()
    // {
    //     $this->middleware('permission:admin-list|admin-create|admin-edit|admin-delete', ['only'])
    // }

    
    public function index()
    {
        $admin = User::all();
        return view('home.admin.index', compact(['admin']));
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
        
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'nama_admin' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'username' => 'required', // Pastikan tidak ada username yang sama
            'password' => 'required',
        ]);

        // Simpan data admin baru ke dalam database
        $admin = new User();
        $admin->nama_admin = $request->nama_admin;
        $admin->no_telp = $request->no_telp;
        $admin->email = $request->email;
        $admin->username = $request->username;
        $admin->password = $request->password;
        $admin->save();

        // Redirect pengguna kembali ke halaman indeks setelah menyimpan data
        return redirect()->route('home.admin.index')->with('success', 'Admin baru berhasil ditambahkan');
        
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
            'nama_admin' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'username' => 'required', // Pastikan tidak ada username yang sama
            'password' => 'required',
        ]);
    
        // Temukan admin berdasarkan ID
        $admin = User::findOrFail($id);
    
        // Update data admin
        $admin->nama_admin = $request->nama_admin;
        $admin->no_telp = $request->no_telp;
        $admin->email = $request->email;
        $admin->username = $request->username;
        $admin->password = $request->password;
        $admin->save();
    
        // Redirect pengguna kembali ke halaman indeks setelah menyimpan data
        return redirect()->route('home.admin.index')->with('success', 'Admin berhasil diperbarui');
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
