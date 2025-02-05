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
    <form action="simpan-penjualan.php" method="POST">
            <div class="form-group">
                <label for="namaProduk">Id Produk</label>
                <input type="text" class="form-control" name="id_produk" placeholder="Masukkan Id Produk">
            </div>
            <div class="form-group">
                <label for="kategori">Id Pelanggan</label>
                <input type="text" class="form-control"name="id_pelanggan" placeholder="Masukkan Id Pelanggan">
            </div>
            <div class="form-group">
                <label for="suplier">Jumlah</label>
                <input type="number" class="form-control" name="jumlah" placeholder="Masukan Jumlah">
            </div>
            <div class="form-group">
                <label for="berat">Tanggal</label>
                <input type="date" class="form-control" name="tanggal">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Penjualan</button>
    </form>
  </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>