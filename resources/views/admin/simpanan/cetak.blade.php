<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>Cetak Simpanan</title>
  <style>
    td,
    tr,
    th {
      font-size: 10px;
    }
  </style>
</head>

<body>
  <h1 class="h5 text-center my-3">Data Simpanan</h1>
  <hr>
  <div class="my-3">
    <div class="row">
      <div class="col-md">
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">No</th>
              <th>Tanggal Simpanan</th>
              <th>Nama Nasabah</th>
              <th>Jenis Simpanan</th>
              <th>Keterangan</th>
              <th>Penyimpan</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1 ?>
            @foreach($simpanan as $p)
            <tr>
              <th scope="row">{{ $i++ }}</th>
              <td>{{ $p->tgl_simpanan }}</td>
              <td>{{ $p->nasabah->nm_nasabah }}</td>
              <td>{{ $p->jenis_simpanan->nm_simpanan }}</td>
              <td>{{ $p->keterangan }}</td>
              <td>{{ $p->user->name }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>