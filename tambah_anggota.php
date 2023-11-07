<!DOCTYPE html>
<html>

<head>
    <title>CRUD -tambah anggota</title>
</head>

<body>

    <h2>CRUD DATA anggota</h2>
    <br />
    <a href="dashboard.php">KEMBALI</a>
    <br />
    <br />
    <h3>TAMBAH DATA ANGGOTA</h3>
    <form method="post" action="tambah_aksi_anggota.php">
        <table>
            <tr>
                <td>Nomor Anggota</td>
                <td><input type="number" name="no_anggota"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Wajib</td>
                <td><input type="number" name="wajib"></td>
            </tr>
            <tr>
                <td>Pokok</td>
                <td><input type="number" name="pokok"></td>
            </tr>
            <tr>
                <td>Saldo</td>
                <td><input type="number" name="saldo"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>

</html>