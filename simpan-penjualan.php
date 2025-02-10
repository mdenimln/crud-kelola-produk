<?php

//include koneksi database
include('koneksi.php');

//get data dari form

$data_produk = $_POST['data_produk'];
$data_pelanggan = $_POST['data_pelanggan'];
$jumlah = $_POST['jumlah'];
$tanggal = date('Y-m-d');




//query insert data ke dalam database

$query = "INSERT INTO transaksi (data_produk, data_pelanggan, jumlah, tanggal) VALUES ('$data_produk', '$data_pelanggan', '$jumlah', '$tanggal')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: penjualan.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>