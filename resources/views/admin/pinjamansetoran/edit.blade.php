@extends('admin.templates.layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md">
      <div class="card my-4">
        <div class="card-body">
          <h1 class="h4 text-center">Tambah Data Pinjaman Setoran</h1>
          <form action="{{ route('pinjaman-setoran.update', $pinjaman_setoran->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="tgl_setoran">Tanggal Setoran</label>
              <input type="date" name="tgl_setoran" id="tgl_setoran" class="form-control" placeholder="Tanggal Peminjaman Setoran" value="{{ $pinjaman_setoran->tgl_setoran ?? old('tgl_setoran') }}">
              <small class="text-danger">{{ $errors->first('tgl_setoran') }}</small>
            </div>
            <div class="form-group">
              <label for="besar_pinjaman">Besar Peminjaman</label>
              <select name="pinjaman_id" id="besar_pinjaman" class="form-control">
                @foreach($pinjaman as $p)
                <option value="{{ $p->id}}" @if($pinjaman_setoran->pinjaman_id == $p->id) selected @endif >{{ $p->besar_pinjaman }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="setoran_pokok">Setoran Pokok</label>
              <input type="text" name="setoran_pokok" id="setoran_pokok" class="form-control" value="{{ $pinjaman_setoran->setoran_pokok ?? old('setoran_pokok') }}" placeholder="Setoran Pokok">
              <small class="text-danger">{{ $errors->first('setoran_pokok') }}</small>
            </div>
            <div class="form-group">
              <label for="setoran_bunga">Setoran Bunga</label>
              <input type="text" name="setoran_bunga" id="setoran_bunga" class="form-control" value="{{ $pinjaman_setoran->setoran_bunga ?? old('setoran_bunga') }}" placeholder="Setoran Bunga">
              <small class="text-danger">{{ $errors->first('setoran_bunga') }}</small>
            </div>
            <div class="form-group">
              <label for="denda">Denda</label>
              <input type="text" name="denda" id="denda" class="form-control" value="{{ $pinjaman_setoran->denda ?? old('denda') }}" placeholder="Denda">
              <small class="text-danger">{{ $errors->first('denda') }}</small>
            </div>
            <div class="form-group">
              <label for="nama_penyetor">Nama Penyetor</label>
              <select name="user_id" id="nama_penyetor" class="form-control">
                @foreach($user as $u)
                <option value="{{ $u->id }}" @if($pinjaman_setoran->user_id == $u->id) selected @endif >{{ $u->name }}</option>
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