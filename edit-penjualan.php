<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  $query = "SELECT * FROM penjualan WHERE id = $id LIMIT 1";
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_array($result);

  $sql_produk = "SELECT id, nama_produk FROM produk";
  $result_produk = $connection->query($sql_produk);

  $sql_pelanggan = "SELECT id, nama FROM pelanggan";
  $result_pelanggan = $connection->query($sql_pelanggan);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit penjualan</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT TRANSAKSI
            </div>
            <div class="card-body">
              <form action="update-penjualan.php" method="POST">
                <div class="form-group">
                    <label for="data_produk">Pilih Data:</label>
                    <select class="form-control" name="data_produk">
                      <option value="<?php echo $row['data_produk'] ?>"><?php echo $row['data_produk'] ?></option>
                      <?php
                      if ($result_produk->num_rows > 0) {
                        while($row_produk = $result_produk->fetch_assoc()) {
                          echo "<option name='data_produk' value='" . $row_produk['nama_produk'] ."'>". $row_produk['nama_produk'] . "</option>";
                        }
                      }
                      ?>
                  </select>
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <div class="form-group">
                    <label for="data_pelanggan">Pilih Data:</label>
                    <select class="form-control" name="data_pelanggan">
                      <option value="<?php echo $row['data_pelanggan'] ?>"><?php echo $row['data_pelanggan'] ?></option>
                      <?php
                      if ($result_pelanggan->num_rows > 0) {
                        while($row_pelanggan = $result_pelanggan->fetch_assoc()) {
                          echo "<option name='data_pelanggan' value='" . $row_pelanggan['nama'] ."'>".$row_pelanggan['nama'] . "</option>";
                        }
                      }
                      ?>
                  </select>
                </div>
                
                <div class="form-group">
                    <label for="suplier">Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" placeholder="Masukan Jumlah" value="<?php echo $row['jumlah'] ?>">
                </div>
                <div class="form-group">
                    <label for="berat">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" value="<?php echo $row['tanggal'] ?>">
                </div>


                
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>