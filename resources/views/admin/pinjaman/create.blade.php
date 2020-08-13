@extends('admin.templates.layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md">
      <div class="card my-4">
        <div class="card-body">
          <h1 class="h4 text-center">Tambah Data Peminjaman</h1>
          <form action="{{ route('pinjaman.store') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="tgl_pinjaman">Tanggal Peminjaman</label>
              <input type="date" name="tgl_pinjaman" id="tgl_pinjaman" class="form-control" placeholder="Tanggal Peminjaman" value="{{ old('tgl_pinjaman') }}">
              <small class="text-danger">{{ $errors->first('tgl_pinjaman') }}</small>
            </div>
            <div class="form-group">
              <label for="jenis_pinjaman">Jenis Peminjaman</label>
              <select name="jenis_pinjaman_id" id="jenis_pinjaman" class="form-control">
                @foreach($jenis_pinjaman as $j)
                <option value="{{ $j->id}}">{{ $j->nm_pinjaman }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="nama_nasabah">Nama Nasabah</label>
              <select name="nasabah_id" id="nama_nasabah" class="form-control">
                @foreach($nasabah as $n)
                <option value="{{ $n->id }}">{{ $n->nm_nasabah }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control" placeholder="keterangan">{{ old('keterangan') }}</textarea>
              <small class="text-danger">{{ $errors->first('keterangan') }}</small>
            </div>
            <div class="form-group">
              <label for="lama_pinjaman">Lama Pinjaman</label>
              <input type="text" name="lama_pinjaman" id="lama_pinjaman" class="form-control" value="{{ old('lama_pinjaman') }}" placeholder="Lama Peminjaman">
              <small class="text-danger">{{ $errors->first('lama_pinjaman') }}</small>
            </div>
            <div class="form-group">
              <label for="besar_pinjaman">Besar Pinjaman</label>
              <input type="text" name="besar_pinjaman" id="besar_pinjaman" class="form-control" value="{{ old('besar_pinjaman') }}" placeholder="Besar Peminjaman">
              <small class="text-danger">{{ $errors->first('besar_pinjaman') }}</small>
            </div>
            <div class="form-group">
              <label for="angsuran_pokok">Angsuran Pokok</label>
              <input type="text" name="angsuran_pokok" id="angsuran_pokok" class="form-control" value="{{ old('angsuran_pokok') }}" placeholder="Angsuran Pokok">
              <small class="text-danger">{{ $errors->first('angsuran_pokok') }}</small>
            </div>
            <div class="form-group">
              <label for="angsuran_bunga">Angsuran bunga</label>
              <input type="text" name="angsuran_bunga" id="angsuran_bunga" class="form-control" value="{{ old('angsuran_bunga') }}" placeholder="Angsuran Bunga">
              <small class="text-danger">{{ $errors->first('angsuran_bunga') }}</small>
            </div>
            <div class="form-group">
              <label for="bunga">Bunga</label>
              <input type="text" name="bunga" id="bunga" class="form-control" value="{{ old('bunga') }}" placeholder="Bunga">
              <small class="text-danger">{{ $errors->first('bunga') }}</small>
            </div>
            <div class="form-group">
              <label for="administrasi">Administrasi</label>
              <input type="text" name="administrasi" id="administrasi" class="form-control" value="{{ old('administrasi') }}" placeholder="Administrasi">
              <small class="text-danger">{{ $errors->first('administrasi') }}</small>
            </div>
            <div class="form-group">
              <label for="status">Status</label>
              <input type="text" name="status" id="status" class="form-control" value="{{ old('status') }}" placeholder="Status">
              <small class="text-danger">{{ $errors->first('status') }}</small>
            </div>
            <div class="form-group">
              <label for="nama_peminjam">Nama Peminjam</label>
              <select name="user_id" id="nama_peminjam" class="form-control">
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