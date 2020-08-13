<?php

namespace App\Http\Controllers\PinjamanSetoran;

use App\Http\Controllers\Controller;
use App\Pinjaman;
use App\Pinjaman_setoran;
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
        $title = "Halaman Pinjaman Setoran";
        $pinjaman_setoran = Pinjaman_setoran::latest()->get();
        return view('admin.pinjamansetoran.index', compact('title', 'pinjaman_setoran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pinjaman = Pinjaman::all();
        $user = User::all();
        $title = "Tambah Data Pinjaman Setoran";
        return view('admin.pinjamansetoran.create', compact('title', 'pinjaman', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tgl_setoran' => 'required',
            'pinjaman_id' => 'required',
            'setoran_pokok' => 'required',
            'setoran_bunga' => 'required',
            'denda' => 'required',
            'user_id' => 'required',
        ]);

        Pinjaman_setoran::create($request->all());

        return redirect()->route('pinjaman-setoran.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pinjaman_setoran $pinjaman_setoran)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pinjaman_setoran $pinjaman_setoran)
    {
        $pinjaman = Pinjaman::all();
        $user = User::all();
        $title = "Edit Pinjaman Setoran";

        return view('admin.pinjamansetoran.edit', compact('pinjaman', 'user', 'title', 'pinjaman_setoran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pinjaman_setoran $pinjaman_setoran)
    {
        $request->validate([
            'tgl_setoran' => 'required',
            'pinjaman_id' => 'required',
            'setoran_pokok' => 'required',
            'setoran_bunga' => 'required',
            'denda' => 'required',
            'user_id' => 'required',
        ]);

        $pinjaman_setoran->update($request->all());

        return redirect()->route('pinjaman-setoran.index')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pinjaman_setoran $pinjaman_setoran)
    {
        $pinjaman_setoran->delete();
        return redirect()->route('pinjaman-setoran.index')->with('success', 'Data berhasil dihapus');
    }
}
