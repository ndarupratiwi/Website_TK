<?php include '../template/header_guru.php'; ?>
<!-- Pendaftaran -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Report Siswa TK Pelita Harapan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Report Siswa</h6>
            <div class="tambahdata text-right">
                <a href="report.php" class="btn btn-warning" type="button">+Input Report</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                if (isset($_GET['pesan'])) {
                    $pesan = $_GET['pesan'];
                    if ($pesan == "input") {
                        echo "Report berhasil di input";
                    } elseif ($pesan == "update") {
                        echo "Report berhasil di update";
                    } elseif ($pesan == "hapus") {
                        echo "Report berhasil di hapus";
                    }
                }
                ?> <br>
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Induk</th>
                            <th>Nama Lengkap</th>
                            <th>Kelompok</th>
                            <th>Tanggal</th>
                            <th>Laporan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi, "select * from tb_report");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['no_induk']; ?></td>
                                <td><?php echo $d['nama_siswa']; ?></td>
                                <td><?php echo $d['kel_report']; ?></td>
                                <td><?php echo $d['tgl_report']; ?></td>
                                <td><?php echo $d['laporan']; ?></td>
                                <td>
                                    <a class="btn btn-info" href="edit_laporan.php?no_induk=<?php echo $d['no_induk']; ?>">EDIT</a>
                                    <a onclick="return confirm('Yakin Hapus?')" class="btn btn-danger" href="hapus_laporan.php?no_induk=<?php echo $d['no_induk']; ?>">HAPUS</a>
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