<?php
include "koneksi.php";
$id = $_GET['id'];

// Menghapus data
// Querry
$query = mysqli_query($koneksi, "DELETE FROM daftar_mahasiswa WHERE id = '$id'");

?>

<script>
    alert("HAPUS DATA BERHASIL");
    document.location="index.php";
</script>