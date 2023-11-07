<?php
// koneksi database
include 'koneksi_db.php';
$con = new koneksi_db;
// menangkap data yang di kirim dari form
$a = $_POST['kodeksr'];
$b = $_POST['namaksr'];
$c = $_POST['password'];
// menginput data ke database
$query = "INSERT INTO tbl_kasir (kodeksr, namaksr, password) VALUES ('$a', '$b', '$c')";
mysqli_query($koneksi, $query);
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
