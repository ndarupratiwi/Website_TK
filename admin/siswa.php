<?php include '../template/header-admin.php'; ?>
<!-- Pendaftaran -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Siswa TK Pelita Harapan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
            </div>
            <div class="cetakreport text-right">
                <a href="cetak-siswa.php" target="_blank" class="btn btn-dark">Cetak Report</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No Induk</th>
                            <th>Nama Lengkap</th>
                            <th>Kelompok</th>
                            <th>Jenkel</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi, "select * from tb_siswa");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?php echo $d['no_induk']; ?></td>
                                <td><?php echo $d['nama_lengkap']; ?></td>
                                <td><?php echo $d['kelompok']; ?></td>
                                <td><?php echo $d['jenkel']; ?></td>
                                <td>
                                    <a class="btn btn-success" href="detail-siswa.php?id=<?php echo $d['id']; ?>">DETAIL</a>
                                    <a class="btn btn-info" href="edit-siswa.php?id=<?php echo $d['id']; ?>">EDIT</a>
                                    <a onclick="return confirm('Yakin Hapus?')" class="btn btn-danger" href="hapus-siswa.php?id=<?php echo $d['id']; ?>">HAPUS</a>
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