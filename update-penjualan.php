<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id = $_POST['id'];
$id_produk = $_POST['id_produk'];
$id_pelanggan = $_POST['id_pelanggan'];
$jumlah = $_POST['jumlah'];
$tanggal = date('Y-m-d');

//query update data ke dalam database berdasarkan ID
$query = "UPDATE penjualan SET id_produk = '$id_produk', id_pelanggan = '$id_pelanggan', jumlah = '$jumlah', tanggal = '$tanggal' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: penjualan.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>