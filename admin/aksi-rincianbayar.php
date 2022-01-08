<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$no_rekening = $_POST['no_rekening'];
$biaya_daftar = $_POST['biaya_daftar'];
$biaya_seragam = $_POST['biaya_seragam'];
$biaya_buku = $_POST['biaya_buku'];

//upload materi
$file_biaya = upload();
if (!$file_biaya) {
    return false;
}

// menginput data ke database
mysqli_query($koneksi, "insert into tb_rincianbayar values('$no_rekening', '$biaya_daftar', '$biaya_seragam', '$biaya_buku', '$file_biaya')");


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
