<?php

namespace App\Http\Controllers\CetakLaporan;

use App\Bagian;
use App\Http\Controllers\Controller;
use App\Jenis_pinjaman;
use App\Jenis_simpanan;
use App\Nasabah;
use App\Pinjaman;
use App\Pinjaman_setoran;
use App\Simpanan;
use Illuminate\Http\Request;
use PDF;

class HomeController extends Controller
{
    public function cetak()
    {
        $jenispinjaman = Jenis_pinjaman::latest()->get();
        $pdf = PDF::loadView('admin.partials.cetak', ['jenispinjaman' => $jenispinjaman]);
        return $pdf->stream();
    }

    public function cetaksimpanan()
    {
        $jenissimpanan = Jenis_simpanan::latest()->get();
        $pdf = PDF::loadView('admin.jenissimpanan.cetak', ['jenissimpanan' => $jenissimpanan]);
        return $pdf->stream();
    }

    public function cetakBagian()
    {
        $bagian = Bagian::latest()->get();
        $pdf = PDF::loadView('admin.bagian.cetak', ['bagian' => $bagian]);
        return $pdf->stream();
    }

    public function cetakNasabah()
    {
        $nasabah = Nasabah::latest()->get();
        $pdf = PDF::loadView('admin.nasabah.cetak', ['nasabah' => $nasabah]);
        return $pdf->stream();
    }

    public function cetakPinjaman()
    {
        $pinjaman = Pinjaman::latest()->get();
        $pdf = PDF::loadView('admin.pinjaman.cetak', ['pinjaman' => $pinjaman]);
        return $pdf->stream();
    }

    public function cetakPinjamanSetoran()
    {
        $pinjaman_setoran = Pinjaman_setoran::latest()->get();
        $pdf = PDF::loadView('admin.pinjamansetoran.cetak', ['pinjaman_setoran' => $pinjaman_setoran]);
        return $pdf->stream();
    }

    public function cetakSimpananLaporan()
    {
        $simpanan = Simpanan::latest()->get();
        $pdf = PDF::loadView('admin.simpanan.cetak', ['simpanan' => $simpanan]);
        return $pdf->stream();
    }
}
