<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id_materi = $_GET['id_materi'];


// menghapus data dari database
mysqli_query($koneksi, "delete from tb_akademik where id_materi='$id_materi'");

// mengalihkan halaman kembali ke tampil_data.php
header("location:v_materi.php?pesan=hapus");
