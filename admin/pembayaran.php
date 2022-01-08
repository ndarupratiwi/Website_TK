<?php include '../template/header-admin.php'; ?>
<!-- Pendaftaran -->
<div class="container-fluid" id="pendaftaran" name="pendaftaran">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pembayaran Siswa-Siswi TK Pelita Harapan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran</h6>
            <div class="tambahdata text-right">
                <!-- <a type="button" class="btn btn-warning">+Input Data Pembayaran</a> -->
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelompok</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi, "select * from tb_pembayaran");
                        $nomor = 1;
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $d['nama_siswa']; ?></td>
                                <td><?php echo $d['kelompok']; ?></td>
                                <td><?php echo $d['status']; ?></td>
                                <td>
                                    <a class="btn btn-success" href="detail_pembayaran.php?id=<?php echo $d['id']; ?>">DETAIL</a>
                                    <a class="btn btn-info" href="edit_pembayaran.php?id=<?php echo $d['id']; ?>">EDIT</a>
                                    <a class="btn btn-danger" href="hapus_pembayaran.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                                </td>
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
<!-- /.container-fluid -->
<?php include '../template/footer-admin.php'; ?>