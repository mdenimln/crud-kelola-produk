<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style.css">

    <title>Data Produk</title>
  </head>

  <body>

    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light px-5 py-3">
        <a class="navbar-brand" href="#">DATA KELOLA (ADMIN)</a>
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
              <a class="nav-link" href="suplier.php">Supplier</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="penjualan.php">Transaksi</a>
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
                DATA PRODUK
              </div>
              <div class="card-body">
                <a href="tambah-produk.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH PRODUK</a>
                <table class="table table-bordered table-striped table-hover" id="myTable">
                  <thead>
                    <tr>
                      <th class="text-center align-middle" scope="col">NO.</th>
                      <th class="text-center align-middle" scope="col">NAMA PRODUK</th>
                      <th class="text-center align-middle" scope="col">KATEGORI PRODUK</th>
                      <th class="text-center align-middle" scope="col">DESKRIPSI</th>
                      <th class="text-center align-middle" scope="col">HARGA PRODUK</th>
                      <th class="text-center align-middle" scope="col">STOK</th>
                      <th class="text-center align-middle" scope="col">BERAT</th>
                      <th class="text-center align-middle" scope="col">DATA SUPPLIER</th>
                      <th class="text-center align-middle" scope="col">AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                        include('koneksi.php');
                        $no = 1;
                        $query = mysqli_query($connection,"SELECT * FROM produk");
                        while($row = mysqli_fetch_array($query)){
                    ?>
  
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['nama_produk'] ?></td>
                        <td><?php echo $row['kategori'] ?></td>
                        <td><?php echo $row['deskripsi'] ?></td>
                        <td><?php echo $row['stok'] ?></td>
                        <td><?php echo $row['harga_produk'] ?></td>
                        <td><?php echo $row['berat'] ?></td>
                        <td><?php echo $row['data_suplier'] ?></td>
                        <td>
                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="edit-produk.php?id=<?php echo $row['id'] ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="hapus-produk.php?id=<?php echo $row['id'] ?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
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