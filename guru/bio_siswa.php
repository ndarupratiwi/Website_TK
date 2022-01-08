<?php include '../template/header_guru.php'; ?>
<!-- Pendaftaran -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Biodata Siswa TK Pelita Harapan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Biodata Siswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>No Induk</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Kelompok</th>
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
                                <td><?php echo $d['id']; ?></td>
                                <td><?php echo $d['no_induk']; ?></td>
                                <td><?php echo $d['nama_lengkap']; ?></td>
                                <td><?php echo $d['jenkel']; ?></td>
                                <td><?php echo $d['kelompok']; ?></td>
                                <td>
                                    <a class="btn btn-success" href="detail_siswa.php?id=<?php echo $d['id']; ?>">DETAIL</a>
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
<?php include '../template/footer_guru.php'; ?>