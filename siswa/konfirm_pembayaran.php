<?php include '../template/header_siswa.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-10 offset-sm-1">
            <h5 class="mx-3 my-5">Cek Konfirmasi Pembayaran Anda disini:</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <form class="cekpembayaran my-1" action="aksi_konfirmasipembayaran.php" method="POST">
                <div class="form-group row">
                    <label for="nasabah" class="col-sm-3 col-form-label">1. Pembayaran dari :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nasabah" name="nasabah" placeholder="Nama No.Rek atau Nama Wali Murid" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_siswa" class="col-sm-3 col-form-label">2. Nama Siswa :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Nama Siswa" required>
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
                <!-- Buttom -->
                <div class="form-group row">
                    <div class="col-sm-10 text-right">
                        <button type="submit" class="btn btn-warning">Check</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../template/footer_siswa.php'; ?>