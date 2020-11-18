-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 04:29 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dawoo_oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `nm_lengkap` varchar(25) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `id_status`, `nm_lengkap`, `tempat_lahir`, `tgl_lahir`, `alamat`, `email`, `password`, `foto`) VALUES
(8, 1, ' affrian wari ', ' purwakarta ', '1996-01-21', '						kp.rawasari ds.jomin timur rt.11/02\r\n																								', 'afrianwari89@gmail.com', '$2y$10$kox5FXRwRaL/iw8BK7Fhyuh3xIVxMWCT7SplwOoG6CDD81xfsnaa2', 'Administrator-icon.png'),
(9, 1, 'wari', 'karawang', '1996-01-20', 'cikampek\r\n						', 'admin@gmail.com', '$2y$10$I.Vmc4uHkH/A0gJ6T9MXK.7Nvqv8nDitrsKY/1mcPxluyTBi/uc.e', '1.jpg'),
(10, 2, ' risma susanti', ' purwakarta ', '1996-01-20', 'purwakarta-jawabarat					', 'risma@gmail.com', '$2y$10$MQkLIUX7haf.FF4rf3tvHeI.wU8Cvl2.2jaGp.aC9zV07S4Zquce.', 'tech_support_icon.png'),
(11, 2, 'natalian dimas', 'subang', '2017-10-10', 'subang', 'natalian@gmail.com', '$2y$10$TAlXRGSFdH6Ev7GrQyqwFuoPp5pRiCa8zlc3zg4VYtfOjzKlax2LO', 'Administrator-icon.png'),
(12, 1, ' admin ', ' karawang ', '1996-01-20', '						jomin timur\r\n												', 'afrianwari89@gmail.com', '$2y$10$FTmdBwqfZPYn9c.ti6HGrOp1Fku0G1yZ29NEyqWzI9fhQ09XU5zTS', 'tech_support_icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `panjang` varchar(10) NOT NULL,
  `harga` float NOT NULL,
  `berat` varchar(10) NOT NULL,
  `isi` varchar(10) NOT NULL,
  `warna` varchar(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL,
  `status_barang` varchar(3) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_kategori`, `nama`, `panjang`, `harga`, `berat`, `isi`, `warna`, `keterangan`, `waktu`, `status_barang`, `gambar`, `stok`) VALUES
(4, 1, 'S01-15-05', '3', 250000, '20 gram', '24 pcs', '15', '', '2017-10-01 23:10:35', '', 'S01-15-05.jpg', 0),
(5, 1, 'S04-15-08', '3', 400000, '20 gram', '24pcs', '15', '', '2017-10-01 23:10:25', '', 'S04-15-08.jpg', 0),
(7, 1, 'S01-04-14', '3', 350000, '123', '123', '123', 'salah satu produk unggulan kami', '2017-10-16 21:10:12', 'New', 'S01-04-14.jpg', 0),
(9, 2, 'M13-S6-05', '3 Meter Me', 15000, '80 gram', '50 pcs', 'S6', 'BARANG TERBAIK', '2017-10-18 22:10:39', 'New', 'M13S605.jpg', 10),
(10, 3, 'L01-15-58', '4', 500000, '70 GRAM', '50PCS', '15', 'BLALALALAL', '2017-10-18 22:10:01', 'New', 'L01-15-58.jpg', 0),
(11, 3, 'DD', '4', 65000, '12', '12', '12', '122222', '2017-10-18 22:10:56', 'New', 'L02-04-06.jpg', 0),
(12, 1, 'asas', '4 Meter', 730000, '12', '12', '12', '12212', '2017-10-18 22:10:58', 'New', 'S01-04-14.jpg', 0),
(13, 3, 'L01-14-50', '4', 500000, '12', '12', '12', '12212', '2017-10-18 23:10:22', 'New', 'L011450.jpg', 0),
(14, 3, 'L01-04-67', '4', 450000, '12', '12', '12', '12212', '2017-10-18 23:10:05', 'New', 'L010467.jpg', 0),
(15, 3, 'L01-08-62', '4', 900000, '12', '12', '12', '12212', '2017-10-18 23:10:10', 'New', 'L010862.jpg', 0),
(16, 3, 'L02-04-06', '4', 250000, '12', '12', '12', '12212', '2017-10-18 23:10:47', 'New', 'L02-04-06.jpg', 0),
(17, 2, 'M13-14-05-H', '3 Meter', 400000, '123', '123', '123', 'asdddd', '2017-10-18 23:10:03', '', 'M131405H.jpg', 30),
(18, 2, 'M13-14-05-H', '3', 650000, '123', '123', '123', 'asdddd', '2017-10-18 23:10:04', '', 'M131405H.jpg', 0),
(19, 1, 'S02-22-24', '3 Meter Me', 250000, '70 gram', '50 pcs', '22', 'ass', '2017-10-19 00:10:21', 'New', 'S022224.jpg', 0),
(20, 1, 'S02-22-10', '3 Meter', 300000, 'as', 'as', 'as', 'assss', '2017-10-19 00:10:50', 'New', 'S022210.jpg', 0),
(21, 3, 'L01-14-50', '3 Meter', 500000, 'asas', 'assa', 'ass', 'zassasasas', '2017-10-19 00:10:17', 'New', 'L011450.jpg', 0),
(22, 3, 'L01-08-62', '3 Meter', 700000, 'as', 'as', 'as', 'ass', '2017-10-19 01:10:07', 'New', 'L010862.jpg', 0),
(23, 3, 'L01-04-62', '4 Meter ', 450000, '400 gram', '90 pcs', '04', 'ass', '2017-10-19 01:10:19', 'New', 'L010467.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nm_kategori` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nm_kategori`) VALUES
(1, 'Small'),
(2, 'Medium'),
(3, 'Large');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `keranjang_id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `keranjang_brg_id` int(11) NOT NULL,
  `keranjang_jumbel` int(11) NOT NULL,
  `keranjang_session_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`keranjang_id`, `usr_id`, `keranjang_brg_id`, `keranjang_jumbel`, `keranjang_session_id`) VALUES
(10, 9, 9, 15, 0),
(11, 9, 20, 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `byr_id` int(11) NOT NULL,
  `bl_id` varchar(15) NOT NULL,
  `byr_tanggal` date NOT NULL,
  `byr_nama` varchar(30) NOT NULL,
  `byr_jumlah` double NOT NULL,
  `byr_catatan` varchar(200) NOT NULL,
  `byr_gambar` varchar(100) NOT NULL,
  `byr_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`byr_id`, `bl_id`, `byr_tanggal`, `byr_nama`, `byr_jumlah`, `byr_catatan`, `byr_gambar`, `byr_status`) VALUES
(1, '201712130000004', '2017-12-01', 'afrian wari', 1250000, 'sudah di transfer', 'ASUS.png', 'LUNAS'),
(2, '201712130000003', '2017-12-02', 'afrian wari', 700000, 'aaaa', 'ASUS.JPG', 'LUNAS'),
(5, '201712130000002', '2017-12-03', 'afrian wari', 700000, 'sudah di transfer', 'brand.gif', 'LUNAS'),
(6, '201712130000005', '2017-12-04', 'wari', 1000000, 'ok lunas ya broh', 'Alam01.jpg', 'LUNAS'),
(7, '201712130000006', '2017-12-05', 'afrian wari', 1400000, 'ok lunas', '21.jpg', 'LUNAS'),
(8, '201712140000007', '2017-12-06', 'afrian wari', 1000000, 'ok lunas', 'a.jpg', 'LUNAS'),
(9, '201712140000008', '2017-12-07', 'afrian wari', 900000, 'ok lunas', 'Untitled-1.jpg', 'LUNAS'),
(10, '201712170000010', '2017-12-08', 'risma susanti', 1450000, 'ok lunas', '2.jpg', 'LUNAS'),
(11, '201712170000012', '2017-12-17', 'afrian wari', 450000, 'trf trakhir', 'aaa.jpeg', 'LUNAS'),
(13, '201712190000022', '2017-12-19', 'Afrianwari', 4350000, 'Lunas', '1513696344047911661365.jpg', ''),
(14, '201712200000023', '2017-12-20', 'Dhea imut', 1000000, 'Nyicil', '1513725136555911661365.jpg', ''),
(15, '201712200000024', '2017-12-20', 'Dhea imut', 1000000, 'Nyicil', '', ''),
(16, '201712200000026', '2017-12-20', 'Dhea imut', 1000000, 'Cicilan', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `bl_id` varchar(15) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `bl_tanggal` date NOT NULL,
  `bl_total` double NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`bl_id`, `usr_id`, `bl_tanggal`, `bl_total`, `status`) VALUES
('201712130000001', 5, '2017-12-13', 700000, 'Proses'),
('201712130000002', 5, '2017-12-13', 700000, 'Proses'),
('201712130000003', 5, '2017-12-13', 700000, 'Proses'),
('201712130000004', 5, '2017-12-13', 1250000, 'Pembayaran Diterima'),
('201712130000005', 5, '2017-12-13', 1000000, 'Proses'),
('201712130000006', 5, '2017-12-13', 1400000, 'Barang Diterima'),
('201712140000007', 5, '2017-12-14', 1000000, 'Proses'),
('201712140000008', 5, '2017-12-14', 900000, 'Proses'),
('201712140000009', 5, '2017-12-14', 1600000, 'Proses'),
('201712170000010', 9, '2017-12-17', 1450000, 'Barang Diterima'),
('201712170000011', 5, '2017-12-17', 1400000, 'Proses'),
('201712170000012', 5, '2017-12-17', 450000, 'Proses'),
('201712170000013', 5, '2017-12-17', 450000, 'Proses'),
('201712170000014', 5, '2017-12-17', 450000, 'Proses'),
('201712170000015', 5, '2017-12-17', 500000, 'Proses'),
('201712170000016', 5, '2017-12-17', 250000, 'Proses'),
('201712170000017', 5, '2017-12-17', 650000, 'Proses'),
('201712170000018', 5, '2017-12-17', 450000, 'Proses'),
('201712180000019', 9, '2017-12-18', 25000000, 'Proses'),
('201712180000020', 9, '2017-12-18', 35750000, 'Proses'),
('201712190000021', 5, '2017-12-19', 35000000, 'Proses'),
('201712190000022', 5, '2017-12-19', 1450000, 'Proses'),
('201712200000023', 10, '2017-12-20', 1250000, 'Proses'),
('201712200000024', 10, '2017-12-20', 1100000, 'Proses'),
('201712200000025', 5, '2017-12-20', 9000000, 'Proses'),
('201712200000026', 10, '2017-12-20', 2000000, 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_detail`
--

CREATE TABLE `pembelian_detail` (
  `bl_id` varchar(15) NOT NULL,
  `brg_id` int(11) NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian_detail`
--

INSERT INTO `pembelian_detail` (`bl_id`, `brg_id`, `jumlah`) VALUES
('0', 22, 1),
('201712130000003', 22, 1),
('201712130000004', 21, 2),
('201712130000004', 19, 1),
('201712130000005', 21, 2),
('201712130000006', 22, 2),
('201712140000007', 21, 2),
('201712140000008', 20, 3),
('201712140000009', 22, 1),
('201712140000009', 19, 1),
('201712140000009', 18, 1),
('201712170000010', 23, 1),
('201712170000010', 10, 2),
('201712170000011', 22, 2),
('201712170000012', 23, 1),
('201712170000013', 23, 1),
('201712170000015', 21, 1),
('201712170000016', 19, 1),
('201712170000017', 18, 1),
('201712170000018', 14, 1),
('201712180000019', 21, 50),
('201712180000020', 22, 50),
('201712180000020', 9, 50),
('201712190000021', 22, 50),
('201712190000022', 21, 2),
('201712190000022', 14, 1),
('201712200000023', 16, 2),
('201712200000023', 19, 3),
('201712200000024', 22, 1),
('201712200000024', 17, 1),
('201712200000025', 23, 20),
('201712200000026', 18, 2),
('201712200000026', 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status_admin`
--

CREATE TABLE `status_admin` (
  `id_status` int(11) NOT NULL,
  `nm_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_admin`
--

INSERT INTO `status_admin` (`id_status`, `nm_status`) VALUES
(1, 'Owner'),
(2, 'Karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `usr_id` int(11) NOT NULL,
  `usr_nm_lengkap` varchar(25) NOT NULL,
  `usr_tempat_lahir` varchar(25) NOT NULL,
  `usr_tgl_lahir` date NOT NULL,
  `usr_alamat` varchar(100) NOT NULL,
  `usr_email` varchar(30) NOT NULL,
  `usr_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`usr_id`, `usr_nm_lengkap`, `usr_tempat_lahir`, `usr_tgl_lahir`, `usr_alamat`, `usr_email`, `usr_password`) VALUES
(5, 'afrian wari', 'karawang', '1996-01-20', 'Kp.rawasari ds.jomin timur rt.11 rw.002 kec.kotabaru kab.karawang', 'afrianwari89@gmail.com', '$2y$10$46/1mrzjblkbbZxzx5kUQeTukQ5pejJrMpKSaf/5OilNsm.0mLbwK'),
(9, 'risma susanti', 'purwakarta', '1993-01-20', 'purwakarta', 'rismasusanti@gmail.com', '$2y$10$wz8wLObYmg11IylxAkqFju0HG34gIteD7LVSwTzNQ9o9rY.LzDSD.'),
(10, 'Dhea imut', 'Yogya', '2000-09-16', 'Jatisari, karawang', 'dhea@gmail', '$2y$10$kUjQcriVuEeNJjspSBosYug2GbY0KutmLM8kxCT9YCXYlB4sddlfi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_kategori_2` (`id_kategori`),
  ADD KEY `id_kategori_3` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`keranjang_id`),
  ADD KEY `id_barang` (`keranjang_brg_id`),
  ADD KEY `usr_id` (`usr_id`),
  ADD KEY `keranjang_brg_id` (`keranjang_brg_id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`byr_id`),
  ADD KEY `bl_id` (`bl_id`),
  ADD KEY `bl_id_2` (`bl_id`),
  ADD KEY `bl_id_3` (`bl_id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`bl_id`),
  ADD KEY `usr_id` (`usr_id`),
  ADD KEY `usr_id_2` (`usr_id`),
  ADD KEY `usr_id_3` (`usr_id`),
  ADD KEY `usr_id_4` (`usr_id`),
  ADD KEY `usr_id_5` (`usr_id`),
  ADD KEY `usr_id_6` (`usr_id`);

--
-- Indexes for table `pembelian_detail`
--
ALTER TABLE `pembelian_detail`
  ADD KEY `bl_id` (`bl_id`,`brg_id`),
  ADD KEY `bl_id_2` (`bl_id`),
  ADD KEY `brg_id` (`brg_id`),
  ADD KEY `bl_id_3` (`bl_id`),
  ADD KEY `bl_id_4` (`bl_id`);

--
-- Indexes for table `status_admin`
--
ALTER TABLE `status_admin`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `keranjang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `byr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `status_admin`
--
ALTER TABLE `status_admin`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status_admin` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`usr_id`) REFERENCES `user` (`usr_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`keranjang_brg_id`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`bl_id`) REFERENCES `pembelian` (`bl_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembelian_detail`
--
ALTER TABLE `pembelian_detail`
  ADD CONSTRAINT `pembelian_detail_ibfk_2` FOREIGN KEY (`brg_id`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
