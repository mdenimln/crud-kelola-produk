<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM pelanggan WHERE id = '$id'";

if($connection->query($query)) {
    header("location: pelanggan.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>