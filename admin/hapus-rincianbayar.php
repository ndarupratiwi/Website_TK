<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$no_rekening = $_GET['no_rekening'];


// menghapus data dari database
mysqli_query($koneksi, "delete from tb_rincianbayar where no_rekening='$no_rekening'");

// mengalihkan halaman kembali ke tampil_data.php
header("location:data-rincianbayar.php");
