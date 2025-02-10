<?php

//include koneksi database
include('../koneksi.php');

//get data dari form

$nama_produk = $_POST['nama_produk'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$data_suplier = $_POST['data_suplier'];
$berat = $_POST['berat'];
var_dump($data_suplier);


//query insert data ke dalam database

$query = "INSERT INTO produk (nama_produk, kategori, deskripsi, stok, harga_produk, berat, data_suplier) VALUES ('$nama_produk', '$kategori', '$deskripsi', '$stok', '$harga', '$berat', '$data_suplier')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: produk.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>