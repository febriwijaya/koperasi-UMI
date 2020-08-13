<?php

namespace App\Http\Controllers\JenisSimpanan;

use App\Http\Controllers\Controller;
use App\Jenis_simpanan;
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
        $title = "Halaman Jenis Simpanan";
        $jenissimpanan = Jenis_simpanan::latest()->get();
        return view('admin.jenissimpanan.index', compact('jenissimpanan', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Jenis Simpanan";
        return view('admin.jenissimpanan.create', compact('title'));
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
            'nm_simpanan' => 'required',
            'bunga' => 'required',
        ], $message);

        Jenis_simpanan::create($request->all());

        return redirect()->route('jenis-simpanan.index')->with('success', 'Data berhasil di posting');
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
    public function edit(Jenis_simpanan $jenis_simpanan)
    {
        $title = "Edit Data Jenis Simpanan";
        return view('admin.jenissimpanan.edit', compact('title', 'jenis_simpanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jenis_simpanan $jenis_simpanan)
    {
        $message = [
            'required' => ':attribute tidak boleh kosong'
        ];
        $request->validate([
            'nm_simpanan' => 'required',
            'bunga' => 'required',
        ], $message);

        $jenis_simpanan->update($request->all());
        return redirect()->route('jenis-simpanan.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenis_simpanan $jenis_simpanan)
    {
        $jenis_simpanan->delete();

        return redirect()->route('jenis-simpanan.index')->with('success', 'Data berhasil dihapus');
    }
}
