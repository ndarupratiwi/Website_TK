<?php include '../template/header-admin.php'; ?>
<!-- Pendaftaran -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Profil TK Pelita Harapan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="tambahdata text-right">
                <a href="input-profil.php" type="button" class="btn btn-primary">+ Foto Profil</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>  
                            <th>Id Foto</th>
                            <th>Foto</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi, "select * from tb_profil");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>   
                                <td><?php echo $d['id']; ?></td>
                                <td><?php echo "<img src='profiltk/$d[foto]' width='300' height='200' />"; ?></td>
                                <td><?php echo $d['deskripsi']; ?></td>
                                <td>
                                    <a class="btn btn-info" href="edit-profil.php?id=<?php echo $d['id']; ?>">EDIT</a>
                                    <a onclick="return confirm('Yakin Hapus?')" class="btn btn-danger" href="hapus-profil.php?id=<?php echo $d['id']; ?>">HAPUS</a>
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