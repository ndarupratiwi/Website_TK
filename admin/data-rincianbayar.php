<?php include '../template/header-admin.php'; ?>
<!-- Pendaftaran -->
<div class="container-fluid" id="pendaftaran" name="pendaftaran">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pembayaran TK Pelita Harapan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Rincian Pembayaran PPDB TK Pelita Harapan PG Asembagus</h6>
            <br>
            <div class="tambahdata text-right">
                <a href="input-rincianbayar.php" type="button" class="btn btn-primary">+ Rincian Bayar</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No. Rekening</th>
                            <th>Biaya Daftar</th>
                            <th>Biaya Seragam</th>
                            <th>Biaya Buku</th>
                            <th>Total</th>
                            <th>File Rincian Bayar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi, "select * from tb_rincianbayar");
                        $nomor = 1;
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $d['no_rekening']; ?></td>
                                <td><?php echo $d['biaya_daftar']; ?></td>
                                <td><?php echo $d['biaya_seragam']; ?></td>
                                <td><?php echo $d['biaya_buku']; ?></td>
                                <td>
                                    <?php
                                    $jumlah = $d['biaya_daftar'] + $d['biaya_seragam'] + $d['biaya_buku'];
                                    echo "$jumlah";
                                    ?>
                                </td>
                                <td><?php echo $d['file_biaya']; ?></td>
                                <td>
                                    <a class="btn btn-info" href="edit-rincianbayar.php?no_rekening=<?php echo $d['no_rekening']; ?>">EDIT</a>
                                    <a onclick="return confirm('Yakin Hapus?')" class="btn btn-danger" href="hapus-rincianbayar.php?no_rekening=<?php echo $d['no_rekening']; ?>">HAPUS</a>
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