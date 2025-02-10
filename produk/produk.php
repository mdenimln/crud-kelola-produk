<!doctype html>
<html lang="id">
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

    <link rel="stylesheet" href="../style.css">
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
              <a class="nav-link" href="../index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pelanggan/pelanggan.php">Pelanggan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="produk.php">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../supplier/suplier.php">Supplier</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../transaksi/penjualan.php">Transaksi</a>
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
                      <th class="text-center align-middle">NO.</th>
                      <th class="text-center align-middle">NAMA PRODUK</th>
                      <th class="text-center align-middle">KATEGORI PRODUK</th>
                      <th class="text-center align-middle">DESKRIPSI</th>
                      <th class="text-center align-middle">HARGA PRODUK</th>
                      <th class="text-center align-middle">STOK</th>
                      <th class="text-center align-middle">BERAT</th>
                      <th class="text-center align-middle">DATA SUPPLIER</th>
                      <th class="text-center align-middle">AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                        include('../koneksi.php');
                        $no = 1;
                        $query = mysqli_query($connection,"SELECT * FROM produk");
                        while($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['nama_produk'] ?></td>
                        <td><?php echo $row['kategori'] ?></td>
                        <td><?php echo $row['deskripsi'] ?></td>
                        <td><?php echo $row['harga_produk'] ?></td>
                        <td><?php echo $row['stok'] ?></td>
                        <td><?php echo $row['berat'] ?></td>
                        <td><?php echo $row['data_suplier'] ?></td>
                        <td>
                            <a href="#" class="view" title="Lihat" data-toggle="modal" data-target="#modalDetail<?php echo $row['id'] ?>"><i class="material-icons">visibility</i></a>
                            <a href="../produk/edit-produk.php?id=<?php echo $row['id'] ?>" class="edit" title="Ubah"><i class="material-icons">edit</i></a>
                            <a href="../produk/hapus-produk.php?id=<?php echo $row['id'] ?>" class="delete" title="Hapus"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                    <!-- Modal Detail Produk -->
                    <div class="modal fade" id="modalDetail<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p><strong>Nama Produk:</strong> <?php echo $row['nama_produk'] ?></p>
                            <p><strong>Kategori:</strong> <?php echo $row['kategori'] ?></p>
                            <p><strong>Deskripsi:</strong> <?php echo $row['deskripsi'] ?></p>
                            <p><strong>Harga:</strong> Rp<?php echo number_format($row['harga_produk'], 0, ',', '.') ?></p>
                            <p><strong>Stok:</strong> <?php echo $row['stok'] ?></p>
                            <p><strong>Berat:</strong> <?php echo $row['berat'] ?> kg</p>
                            <p><strong>Supplier:</strong> <?php echo $row['data_suplier'] ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
      </div>
    </main>

    <script>
      $(document).ready(function(){
          $('#myTable').DataTable();
      });
    </script>
  </body>
</html>
