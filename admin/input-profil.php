<?php include '../template/header-admin.php'; ?>

<div class="pendaftaran bg-white">
    <div class="row">
        <div class="col-sm-12 text-center my-3">
            <h1>Tambah Foto Profil TK Pelita Harapan</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 my-5">
            <form method="POST" action="aksi-profil.php" class="formpendaftaran" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="foto" class="col-sm-3 col-form-label">1. Pilih Foto :</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control-file" id="foto" name="foto" required />
                        <p>Format foto harus jpg, jpeg, atau png. Max size 2 MB.</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-3 col-form-label">2. Deskripsi :</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" placeholder="Masukkan Deskripsi" id="deskripsi" name="deskripsi" required></textarea>
                    </div>
                </div>
                <!-- Buttom -->
                <div class="buttom col-sm-12 my-5">
                    <div class="kelompok mt-5 text-center my-3">
                        <button type="submit" class="btn btn-primary" id="kirim" name="kirim" value="kirim">Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <a href="profil-tk.php" class="btn btn-info">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../template/footer-admin.php'; ?>