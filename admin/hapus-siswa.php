<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "delete from tb_siswa where id= '$id'");

header("location:siswa.php?pesan=hapus");
?>