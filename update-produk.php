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
$id_suplier = $_POST['suplier'];
$berat = $_POST['berat'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE produk SET nama_produk = '$nama_produk', kategori = '$kategori', deskripsi = '$deskripsi', stok = '$stok', harga_produk = '$harga', id_suplier = '$id_suplier', berat = '$berat' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>