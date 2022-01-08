<nav class="navbar navbar-expand-lg navbar-dark yellow nav-height">
    <ul class="nav">
        <li class="nav-item icon-nav-margin ">
            <a class="nav-link active" href="#">
                <img src="template/image/icon-phone.png" alt="icon-phone" srcset="">
            </a>
        </li>
        <li class="nav-item icon-nav-margin ">
            <a class="nav-link" href="#">
                <img src="template/image/icon-message.png" alt="icon-message" srcset="">
            </a>

        </li>
        <li class="nav-item icon-nav-margin ">
            <a class="nav-link active" href="#">
                <img src="template/image/icon-school.png" alt="icon-school" srcset="">
            </a>
        </li>

    </ul>
</nav>
<div class="row">
    <div class="col m-auto ">
        <img class="label-utama" src="template/image/label-utama.jpg" alt="" srcset="">
    </div>
    <div class="col m-auto ">
        <button type="button " class="btn login-color float-right mr-3 mt-1 mb-2">Login</button>
        <button type="button" class="btn daftar-color float-right mr-3 mt-1 mb-2">Daftar</button>
    </div>
</div>
<!-- Untuk Controller -->
<nav class="navbar navbar-expand-lg navbar-light p-0 ">
    <div class="col-lg-3 bg-tanggal m-0 ">
        <h5 class="p-1">
            <?php setlocale(LC_ALL, 'id-ID', 'id_ID');
            echo strftime("%A, %d %B %Y"); ?>
        </h5>
    </div>
    <div class="col pink">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav text-navbar">
                <div class="menu">
                    <ul>
                        <li><a class="judul" href="index.php?page=home">HOME</a>
                        <li><a href="profil.php?page=profil">PROFIL</a>
                        <li><a href="kegiatan.php?page=kegiatan">KEGIATAN</a>
                        <li><a href="fasilitas.php?page=fasilitas">FASILITAS</a>
                        <li><a href="bantuan.php?page=bantuan">BANTUAN</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>