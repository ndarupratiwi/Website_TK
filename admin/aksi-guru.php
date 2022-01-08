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

//upload gambar
$foto = upload();
if (!$foto) {
    return false;
}



// menginput data ke database
mysqli_query($koneksi, "insert into tb_pegawai values('$nip', '$nama_guru', '$gr_kelompok', '$ttl', '$jenkel', '$pend_terakhir', '$agama', '$th_ijazah_terakhir', '$alamat', '$status', '$jabatan', '$telp', '$no_sertifikasi', '$foto')");


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
