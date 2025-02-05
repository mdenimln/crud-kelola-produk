<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Siswa</title>
  </head>

  <body>

    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light px-5 py-3">
        <a class="navbar-brand" href="#">Tabel Kelola</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pelanggan.php">Pelanggan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="produk.php">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="suplier.php">Suplier</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="penjualan.php">Penjualan</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main>

      <div class="container" style="margin-top: 80px">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                DATA PELANGGAN
              </div>
              <div class="card-body">
                <a href="tambah-pelanggan.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH PELANGGAN</a>
                <table class="table table-bordered" id="myTable">
                  <thead>
                    <tr>
                      <th class="text-center align-middle" scope="col">NO.</th>
                      <th class="text-center align-middle" scope="col">NAMA PELANGGAN</th>
                      <th class="text-center align-middle" scope="col">JENIS KELAMIN</th>
                      <th class="text-center align-middle" scope="col">TELEPON</th>
                      <th class="text-center align-middle" scope="col">ALAMAT</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                        include('koneksi.php');
                        $no = 1;
                        $query = mysqli_query($connection,"SELECT * FROM pelanggan");
                        while($row = mysqli_fetch_array($query)){
                    ?>
  
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['nama'] ?></td>
                        <td><?php echo $row['jenis_kelamin'] ?></td>
                        <td><?php echo $row['telepon'] ?></td>
                        <td><?php echo $row['alamat'] ?></td>
                        <td class="d-flex justify-content-center gap-1">
                          <a href="edit-pelanggan.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary mr-1">EDIT</a>
                          <a href="hapus-pelanggan.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                        </td>
                    </tr>
  
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
      </div>
    </main>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>