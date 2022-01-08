<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$no_rekening = $_POST['no_rekening'];
$biaya_daftar = $_POST['biaya_daftar'];
$biaya_seragam = $_POST['biaya_seragam'];
$biaya_buku = $_POST['biaya_buku'];
$file_biaya = $_POST['file_biaya'];

//Cek apakah user pilih file baru atau tidak
if ($_FILES['file_biaya']['error'] === 4) {
    $file_biaya = $file_biayaLama;
} else {

    $file_biaya = upload();
}

// menginput data ke database
mysqli_query($koneksi, "update tb_rincianbayar set no_rekening='$no_rekening', biaya_daftar='$biaya_daftar', biaya_seragam='$biaya_seragam', biaya_buku='$biaya_buku', file_biaya='$file_biaya' where no_rekening='$no_rekening'");


function upload()
{
    $namaFile = $_FILES['file_biaya']['name'];
    $ukuranFile = $_FILES['file_biaya']['size'];
    $error = $_FILES['file_biaya']['error'];
    $tmpName = $_FILES['file_biaya']['tmp_name'];

    //cek apakah ada gambar yang di upload
    if ($error === 4) {
        echo "<script>
        alert('Pilih File Rincian Pembayaran terlebih dahulu!');
        </script>";
        return false;
    }

    //cek ekstensi file
    $ekstensiFileValid = ['pdf', 'docx', 'xls', 'doc'];
    $ekstensiFile = explode('.', $namaFile);
    $ekstensiFile = strtolower(end($ekstensiFile));
    if (!in_array($ekstensiFile, $ekstensiFileValid)) {
        echo "<script>
        alert('File yang Anda Upload harus dalam format docx, doc, pdf dan xls!');
        </script>";
        return false;
    }

    //cek ukuran file
    if ($ukuranFile > 2000000) {
        echo "<script>
        alert('Ukuran File Maks 2 MB!');
        </script>";
        return false;
    }

    //generate nama foto
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;

    //gambar di upload
    move_uploaded_file($tmpName, 'rincianbayar/' . $namaFileBaru);
    return $namaFileBaru;
}

// mengalihkan halaman kembali ke tampil_data.php
header("location:data-rincianbayar.php?pesan=input");
