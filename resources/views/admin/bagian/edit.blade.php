@extends('admin.templates.layout')

@section('content')
<div class="row">
  <div class="container">
    <div class="col-md">
      <div class="card my-3">
        <div class="card-body">
          <h2 class="h4 text-center">Edit Data Simpanan</h2>

          <form action="{{ route('bagian.update', $bagian->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="nama_bagian">Bagian</label>
              <input type="text" name="nm_bagian" id="nm_bagian" class="form-control" placeholder="Bagian" value="{{ $bagian->nm_bagian ?? old('nm_bagian') }}">
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