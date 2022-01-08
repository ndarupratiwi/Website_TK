<html lang="en">

<head>
    <title>Cetak Report Guru</title>
</head>

<body>
    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Guru.xls");
    ?>

    <!-- Page Heading -->
    <center>
        <h1 class="h3 mb-2 text-gray-800" style="text-align: center;">Data Guru TK Pelita Harapan</h1>
        <hr>
    </center>

    <!-- DataTales Example -->
    <table border="1" style="width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama Guru</th>
                <th>Guru Kelompok</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Pendidikan Terakhir</th>
                <th>Agama</th>
                <th>Tahun Ijazah Terakhir</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Jabatan</th>
                <th>No Telephone</th>
                <th>No Sertifikasi</th>
                <!-- <th>Foto</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "SELECT * FROM tb_pegawai ORDER BY nip ASC");
            $nomor = 1;
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $d['nip']; ?></td>
                    <td><?php echo $d['nama_guru']; ?></td>
                    <td><?php echo $d['gr_kelompok']; ?></td>
                    <td><?php echo $d['ttl']; ?></td>
                    <td><?php echo $d['jenkel']; ?></td>
                    <td><?php echo $d['pend_terakhir']; ?></td>
                    <td><?php echo $d['agama']; ?></td>
                    <td><?php echo $d['th_ijazah_terakhir']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['status']; ?></td>
                    <td><?php echo $d['jabatan']; ?></td>
                    <td><?php echo $d['telp']; ?></td>
                    <td><?php echo $d['no_sertifikasi']; ?></td>
                    <!-- <td><?php echo "<img src='fotoguru/$d[foto]' width='70' height='90' />"; ?></td> -->
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</body>

</html>