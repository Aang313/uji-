<?php
// koneksi database
include 'koneksi_db.php';
$con = new koneksi_db;
// menangkap data yang di kirim dari form
$a = $_POST['no_anggota'];
$b = $_POST['nama'];
$c = $_POST['wajib'];
$d = $_POST['pokok'];
$e = $_POST['saldo'];
// menginput data ke database
$query = "INSERT INTO tbl_anggota (no_anggota, nama, wajib, pokok, saldo) VALUES ('$a', '$b', '$c', '$d', '$e')";
mysqli_query($koneksi, $query);
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
