<?php include '../template/header-admin.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3> Edit Pembayaran Siswa-Siswi TK Pelita Harapan</h3>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-sm-10 offset-sm-1">
            <?php
            include "koneksi.php";
            $id = $_GET['id'];
            $query_mysql = mysqli_query($koneksi, "select * from tb_pembayaran where id = '$id'");
            $nomor = 1;
            while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
                <form method="POST" action="update-pembayaran.php" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $data['id'] ?>">
                    <div class="form-group row">
                        <label for="nasabah" class="col-sm-3 col-form-label">Pembayaran Dari :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nasabah" name="nasabah" value="<?php echo $data['nasabah'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_pembayaran" class="col-sm-3 col-form-label">Tanggal Pembayaran :</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="tgl_pembayaran" name="tgl_pembayaran" value="<?php echo $data['tgl_pembayaran'] ?>">
                        </div>
                    </div>
                    <div class=" form-group row">
                        <label for="nama_siswa" class="col-sm-3 col-form-label">Wali Murid Dari :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="<?php echo $data['nama_siswa'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelompok" class="col-sm-3 col-form-label">Kelompok :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kelompok" name="kelompok" value="<?php echo $data['kelompok'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Keterangan :</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="status" name="status" value="<?php echo $data['status'] ?>" required>
                                <option>Belum Lunas</option>
                                <option>Lunas</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bukti" class="col-sm-3 col-form-label">Bukti Pembayaran :</label>
                        <div class="col-sm-9">
                            <?php echo "<img src='../siswa/bukti/$data[bukti]' width='300' height='250' />" ?>
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