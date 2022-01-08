<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nasabah = $_POST['nasabah'];
$tgl_pembayaran = $_POST['tgl_pembayaran'];
$kelompok = $_POST['kelompok'];
$nama_siswa = $_POST['nama_siswa'];

//upload bukti
$bukti = upload();
if (!$bukti) {
    return false;
}




// menginput data ke database
mysqli_query($koneksi, "insert into tb_pembayaran values('', '$nasabah', tgl_pembayaran='$tgl_pembayaran', '$nama_siswa', '$kelompok', '$bukti', '')");


function upload()
{
    $namaBukti = $_FILES['bukti']['name'];
    $ukuranBukti = $_FILES['bukti']['size'];
    $error = $_FILES['bukti']['error'];
    $tmpName = $_FILES['bukti']['tmp_name'];

    //cek apakah ada gambar yang di upload
    if ($error === 4) {
        echo "<script>
        alert('Pilih Bukti Pembayaran terlebih dahulu!');
        </script>";
        return false;
    }

    //cek ekstensi foto
    $ekstensiBuktiValid = ['jpg', 'jpeg', 'png', 'pdf'];
    $ekstensiBukti = explode('.', $namaBukti);
    $ekstensiBukti = strtolower(end($ekstensiBukti));
    if (!in_array($ekstensiBukti, $ekstensiBuktiValid)) {
        echo "<script>
        alert('File yang Anda Upload harus dalam format jpg, jpeg, png atau pdf!');
        </script>";
        return false;
    }

    //cek ukuran foto
    if ($ukuranBukti > 3000000) {
        echo "<script>
        alert('Ukuran File Maks 3 MB!');
        </script>";
        return false;
    }

    //generate nama foto
    $namaBuktiBaru = uniqid();
    $namaBuktiBaru .= '.';
    $namaBuktiBaru .= $ekstensiBukti;

    //gambar di upload
    move_uploaded_file($tmpName, 'bukti/' . $namaBuktiBaru);
    return $namaBuktiBaru;
}

// mengalihkan halaman kembali ke tampil_data.php
header("location:berhasil_uploadbukti.php");
