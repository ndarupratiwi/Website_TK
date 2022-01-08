<?php 

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];


if($password!== $password2){
    echo "<script>
    alert('kata sandi harus sama!');
    </script>";
    header("location:index.php?lupa=pwtidaksama");
}else{
    $user = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE email='$email'");
    $tes = mysqli_num_rows($user);

    $password = password_hash($password, PASSWORD_DEFAULT);
    
    if ($tes > 0) {
        mysqli_query($koneksi,"UPDATE tb_user SET password='$password' WHERE email='$email'");
     
    // mengalihkan halaman kembali ke tampil_data.php
    echo "<script>
    alert('kata sandi berhasil diubah!');
    </script>";
    
        header("location:index.php?lupa=berhasil");
    } else {
        echo "<script>
        alert('gagal');
        </script>";
        header("location:index.php?lupa=gagal");
    }
}

// menyeleksi data admin dengan username dan password yang sesuai


 