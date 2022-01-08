<?php session_start(); ?>
<?php if (isset($_SESSION['Siswa'])) {
    header("location:../siswa/dash_siswa.php");
    exit;
} else if (isset($_SESSION['Guru'])) {
    header("location:../guru/dash_guru.php");
    exit;
} else if (isset($_SESSION['Admin'])) {
    header("location:../admin/dash-admin.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">

    <title>TK Pelita Harapan PG Asembagus</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark yellow nav-height">
        <ul class="nav">
            <li class="nav-item icon-nav-margin ">
                <a class="nav-link active " href="#">
                    <img src="assets/image/icon-phone.png" alt="icon-phone" srcset="">
                    <span class="header-dec">+62 838-2223-9912</span>
                </a>

            </li>
            <li class="nav-item icon-nav-margin ">
                <a class="nav-link" href="#">
                    <img src="assets/image/icon-message.png" alt="icon-message" srcset="">
                    <span class="header-dec">tkpelita@gmail.com</span>
                </a>

            </li>
            <li class="nav-item icon-nav-margin ">
                <a class="nav-link active" href="#">
                    <img src="assets/image/icon-school.png" alt="icon-school" srcset="">
                    <span class="header-dec">Komplek perumahan PG Asembagus</span>
                </a>
            </li>

        </ul>
    </nav>
    <div class="row">
        <div class="col m-auto ">
            <img class="label-utama" src="assets/image/label-utama.jpg" alt="" srcset="">
        </div>
        <div class="col-3 m-auto mr-2">
            <button type="button " style="width: 100px;" class="btn login-color float-right mr-3 mt-1 mb-2" onclick="document.getElementById('modal-wrapper').style.display='block'">Login</button>
            <button type="button" style="width: 100px;" class="btn daftar-color float-right mr-3 mt-1 mb-2" onclick="document.getElementById('modal-wrapper2').style.display='block'">Daftar</button>
        </div>
    </div>
    </div>
    <!-- Untuk Controller -->
    <nav class="navbar navbar-expand-lg navbar-light p-0 ">
        <div class="col-lg-3 bg-tanggal m-0 ">
            <h5 class="p-1">
                <?php setlocale(LC_ALL, 'indonesian');
                echo strftime("%A, %d %B %Y"); ?>
            </h5>
        </div>
        <div class="col pink">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav text-navbar">
                    <div class="menu">
                        <ul>
                            <li><a class="judul" href="index.php?page=home">HOME</a>
                            <li><a href="index.php?page=profil">PROFIL</a>
                            <li><a href="index.php?page=kegiatan">KEGIATAN</a>
                            <li><a href="index.php?page=fasilitas">FASILITAS</a>
                            <li><a href="index.php?page=bantuan">BANTUAN</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        switch ($page) {
            case 'home':
                include "pages/home.php";
                break;
            case 'profil':
                include "pages/profil.php";
                break;
            case 'fasilitas':
                include "pages/fasilitas.php";
                break;
            case 'bantuan':
                include "pages/bantuan.php";
                break;
            case 'kegiatan':
                include "pages/kegiatan.php";
                break;
            default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
        }
    } else {
        include "pages/home.php";
    }

    ?>

    <div id="modal-wrapper" class="modal">

        <form class="modal-content animate" method="POST" action="fungsilogin.php">
            <div class="imgcontainer">
                <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                <img src="assets/img/2.png" alt="Avatar" class="avatar">
                <h1 style="text-align:center">Login</h1>
            </div>
            <div class="container">
                <input type="text" name="username" placeholder="Enter Username">
                <input type="password" name="password" placeholder="Enter Password">
                <!-- <input type="checkbox" id="checkbox">Show Password -->
                <input type="checkbox" style="margin:26px 30px;" name="rememberme" id="rememberme"> Remember Me
                <a href="#" onclick="document.getElementById('modal-wrapper3').style.display='block'; document.getElementById('modal-wrapper').style.display='none';" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
                <button type="submit">Login</button>
            </div>
        </form>
        <?php
        if (isset($_GET['login'])) {
            if ($_GET['login'] == "berhasil") {
                echo "<script>
              alert('berhasil login');
          </script>";
            } else {
                echo "<script>
            alert('gagal login');
        </script>";
            }
        } ?>
    </div>

    <div id="modal-wrapper3" class="modal">

        <form class="modal-content animate" method="POST" action="lupapassword.php">

            <div class="imgcontainer">
                <span onclick="document.getElementById('modal-wrapper3').style.display='none'" class="close" title="Close PopUp">&times;</span>
                <img src="assets/img/2.png" alt="Avatar" class="avatar">
                <h1 style="text-align:center">Ganti Password</h1>
            </div>

            <div class="container">
                <input type="text" placeholder="Enter Email" name="email">
                <input type="password" placeholder="Enter Password" name="password">
                <input type="password" placeholder="Enter Password" name="password2">
                <!-- <input type="checkbox" style="margin:26px 30px;" name="rememberme" id="rememberme"> Remember Me -->
                <button type="submit">Ganti Password</button>
            </div>
        </form>
        <?php
        if (isset($_GET['lupa'])) {
            if ($_GET['lupa'] == "pwtidaksama") {
                echo "<script>
              alert('Kata Sanditidaksama');
              
          </script>";
            } else if ($_GET['lupa'] == "berhasil") {
                echo "<script>
            alert('berhasil ganti Password');
        </script>";
            } else {
                echo "<script>
            alert('Email salah');
        </script>";
            }
        } ?>
    </div>
    <div id="modal-wrapper2" class="modal">

        <form class="modal-content animate" method="POST" action="fungsiregistrasi.php">

            <div class="imgcontainer">
                <span onclick="document.getElementById('modal-wrapper2').style.display='none'" class="close" title="Close PopUp">&times;</span>
                <img src="assets/img/2.png" alt="Avatar" class="avatar">
                <h1 style="text-align:center">Registrasi Siswa</h1>
            </div>

            <div class="container">
                <input type="text" placeholder="Enter Username" name="username">
                <input type="text" placeholder="Enter Email" name="email">
                <input type="password" placeholder="Enter Password" name="password">
                <input type="password" placeholder="Enter Password" name="password2">
                <!-- <input type="checkbox" style="margin:26px 30px;" name="rememberme" id="rememberme"> Remember Me -->
                <button type="submit">Registrasi</button>
            </div>
        </form>
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "berhasil") {
                echo "<script>
              alert('berhasil registrasi');
          </script>";
            }
        } ?>
    </div>


    <footer class="footer d-block p-4 mt-20 ">
        <div class="float-right p-3 mr-5">
            <h4 class="">
                Follow Kami di :
            </h4>
            <ul class="nav">
                <li class="nav-item ml-20">
                    <a href="https://web.facebook.com/profile.php?id=100010161945837"><img src="assets/image/icon-facebook.png" alt="" srcset=""></a>
                </li>
                <li class="nav-item ml-4">
                    <a href="https://www.instagram.com/inan_nan_/"><img src="assets/image/icon-instagram.png" alt="" srcset=""></a>
                </li>
                <li class="nav-item ml-4">
                    <a href="https://twitter.com/LusyWilujeng"><img src="assets/image/icon-twitter.png" alt="" srcset=""></a>
                </li>
                <li class="nav-item ml-4">
                    <a href="https://www.youtube.com/channel/UCL3jS4gOZ-wJA7oeV8c7low"><img src="assets/image/icon-youtube.png" alt="" srcset=""></a>
                </li>
            </ul>
        </div>
        <div class="text-center">
            <h6>Copyright:copyright:TK Pelita Harapan 2020</h6>
        </div>
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    <script>
        // If user clicks anywhere outside of the modal, Modal will close

        var modal = document.getElementById('modal-wrapper');
        var modal2 = document.getElementById('modal-wrapper2');
        var modal3 = document.getElementById('modal-wrapper3');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        window.onclick = function(event) {
            if (event.target == modal2) {
                modal2.style.display = "none";
            }
        }
        window.onclick = function(event) {
            if (event.target == modal3) {
                modal3.style.display = "none";
            }
        }
    </script>
</body>

</html>