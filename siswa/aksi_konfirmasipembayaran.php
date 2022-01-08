<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Konfirmasi Pembayaran</title>
</head>

<body id="page-top" style="background-color: cornsilk;">
    <div class="konfirmasipembayaran" style="margin:125px auto;">
        <div class="container my-5 bg-warning text-white">
            <div class="row">
                <div class="col-sm-12 my-3">
                    <h4 class="text-center">Konfirmasi Pembayaran</h4>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-10 offset-sm-1">
                    <form style="width: 800px;">
                        <h5>Status Pembayaran :</h5>
                        <div class="container">
                            <?php
                            include 'koneksi.php';
                            $nasabah = $_POST['nasabah'];
                            $data = mysqli_query($koneksi, "select * from tb_pembayaran where nasabah='$nasabah'");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <div class="form-group row">
                                    <label for="nasabah" class="col-sm-3 col-form-label ">Nama Pembayar:</label>
                                    <div class="col-sm-9">
                                        <?php echo $d['nasabah']; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama-siswa" class="col-sm-3 col-form-label ">Nama Siswa:</label>
                                    <div class="col-sm-9">
                                        <?php echo $d['nama_siswa']; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="status" class="col-sm-3 col-form-label">Status :</label>
                                    <div class="col-sm-9">
                                        <?php echo $d['status']; ?>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="form-group row my-3">
                            <div class="col-sm-10 text-right">
                                <a href="dash_siswa.php" class="btn btn-dark">OK</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>