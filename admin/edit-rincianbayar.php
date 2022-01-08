<?php include '../template/header-admin.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3> Edit Rincian Pembayaran TK Pelita Harapan</h3>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-sm-10 offset-sm-1">
            <?php
            include "koneksi.php";
            $no_rekening = $_GET['no_rekening'];
            $query_mysql = mysqli_query($koneksi, "select * from tb_rincianbayar where no_rekening = '$no_rekening'");
            $nomor = 1;
            while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
                <form method="POST" action="update-rincianbayar.php" enctype="multipart/form-data">
                    <input type="hidden" name="file_biayaLama" value="<?php echo $data['file_biaya'] ?>">
                    <div class="form-group row">
                        <label for="no_rekening" class="col-sm-3 col-form-label">No Rekening :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="no_rekening" id="no_rekening" value="<?php echo $data['no_rekening'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="biaya_daftar" class="col-sm-3 col-form-label">Biaya Daftar Ulang:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="biaya_daftar" name="biaya_daftar" value="<?php echo $data['biaya_daftar'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="biaya_seragam" class="col-sm-3 col-form-label">Biaya Seragam :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="biaya_seragam" name="biaya_seragam" value="<?php echo $data['biaya_seragam'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="biaya_buku" class="col-sm-3 col-form-label">Biaya Buku :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="biaya_buku" name="biaya_buku" value="<?php echo $data['biaya_buku'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="file_biaya" class="col-sm-3 col-form-label">Upload File Biaya :</label>
                        <div class="col-sm-9">
                            <?php echo $data['file_biaya'] ?>
                            <input type="file" name="file_biaya" id="file_biaya">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 text-center my-3">
                            <button type="submit" class="btn btn-dark">UPDATE</button>
                        </div>
                    </div>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php include '../template/footer-admin.php'; ?>