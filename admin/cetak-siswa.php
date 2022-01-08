<html lang="en">

<head>
    <title>Cetak Report Siswa</title>
</head>

<body>
    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Siswa.xls");
    ?>

    <!-- Page Heading -->
    <center>
        <h1 class="h3 mb-2 text-gray-800" style="text-align: center;">Data Siswa TK Pelita Harapan</h1>
        <hr>
    </center>

    <!-- DataTales Example -->
    <table border="1" style="width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>No Induk</th>
                <th>Tahun Ajaran</th>
                <th>Nama Lengkap</th>
                <th>Kelompok</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Nama Ayah</th>
                <th>Pekerjaan Ayah</th>
                <th>Nama Ibu</th>
                <th>Pekerjaan Ibu</th>
                <th>Anak Ke-</th>
                <th>Hobi</th>
                <th>Hubungan Keluarga</th>
                <th>Pendidikan Terakhir Ayah</th>
                <th>Pendidikan Terakhir Ibu</th>
                <th>Alamat</th>
                <th>Email</th>
                <!-- <th>Foto</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "SELECT * FROM tb_siswa ORDER BY no_induk ASC");
            $nomor = 1;
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $d['no_induk']; ?></td>
                    <td><?php echo $d['tapel']; ?></td>
                    <td><?php echo $d['nama_lengkap']; ?></td>
                    <td><?php echo $d['kelompok']; ?></td>
                    <td><?php echo $d['ttl']; ?></td>
                    <td><?php echo $d['jenkel']; ?></td>
                    <td><?php echo $d['agama']; ?></td>
                    <td><?php echo $d['nama_ayah']; ?></td>
                    <td><?php echo $d['pekerjaan_ayah']; ?></td>
                    <td><?php echo $d['nama_ibu']; ?></td>
                    <td><?php echo $d['pekerjaan_ibu']; ?></td>
                    <td><?php echo $d['anak_ke']; ?></td>
                    <td><?php echo $d['hobi']; ?></td>
                    <td><?php echo $d['hubungan_keluarga']; ?></td>
                    <td><?php echo $d['pend_terakhir_ayah']; ?></td>
                    <td><?php echo $d['pend_terakhir_ibu']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['email']; ?></td>
                    <!-- <td><?php echo "<img src='../siswa/foto/$d[foto]' width='70' height='90' />"; ?></td> -->
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</body>

</html>