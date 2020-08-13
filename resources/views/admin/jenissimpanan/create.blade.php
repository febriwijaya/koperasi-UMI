@extends('admin.templates.layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md">
      <div class="card my-4">
        <div class="card-body">
          <h1 class="h4 text-center">Tambah Data Jenis Simpanan</h1>
          <form action="{{ route('jenis-simpanan.store') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="nama_simpanan">Nama Simpanan</label>
              <input type="text" name="nm_simpanan" id="nama_simpanan" class="form-control" placeholder="Nama Simpanan" value="{{ old('nm_simpanan') }}">
              <small class="text-danger">{{ $errors->first('nm_simpanan') }}</small>
            </div>
            <div class="form-group">
              <label for="bunga">Bunga</label>
              <input type="text" name="bunga" id="bunga" class="form-control" placeholder="bunga" value="{{ old('bunga') }}">
              <small class="text-danger">{{ $errors->first('bunga') }}</small>
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