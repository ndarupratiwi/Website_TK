<html lang="en">

<head>
    <title>Cetak Report Pembayaran</title>
</head>

<body>
    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Pembayaran Siswa.xls");
    ?>

    <!-- Page Heading -->
    <center>
        <h1 class="h3 mb-2 text-gray-800" style="text-align: center;">Data Pembayaran Siswa TK Pelita Harapan</h1>
        <hr>
    </center>

    <!-- DataTales Example -->
    <table border="1" style="width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nasabah</th>
                <th>Tanggal Pembayaran</th>
                <th>Nama Siswa</th>
                <th>Kelompok</th>
                <th>Status</th>
                <!-- <th>Bukti</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran ORDER BY id ASC");
            $nomor = 1;
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $d['nasabah']; ?></td>
                    <td><?php echo $d['tgl_pembayaran']; ?></td>
                    <td><?php echo $d['nama_siswa']; ?></td>
                    <td><?php echo $d['kelompok']; ?></td>
                    <td><?php echo $d['status']; ?></td>
                    <!-- <td><?php echo "<img src='../siswa/bukti/$d[bukti]' width='70' height='90' />"; ?></td> -->
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</body>

</html>