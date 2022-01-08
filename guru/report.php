<?php include '../template/header_guru.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3>Laporan Pembelajaran Siswa/Siswi TK Pelita Harapan</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1">
            <form method="POST" action="aksi_uploadreport.php">
                <div class="form-group row">
                    <label for="tgl_report" class="col-sm-2 col-form-label">Hari, Tanggal :</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tgl_report" id="tgl_report" placeholder="Tanggal" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_siswa" class="col-sm-2 col-form-label">Nama:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Nama Siswa" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kel_report" class="col-sm-2 col-form-label">Kelompok :</label>
                    <div class="col-sm-3">
                        <select class="form-control" id="kel_report" name="kel_report" required>
                            <option>A</option>
                            <option>B</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_induk" class="col-sm-2 col-form-label">No Induk :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="no_induk" name="no_induk" placeholder="Nomor Induk" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="laporan" class="col-sm-2 col-form-label">Laporan :</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" placeholder="Laporan" id="laporan" name="laporan" required></textarea>
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

<?php include '../template/footer_guru.php'; ?>