<?php include '../template/header-admin.php'; ?>
<!-- Pendaftaran -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Akun Guru TK Pelita Harapan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 text-right">
            <a class="btn btn-primary" href="input-akunguru.php">+ Akun Guru</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                if (isset($_GET['pesan'])) {
                    $pesan = $_GET['pesan'];
                    if ($pesan == "input") {
                        echo "Data berhasil di input";
                    } elseif ($pesan == "update") {
                        echo "Data berhasil di update";
                    } elseif ($pesan == "hapus") {
                        echo "Data berhasil di hapus";
                    }
                }
                ?>
                <br>
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>E-MAIL</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi, "select * from tb_user where level='Guru'");
                        $nomor = 1;
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $d['username']; ?></td>
                                <td><?php echo $d['email']; ?></td>
                                <td>
                                    <a class="btn btn-success" href="detail-akunguru.php?id=<?php echo $d['id']; ?>">DETAIL</a>
                                    <a onclick="return confirm('Yakin Hapus?')" class="btn btn-danger" href="hapus-akunguru.php?id=<?php echo $d['id']; ?>">HAPUS</a>
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