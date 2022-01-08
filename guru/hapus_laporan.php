<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$no_induk = $_GET['no_induk'];


// menghapus data dari database
mysqli_query($koneksi, "delete from tb_report where no_induk='$no_induk'");

// mengalihkan halaman kembali ke tampil_data.php
header("location:v_report.php?pesan=hapus");
