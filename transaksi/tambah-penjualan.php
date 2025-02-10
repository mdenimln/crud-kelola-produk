<?php
include '../koneksi.php';

// Query untuk mengambil data dari tabel
$sql_pelanggan = "SELECT id, nama FROM pelanggan";
$result_pelanggan = $connection->query($sql_pelanggan);

$sql_produk = "SELECT id, nama_produk FROM produk";
$result_produk = $connection->query($sql_produk);

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Penjualan</title>
  </head>

  <body>

  <div class="container mt-5">
        <h2 class="mb-4">Form Tambah Transaksi</h2>
    <form action="simpan-penjualan.php" method="POST">
            <div class="form-group">
                <label for="data">Pilih Data:</label>
                <select class="form-control" name="data_produk">
                    <option value=""> -- Produk -- </option>
                    <?php
                    if ($result_produk->num_rows > 0) {
                        while($row = $result_produk->fetch_assoc()) {
                            echo "<option name='data_produk' value='". $row['nama_produk'] ."'>". $row['nama_produk'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="data">Pilih Data:</label>
                <select class="form-control" name="data_pelanggan">
                    <option value=""> -- Pelanggan -- </option>
                    <?php
                    if ($result_pelanggan->num_rows > 0) {
                        while($row = $result_pelanggan->fetch_assoc()) {
                            echo "<option name='data_pelanggan' value='" . $row['nama'] ."'>". $row['nama'] . "</option>";
                        }
                    }
                    ?>
                </select>
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