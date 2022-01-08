<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$email =  $_POST['email'];
$pw = $_POST['password'];
$password = password_hash($pw, PASSWORD_DEFAULT);

// update data ke database
mysqli_query($koneksi, "UPDATE tb_user SET  `email`='$email', `password`='$password' WHERE `id`='$id'");

// mengalihkan halaman kembali ke tampil_data.php
header("location:dash-admin.php?pesan=update");
