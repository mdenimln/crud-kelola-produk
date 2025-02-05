<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Suplier</title>
  </head>

  <body>

  <div class="container mt-5">
        <h2 class="mb-4">Form Tambah suplier</h2>
    <form action="simpan-suplier.php" method="POST">
            <div class="form-group">
                <label for="namaSuplier">Nama suplier</label>
                <input type="text" class="form-control" name="nama_suplier" placeholder="Masukkan nama suplier">
            </div>
            <div class="form-group">
                <label for="teleon">Telepon</label>
                <input type="number" class="form-control" name="telepon" placeholder="Masukkan no telepon">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Suplier</button>
    </form>
  </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>