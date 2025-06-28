<?php
//halaman read
include "koneksi.php";
?>

<h1>MASUKKAN NIM DAN NAMA</h1>
<a href="tambah.php">TAMBAH MAHASISWA</a><br><br>
<table border = "1">
    <tr>
        <td>NO</td>
        <td>NIM</td>
        <td>NAMA</td>
        <td>ACTION</td>
    </tr>
    <?php
        $query = mysqli_query($koneksi, "SELECT * FROM daftar_mahasiswa");
        $no = 1;
        while ($data = mysqli_fetch_array($query)){
            echo "<tr>
                    <td>".$no."</td>
                    <td>".$data['nim']."</td>
                    <td>".$data['nama']."</td>
                    <td>
                        <a href='edit.php?id=".$data['id']."'>EDIT</a>
                        <a href='delete.php?id=".$data['id']."'>DELETE</a>
                    </td>
                    </tr>";
                    $no++;
        }
?>
</table>