<?php
// koneksi database
include 'koneksi_db.php';

// menangkap data yang di kirim dari form
$id = $_POST['kodeksr'];
$kode = $_POST['kodeksr'];
$nama = $_POST['namaksr'];
$password = $_POST['password'];

// update data ke database
mysqli_query($koneksi, "update tbl_kasir set kodeksr='$kode', namaksr='$nama', password='$password' where kodeksr='$id'");

// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
