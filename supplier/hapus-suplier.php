<?php

include('../koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM suplier WHERE id = '$id'";

if($connection->query($query)) {
    header("location: suplier.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>