<?php include '../template/header_siswa.php'; ?>

<div class="search mr-5">
    <?php
    include "koneksi.php";
    $username = $_SESSION['username'];
    $query_mysql = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE username='$username'");
    while ($data = mysqli_fetch_array($query_mysql)) {
    ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center bg-warning">BIODATA SISWA</h2>
                </div>
            </div>
            <div class="row my-5 mx-5">
                <div class="col-sm-4">
                    <?php echo "<img src='foto/$data[foto]' width='200' height='250' />"; ?>
                </div>
                <div class="col-sm-8">

                    <form action="" method="">
                        <div class="form-group row">
                            <label for="nama" class="col-form-label">No. Induk : <?php echo $data['no_induk']; ?></label>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-form-label">Nama : <?php echo $data['nama_lengkap']; ?></label>
                        </div>
                        <div class="form-group row">
                            <label for="ttl" class="col-form-label">Tempat, Tanggal Lahir : <?php echo $data['ttl']; ?></label>
                        </div>
                        <div class="form-group row">
                            <label for="jenkel" class="col-form-label">Jenis Kelamin : <?php echo $data['jenkel']; ?></label>
                        </div>
                        <div class="form-group row">
                            <label for="hobi" class="col-form-label">Hobi : <?php echo $data['hobi']; ?></label>
                        </div>
                        <div class="form-group row">
                            <label for="kelompok" class="col-form-label">Kelompok : <?php echo $data['kelompok']; ?></label>
                        </div>
                    </form>

                </div>
                <div class="col-sm-12 img-right">
                    <img src="../assets/img/icon_bio.png" alt="" class="float-right">
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>

<?php include '../template/footer_siswa.php'; ?>