<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
// enkripsi password
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$level = $_POST['level'];


// menginput data ke database
mysqli_query($koneksi, "insert into tb_user values('', '$username', '$email', '$password', '$level')");


// mengalihkan halaman kembali ke tampil_data.php
header("location:akun-admin.php?pesan=input");
