<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "delete from tb_user where id='$id'");

header("location:akun-guru.php?pesan=hapus");
