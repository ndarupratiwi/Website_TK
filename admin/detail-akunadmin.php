<?php

use function PHPSTORM_META\type;

include '../template/header-admin.php'; ?>

<div class=" bg-white">
    <div class="row">
        <div class="col-sm-12 text-center my-3">
            <h2>Data Akun Guru TK Pelita Harapan</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 bg-gradient-info text-center text-white">
            <h4>Akun Guru</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 my-5">
            <?php
            include "koneksi.php";
            $id = $_GET['id'];
            $query_mysql = mysqli_query($koneksi, "select * from tb_user where id = '$id'");
            while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
                <form>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 col-form-label">1.ID Akun Admin :</label>
                        <div class="col-sm-9">
                            <?php echo $data['id']; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-3 col-form-label">2. Username :</label>
                        <div class="col-sm-9">
                            <?php echo $data['username']; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">3. Email :</label>
                        <div class="col-sm-9">
                            <?php echo $data['email']; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">4. Password :</label>
                        <div class="col-sm-9">
                            <input type="password" name="password" id="password" value=" <?php echo $data['password']; ?>" readonly="readonly" />
                        </div>
                    </div>
                    <!-- Buttom -->
                    <div class="buttom col-sm-12 my-5 text-center">
                        <a href="akun-admin.php" class="btn btn-info">KEMBALI</a>
                    </div>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php include '../template/footer-admin.php'; ?>