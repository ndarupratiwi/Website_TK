-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Feb 2021 pada 07.16
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akademik`
--

CREATE TABLE `tb_akademik` (
  `id_materi` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `kel_materi` enum('A','B') NOT NULL,
  `materi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_akademik`
--

INSERT INTO `tb_akademik` (`id_materi`, `tema`, `tanggal`, `kel_materi`, `materi`) VALUES
(2, 'Bernyayi', '2021-02-08', 'A', '6020affbe9645.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`id`, `foto`, `deskripsi`) VALUES
(4, '6008e7a77d25b.jpg', 'Kantor TK Pelita Harapan'),
(5, '6008e7e50777b.jpg', 'Kelas A1'),
(6, '6008e7f145d15.jpg', 'Kelas A2'),
(7, '6008e7fe86dee.jpg', 'Kelas B1'),
(8, '6008e809837b1.jpg', 'Kelas B2'),
(9, '6008e8944fb93.jpg', 'Fasilitas Bermain di Dalam Kelas ( Dakon )'),
(10, '6008e8abbe817.jpg', 'Mainan Alat Memasak'),
(11, '6008e8cf143b4.jpg', 'Fasilitas Bermain di Luar Kelas ( Perosotan )'),
(12, '6008e8dfc148f.jpg', 'Ayunan'),
(13, '6008e8f3edbb5.jpg', 'Jungkitan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id`, `foto`, `deskripsi`) VALUES
(9, '6008e729e90b3.jpeg', 'Memperingati Maulid Nabi Muhammad SAW'),
(10, '6008e77d1362e.jpeg', 'Drum Band TK Pelita Harapan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `nip` int(30) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `gr_kelompok` enum('A','B') NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `jenkel` enum('Laki-Laki','Perempuan') NOT NULL,
  `pend_terakhir` varchar(200) NOT NULL,
  `agama` enum('Islam','Protestan','Hindu','Budha','Katolik','Konghucu') NOT NULL,
  `th_ijazah_terakhir` int(20) NOT NULL,
  `alamat` text NOT NULL,
  `status` enum('Kawin','Belum Kawin') NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `no_sertifikasi` int(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`nip`, `nama_guru`, `gr_kelompok`, `ttl`, `jenkel`, `pend_terakhir`, `agama`, `th_ijazah_terakhir`, `alamat`, `status`, `jabatan`, `telp`, `no_sertifikasi`, `foto`) VALUES
(12345678, 'Jokowi', 'A', 'Jember, 1 Januari 1970', 'Laki-Laki', 'S1', 'Islam', 2020, 'Ambulu', '', 'Guru', '082337283595', 7654321, '601fc2f81711d.jpg'),
(567893234, 'Bambang', 'B', 'Bandung, 7 Juni 1999', 'Laki-Laki', 'S1', 'Islam', 2020, 'Sidodadi', '', 'Guru', '082337283595', 2147483647, '601fc3c81cf67.jpg'),
(2147483647, 'Putra', 'A', 'Jember, 1 Januari 1970', 'Laki-Laki', 'S1', 'Islam', 2020, 'Ambulu', '', 'Kepala Sekolah', '082337283595', 2147483647, '6020b1485fd42.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id` int(11) NOT NULL,
  `nasabah` varchar(255) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `kelompok` enum('A','B') NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `status` enum('Lunas','Belum Lunas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id`, `nasabah`, `tgl_pembayaran`, `nama_siswa`, `kelompok`, `bukti`, `status`) VALUES
(17, 'Dodo', '2021-02-14', 'Muh Putra', 'A', '600cf4d31de0a.png', 'Lunas'),
(18, 'Sisdiyono', '2021-02-16', 'Ndaru Pratiwi', 'B', '6020af0bb214f.png', 'Belum Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`id`, `foto`, `deskripsi`) VALUES
(3, '6008e6c90f273.jpg', 'Halaman Utama TK Pelita Harapan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_report`
--

CREATE TABLE `tb_report` (
  `no_induk` int(11) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `laporan` text NOT NULL,
  `tgl_report` date NOT NULL,
  `kel_report` enum('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_report`
--

INSERT INTO `tb_report` (`no_induk`, `nama_siswa`, `laporan`, `tgl_report`, `kel_report`) VALUES
(4321, 'Lusy Dwi', 'Sangat Baik', '2021-02-08', 'B'),
(11111, 'Putra Adi', 'Sangat Baik', '2021-01-29', 'B'),
(12345, 'Ndaru Pratiwi', 'Baik', '2021-01-29', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rincianbayar`
--

CREATE TABLE `tb_rincianbayar` (
  `no_rekening` varchar(255) NOT NULL,
  `biaya_daftar` int(11) NOT NULL,
  `biaya_seragam` int(11) NOT NULL,
  `biaya_buku` int(11) NOT NULL,
  `file_biaya` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rincianbayar`
--

INSERT INTO `tb_rincianbayar` (`no_rekening`, `biaya_daftar`, `biaya_seragam`, `biaya_buku`, `file_biaya`) VALUES
('567890098554', 500000, 500000, 250000, '600918072adca.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `no_induk` int(10) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `kelompok` enum('A','B','LULUS') NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `jenkel` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` enum('Islam','Kristen','Hindu','Budha','Katolik') NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `anak_ke` int(5) NOT NULL,
  `hobi` varchar(255) NOT NULL,
  `hubungan_keluarga` varchar(255) NOT NULL,
  `pend_terakhir_ayah` varchar(255) NOT NULL,
  `pend_terakhir_ibu` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `tapel` varchar(256) NOT NULL,
  `foto` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `username`, `no_induk`, `nama_lengkap`, `kelompok`, `ttl`, `jenkel`, `agama`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `anak_ke`, `hobi`, `hubungan_keluarga`, `pend_terakhir_ayah`, `pend_terakhir_ibu`, `alamat`, `email`, `telp`, `tapel`, `foto`) VALUES
(1, 'uitiwi', 12345, 'Ndaru Pratiwi', 'LULUS', 'Jember, 09 Februari 2000', 'Laki-laki', 'Islam', 'Sisdiyono', 'Petani', 'Jenny', 'Ibu Rumah Tangga', 2, 'Bernyanyi', 'Anak Kandung', 'S1', 'SMA', 'Jember', 'ui.tiwi@gmail.com', '085745637111', '2020', '6020aed5971c1.jpeg'),
(2, 'putra', 123456, 'Putra Adi Kusuma', 'A', 'Blora, 7 Juni 2002', 'Laki-laki', 'Islam', 'Khusnan', 'Wirausaha', 'Jenny', 'Ibu Rumah Tangga', 1, 'Berhitung', 'Anak Kandung', 'S1', 'SMA', 'Blora Jawa Tengah', 'putra@gmail.com', '082337283595', '', '6027e1c4b7ef4.jpg'),
(5, 'lusy', 234567, 'Lusy Wilujeng', 'A', 'Situbondo, 30 November 2000', 'Laki-laki', 'Islam', 'Khusnan', 'Wirausaha', 'Jenny', 'Ibu Rumah Tangga', 2, 'Bermain', 'Anak Kandung', 'S1', 'SMA', 'Situbondo ', 'lusy@gmail.com', '082337283595', '', '6027e28401ed8.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(256) NOT NULL,
  `level` enum('Admin','Guru','Siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `email`, `password`, `level`) VALUES
(1, 'uitiwi', 'ndaru@gmail.com', '$2y$10$aQDUDSHkMla4VP7OFtlXGu79b/O6.do9uk1agejxEwzF7rCgS9mhi', 'Siswa'),
(2, 'admin1', 'admin2@gmail.com', '$2y$10$Ed8LuysT8hIeoEcUOcegcuiyPGykqJAGPZneV7QjWcF2H8mMdhXFC', 'Admin'),
(3, 'guru1', 'guru2@gmail.com', '$2y$10$2jZd7ASNfbylzXmCHZaN3eia/tEBqJg16MFA/MmvyMfPTg43/r1rm', 'Guru'),
(4, 'putra', 'putra@gmail.com', '$2y$10$5LSa.dhi3lAX1ErwGhv7tO0OWDRV1.xThODYfdXh3b7cLh2EW6uBW', 'Siswa'),
(5, 'khusnan', 'inan@gmail.com', '$2y$10$sZKdHrKPZWxi8Vog3lYXNeDxAXs97H3KAwGWovC9Jh9vtsTBmZRRG', 'Siswa'),
(6, 'admin2', 'admin2@gmail.com', '$2y$10$6.egP10CjxWL6McHqKZzZO0hwxamJxMnkZXh.UeP81jxDr1KZrbPS', 'Admin'),
(7, 'guru2', 'guru2@gmail.com', '$2y$10$15cJedP3zU2EuLCOQqxcHuClzsLRkRYcSV7SFlnlBTjyNiKVXi6r2', 'Guru'),
(9, 'lusy', 'lusy@gmail.com', '$2y$10$Wt0Ym1wJJ2cUoD/cfXQPAewyuRG.B2JntM2kTV07iYlLmrkwsavXe', 'Siswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_akademik`
--
ALTER TABLE `tb_akademik`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `tema` (`tema`);

--
-- Indeks untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `nasabah` (`nasabah`);

--
-- Indeks untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_report`
--
ALTER TABLE `tb_report`
  ADD PRIMARY KEY (`no_induk`);

--
-- Indeks untuk tabel `tb_rincianbayar`
--
ALTER TABLE `tb_rincianbayar`
  ADD PRIMARY KEY (`no_rekening`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_induk` (`no_induk`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_akademik`
--
ALTER TABLE `tb_akademik`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `nip` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_report`
--
ALTER TABLE `tb_report`
  MODIFY `no_induk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
