<?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];

//insert ke mysql
$query = mysqli_query($koneksi, "insert into daftar_mahasiswa (nim, nama) values ('$nim','$nama')");

?>

<script>
    alert("SIMPAN DATA BERHASIL");
    document.location="index.php";
</script>