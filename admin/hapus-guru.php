<?php
include 'koneksi.php';
$nip = $_GET['nip'];
mysqli_query($koneksi, "delete from tb_pegawai where nip= '$nip'");

header("location:data-guru.php?pesan=hapus");
?>