<?php

//include koneksi database
include('koneksi.php');

//get data dari form

$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['telepon'];
$kelamin = $_POST['jenis_kelamin'];



//query insert data ke dalam database

$query = "INSERT INTO pelanggan (nama, alamat, telepon, jenis_kelamin) VALUES ('$nama_pelanggan', '$alamat', '$no_telp', '$kelamin')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: pelanggan.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>