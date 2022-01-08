<?php include '../template/header_guru.php'; ?>
<!-- Pendaftaran -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Materi Siswa TK Pelita Harapan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Materi Siswa</h6>
            <div class="tambahdata text-right">
                <a href="materi.php" class="btn btn-warning" type="button">+Input Materi</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                if (isset($_GET['pesan'])) {
                    $pesan = $_GET['pesan'];
                    if ($pesan == "input") {
                        echo "<div class='alert'>Materi berhasil di upload !</div>";
                    } elseif ($pesan == "update") {
                        echo "<div class='alert'>Materi berhasil di update !</div>";
                    } elseif ($pesan == "hapus") {
                        echo "<div class='alert'>Materi berhasil di hapus !</div>";
                    }
                }
                ?> <br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Hari, Tanggal</th>
                            <th>Kelompok</th>
                            <th>Tema</th>
                            <th>Upload Materi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi, "select * from tb_akademik");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?php echo $d['id_materi']; ?></td>
                                <td><?php echo $d['tanggal']; ?></td>
                                <td><?php echo $d['kel_materi']; ?></td>
                                <td><?php echo $d['tema']; ?></td>
                                <td><?php echo $d['materi']; ?></td>
                                <td>
                                    <a class="btn btn-info" href="edit_materi.php?id_materi=<?php echo $d['id_materi']; ?>">EDIT</a>
                                    <a onclick="return confirm('Yakin Hapus?')" class="btn btn-danger" href="hapus_materi.php?id_materi=<?php echo $d['id_materi']; ?>">HAPUS</a>
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