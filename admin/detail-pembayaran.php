<?php include '../template/header-admin.php'; ?>

<div class=" bg-white">
    <div class="row">
        <div class="col-sm-12 text-center my-3">
            <h2>Data Pembayaran Siswa-Siswi TK Pelita Harapan PG Asembagus</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 bg-gradient-info text-center text-white">
            <h4>Data Pembayaran</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 my-5">
            <?php
            include "koneksi.php";
            $id = $_GET['id'];
            $query_mysql = mysqli_query($koneksi, "select * from tb_pembayaran where id = '$id'");
            while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
                <form>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 col-form-label">1.ID Pembayaran:</label>
                        <div class="col-sm-9">
                            <?php echo $data['id']; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nasabah" class="col-sm-3 col-form-label">2. Nasabah :</label>
                        <div class="col-sm-9">
                            <?php echo $data['nasabah']; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_pembayaran" class="col-sm-3 col-form-label">Tanggal Pembayaran :</label>
                        <div class="col-sm-9">
                            <?php echo $data['tgl_pembayaran']; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_siswa" class="col-sm-3 col-form-label">3. Nama Siswa :</label>
                        <div class="col-sm-9">
                            <?php echo $data['nama_siswa']; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelompok" class="col-sm-3 col-form-label">4. Kelompok :</label>
                        <div class="col-sm-9">
                            <?php echo $data['kelompok']; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">5. Status Pembayaran :</label>
                        <div class="col-sm-9">
                            <?php echo $data['status']; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bukti" class="col-sm-3 col-form-label">6. Bukti Pembayaran :</label>
                        <div class="col-sm-9">
                            <?php echo "<img src='../siswa/bukti/$data[bukti]' width='300' height='250' />"; ?>
                        </div>
                    </div>
                    <!-- Buttom -->
                    <div class="buttom col-sm-12 my-5 text-center">
                        <a href="data-pembayaran.php" class="btn btn-info">KEMBALI</a>
                    </div>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php include '../template/footer-admin.php'; ?>