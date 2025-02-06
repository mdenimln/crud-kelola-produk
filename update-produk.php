<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$data_suplier = $_POST['data_suplier'];
$berat = $_POST['berat'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE produk SET nama_produk = '$nama_produk', kategori = '$kategori', deskripsi = '$deskripsi', stok = '$stok', harga_produk = '$harga', data_suplier = '$data_suplier', berat = '$berat' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: produk.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>