<?php session_start();
if (isset($_SESSION['status'])) { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Rincian Pembayaran</title>

        <!-- Custom fonts for this template -->
        <link href="../sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../sbadmin/css/sb-admin-2.min.css" rel="stylesheet">

        <!-- Custom styles for this page -->
        <link href="../sbadmin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

        <!-- siswa.css -->
        <link rel="stylesheet" href="siswa.css">

    </head>

    <body id="page-top" style="background-color: cornsilk;">
        <!-- End of Main Content -->
        <div class="container my-5 bg-warning text-white">
            <div class="row">
                <div class="col-sm-12 my-3">
                    <h4 class="text-center">Rincian Pembayaran</h4>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-10 offset-sm-1">
                    <?php
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi, "select * from tb_rincianbayar");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <form>
                            <h5>Rincian Pembayaran :</h5>
                            <div class="container">
                                <div class="form-group row">
                                    <label for="biaya_daftar" class="col-sm-2 col-form-label ">1. Pendaftaran :</label>
                                    <div class="col-sm-10">
                                        <?php echo $d['biaya_daftar']; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="biaya_seragam" class="col-sm-2 col-form-label">2. Seragam :</label>
                                    <div class="col-sm-10">
                                        <?php echo $d['biaya_seragam']; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="biaya_buku" class="col-sm-2 col-form-label">3. Buku :</label>
                                    <div class="col-sm-10">
                                        <?php echo $d['biaya_buku']; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-8 col-form-label font-weight-bold">Jumlah uang yang harus ditransfer :</label>
                                    <div class="col-sm-4">
                                        <?php
                                        $jumlah = $d['biaya_daftar'] + $d['biaya_seragam'] + $d['biaya_buku'];
                                        echo "$jumlah";
                                        ?>
                                    </div>
                                </div>
                                <h5 class="font-weight-bold">Silahkan melakukan pembayaran pada No. Rekening berikut!</h5>
                                <div class="container">
                                    <div class="form-group row">
                                        <label for="no_rekening" class="col-sm-2 col-form-label font-weight-bold">No Rekening :</label>
                                        <div class="col-sm-10">
                                            <?php echo $d['no_rekening']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row my-3">
                                <div class="col-sm-10 text-right">
                                    <a download="<?php echo $d['file_biaya'] ?>" class="btn btn-dark mr-5" href="../admin/rincianbayar/<?php echo $d['file_biaya'] ?>">Download</a>
                                    <a href="upload_pembayaran.php" class="btn btn-dark">OK</a>
                                </div>
                            </div>
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../sbadmin/vendor/jquery/jquery.min.js"></script>
        <script src="../sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../sbadmin/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../sbadmin/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../sbadmin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../sbadmin/js/demo/datatables-demo.js"></script>

    </body>

    </html>
<?php
} else {
    echo "<script>
                alert('Silahkan login terlebih dahulu !')
                window.location='../index.php';  
                </script>";
}
?>