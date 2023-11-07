<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>

<body>
    <center>
        <?php
        session_start();
        if (!isset($_SESSION["id"])) {
            $_SESSION["error"] = "SILAHKAN LOGIN TERLEBIH DAHULU !!";
            header("Location: index.php");
        }
        ?>
        <!-- Keseluruhan Fungsi tabel Anggota -->
        <h1> Tabel Anggota</h1>
        <a href="tambah_anggota.php"> <button type="button">Tambah</button> </a>
        <table border="thick">
            <tr>
                <th>NO</th>
                <th>Nomor Anggota</th>
                <th>nama</th>
                <th>wajib</th>
                <th>pokok</th>
                <th>saldo</th>
                <th>AKSI</th>
            </tr>
            <?php
            include "koneksi.php";
            $con = new koneksi;
            $no = 1;
            $data = $con->get_data_anggota();
            while ($isi = $data->fetch_array()) {
                echo "<tr>
            <td>" . $no . "</td>
            <td>" . $isi['no_anggota'] . "</td>
            <td>" . $isi['nama'] . "</td>
            <td>" . $isi['wajib'] . "</td>
            <td>" . $isi['pokok'] . "</td>
            <td>" . $isi['saldo'] . "</td>";
                $no++;
            ?>
                <td><a href="edit_anggota.php?id=<?php echo $isi['no_anggota']; ?>"><button>Edit</button></a>
                    <a href="hapus_anggota.php?id=<?php echo $isi['no_anggota']; ?>"><button>Hapus</button></a>
                </td>
                </tr>
            <?php
            }

            ?>
        </table>
        <!-- Keseluruhan Table Anggota Break Disini -->

        <!-- Keseluruhan Table Simapan -->
        <h1> Tabel Kasir </h1>
        <a href="tambah_kasir.php"> <button type="button">Tambah</button> </a>
        <table border="thick">
            <tr>
                <th>NO</th>
                <th>kodeksr</th>
                <th>nama</th>
                <th>AKSI</th>
            </tr>
            <?php
            $no = 1;
            $data = $con->get_data_kasir();
            while ($isi = $data->fetch_array()) {
                echo "<tr>
            <td>" . $no . "</td>
            <td>" . $isi['kodeksr'] . "</td>
            <td>" . $isi['namaksr'] . "</td>";
                $no++;
            ?>
                <td><a href="edit_kasir.php?id=<?php echo $isi['kodeksr']; ?>"><button>Edit</button></a>
                    <a href="hapus_kasir.php?id=<?php echo $isi['kodeksr']; ?>"><button>Hapus</button></a>
                </td>
                </tr>
            <?php
            }

            ?>
        </table>
        <br> <a href="logout.php"><button>Logout</button></a>
        </br>
    </center>
</body>

</html>