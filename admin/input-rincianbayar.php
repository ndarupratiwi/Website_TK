<?php include '../template/header-admin.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3>Input Pembayaran PPDB TK Pelita Harapan</h3>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-sm-10 offset-sm-1">
            <form action="aksi-rincianbayar.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="no_rekening" class="col-sm-2 col-form-label">Nomor Rekening :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="no_rekening" name="no_rekening" placeholder="No Rekening TK Pelita Harapan" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="biaya_daftar" class="col-sm-2 col-form-label">Biaya Daftar :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="biaya_daftar" name="biaya_daftar" placeholder="Biaya Pendaftaran" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="biaya_seragam" class="col-sm-2 col-form-label">Biaya Seragam :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="biaya_seragam" name="biaya_seragam" placeholder="Biaya Seragam" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="biaya_buku" class="col-sm-2 col-form-label">Biaya Buku :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="biaya_buku" name="biaya_buku" placeholder="Biaya Buku" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="file_biaya" class="col-sm-3 col-form-label">Upload File Rincian Bayar :</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control-file" id="file_biaya" name="file_biaya" required>
                        <p>Format file harus pdf, docx, xls, atau doc. Maks size 2 MB</p>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 text-center my-3">
                        <button type="submit" class="btn btn-dark">Upload</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../template/footer-admin.php'; ?>