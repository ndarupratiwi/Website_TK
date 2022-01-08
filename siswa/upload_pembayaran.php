<?php include '../template/header_siswa.php'; ?>
<div class="container bg-white">
    <div class="row">
        <div class="col-sm-12">
            <h5 class="mx-3 my-5">Lakukan Konfirmasi Pembayaran disini:</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1">
            <form class="uploadbukti my-1" action="aksi_uploadbukti.php" enctype="multipart/form-data" method="POST">
                <div class="form-group row">
                    <label for="nasabah" class="col-sm-3 col-form-label">1. Pembayaran dari:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nasabah" name="nasabah" placeholder="Nama No.Rek" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_pembayaran" class="col-sm-3 col-form-label">2. Tanggal Pembayaran :</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="tgl_pembayaran" name="tgl_pembayaran" placeholder="Tanggal Melakukan Pembayaran" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_siswa" class="col-sm-3 col-form-label">2. Nama Siswa :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Wali murid dari" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kelompok" class="col-sm-3 col-form-label">3. Kelompok :</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="kelompok" name="kelompok" required>
                            <option>A</option>
                            <option>B</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bukti" class="col-sm-3 col-form-label">4. Upload Bukti Pembayaran </label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control-file" id="bukti" name="bukti" required>
                        <p>Format file harus jpg, jpeg, png atau pdf. Max size 3 MB.</p>
                    </div>
                </div>
                <!-- Buttom -->
                <div class="form-group row">
                    <div class="col-sm-10 text-right">
                        <button type="submit" class="btn btn-warning">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include '../template/footer_siswa.php'; ?>