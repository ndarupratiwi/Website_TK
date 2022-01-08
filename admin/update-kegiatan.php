<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$deskripsi = $_POST['deskripsi'];
$fotoLama = $_POST['fotoLama'];

//Cek apakah user pilih gambar baru atau tidak
if ($_FILES['foto']['error'] === 4) {
    $foto = $fotoLama;
} else {

    $foto = upload();
}



// update data ke database
mysqli_query($koneksi, "UPDATE tb_kegiatan SET deskripsi='$deskripsi', foto='$foto' WHERE id='$id'");

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
    move_uploaded_file($tmpName, 'fotokegiatan/' . $namaFotoBaru);
    return $namaFotoBaru;
}


// mengalihkan halaman kembali ke tampil_data.php
header("location:kegiatan-tk.php?pesan=input");
