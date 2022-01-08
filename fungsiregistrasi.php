<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$level = "siswa";

if ($password !== $password2) {
    echo "<script>
    alert('kata sandi harus sama!');
    </script>";
    header("location:index.php?pesan=gagal");
} else {

    $password = password_hash($password, PASSWORD_DEFAULT);
    // menginput data ke database
    mysqli_query($koneksi, "INSERT INTO tb_user values('','$username','$email','$password','$level')");
    mysqli_query($koneksi, "INSERT INTO tb_siswa values('','$username','','','','','','','','','','','','','','','','','','','')");

    // mengalihkan halaman kembali ke tampil_data.php
    header("location:index.php?pesan=berhasil");
}
