<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "delete from tb_fasilitas where id= '$id'");

header("location:fasilitas-tk.php?pesan=hapus");
?>