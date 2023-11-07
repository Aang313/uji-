<!DOCTYPE html>
<html>

<head>
    <title>CRUD -tambah kasir</title>
</head>

<body>

    <h2>CRUD DATA kasir</h2>
    <br />
    <a href="dashboard.php">KEMBALI</a>
    <br />
    <br />
    <h3>TAMBAH DATA KASIR</h3>
    <form method="post" action="tambah_aksi_kasir.php">
        <table>
            <tr>
                <td>Kodeksr</td>
                <td><input type="number" name="kodeksr"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="namaksr"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>

</html>