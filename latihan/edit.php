<?php
// halaman untuk membaca data mahasiswa
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM daftar_mahasiswa WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>

<h1>PERBARUI DATA NIM DAN NAMA</h1>
<form action="tambah_action.php" method = "POST">
        <table>
                <input type="hidden" nama="id" value="<?php echo $data['id']; ?>" >
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" value="<?php echo $data['nim']; ?>" ></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>" ></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="SIMPAN">
                    <input type="reset" value="CANCLE">
                </td>
            </tr>
        </table>
    </form>