<?php

session_start();



// menghubungkan dengan koneksi
include 'koneksi.php';

//cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	//ambil username berdasarkan id
	$result = mysqli_query($koneksi, "SELECT username FROM tb_user WHERE id='$id'");
	$row = mysqli_fetch_assoc($result);

	//cek cookie dan username
	if ($key === hash('sha256', $row['username'])) {
		$_SESSION['login'] = true;
	}
}



// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai

$user = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username'");
$tes = mysqli_fetch_assoc($user);

if (password_verify($password, $tes['password'])) {
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	$_SESSION[$tes['level']] = true;

	$level = $tes['level'];
	if ($level == "Siswa") {
		header("location:siswa/dash_siswa.php");
	} else if ($level == "Guru") {
		header("location:guru/dash_guru.php");
	} else if ($level == "Admin") {
		header("location:admin/dash-admin.php");
	} else {
		header("location:index.php?login=gagal");
	}
	$_SESSION["login"] =  true;
	// cek remember me
	if (isset($_POST['rememberme'])) {
		//buat cookie
		setcookie('id', $row['id'], time() + 3600);
		setcookie('key', hash('sha256', $row['username']), time() + 3600);
	}

	// header("location:index.php?login=berhasil");
} else {
	header("location:index.php?login=gagal");
}
