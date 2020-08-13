<?php

namespace App\Http\Controllers\Pinjaman;

use App\Http\Controllers\Controller;
use App\Jenis_pinjaman;
use App\Nasabah;
use App\Pinjaman;
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
        $title = "Halaman Pinjaman";
        $pinjaman = Pinjaman::latest()->get();
        return view('admin.pinjaman.index', compact('title', 'pinjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_pinjaman = Jenis_pinjaman::all();
        $nasabah = Nasabah::all();
        $user = User::all();
        $title = "Tambah Data Peminjaman";
        return view('admin.pinjaman.create', compact('title', 'jenis_pinjaman', 'user', 'nasabah'));
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
            'tgl_pinjaman' => 'required',
            'jenis_pinjaman_id' => 'required',
            'nasabah_id' => 'required',
            'keterangan' => 'required',
            'lama_pinjaman' => 'required',
            'besar_pinjaman' => 'required',
            'angsuran_pokok' => 'required',
            'angsuran_bunga' => 'required',
            'bunga' => 'required',
            'administrasi' => 'required',
            'status' => 'required',
            'user_id' => 'required',
        ], $message);

        Pinjaman::create($request->all());
        return redirect()->route('pinjaman.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pinjaman $pinjaman)
    {
        $title = "Detail Peminjaman";
        return view('admin.pinjaman.show', compact('title', 'pinjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pinjaman $pinjaman)
    {
        $jenis_pinjaman = Jenis_pinjaman::all();
        $nasabah = Nasabah::all();
        $user = User::all();
        $title = "Edit Peminjaman";
        return view('admin.pinjaman.edit', compact('title', 'pinjaman', 'jenis_pinjaman', 'nasabah', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pinjaman $pinjaman)
    {
        $message = [
            'required' => ':attribute tidak boleh kosong'
        ];

        $request->validate([
            'tgl_pinjaman' => 'required',
            'jenis_pinjaman_id' => 'required',
            'nasabah_id' => 'required',
            'keterangan' => 'required',
            'lama_pinjaman' => 'required',
            'besar_pinjaman' => 'required',
            'angsuran_pokok' => 'required',
            'angsuran_bunga' => 'required',
            'bunga' => 'required',
            'administrasi' => 'required',
            'status' => 'required',
            'user_id' => 'required',
        ], $message);

        $pinjaman->update($request->all());
        return redirect()->route('pinjaman.index')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pinjaman $pinjaman)
    {
        $pinjaman->delete();

        return redirect()->route('pinjaman.index')->with('success', 'Data berhasil dihapus');
    }
}
