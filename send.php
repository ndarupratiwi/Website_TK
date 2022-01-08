<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
    $no_hp = $_POST['no_hp'];
    // $NoWA = $_POST['NoWA'];
    header("location:https://api.whatsapp.com/send?phone=6282337283595&text=Nama:%20$nama%0AEmail:%20$email%0APesan:%20$pesan%0ANo.HP:%20$no_hp");
} else {
    echo "
    <script>
        window.location=history.go(-1);
        </script>
    ";
}
