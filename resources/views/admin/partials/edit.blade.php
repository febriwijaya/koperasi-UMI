@extends('admin.templates.layout')

@section('content')
<div class="row">
  <div class="container">
    <div class="col-md">
      <div class="card my-3">
        <div class="card-body">
          <h2 class="h4 text-center">Edit Data Peminjaman</h2>

          <form action="{{ route('jenis-pinjaman.update', $jenis_pinjaman->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="nama_pinjaman">Nama Pinjaman</label>
              <input type="text" name="nm_pinjaman" id="nama_pinjaman" class="form-control" placeholder="nama pinjaman" value="{{ $jenis_pinjaman->nm_pinjaman ?? old('nm_pinjaman') }}">
              <small class="text-danger">{{ $errors->first('nm_pinjaman') }}</small>
            </div>
            <div class="form-group">
              <label for="bunga">Bunga</label>
              <input type="text" name="bunga" id="bunga" class="form-control" placeholder="bunga" value="{{ $jenis_pinjaman->bunga ?? old('bunga') }}">
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