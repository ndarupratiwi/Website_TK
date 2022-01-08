<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nasabah = $_POST['nasabah'];
$tgl_pembayaran = $_POST['tgl_pembayaran'];
$nama_siswa = $_POST['nama_siswa'];
$kelompok = $_POST['kelompok'];
$status = $_POST['status'];


// update data ke database
mysqli_query($koneksi, "update tb_pembayaran set id='$id', nasabah='$nasabah', tgl_pembayaran='$tgl_pembayaran', nama_siswa='$nama_siswa', kelompok='$kelompok', status='$status' where id='$id'");

// mengalihkan halaman kembali ke tampil_data.php
header("location:data-pembayaran.php?pesan=update");
