@extends('admin.templates.layout')

@section('content')
<div class="row">
  <div class="container">
    <div class="col-md">
      <div class="card my-3">
        <div class="card-body">
          <h2 class="h4 text-center">Edit Data Simpanan</h2>

          <form action="{{ route('jenis-simpanan.update', $jenis_simpanan->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="nama_simpanan">Nama Simpanan</label>
              <input type="text" name="nm_simpanan" id="nama_simpanan" class="form-control" placeholder="Nama Simpanan" value="{{ $jenis_simpanan->nm_simpanan ?? old('nm_simpanan') }}">
              <small class="text-danger">{{ $errors->first('nm_simpanan') }}</small>
            </div>
            <div class="form-group">
              <label for="bunga">Bunga</label>
              <input type="text" name="bunga" id="bunga" class="form-control" placeholder="bunga" value="{{ $jenis_simpanan->bunga ?? old('bunga') }}">
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