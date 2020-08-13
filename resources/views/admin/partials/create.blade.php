@extends('admin.templates.layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md">
      <div class="card my-4">
        <div class="card-body">
          <h1 class="h4 text-center">Tambah Data Jenis Pinjaman</h1>
          <form action="{{ route('jenis-pinjaman.store') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="nama_pinjaman">Nama Pinjaman</label>
              <input type="text" name="nm_pinjaman" id="nama_pinjaman" class="form-control" placeholder="nama pinjaman" value="{{ old('nm_pinjaman') }}">
              <small class="text-danger">{{ $errors->first('nm_pinjaman') }}</small>
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