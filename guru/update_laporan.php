<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$tgl_report = $_POST['tgl_report'];
$nama_siswa = $_POST['nama_siswa'];
$kel_report = $_POST['kel_report'];
$no_induk = $_POST['no_induk'];
$laporan = $_POST['laporan'];


// update data ke database
mysqli_query($koneksi, "UPDATE tb_report SET tgl_report='$tgl_report', nama_siswa='$nama_siswa', kel_report='$kel_report', no_induk='$no_induk', laporan='$laporan' WHERE no_induk='$no_induk'");

// mengalihkan halaman kembali ke tampil_data.php
header("location:v_report.php?pesan=update");
