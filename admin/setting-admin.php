<!doctype html>
<html lang="en">
<?php session_start(); ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script text="text/javascript" src="../assets/js/jquery.js"></script>
    <script text="text/javascript" src="../assets/js/script.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/a7a755822d.js" crossorigin="anonymous"></script>

    <title>Setting | Admin</title>

</head>

<body style="background-color: #2099da;" class="mt-3">
    <?php
    include 'koneksi.php';
    $username = $_SESSION['username'];
    $data = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <div class="container text-white">
            <div class="row" style="margin:100px auto;">
                <div class="col-sm-10 offset-sm-1" style="background-color: #2021da;">
                    <form class="setting mx-auto" style="width: 800px;" method="POST" action="update-akun.php">
                        <h3 class="text-center mt-2">Setting Akun</h3>
                        <div class="form-group row mt-5">
                            <label for="username" class="col-sm-2 col-form-label"><i class="fas fa-user"></i> Username</label>
                            <div class="col-sm-10">
                                <input type="hidden" id="id" name="id" value="<?php echo $d['id'] ?>">
                                <input type="text" class="form-control" id="username" name="username" value="<?php echo $d['username'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label"><i class="far fa-envelope"></i> Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label"><i class="fas fa-unlock-alt"></i> Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" required>
                                <input type="checkbox" id="checkbox"> Show Password
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center mt-5">
                                <button onclick="return confirm('Apakah anda yakin ingin merubah akun???')" href="" type="submit" class="btn btn-dark">UPDATE</button>
                                <a href="dash-admin.php" class="btn btn-success">KEMBALI</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
<?php
if (isset($_SESSION['status'])) { ?>
<?php
} else {
    echo "<script>
                alert('Silahkan login terlebih dahulu !')
                window.location='../index.php';  
                </script>";
}
?>