<?php 
  
  include('../koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM produk WHERE id = $id LIMIT 1";
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_array($result);

  // Query untuk mengambil data dari tabel
  $sql_suplier = "SELECT id, nama FROM suplier";
  $result_suplier = $connection->query($sql_suplier);


  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit produk</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT PRODUK
            </div>
            <div class="card-body">
              <form action="update-produk.php" method="POST">
                
                <div class="form-group">
                  <label>Nama Produk</label>
                  <input type="text" name="nama_produk" value="<?php echo $row['nama_produk'] ?>" placeholder="Masukkan Nama Produk" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <div class="form-group">
                  <label>Kategori</label>
                  <input type="text" name="kategori" value="<?php echo $row['kategori'] ?>" placeholder="Masukkan Kategori Produk" class="form-control">
                </div>

                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi Produk" rows="4" ><?php echo $row['deskripsi'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Harga Produk</label>
                  <input class="form-control" name="harga" placeholder="Masukkan Harga Produk" value="<?php echo $row['harga_produk'] ?>">
                </div>

                <div class="form-group">
                  <label>Stok Produk</label>
                  <input class="form-control" name="stok" placeholder="Masukkan stok Produk" value="<?php echo $row['stok'] ?>">
                </div>

                <div class="form-group">
                  <label for="data">Pilih Data:</label>
                  <select class="form-control" name="data_suplier">
                      <option value="<?php echo $row['data_suplier'] ?>"><?php echo $row['data_suplier'] ?></option>
                      <?php
                      if ($result_suplier->num_rows > 0) {
                          while($row_suplier = $result_suplier->fetch_assoc()) {
                              echo "<option name='data' value='" . $row_suplier['id'] ." - ". $row_suplier['nama'] ."'>". $row_suplier['id'] ." - ". $row_suplier['nama'] . "</option>";
                          }
                      }
                      ?>
                  </select>
                </div>    

                <div class="form-group">
                  <label for="berat">Berat (Kg)</label>
                  <input type="number" class="form-control" name="berat" placeholder="Masukkan berat produk" value="<?php echo $row['berat'] ?>">
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