<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id = $_POST['id'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['telepon'];
$kelamin = $_POST['jenis_kelamin'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE pelanggan SET nama = '$nama_pelanggan', alamat = '$alamat', telepon = '$no_telp', jenis_kelamin = '$kelamin' WHERE id = '$id'";
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: pelanggan.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>