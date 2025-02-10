<?php
include('../koneksi.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = mysqli_query($connection, "SELECT * FROM transaksi WHERE id = '$id'");
    $row = mysqli_fetch_assoc($query);

    echo json_encode($row);
}
?>
