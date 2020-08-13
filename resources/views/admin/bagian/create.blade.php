@extends('admin.templates.layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md">
      <div class="card my-4">
        <div class="card-body">
          <h1 class="h4 text-center">Tambah Data Bagian</h1>
          <form action="{{ route('bagian.store') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="nama_bagian">Nama Simpanan</label>
              <input type="text" name="nm_bagian" id="nama_bagian" class="form-control" placeholder="Bagian" value="{{ old('nm_bagian') }}">
              <small class="text-danger">{{ $errors->first('nm_bagian') }}</small>
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