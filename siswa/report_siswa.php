<?php include '../template/header_siswa.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3>Laporan Pembelajaran Siswa/Siswi TK Pelita Harapan</h3>
        </div>
    </div>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Induk</th>
                            <th>Nama Lengkap</th>
                            <th>Kelompok</th>
                            <th>Tanggal</th>
                            <th>Laporan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $no = 1;
                        $nama_siswa = $_POST['nama_siswa'];
                        $no_induk = $_POST['no_induk'];
                        $data = mysqli_query($koneksi, "SELECT * FROM tb_report WHERE nama_siswa='$nama_siswa' && no_induk='$no_induk'");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['no_induk']; ?></td>
                                <td><?php echo $d['nama_siswa']; ?></td>
                                <td><?php echo $d['kel_report']; ?></td>
                                <td><?php echo $d['tgl_report']; ?></td>
                                <td><?php echo $d['laporan']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include '../template/footer_siswa.php'; ?>