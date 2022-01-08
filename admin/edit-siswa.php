<?php include '../template/header-admin.php'; ?>

<div class=" bg-white">
    <div class="row">
        <div class="col-sm-12 text-center my-3">
            <h2>Siswa-Siswi TK Pelita Harapan PG Asembagus</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 bg-gradient-info text-center text-white">
            <h4>Edit Data Siswa</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 my-5">
            <?php
            include "koneksi.php";
            $id = $_GET['id'];
            $query_mysql = mysqli_query($koneksi, "select * from tb_siswa where id = '$id'");
            $nomor = 1;
            while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
                <form action="update-siswa.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="fotoLama" value="<?php echo $data['foto'] ?>">
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 col-form-label">1. ID :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="id" name="id" value="<?php echo $data['id'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_induk" class="col-sm-3 col-form-label">2. Nomor Induk :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="no_induk" name="no_induk" value="<?php echo $data['no_induk'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-3 col-form-label">3. Nama Lengkap :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo $data['nama_lengkap'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelompok" class="col-sm-3 col-form-label">4. Kelompok :</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="kelompok" name="kelompok" value="<?php echo $data['kelompok'] ?>">
                                <option>A</option>
                                <option>B</option>
                                <option>LULUS</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ttl" class="col-sm-3 col-form-label">5. Tempat, Tanggal Lahir :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="ttl" name="ttl" value="<?php echo $data['ttl'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenkel" class="col-sm-3 col-form-label">6. Jenis Kelamin :</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="jenkel" name="jenkel" value="<?php echo $data['jenkel'] ?>">
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
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
                        <label for="nama_ayah" class="col-sm-3 col-form-label">8. Nama Ayah :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?php echo $data['nama_ayah'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pekerjaan_ayah" class="col-sm-3 col-form-label">9. Pekerjaan Ayah :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" value="<?php echo $data['pekerjaan_ayah'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_ibu" class="col-sm-3 col-form-label">10. Nama Ibu :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?php echo $data['nama_ibu'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pekerjaan_ibu" class="col-sm-3 col-form-label">11. Pekerjaan Ibu :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" value="<?php echo $data['pekerjaan_ibu'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="anak_ke" class="col-sm-3 col-form-label">12. Anak Ke- :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="anak_ke" name="anak_ke" value="<?php echo $data['anak_ke'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="anak_ke" class="col-sm-3 col-form-label">13. Hobi :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="hobi" name="hobi" value="<?php echo $data['hobi'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hubungan_keluarga" class="col-sm-3 col-form-label">14. Hubungan Keluarga :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="hubungan_keluarga" name="hubungan_keluarga" value="<?php echo $data['hubungan_keluarga'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pend_terakhir_ayah" class="col-sm-3 col-form-label">15. Pendidikan Terakhir Ayah:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="pend_terakhir_ayah" name="pend_terakhir_ayah" value="<?php echo $data['pend_terakhir_ayah'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pend_terakhir_ibu" class="col-sm-3 col-form-label">16. Pendidikan Terakhir Ibu :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="pend_terakhir_ibu" name="pend_terakhir_ibu" value="<?php echo $data['pend_terakhir_ibu'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label">17. Alamat :</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="alamat" name="alamat"><?php echo $data['alamat'] ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">18. E-mail :</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['email'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telp" class="col-sm-3 col-form-label">19. No Telp :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $data['telp'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-sm-3 col-form-label">20. Upload Foto :</label>
                        <div class="col-sm-9">
                            <img src="../siswa/foto/<?= $data['foto']; ?>" width="200">
                            <input type="file" name="foto" id="foto">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tapel" class="col-sm-3 col-form-label">21. Tahun Ajaran :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tapel" name="tapel" value="<?php echo $data['tapel'] ?>">
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