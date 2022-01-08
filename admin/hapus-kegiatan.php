<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "delete from tb_kegiatan where id= '$id'");

header("location:kegiatan-tk.php?pesan=hapus");
?>