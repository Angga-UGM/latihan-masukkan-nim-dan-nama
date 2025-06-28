<?php
include "koneksi.php";

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];

// Query update
$query = mysqli_query($koneksi, "UPDATE daftar_mahasiswa SET
                                nim = '$nim',
                                nama = '$nama'
                                WHERE id = '$id'");

if($query) {  // Perbaikan: tambahkan $ sebelum query
    echo '<script>
    alert("UPDATE DATA BERHASIL");
    document.location="index.php";
    </script>';
} else {
    echo '<script>
    alert("GAGAL UPDATE DATA: '.mysqli_error($koneksi).'");
    document.location="index.php";
    </script>';
}
?>
