

<?php
//koneksi ke database
session_start();
include "koneksi_db.php";
$con = new koneksi_db;
//validasi login
$username    =    $_POST['namaksr'];
$password    =    $_POST['password'];
$data        =    $con->login($username);
$isi = $data->fetch_assoc();

if ($isi > 0) {
    echo "login berhasil ! ";
    $password == $isi["password"];
    $_SESSION["id"] = $isi["kodeksr"];
    $_SESSION["username"] = $isi["nama"];
    header('location:dashboard.php');
} else {
    echo "<center>Username atau Password anda salah<br><br><h3>Silahkan Ulangi </h3></center>";
    echo "<meta http-equiv='refresh' content='2;url=index.php'>";
}
