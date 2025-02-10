<?php

//include koneksi database
include('../koneksi.php');

//get data dari form

$nama_suplier = $_POST['nama_suplier'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['telepon'];



//query insert data ke dalam database

$query = "INSERT INTO suplier (nama, alamat, telepon) VALUES ('$nama_suplier', '$alamat', '$no_telp')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: suplier.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>