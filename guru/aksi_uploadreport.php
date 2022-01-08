<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$laporan = $_POST['laporan'];
$tgl_report = $_POST['tgl_report'];
$nama_siswa = $_POST['nama_siswa'];
$kel_report = $_POST['kel_report'];
$no_induk = $_POST['no_induk'];


// menginput data ke database
mysqli_query($koneksi, "INSERT tb_report VALUES('$no_induk', '$nama_siswa', '$laporan', '$tgl_report', '$kel_report')");

// mengalihkan halaman kembali ke tampil_data.php
header("location:v_report.php?pesan=input");
