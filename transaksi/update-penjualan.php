<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id = $_POST['id'];
$data_produk = $_POST['data_produk'];
$data_pelanggan = $_POST['data_pelanggan'];
$jumlah = $_POST['jumlah'];
$tanggal = date('Y-m-d');

//query update data ke dalam database berdasarkan ID
$query = "UPDATE transaksi SET data_produk = '$data_produk', data_pelanggan = '$data_pelanggan', jumlah = '$jumlah', tanggal = '$tanggal' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: penjualan.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>