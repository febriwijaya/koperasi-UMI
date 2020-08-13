<?php

namespace App\Http\Controllers\JenisPinjaman;

use App\Http\Controllers\Controller;
use App\Jenis_pinjaman;
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
        $title = "Halaman Peminjaman";
        $jenispinjaman = Jenis_pinjaman::latest()->get();
        return view('admin.partials.index', compact('jenispinjaman', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Peminjaman";
        return view('admin.partials.create', compact('title'));
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
            'nm_pinjaman' => 'required',
            'bunga' => 'required'
        ]);

        Jenis_pinjaman::create($request->all());
        return redirect()->route('jenis-pinjaman.index')->with('success', 'Data berhasil ditambahkan!');
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
    public function edit(Jenis_pinjaman $jenis_pinjaman)
    {
        $title = "Edit Peminjaman";
        return view('admin.partials.edit', compact('jenis_pinjaman', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jenis_pinjaman $jenis_pinjaman)
    {
        $request->validate([
            'nm_pinjaman' => 'required',
            'bunga' => 'required'
        ]);

        $jenis_pinjaman->update($request->all());
        return redirect()->route('jenis-pinjaman.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenis_pinjaman $jenis_pinjaman)
    {
        $jenis_pinjaman->delete();
        return redirect()->route('jenis-pinjaman.index')->with('success', 'Data berhasil dihapus');
    }
}
