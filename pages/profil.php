<div class="container">
    <br>
    <center>
        <img src="assets/image/tentang.jpg" style="width:1000px; height:400px;">
    </center>
    <br>
    <div class="text-center">
        <h2 class="font-weight-bold">TK Pelita Harapan PG Asembagus</h2>
        <p>"TK Pelita Harapan PG Asembagus didirikan pada tanggal 5 Agustus 1965 di bawah naungan IIKB (Ikatan Istri Keluarga Besar) PG Asembagoes
            dengan pelindung adalah bapak General Manager PG Asembagoes. Adapun lokasi TK terletak di dusun Krajan timur RT 02 RW 05 dengan sarana dan prasarana
            yang memadai."</p>
    </div>
    <br>
    <h3 class="font-weight-bold">|Visi</h3>
    <p>“Mendukung Visi dan Misi Kementerian Pendidikan dan Kebudayaan dengan mewujudkan pendidikan tinggi vokasi yang unggul dan berdaya saing dibidang Teknologi Terapan yang menghasilkan lulusan berkarakter”</p>
    <br>
    <h3 class="font-weight-bold">|Misi</h3>
    <p class="text-justify">1. Meningkatkan pendidikan terapan yang inovatif dan berdaya saing. <br>
        2. Meningkatkan penelitian terapan, pengabdian kepada masyarakat dan kewirausahaan untuk menghasilkan nilai tambah produk inovasi.<br>
        3. Mewujudkan tata kelola Polije yang lebih baik dalam rangka reformasi birokrasi (Good Polije Governance).<br>
        4. Mengembangkan kerjasama tingkat nasional maupun internasional.</p>
    <h3 class="font-weight-bold">|Profil Lembaga</h3>
    <p>1. Nama TK : Pelita Harapan PG Asembagus<br>
        2. NSS : 001052316005<br>
        3. NPSN : 20575544
</div>
<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "select * from tb_pegawai");
while ($d = mysqli_fetch_array($data)) {
?>
    <div class="container-fluid">
        <div class="row row-cols-auto">
            <div class="col my-auto mx-5 pl-5">
                <h3><?php echo $d['nama_guru']; ?></h3>
                <h5><?php echo $d['jabatan'] ?></h5>
            </div>
            <div class="col-4 mt-3 mr-5 pr-3">
                <?php echo "<img class='img-thumbnail' src='admin/fotoguru/$d[foto]' width='300' height='200' />"; ?>
            </div>
        </div>
    </div>
    <td></td>


<?php
}
?>