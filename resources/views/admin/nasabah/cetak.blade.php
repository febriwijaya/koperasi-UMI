<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>Cetak Nasabah</title>
  <style>
    td,
    tr,
    th {
      font-size: 10px;
    }
  </style>
</head>

<body>
  <h1 class="h5 text-center my-3">Data Nasabah</h1>
  <hr>
  <div class="my-3">
    <div class="row">
      <div class="col-md">
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Nasabah</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Agama</th>
              <th scope="col">Tempat Lahir</th>
              <th scope="col">Alamat</th>
              <th scope="col">Hp</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1 ?>
            @foreach($nasabah as $n)
            <tr>
              <th scope="row">{{ $i++ }}</th>
              <td>{{ $n->nm_nasabah }}</td>
              <td>{{ $n->kelamin }}</td>
              <td>{{ $n->agama }}</td>
              <td>{{ $n->tempat_lahir }}</td>
              <td>{{ $n->alamat }}</td>
              <td>{{ $n->no_telepon }}</td>
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