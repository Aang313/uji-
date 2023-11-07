<?php
// koneksi database
include 'koneksi_db.php';

// menangkap data yang di kirim dari form
$id = $_POST['no_anggota'];
$kode = $_POST['no_anggota'];
$nama = $_POST['nama'];
$wajib = $_POST['wajib'];
$pokok = $_POST['pokok'];
$saldo = $_POST['saldo'];

// update data ke database
mysqli_query($koneksi, "update tbl_anggota set no_anggota='$kode', nama='$nama', wajib='$wajib', pokok='$pokok', saldo='$saldo' where no_anggota='$id'");

// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
