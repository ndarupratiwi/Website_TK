<?php include '../template/header-admin.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3>Input Akun Guru TK Pelita Harapan</h3>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-10 offset-sm-1 bg-gradient-info text-center text-white">
            <h4>Isi Kolom dengan Benar</h4>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-sm-10 offset-sm-1">
            <form action="aksi-akunguru.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" data-toggle="password">
                        <input type="checkbox" id="checkbox"> Show Password
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="level">Status</label>
                        <select id="level" name="level" class="form-control">
                            <option>Guru</option>
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../template/footer-admin.php'; ?>