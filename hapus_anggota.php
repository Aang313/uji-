<?php
include "koneksi_db.php";
$id = $_GET['id'];
$perintah = "DELETE FROM tbl_anggota WHERE no_anggota =\"$id\"";
$hasil1 = mysqli_query($koneksi, $perintah);
if ($hasil1) {
    echo "Artikel berhasil dihapus<br>";
    echo "<a href=\"dashboard.php\">Back</a>";
} else {
    echo "Komentar gagal dihapus. Kemungkinan terjadi kegagalan koneksi
ke database MySQL.";
}
