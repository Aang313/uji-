<!DOCTYPE html>
<html>

<head>
    <title>CRUD edit_anggota</title>
</head>

<body>

    <h2>CRUD EDIT DATA ANGGOTA </h2>
    <br />
    <a href="dashboard.php">KEMBALI</a>
    <br />
    <br />
    <h3>EDIT DATA ANGGOTA</h3>

    <?php
    include 'koneksi_db.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from tbl_anggota where no_anggota='$id'");
    while ($isi = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="update_anggota.php">
            <table>
                <tr>
                    <td>Nomor Anggota</td>
                    <td>
                        <input type="hidden" name="no_anggota" value="<?php echo $isi['no_anggota']; ?>">
                        <input type="number" name="no_anggota" value="<?php echo $isi['no_anggota']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?php echo $isi['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>Wajib</td>
                    <td><input type="number" name="wajib" value="<?php echo $isi['wajib']; ?>"></td>
                </tr>
                <tr>
                    <td>Pokok</td>
                    <td><input type="number" name="pokok" value="<?php echo $isi['pokok']; ?>"></td>
                </tr>
                <tr>
                    <td>Saldo</td>
                    <td><input type="number" name="saldo" value="<?php echo $isi['saldo']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>

</body>

</html>