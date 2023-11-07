<!DOCTYPE html>
<html>

<head>
    <title>CRUD edit_kasir</title>
</head>

<body>

    <h2>CRUD EDIT DATA KASIR </h2>
    <br />
    <a href="dashboard.php">KEMBALI</a>
    <br />
    <br />
    <h3>EDIT DATA KASIR</h3>

    <?php
    include 'koneksi_db.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from tbl_kasir where kodeksr='$id'");
    while ($isi = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="update_kasir.php">
            <table>
                <tr>
                    <td>Kodeksr</td>
                    <td>
                        <input type="hidden" name="kodeksr" value="<?php echo $isi['kodeksr']; ?>">
                        <input type="number" name="kodeksr" value="<?php echo $isi['kodeksr']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="namaksr" value="<?php echo $isi['namaksr']; ?>"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" value="<?php echo $isi['password']; ?>"></td>
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