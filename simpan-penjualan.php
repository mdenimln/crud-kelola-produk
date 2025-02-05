<?php

//include koneksi database
include('koneksi.php');

//get data dari form

$id_produk = $_POST['id_produk'];
$id_pelanggan = $_POST['id_pelanggan'];
$jumlah = $_POST['jumlah'];
$tanggal = date('Y-m-d');




//query insert data ke dalam database

$query = "INSERT INTO penjualan (id_produk, id_pelanggan, jumlah, tanggal) VALUES ('$id_produk', '$id_pelanggan', '$jumlah', '$tanggal')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: penjualan.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>