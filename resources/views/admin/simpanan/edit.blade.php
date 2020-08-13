@extends('admin.templates.layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md">
      <div class="card my-4">
        <div class="card-body">
          <h1 class="h4 text-center">Edit Data Peminjaman</h1>
          <form action="{{ route('simpanan.update', $simpanan->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="tgl_simpanan">Tanggal Simpanan</label>
              <input type="date" name="tgl_simpanan" id="tgl_simpanan" class="form-control" placeholder="Tanggal Simpanan" value="{{ $simpanan->tgl_simpanan ?? old('tgl_simpanan') }}">
              <small class="text-danger">{{ $errors->first('tgl_simpanan') }}</small>
            </div>
            <div class="form-group">
              <label for="nama_nasabah">Nama nasabah</label>
              <select name="nasabah_id" id="nama_nasabah" class="form-control">
                @foreach($nasabah as $n)
                <option value="{{ $n->id}}" @if($simpanan->nasabah_id == $n->id) selected @endif>{{ $n->nm_nasabah }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="jenis_simpanan">Jenis Simpanan</label>
              <select name="jenis_simpanan_id" id="jenis_simpanan" class="form-control">
                @foreach($jenis_simpanan as $j)
                <option value="{{ $j->id}}" @if($simpanan->jenis_simpanan_id == $j->id) selected @endif>{{ $j->nm_simpanan }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control">{{ $simpanan->keterangan ?? old('keterangan') }}</textarea>
              <small class="text-danger">{{ $errors->first('keterangan') }}</small>
            </div>
            <div class="form-group">
              <label for="nama_penyimpan">Nama Penyimpan</label>
              <select name="user_id" id="nama_penyimpan" class="form-control">
                @foreach($user as $u)
                <option value="{{ $u->id }}" @if($simpanan->user_id == $u->id) selected @endif>{{ $u->name }}</option>
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