<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$no_induk = $_POST['no_induk'];
$nama_lengkap = $_POST['nama_lengkap'];
$kelompok = $_POST['kelompok'];
$ttl = $_POST['ttl'];
$jenkel = $_POST['jenkel'];
$agama = $_POST['agama'];
$nama_ayah = $_POST['nama_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$anak_ke = $_POST['anak_ke'];
$hobi = $_POST['hobi'];
$hubungan_keluarga = $_POST['hubungan_keluarga'];
$pend_terakhir_ayah = $_POST['pend_terakhir_ayah'];
$pend_terakhir_ibu = $_POST['pend_terakhir_ibu'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$tapel = $_POST['tapel'];
$fotoLama = $_POST['fotoLama'];

//Cek apakah user pilih gambar baru atau tidak
if ($_FILES['foto']['error'] === 4) {
    $foto = $fotoLama;
} else {

    $foto = upload();
}



// update data ke database
mysqli_query($koneksi, "update tb_siswa set no_induk= '$no_induk', nama_lengkap= '$nama_lengkap', kelompok= '$kelompok', ttl= '$ttl', jenkel= '$jenkel', agama= '$agama', nama_ayah= '$nama_ayah', pekerjaan_ayah= '$pekerjaan_ayah', nama_ibu= '$nama_ibu', pekerjaan_ibu= '$pekerjaan_ibu', anak_ke= '$anak_ke', hobi= '$hobi', hubungan_keluarga= '$hubungan_keluarga', pend_terakhir_ayah= '$pend_terakhir_ayah', pend_terakhir_ibu= '$pend_terakhir_ibu', alamat= '$alamat', email= '$email', telp= '$telp', tapel='$tapel', foto='$foto' where id='$id'");

function upload()
{
    $namaFoto = $_FILES['foto']['name'];
    $ukuranFoto = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    //cek apakah ada gambar yang di upload
    if ($error === 4) {
        echo "<script>
        alert('Pilih Foto terlebih dahulu!');
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
    move_uploaded_file($tmpName, '../siswa/foto/' . $namaFotoBaru);
    return $namaFotoBaru;
}


// mengalihkan halaman kembali ke tampil_data.php
header("location:siswa.php");
