@extends('admin.templates.layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md">
      <div class="card my-4">
        <div class="card-body">
          <h1 class="h4 text-center">Tambah Data Peminjaman</h1>
          <form action="{{ route('simpanan.store') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="tgl_simpanan">Tanggal Simpanan</label>
              <input type="date" name="tgl_simpanan" id="tgl_simpanan" class="form-control" placeholder="Tanggal Simpanan" value="{{ old('tgl_simpanan') }}">
              <small class="text-danger">{{ $errors->first('tgl_simpanan') }}</small>
            </div>
            <div class="form-group">
              <label for="nama_nasabah">Nama nasabah</label>
              <select name="nasabah_id" id="nama_nasabah" class="form-control">
                @foreach($nasabah as $n)
                <option value="{{ $n->id}}">{{ $n->nm_nasabah }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="jenis_simpanan">Jenis Simpanan</label>
              <select name="jenis_simpanan_id" id="jenis_simpanan" class="form-control">
                @foreach($jenis_simpanan as $j)
                <option value="{{ $j->id}}">{{ $j->nm_simpanan }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control">{{ old('keterangan') }}</textarea>
              <small class="text-danger">{{ $errors->first('keterangan') }}</small>
            </div>
            <div class="form-group">
              <label for="nama_penyimpan">Nama Penyimpan</label>
              <select name="user_id" id="nama_penyimpan" class="form-control">
                @foreach($user as $u)
                <option value="{{ $u->id }}">{{ $u->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection