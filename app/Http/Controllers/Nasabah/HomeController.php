<?php

namespace App\Http\Controllers\Nasabah;

use App\Http\Controllers\Controller;
use App\Nasabah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Halaman Nasabah";
        $nasabah = Nasabah::latest()->get();

        return view('admin.nasabah.index', compact('nasabah', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Data Nasabah";
        return view('admin.nasabah.create', compact('title'));
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
            'nm_nasabah' => 'required',
            'kelamin' => 'required',
            'agama' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required|numeric',
            'foto' => 'image|file',
            'status_kawin' => 'required',
            'nama_pasangan' => 'required',
            'jenis_pekerjaan' => 'required',
        ]);

        $foto = null;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('assets/covers');
        }

        Nasabah::create([
            'nm_nasabah' => $request->nm_nasabah,
            'kelamin' => $request->kelamin,
            'agama' => $request->agama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'foto' => $foto,
            'status_kawin' => $request->status_kawin,
            'nama_pasangan' => $request->nama_pasangan,
            'jenis_pekerjaan' => $request->jenis_pekerjaan,
        ]);

        return redirect()->route('nasabah.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Nasabah $nasabah)
    {
        $title = "Detail Nasabah";
        return view('admin.nasabah.detail', compact('nasabah', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Nasabah $nasabah)
    {
        $title = "Edit Nasabah";
        return view('admin.nasabah.edit', compact('nasabah', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nasabah $nasabah)
    {
        $request->validate([
            'nm_nasabah' => 'required',
            'kelamin' => 'required',
            'agama' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required|numeric',
            'foto' => 'image|file',
            'status_kawin' => 'required',
            'nama_pasangan' => 'required',
            'jenis_pekerjaan' => 'required',
        ]);

        $foto = $nasabah->foto;
        if ($request->hasFile('foto')) {
            Storage::delete($nasabah->foto);
            $foto = $request->file('foto')->store('assets/covers');
        }

        $nasabah->update([
            'nm_nasabah' => $request->nm_nasabah,
            'kelamin' => $request->kelamin,
            'agama' => $request->agama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'foto' => $foto,
            'status_kawin' => $request->status_kawin,
            'nama_pasangan' => $request->nama_pasangan,
            'jenis_pekerjaan' => $request->jenis_pekerjaan,
        ]);

        return redirect()->route('nasabah.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nasabah $nasabah)
    {
        $nasabah->delete();
        if ($nasabah->foto != null) {
            Storage::delete($nasabah->foto);
        }

        return redirect()->route('nasabah.index')->with('success', 'Data berhasil dihapus');
    }
}
