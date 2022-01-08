<div class="container-fluid">
    <?php
    include 'koneksi.php';
    $data = mysqli_query($koneksi, "select * from tb_fasilitas"); ?>
    <div class="row my-2">
        <?php ?>
        <?php
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <div class="col-6 my-3">
                <div class="card ">
                    <div class="card mx-auto p-2">
                        <?php echo "<img class='card-img-top' class='mx-auto' src='admin/fotofasilitas/$d[foto]' width='600'  alt='Card image cap' />"; ?>
                        <h5 class="card-title mt-3 mx-auto"><?php echo $d['deskripsi'] ?></h5>
                    </div>
                </div>
            </div>

        <?php } ?>

    </div>

</div>
<?php  ?>