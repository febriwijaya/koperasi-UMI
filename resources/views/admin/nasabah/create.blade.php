@extends('admin.templates.layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md">
      <div class="card my-4">
        <div class="card-body">
          <h1 class="h4 text-center">Tambah Data Nasabah</h1>
          <form action="{{ route('nasabah.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="nama_nasabah">Nama nasabah</label>
              <input type="text" name="nm_nasabah" id="nama_nasabah" class="form-control" placeholder="Nama Nasabah" value="{{ old('nm_nasabah') }}">
              <small class="text-danger">{{ $errors->first('nm_nasabah') }}</small>
            </div>
            <div class="form-group">
              <label for="kelamin">Jenis Kelamin</label>
              <select name="kelamin" id="kelamin" class="form-control">
                <option value="">--silahkan pilih--</option>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
              </select>
              <small class="text-danger">{{ $errors->first('kelamin') }}</small>
            </div>
            <div class="form-group">
              <label for="agama">Agama</label>
              <select name="agama" id="agama" class="form-control">
                <option value="">--silahkan pilih--</option>
                <option value="Kristen">Kristen Protestan</option>
                <option value="Islam">Islam</option>
                <option value="Budha">Budha</option>
                <option value="Hindu">Hindu</option>
                <option value="Konghucu">Konghucu</option>
              </select>
              <small class="text-danger">{{ $errors->first('agama') }}</small>
            </div>
            <div class="form-group">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir') }}">
              <small class="text-danger">{{ $errors->first('tanggal_lahir') }}</small>
            </div>
            <div class="form-group">
              <label for="tempat_lahir">Tempat Lahir</label>
              <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="{{ old('tempat_lahir') }}">
              <small class="text-danger">{{ $errors->first('tempat_lahir') }}</small>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control">{{ old('alamat') }}</textarea>
              <small class="text-danger">{{ $errors->first('alamat') }}</small>
            </div>
            <div class="form-group">
              <label for="no_telepon">No telepon</label>
              <input type="text" name="no_telepon" id="no_telepon" class="form-control" value="{{ old('no_telepon') }}">
              <small class="text-danger">{{ $errors->first('no_telepon') }}</small>
            </div>
            <div class="form-group">
              <label for="foto">Foto</label>
              <input type="file" name="foto" id="foto" class="form-control">
              <small class="text-danger">{{ $errors->first('foto') }}</small>
            </div>
            <div class="form-group">
              <label for="status_kawin">Status Kawin</label>
              <select name="status_kawin" id="status_kawin" class="form-control">
                <option value="">--silahkan pilih--</option>
                <option value="Menikah">Menikah</option>
                <option value="Belum Menikah">Belum Menikah</option>
              </select>
              <small class="text-danger">{{ $errors->first('status_kawin') }}</small>
            </div>
            <div class="form-group">
              <label for="nama_pasangan">Nama Pasangan</label>
              <input type="text" name="nama_pasangan" id="nama_pasangan" class="form-control" value="{{ old('nama_pasangan') }}">
              <small class="text-danger">{{ $errors->first('nama_pasangan') }}</small>
            </div>
            <div class="form-group">
              <label for="jenis_pekerjaan">Jenis Pekerjaan</label>
              <input type="text" name="jenis_pekerjaan" id="jenis_pekerjaan" class="form-control" value="{{ old('jenis_pekerjaan') }}">
              <small class="text-danger">{{ $errors->first('jenis_pekerjaan') }}</small>
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