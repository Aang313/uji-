

<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_koprasi");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
class koneksi_db
{
    private $koneksi;

    function __construct()
    {
        $this->koneksi = new mysqli("localhost", "root", "", "db_koprasi");
    }
    function login($a)
    {
        $data = $this->koneksi->query("SELECT * FROM tbl_kasir WHERE namaksr = '$a'");
        return $data;
    }
}
?>