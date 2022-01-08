<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nip = $_POST['nip'];
$nama_guru = $_POST['nama_guru'];
$gr_kelompok = $_POST['gr_kelompok'];
$ttl = $_POST['ttl'];
$jenkel = $_POST['jenkel'];
$pend_terakhir = $_POST['pend_terakhir'];
$agama = $_POST['agama'];
$th_ijazah_terakhir = $_POST['th_ijazah_terakhir'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$jabatan = $_POST['jabatan'];
$telp = $_POST['telp'];
$no_sertifikasi = $_POST['no_sertifikasi'];
$fotoLama = $_POST['fotoLama'];

//Cek apakah user pilih gambar baru atau tidak
if ($_FILES['foto']['error'] === 4) {
    $foto = $fotoLama;
} else {

    $foto = upload();
}

// update data ke database
mysqli_query($koneksi, "update tb_pegawai set nip= '$nip', nama_guru= '$nama_guru', gr_kelompok= '$gr_kelompok', ttl= '$ttl', jenkel= '$jenkel', pend_terakhir= '$pend_terakhir', agama= '$agama', th_ijazah_terakhir= '$th_ijazah_terakhir', alamat= '$alamat', status= '$status', jabatan= '$jabatan', telp= '$telp', no_sertifikasi= '$no_sertifikasi', foto='$foto' where nip='$nip'");

function upload()
{
    $namaFoto = $_FILES['foto']['name'];
    $ukuranFoto = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    //cek apakah ada gambar yang di upload
    if ($error === 4) {
        echo "<script>
        alert('Pilih Foto');
        </script>";
        return false;
    }

    //cek ekstensi foto
    $ekstensiFotoValid = ['jpg', 'jpeg', 'png'];
    $ekstensiFoto = explode('.', $namaFoto);
    $ekstensiFoto = strtolower(end($ekstensiFoto));
    if (!in_array($ekstensiFoto, $ekstensiFotoValid)) {
        echo "<script>
        alert('File yang Anda Upload bukan Foto/Gambar!');
        </script>";
        return false;
    }

    //cek ukuran foto
    if ($ukuranFoto > 2000000) {
        echo "<script>
        alert('Ukuran File Maks 2 MB!');
        </script>";
        return false;
    }

    //generate nama foto
    $namaFotoBaru = uniqid();
    $namaFotoBaru .= '.';
    $namaFotoBaru .= $ekstensiFoto;

    //gambar di upload
    move_uploaded_file($tmpName, 'fotoguru/' . $namaFotoBaru);
    return $namaFotoBaru;
}


// mengalihkan halaman kembali ke tampil_data.php
header("location:data-guru.php");
