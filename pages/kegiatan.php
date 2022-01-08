<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "select * from tb_kegiatan");
while ($d = mysqli_fetch_array($data)) {
?>
    <div class="container-fluid mx-5">
        <div class="row mt-3">
            <?php if ($d['id'] % 2 == 0) { ?>
                <div class="col-5 mt-3">
                    <?php echo "<img class='img-thumbnail' src='admin/fotokegiatan/$d[foto]' width='600' height='400' />"; ?>
                </div>
                <div class="col my-auto mx-4">
                    <h3><?php echo $d['deskripsi']; ?></h3>
                </div>
            <?php } else { ?>
                <div class="col my-auto mx-4">
                    <h3><?php echo $d['deskripsi']; ?></h3>
                </div>
                <div class="col-5 mt-3 mr-5 pr-3">
                    <?php echo "<img class='img-thumbnail' src='admin/fotokegiatan/$d[foto]' width='600' height='400' />"; ?>
                </div>
            <?php } ?>
        </div>
    </div>
    <td></td>


<?php
}
?>