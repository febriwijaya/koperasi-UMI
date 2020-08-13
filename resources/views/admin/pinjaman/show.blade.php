@extends('admin.templates.layout')

@section('content')
<div class="row">
  <div class="col-md">
    <div class="card my-3">
      <div class="card-body">
        <h1 class="h4 text-center">Detail Data Pinjaman</h1>
        <div class="text-center">
          <p>Tanggal Peminjaman : {{ $pinjaman->tgl_pinjaman }}</p>
          <p>Jenis Peminjaman : {{ $pinjaman->jenis_pinjaman->nm_pinjaman }}</p>
          <p>Nama nasabah : {{ $pinjaman->nasabah->nm_nasabah }}</p>
          <p>Keterangan : {{ $pinjaman->keterangan }}</p>
          <p>Lama Pinjaman : {{ $pinjaman->lama_pinjaman }}</p>
          <p>Besar Pinjaman : {{ $pinjaman->besar_pinjaman }}</p>
          <p>Angsuran Pokok : {{ $pinjaman->anguran_pokok }}</p>
          <p>Angsuran Bunga : {{ $pinjaman->angsuran_bunga }}</p>
          <p>Bunga : {{ $pinjaman->bunga }}</p>
          <p>Administrasi : {{ $pinjaman->administrasi }}</p>
          <p>Status : {{ $pinjaman->status }}</p>
          <p>Nama Pegawai : {{ $pinjaman->user->name }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection