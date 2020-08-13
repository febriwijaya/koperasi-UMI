@extends('admin.templates.layout')

@section('content')
<div class="container">
  <div class="card my-2">
    <div class="card-body">
      <div class="row">
        <div class="col-md my-3">
          <a href="{{ route('jenis-simpanan.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data</a>
          <a href="{{ route('cetak-simpanan') }}" class="btn btn-info btn-sm" target="_blank"><i class="fas fa-print"></i> Print Data</a>
        </div>
      </div>

      <div class="row my-3">
        <div class="col-md">
          @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
        </div>
      </div>

      <div class="row">
        <div class="col-md">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Jenis Simpanan</th>
                  <th>Bunga</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 ?>
                @foreach($jenissimpanan as $j)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $j->nm_simpanan }}</td>
                  <td>{{ $j->bunga }}</td>
                  <td>
                    <form action="{{ route('jenis-simpanan.destroy', $j->id) }}" method="post">
                      <a href="{{ route('jenis-simpanan.edit', $j->id) }}" class="badge badge-warning">Edit</a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="badge badge-danger" onclick="return confirm('yakin hapus data?')">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection