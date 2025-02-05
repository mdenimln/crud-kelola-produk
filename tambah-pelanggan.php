<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Produk</title>
  </head>

  <body>

  <div class="container mt-5">
        <h2 class="mb-4">Form Tambah Pelanggan</h2>
    <form action="simpan-pelanggan.php" method="POST">
            <div class="form-group">
                <label for="namaProduk">Nama Pelanggan</label>
                <input type="text" class="form-control" name="nama_pelanggan" placeholder="Masukkan nama pelanggan">
            </div>
            <div class="form-group">
                <label for="kategori">Jenis Kelamin</label>
                <input type="text" class="form-control"name="jenis_kelamin" placeholder="Masukkan Jenis Kelamin">
            </div>
            <div class="form-group">
                <label for="suplier">Telepon</label>
                <input type="number" class="form-control" name="telepon" placeholder="Masukkan no telepon">
            </div>
            <div class="form-group">
                <label for="berat">Alamat</label>
                <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Pelanggan</button>
    </form>
  </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>