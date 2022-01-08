<?php include '../template/header-admin.php'; ?>
<!-- Pendaftaran -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Guru TK Pelita Harapan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="tambahdata text-right">
                <a href="cetak-guru.php" target="_blank" class="btn btn-dark">Cetak Report</a>
                <a href="input-guru.php" type="button" class="btn btn-primary">+ Data Guru</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Guru Kelompok</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi, "select * from tb_pegawai");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?php echo $d['nip']; ?></td>
                                <td><?php echo $d['nama_guru']; ?></td>
                                <td><?php echo $d['gr_kelompok']; ?></td>
                                <td>
                                    <a class="btn btn-success" href="detail-guru.php?nip=<?php echo $d['nip']; ?>">DETAIL</a>
                                    <a class="btn btn-info" href="edit-guru.php?nip=<?php echo $d['nip']; ?>">EDIT</a>
                                    <a onclick="return confirm('Yakin Hapus?')" class="btn btn-danger" href="hapus-guru.php?nip=<?php echo $d['nip']; ?>">HAPUS</a>
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