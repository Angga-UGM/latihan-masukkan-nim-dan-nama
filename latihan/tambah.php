<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA TAMU</title>
</head>
<body>
    <h1>DAFTAR YANG SUDAH DI ISI</h1>

    <form action="tambah_action.php" method = "POST">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" id =""></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama" id =""></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="SIMPAN">
                    <input type="reset" value="CANCLE"></td>
            </tr>
        </table>
    </form>
</body>
</html>