@extends('admin.templates.layout')

@section('content')
<div class="row">
  <div class="col-md">
    <div class="card my-3">
      <div class="card-body">
        <h1 class="h4 text-center">Detail Data Nasabah</h1>
        <div class="text-center">
          <img src="{{ $nasabah->getCover() }}" alt="image" class="my-2 rounded-circle" style="width:100px; height:100px; border:2px solid white;">
          <p>Nama nasabah : {{ $nasabah->nm_nasabah }}</p>
          <p>Jenis Kelamin : {{ $nasabah->kelamin }}</p>
          <p>Agama : {{ $nasabah->agama }}</p>
          <p>Tanggal lahir : {{ $nasabah->tanggal_lahir }}</p>
          <p>Tempat Lahir : {{ $nasabah->tempat_lahir }}</p>
          <p>Alamat : {{ $nasabah->alamat }}</p>
          <p>No telepon : {{ $nasabah->no_telepon }}</p>
          <p>Status Kawin : {{ $nasabah->status_kawin }}</p>
          <p>Nama Pasangan : {{ $nasabah->nama_pasangan }}</p>
          <p>Jenis Pekerjaan : {{ $nasabah->jenis_pekerjaan }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection