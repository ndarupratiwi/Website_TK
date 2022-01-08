<?php include '../template/header-admin.php'; ?>

<div class=" bg-white">
    <div class="row">
        <div class="col-sm-12 text-center my-3">
            <h2>Data Guru TK Pelita Harapan PG Asembagus</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 bg-gradient-info text-center text-white">
            <h4>Edit Data Guru</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 my-5">
            <?php
            include "koneksi.php";
            $nip = $_GET['nip'];
            $query_mysql = mysqli_query($koneksi, "select * from tb_pegawai where nip = '$nip'");
            $nomor = 1;
            while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
                <form action="update-guru.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="fotoLama" value="<?php echo $data['foto'] ?>">
                    <div class="form-group row">
                        <label for="nip" class="col-sm-3 col-form-label">1. NIP :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nip" name="nip" value="<?php echo $data['nip'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_guru" class="col-sm-3 col-form-label">2. Nama Guru :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="<?php echo $data['nama_guru'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gr_kelompok" class="col-sm-3 col-form-label">3. Guru Kelompok :</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="gr_kelompok" name="gr_kelompok" value="<?php echo $data['gr_kelompok'] ?>">
                                <option>A</option>
                                <option>B</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ttl" class="col-sm-3 col-form-label">4. Tempat, Tanggal Lahir :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="ttl" name="ttl" value="<?php echo $data['ttl'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenkel" class="col-sm-3 col-form-label">5. Jenis Kelamin :</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="jenkel" name="jenkel" value="<?php echo $data['jenkel'] ?>">
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pend_terakhir" class="col-sm-3 col-form-label">6. Pendidikan Terakhir :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="pend_terakhir" name="pend_terakhir" value="<?php echo $data['pend_terakhir'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="agama" class="col-sm-3 col-form-label">7. Agama :</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="agama" name="agama" value="<?php echo $data['agama'] ?>">
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                                <option>Katolik</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="th_ijazah_terakhir" class="col-sm-3 col-form-label">8. Tahun Ijazah Terakhir :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="th_ijazah_terakhir" name="th_ijazah_terakhir" value="<?php echo $data['th_ijazah_terakhir'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label">9. Alamat :</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="alamat" name="alamat"><?php echo $data['alamat'] ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">10. Status :</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="status" name="status" value="<?php echo $data['status'] ?>">
                                <option>Kawin</option>
                                <option>Belum Kawin</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan" class="col-sm-3 col-form-label">11. Jabatan :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $data['jabatan'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telp" class="col-sm-3 col-form-label">12. No Telp :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $data['telp'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_sertifikasi" class="col-sm-3 col-form-label">13. No Sertifikasi :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="no_sertifikasi" name="no_sertifikasi" value="<?php echo $data['no_sertifikasi'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-sm-3 col-form-label">14. Upload Foto :</label>
                        <div class="col-sm-9">
                            <img src="fotoguru/<?= $data['foto']; ?>" width="200">
                            <input type="file" name="foto" id="foto">
                        </div>
                    </div>

                    <!-- Buttom -->
                    <div class="buttom col-sm-12 my-5 text-center">
                        <button type="submit" class="btn btn-dark">UPDATE</button>
                    </div>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php include '../template/footer-admin.php'; ?>