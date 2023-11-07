<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form login</title>
</head>

<body>
    <form action="login_proses.php" method="post">
        <div style="margin: auto;
        width: 50%;
        border: 3px solid black;
        padding: 10px;">
            <p style="padding: 8px;">Username : <input type="text" name="namaksr" id=""></p>
            <p style="padding: 10px;">Password : <input type="password" name="password" id=""></p>
            <input type="submit" value="Submit" name="submit"></input>
            <p><?php if (isset($_SESSION['error'])) {
                    echo $_SESSION["error"];
                } else {
                    echo "Selamat Datang !!";
                } ?></p>
        </div>
    </form>
</body>
</html>