<?php
include 'koneksi.php';

// Query untuk mengambil data dari tabel
$sql = "SELECT id, nama FROM suplier";
$result = $connection->query($sql);
?>

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
        <h2 class="mb-4">Form Tambah Produk</h2>
    <form action="simpan-produk.php" method="POST">
            <div class="form-group">
                <label for="namaProduk">Nama Produk</label>
                <input type="text" class="form-control" id="namaProduk" name="nama_produk" placeholder="Masukkan nama produk">
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control" id="kategoriProduk" name="kategori" placeholder="Masukkan kategori produk">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name='deskripsi' rows="3" placeholder="Masukkan deskripsi produk"></textarea>
            </div>
            <div class="form-group">
                <label for="harga">Harga Produk (Rp)</label>
                <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan harga produk">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" placeholder="Masukkan jumlah stok">
            </div>
          
            <div class="form-group">
                <label for="data">Pilih Data:</label>
                <select class="form-control" name="data_suplier">
                    <option value=""> -- Suplier -- </option>
                    <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<option name='data' value='" . $row['id'] ." - ". $row['nama'] ."'>". $row['id'] ." - ". $row['nama'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>       
            <div class="form-group">
                <label for="berat">Berat (Kg)</label>
                <input type="number" step="0.01" class="form-control" id="berat" name="berat" placeholder="Masukkan berat produk">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Produk</button>
    </form>
  </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>

<?php
$connection->close();
?>