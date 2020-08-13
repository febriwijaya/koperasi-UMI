<?php

namespace App\Http\Controllers\Bagian;

use App\Bagian;
use App\Http\Controllers\Controller;
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
        $title = "Halaman Bagian";
        $bagian = Bagian::latest()->get();
        return view('admin.bagian.index', compact('bagian', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Bagian";
        return view('admin.bagian.create', compact('title'));
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
            'nm_bagian' => 'required'
        ], $message);

        Bagian::create($request->all());
        return redirect()->route('bagian.index')->with('success', 'Data berhasil ditambahkan!');
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
    public function edit(Bagian $bagian)
    {
        $title = "Edit Bagian";
        return view('admin.bagian.edit', compact('title', 'bagian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bagian $bagian)
    {
        $message = [
            'required' => ':attribute tidak boleh kosong'
        ];

        $request->validate([
            'nm_bagian' => 'required'
        ], $message);

        $bagian->update($request->all());
        return redirect()->route('bagian.index')
            ->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bagian $bagian)
    {
        $bagian->delete();
        return redirect()->route('bagian.index')->with('success', 'Data berhasil dihapus');
    }
}
