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
    <title>Data Pelanggan</title>
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
              <a class="nav-link" href="index.php">Home</a>
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
                DATA PELANGGAN
              </div>
              <div class="card-body">
                <a href="tambah-pelanggan.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH PELANGGAN</a>
                <table class="table table-bordered table-striped table-hover" id="myTable">
                  <thead>
                    <tr>
                      <th class="text-center align-middle">NO.</th>
                      <th class="text-center align-middle">NAMA PELANGGAN</th>
                      <th class="text-center align-middle">JENIS KELAMIN</th>
                      <th class="text-center align-middle">TELEPON</th>
                      <th class="text-center align-middle">ALAMAT</th>
                      <th class="text-center align-middle">AKSI</th>
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
                        <td>
                            <a href="#" class="view" title="View" data-id="<?php echo $row['id']; ?>"><i class="material-icons">visibility</i></a>
                            <a href="edit-pelanggan.php?id=<?php echo $row['id'] ?>" class="edit" title="Edit"><i class="material-icons">edit</i></a>
                            <a href="hapus-pelanggan.php?id=<?php echo $row['id'] ?>" class="delete" title="Delete"><i class="material-icons">delete</i></a>
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

    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Pelanggan</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" id="modal-body-content" style="padding: 20px;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" id="nama"></h5>
                            <p class="card-text"><strong>Jenis Kelamin:</strong> <span id="jenis_kelamin"></span></p>
                            <p class="card-text"><strong>Telepon:</strong> <span id="telepon"></span></p>
                            <p class="card-text"><strong>Alamat:</strong> <span id="alamat"></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.view').click(function(){
                var id = $(this).data('id');
                $.ajax({
                    url: 'view-pelanggan.php',
                    type: 'POST',
                    data: { id: id },
                    success: function(response){
                        var data = JSON.parse(response);
                        $('#nama').text(data.nama);
                        $('#jenis_kelamin').text(data.jenis_kelamin);
                        $('#telepon').text(data.telepon);
                        $('#alamat').text(data.alamat);
                        $('#viewModal').modal('show');
                    }
                });
            });
        });
    </script>
  </body>
</html>
