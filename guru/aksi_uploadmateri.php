<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$tanggal = $_POST['tanggal'];
$kel_materi = $_POST['kel_materi'];
$tema = $_POST['tema'];

//upload materi
$materi = upload();
if (!$materi) {
    return false;
}

// menginput data ke database
mysqli_query($koneksi, "insert into tb_akademik values('', '$tema', '$tanggal', '$kel_materi', '$materi')");


function upload()
{
    $namaMateri = $_FILES['materi']['name'];
    $ukuranMateri = $_FILES['materi']['size'];
    $error = $_FILES['materi']['error'];
    $tmpName = $_FILES['materi']['tmp_name'];

    //cek apakah ada gambar yang di upload
    if ($error === 4) {
        echo "<script>
        alert('Pilih Materi Pembelajaran terlebih dahulu!');
        </script>";
        return false;
    }

    //cek ekstensi foto
    $ekstensiMateriValid = ['pdf', 'docx', 'xls', 'doc', 'pptx'];
    $ekstensiMateri = explode('.', $namaMateri);
    $ekstensiMateri = strtolower(end($ekstensiMateri));
    if (!in_array($ekstensiMateri, $ekstensiMateriValid)) {
        echo "<script>
        alert('File yang Anda Upload harus dalam format docx, doc, pdf dan xls!');
        </script>";
        return false;
    }

    //cek ukuran foto
    if ($ukuranMateri > 10000000) {
        echo "<script>
        alert('Ukuran File Maks 10 MB!');
        </script>";
        return false;
    }

    //generate nama foto
    $namaMateriBaru = uniqid();
    $namaMateriBaru .= '.';
    $namaMateriBaru .= $ekstensiMateri;

    //gambar di upload
    move_uploaded_file($tmpName, 'materi/' . $namaMateriBaru);
    return $namaMateriBaru;
}

// mengalihkan halaman kembali ke tampil_data.php
header("location:v_materi.php?pesan=input");
