-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Apr 2015 pada 14.14
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jfas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(10) NOT NULL,
  `email_admin` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(15) NOT NULL,
  `nomor_telepon` varchar(15) DEFAULT NULL,
  `nomor_handphone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `email_admin`, `password`, `alamat`, `kota`, `nomor_telepon`, `nomor_handphone`) VALUES
(1402012068, 'prabowo_sejati@ymail.com', 'remaja313', 'jl. Yarsi GG suproto no 77', 'Jakarta pusat', NULL, '083817575'),
(1402012089, 'ocky.aditia@gmail.com', '503945', 'Jl. H Suit No.12 Rt.003 Rw.06 Semper Barat, Cilincing, 14130', 'Jakarta Utara', '0214401212', '083871757552');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuaca`
--

CREATE TABLE IF NOT EXISTS `cuaca` (
`id_cuaca` int(10) NOT NULL,
  `id_wilayah` int(10) DEFAULT NULL,
  `kondisi_cuaca` varchar(30) DEFAULT NULL,
  `suhu` int(5) DEFAULT NULL,
  `kelembaban` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumlah_pengungsi`
--

CREATE TABLE IF NOT EXISTS `jumlah_pengungsi` (
`id_jumlah_pengungsi` int(10) NOT NULL,
  `id_wilayah` int(10) DEFAULT NULL,
  `id_jakarta` int(10) NOT NULL,
  `nama_wilayah` varchar(50) DEFAULT NULL,
  `nama_jalan` varchar(50) DEFAULT NULL,
  `jumlah_pengungsi` int(10) NOT NULL,
  `jumlah_pengungsi_terkena_penyakit` int(10) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lalu_lintas`
--

CREATE TABLE IF NOT EXISTS `lalu_lintas` (
`id_lalulintas` int(10) NOT NULL,
  `id_wilayah` int(10) DEFAULT NULL,
  `id_jakarta` int(10) NOT NULL,
  `nama_wilayah` varchar(50) DEFAULT NULL,
  `nama_jalan` varchar(50) DEFAULT NULL,
  `informasi_lalulintas` varchar(20) NOT NULL,
  `kondisi_jalan` varchar(20) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi_bendung`
--

CREATE TABLE IF NOT EXISTS `lokasi_bendung` (
`id_bendung` int(10) NOT NULL,
  `id_admin` int(10) DEFAULT NULL,
  `nama_bendung` varchar(20) NOT NULL,
  `nama_wilayah` varchar(50) NOT NULL,
  `nama_jalan` varchar(50) DEFAULT NULL,
  `ketinggian_air` int(5) NOT NULL,
  `status_bendung` varchar(15) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi_wilayah`
--

CREATE TABLE IF NOT EXISTS `lokasi_wilayah` (
`id_wilayah` int(10) NOT NULL,
  `id_jakarta` int(10) NOT NULL,
  `id_admin` int(10) DEFAULT NULL,
  `id_pengguna` int(10) DEFAULT NULL,
  `nama_wilayah` varchar(50) NOT NULL,
  `nama_jalan` text,
  `ketinggian_air` varchar(20) NOT NULL,
  `status_wilayah` varchar(15) DEFAULT NULL,
  `kondisi_cuaca` varchar(50) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` int(10) NOT NULL,
  `email_pengguna` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kota` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening_bank`
--

CREATE TABLE IF NOT EXISTS `rekening_bank` (
  `no_rekening` int(20) NOT NULL,
  `id_admin` int(10) DEFAULT NULL,
  `nama_rekening` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `telepon_darurat`
--

CREATE TABLE IF NOT EXISTS `telepon_darurat` (
  `no_telepon` varchar(25) NOT NULL,
  `id_admin` int(10) DEFAULT NULL,
  `nama_telepon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `telepon_darurat`
--

INSERT INTO `telepon_darurat` (`no_telepon`, `id_admin`, `nama_telepon`) VALUES
('021-3327006011', 1402012068, 'PMI Kota Tangerang Selatan'),
('021-345 8400', 1402012068, 'BNPB'),
('021-38414743', 1402012068, 'PMI Kota Jakarta Pusat'),
('021-3906666', 1402012068, 'PMI Jakarta'),
('021-3908422 / 3908459', 1402012068, 'PMI DKI Jakarta'),
('021-439356304', 1402012068, 'PMI Kota Jakarta Utara'),
('021-523 4000', 1402012068, 'Polda Metro Jaya'),
('021-550 7976', 1402012068, 'SAR Jakarta'),
('021-5606378 / 56450195', 1402012068, 'PMI Kota Jakarta Barat'),
('021-7721569310', 1402012068, 'PMI Kabupaten Depok'),
('021-7980332 / 79818716', 1402012068, 'PMI Kota Jakarta Selatan'),
('021-8611832 / 86003487', 1402012068, 'PMI Kota Jakarta Timur'),
('021-8750772', 1402012068, 'PMI Kab. Bogor'),
('021-883312249', 1402012068, 'PMI Kabupaten Bekasi'),
('021-88557138', 1402012068, 'PMI Kota Bekasi'),
('021-9517777012', 1402012068, 'PMI Kota Tangerang'),
('0267-40225513', 1402012068, 'PMI Kabupaten Karawang'),
('129', 1402012068, 'Posko Bencana');

-- --------------------------------------------------------

--
-- Struktur dari tabel `umpan_balik`
--

CREATE TABLE IF NOT EXISTS `umpan_balik` (
`id` int(10) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggapan` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`,`email_admin`), ADD UNIQUE KEY `id_admin` (`id_admin`);

--
-- Indexes for table `cuaca`
--
ALTER TABLE `cuaca`
 ADD PRIMARY KEY (`id_cuaca`), ADD KEY `id_wilayah` (`id_wilayah`);

--
-- Indexes for table `jumlah_pengungsi`
--
ALTER TABLE `jumlah_pengungsi`
 ADD PRIMARY KEY (`id_jumlah_pengungsi`), ADD KEY `id_wilayah` (`id_wilayah`);

--
-- Indexes for table `lalu_lintas`
--
ALTER TABLE `lalu_lintas`
 ADD PRIMARY KEY (`id_lalulintas`), ADD KEY `id_wilayah` (`id_wilayah`);

--
-- Indexes for table `lokasi_bendung`
--
ALTER TABLE `lokasi_bendung`
 ADD PRIMARY KEY (`id_bendung`), ADD KEY `fk_lokasi_bendung` (`id_admin`);

--
-- Indexes for table `lokasi_wilayah`
--
ALTER TABLE `lokasi_wilayah`
 ADD PRIMARY KEY (`id_wilayah`), ADD KEY `fk_lokasi_wilayah_admin` (`id_admin`), ADD KEY `fk_lokasi_wilayah_pengguna` (`id_pengguna`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`id_pengguna`,`email_pengguna`);

--
-- Indexes for table `rekening_bank`
--
ALTER TABLE `rekening_bank`
 ADD PRIMARY KEY (`no_rekening`), ADD KEY `fk_rekening_bank` (`id_admin`);

--
-- Indexes for table `telepon_darurat`
--
ALTER TABLE `telepon_darurat`
 ADD PRIMARY KEY (`no_telepon`), ADD UNIQUE KEY `no_telepon` (`no_telepon`), ADD KEY `fk_telepon_darurat` (`id_admin`);

--
-- Indexes for table `umpan_balik`
--
ALTER TABLE `umpan_balik`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuaca`
--
ALTER TABLE `cuaca`
MODIFY `id_cuaca` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jumlah_pengungsi`
--
ALTER TABLE `jumlah_pengungsi`
MODIFY `id_jumlah_pengungsi` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lalu_lintas`
--
ALTER TABLE `lalu_lintas`
MODIFY `id_lalulintas` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lokasi_bendung`
--
ALTER TABLE `lokasi_bendung`
MODIFY `id_bendung` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lokasi_wilayah`
--
ALTER TABLE `lokasi_wilayah`
MODIFY `id_wilayah` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `umpan_balik`
--
ALTER TABLE `umpan_balik`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cuaca`
--
ALTER TABLE `cuaca`
ADD CONSTRAINT `cuaca_ibfk_1` FOREIGN KEY (`id_wilayah`) REFERENCES `lokasi_wilayah` (`id_wilayah`);

--
-- Ketidakleluasaan untuk tabel `jumlah_pengungsi`
--
ALTER TABLE `jumlah_pengungsi`
ADD CONSTRAINT `jumlah_pengungsi_ibfk_1` FOREIGN KEY (`id_wilayah`) REFERENCES `lokasi_wilayah` (`id_wilayah`);

--
-- Ketidakleluasaan untuk tabel `lalu_lintas`
--
ALTER TABLE `lalu_lintas`
ADD CONSTRAINT `lalu_lintas_ibfk_1` FOREIGN KEY (`id_wilayah`) REFERENCES `lokasi_wilayah` (`id_wilayah`);

--
-- Ketidakleluasaan untuk tabel `lokasi_bendung`
--
ALTER TABLE `lokasi_bendung`
ADD CONSTRAINT `fk_lokasi_bendung` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `lokasi_wilayah`
--
ALTER TABLE `lokasi_wilayah`
ADD CONSTRAINT `fk_lokasi_wilayah_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
ADD CONSTRAINT `fk_lokasi_wilayah_pengguna` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `rekening_bank`
--
ALTER TABLE `rekening_bank`
ADD CONSTRAINT `fk_rekening_bank` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `telepon_darurat`
--
ALTER TABLE `telepon_darurat`
ADD CONSTRAINT `fk_telepon_darurat` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
