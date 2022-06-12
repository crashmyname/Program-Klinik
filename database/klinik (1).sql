-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 04:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admn_user`
--

CREATE TABLE `admn_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admn_user`
--

INSERT INTO `admn_user` (`id`, `username`, `password`, `role`) VALUES
(2022000001, 'administrator', '0192023a7bbd73250516f069df18b500', 'admin'),
(2022000002, 'dokter', 'cab2d8232139ee4f469a920732578f71', 'dokter'),
(2022000003, 'kepalaklinik', '99a1c84ffd918df362d77b3e485cd6d5', 'owner');

-- --------------------------------------------------------

--
-- Table structure for table `booking_registrasi`
--

CREATE TABLE `booking_registrasi` (
  `kd_booking` bigint(20) NOT NULL,
  `no_rkm_medis` bigint(20) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `nama_poli` varchar(255) NOT NULL,
  `tgl_booking` date NOT NULL DEFAULT current_timestamp(),
  `waktu_booking` varchar(255) NOT NULL,
  `tgl_periksa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_registrasi`
--

INSERT INTO `booking_registrasi` (`kd_booking`, `no_rkm_medis`, `nik`, `nama_pasien`, `nama_poli`, `tgl_booking`, `waktu_booking`, `tgl_periksa`) VALUES
(20220001, 220606, 2147483647, 'Andri', 'Poli Obgyn', '2022-06-11', '2022-06-11 17:44:36', '2022-06-11 16:06:57'),
(202200006, 220608, 1234567890, 'Eva Zunarningsih', 'Poli Anak', '2022-06-11', '07:50:31 pm', ''),
(202200007, 220608, 1234567890, 'Eva Zunarningsih', 'Poli Anak', '2022-06-12', '07:51:23 pm', ''),
(202200008, 220608, 1234567890, 'Eva Zunarningsih', 'Poli Obgyn', '2022-06-11', '07:51:36 pm', ''),
(202200009, 220608, 1234567890, 'Eva Zunarningsih', 'Poli Obgyn', '2022-06-13', '07:52:01 pm', ''),
(202200010, 220607, 2147483646, 'Fahrul Aji', 'Poli Anak', '2022-06-12', 'Saturday, 11-06-2022  19:54:05 pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `kd_dokter` int(11) NOT NULL,
  `nm_dokter` varchar(255) NOT NULL,
  `hari_kerja` varchar(255) NOT NULL,
  `jam_mulai` varchar(255) NOT NULL,
  `jam_selesai` varchar(255) NOT NULL,
  `poli` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`kd_dokter`, `nm_dokter`, `hari_kerja`, `jam_mulai`, `jam_selesai`, `poli`, `no_hp`) VALUES
(1, 'Fadli Azka, SpSS', 'Senin', '18:00', '19:00', 'Poli Anak', '0821121212');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `no_rkm_medis` bigint(20) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `nm_penjab` varchar(255) NOT NULL,
  `nik` bigint(11) NOT NULL,
  `no_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`no_rkm_medis`, `nama_pasien`, `jk`, `alamat`, `tgl_lahir`, `nm_penjab`, `nik`, `no_hp`) VALUES
(220605, 'Estiyuni Wulandari', 'Perempuan', 'Bitung', '30/06/1999', 'Andri hidayat', 123123123, '082112121212'),
(220606, 'Andri', 'Laki-Laki', 'London', '2022-06-25', 'fervian loir', 2147483647, '082112897925'),
(220607, 'Fahrul Aji', 'Laki-Laki', 'Cikupa Emas', '2022-06-27', 'Aristoteles', 2147483646, '0821111111'),
(220608, 'Eva Zunarningsih', 'Perempuan', 'Perumahan Elite Citra Raya', '1890-06-23', 'Suaminya', 1234567890, '0821123123'),
(220609, 'Aris H', 'Laki-Laki', 'Cikarang', '1995-06-07', 'erni dewi', 9812391, '983217981'),
(220611, 'jokowi', 'Laki-Laki', 'jakarta gunung merapi', '1985-01-05', 'anwar', 2147483647, '08081365191'),
(220612, 'Sumarni', 'Perempuan', 'Bitung Kadung Jaya', '1111-11-30', 'Jokowi', 1281919, '892191');

-- --------------------------------------------------------

--
-- Table structure for table `tb_poli`
--

CREATE TABLE `tb_poli` (
  `kd_poli` int(11) NOT NULL,
  `nm_poli` varchar(255) NOT NULL,
  `jns-pemeriksaan` varchar(255) NOT NULL,
  `kd_dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_poli`
--

INSERT INTO `tb_poli` (`kd_poli`, `nm_poli`, `jns-pemeriksaan`, `kd_dokter`) VALUES
(202200001, 'Poli Anak', 'Imunisasi', 1),
(202200002, 'Poli Obgyn', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekam_medis`
--

CREATE TABLE `tb_rekam_medis` (
  `kd_rekam_medis` bigint(20) NOT NULL,
  `no_rkm_medis` bigint(11) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `resepobat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rekam_medis`
--

INSERT INTO `tb_rekam_medis` (`kd_rekam_medis`, `no_rkm_medis`, `nik`, `nama_pasien`, `umur`, `keluhan`, `resepobat`) VALUES
(1, 220606, 2147483647, 'Andri', '190 Tahun', 'Encok', 'Panadol'),
(2, 220605, 123123123, 'Estiyuni Wulandari', '100 Tahun', 'Sakit', 'Bodreg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admn_user`
--
ALTER TABLE `admn_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_registrasi`
--
ALTER TABLE `booking_registrasi`
  ADD PRIMARY KEY (`kd_booking`),
  ADD KEY `nama_pasien` (`nama_pasien`),
  ADD KEY `no_rkm_medis` (`no_rkm_medis`);

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`kd_dokter`),
  ADD UNIQUE KEY `poli` (`poli`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`no_rkm_medis`),
  ADD UNIQUE KEY `nama_pasien` (`nama_pasien`);

--
-- Indexes for table `tb_poli`
--
ALTER TABLE `tb_poli`
  ADD PRIMARY KEY (`kd_poli`),
  ADD UNIQUE KEY `nm_poli` (`nm_poli`);

--
-- Indexes for table `tb_rekam_medis`
--
ALTER TABLE `tb_rekam_medis`
  ADD PRIMARY KEY (`kd_rekam_medis`),
  ADD KEY `no_rkm_medis` (`no_rkm_medis`),
  ADD KEY `nama_pasien` (`nama_pasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admn_user`
--
ALTER TABLE `admn_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2022000004;

--
-- AUTO_INCREMENT for table `booking_registrasi`
--
ALTER TABLE `booking_registrasi`
  MODIFY `kd_booking` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202200011;

--
-- AUTO_INCREMENT for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `kd_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `no_rkm_medis` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220613;

--
-- AUTO_INCREMENT for table `tb_poli`
--
ALTER TABLE `tb_poli`
  MODIFY `kd_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202200003;

--
-- AUTO_INCREMENT for table `tb_rekam_medis`
--
ALTER TABLE `tb_rekam_medis`
  MODIFY `kd_rekam_medis` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
