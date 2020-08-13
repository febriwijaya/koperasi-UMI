<?php

namespace App\Http\Controllers\Simpanan;

use App\Http\Controllers\Controller;
use App\Jenis_simpanan;
use App\Nasabah;
use App\Simpanan;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Halaman Simpanan";
        $simpanan = Simpanan::latest()->get();
        return view('admin.simpanan.index', compact('simpanan', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Data Simpanan";
        $nasabah = Nasabah::all();
        $jenis_simpanan = Jenis_simpanan::all();
        $user = User::all();

        return view('admin.simpanan.create', compact('title', 'nasabah', 'jenis_simpanan', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'required' => ':attribute tidak boleh kosong'
        ];

        $request->validate([
            'tgl_simpanan' => 'required',
            'nasabah_id' => 'required',
            'jenis_simpanan_id' => 'required',
            'keterangan' => 'required',
            'user_id' => 'required',
        ], $message);

        Simpanan::create($request->all());

        return redirect()->route('simpanan.index')->with('success', 'Data berhasil ditambahkan');
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
    public function edit(Simpanan $simpanan)
    {
        $title = "Edit Data Simpanan";
        $nasabah = Nasabah::all();
        $jenis_simpanan = Jenis_simpanan::all();
        $user = User::all();

        return view('admin.simpanan.edit', compact('title', 'nasabah', 'jenis_simpanan', 'user', 'simpanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Simpanan $simpanan)
    {
        $message = [
            'required' => ':attribute tidak boleh kosong'
        ];

        $request->validate([
            'tgl_simpanan' => 'required',
            'nasabah_id' => 'required',
            'jenis_simpanan_id' => 'required',
            'keterangan' => 'required',
            'user_id' => 'required',
        ], $message);

        $simpanan->update($request->all());

        return redirect()->route('simpanan.index')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Simpanan $simpanan)
    {
        $simpanan->delete();

        return redirect()->route('simpanan.index')->with('success', 'Data berhasil dihapus!');
    }
}
