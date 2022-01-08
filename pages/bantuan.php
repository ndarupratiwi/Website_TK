<!DOCTYPE html>
<html>

<head>
    <title>Bantuan</title>
</head>

<body>
    <div class="container bantuan mt-3">
        <div class="row text-center">
            <p>"Tujuan tim pelayanan bantuan kami adalah membantu Anda apabila mengalami kendala dalam melakukan
                pendaftaran, pembayaran, dan lain-lain yang berhubungan dengan website kami."</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <h4>Tutorial Pendaftaran dan Pembayaran</h4>
                    <br>
                    <h5 class="text-center">Tutorial Pendaftaran</h5>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/5TRwgtm_qHQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <br>

                    <h5 class="text-center">Tutorial Pembayaran</h5> <br>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/zn00tvtRRdY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <br>
                </div>
                <div class="col-sm-6">
                    <div class="messages text-center">
                        <h4 class="text-center">Send Messages</h4>
                        <br>
                    </div>
                    <form action="send.php" method="POST" target="_blank">
                        <!-- <input type="hidden" name="NoWA" value="6282337283595"> -->
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Anda" autofocus required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Masukkan e-mail Anda" required>
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control" name="pesan" placeholder="Masukkan pesan, kritik & saran atau kendala Anda" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No. HP/Telepon</label>
                            <input type="text" class="form-control" placeholder="Masukkan No. HP/telepon Anda" name="no_hp" required>
                        </div>
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <br>
                        <br>
                        <br>
                        <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>