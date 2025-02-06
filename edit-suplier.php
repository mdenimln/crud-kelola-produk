<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM suplier WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Suplier</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT SUPPLIER
            </div>
            <div class="card-body">
              <form action="update-suplier.php" method="POST">
                
                <div class="form-group">
                  <label>Nama Supplier</label>
                  <input type="text" name="nama_suplier" value="<?php echo $row['nama'] ?>" placeholder="Masukkan Nama Supplier" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <div class="form-group">
                  <label>Telepon</label>
                  <input class="form-control" name="telepon" placeholder="Masukkan Telepon" value="<?php echo $row['telepon'] ?>">
                </div>
    
                <div class="form-group">
                  <label>Alamat</label>
                  <input class="form-control" name="alamat" placeholder="Masukkan Alamat" value="<?php echo $row['alamat'] ?>">
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