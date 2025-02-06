<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM produk WHERE id = '$id'";

if($connection->query($query)) {
    header("location: produk.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>