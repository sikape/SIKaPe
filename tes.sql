-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2019 at 05:40 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_kp`
--

CREATE TABLE `daftar_kp` (
  `id_pendaftarankp` int(10) NOT NULL,
  `nim` char(8) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `alamat_instansi` varchar(100) NOT NULL,
  `telp_instansi` varchar(15) NOT NULL,
  `div_dept` varchar(40) DEFAULT NULL,
  `bidang` set('-Pilih-','Software Engineer','Game Developer','System Analyst dan System Integrator','Konsultan IT','Database Engineer / Database Administrator','Web Engineer / Web Administrator','Programmer','Intelligent System Developer','Other') NOT NULL,
  `posisi` set('-Pilih-','Front End Developer','Back End Developer','Data Analyst','Data Scientist','Quality Assurance','UI/UX Designer','Other') NOT NULL,
  `transkrip` varchar(30) NOT NULL,
  `waktu_mulai` date NOT NULL,
  `waktu_selesai` date NOT NULL,
  `dosen_pembimbing` varchar(40) DEFAULT NULL,
  `balasan_instansi` varchar(6) DEFAULT NULL,
  `surat_balasan` varchar(30) DEFAULT NULL,
  `st_validasi` varchar(10) NOT NULL,
  `st_pendaftaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_kp`
--

INSERT INTO `daftar_kp` (`id_pendaftarankp`, `nim`, `nama_instansi`, `alamat_instansi`, `telp_instansi`, `div_dept`, `bidang`, `posisi`, `transkrip`, `waktu_mulai`, `waktu_selesai`, `dosen_pembimbing`, `balasan_instansi`, `surat_balasan`, `st_validasi`, `st_pendaftaran`) VALUES
(21, '14115019', 'pt jaya bakery', 'jalan asia afrika , bandung', '072134567234', 'Teknologi informasi dan komunkasi', 'Software Engineer', 'Front End Developer', '141161216.pdf', '2019-05-03', '2019-05-03', 'Imam Ekowicaksono, S.Si., M.Si', NULL, NULL, 'belum', 'proses'),
(22, '14115029', 'Tokopedia', 'Jalan RA.Kartini n0 134 Jakarta', '072143567289', 'Mobile apps', 'Software Engineer', 'Back End Developer', 'transkrip_ican.pdf', '2019-05-15', '2019-05-15', 'Amirul Iqbal, S.Kom., M.Eng', NULL, NULL, 'sudah', 'proses'),
(23, '14115021', 'PT. Bukalapak Nusantara Informatika', 'Jalan Diponegoro No123 Jakarta Selatan', '0721435627182', 'Teknologi Informasi dan Komunikasi', 'Konsultan IT', 'Back End Developer', 'transkrip1.pdf', '2019-05-01', '2019-05-01', 'Imam Ekowicaksono, S.Si., M.Si', 'true', 'Surat_Balasan1.pdf', 'sudah', 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_seminar`
--

CREATE TABLE `daftar_seminar` (
  `id_seminar` int(5) NOT NULL,
  `id_daftar_kp` int(5) NOT NULL,
  `laporan` varchar(50) NOT NULL,
  `logbook` varchar(50) NOT NULL,
  `judul_seminar` varchar(100) NOT NULL,
  `tanggal_seminar` date NOT NULL,
  `jam` varchar(5) NOT NULL,
  `ruang` varchar(6) NOT NULL,
  `status_validasi` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `nama_dosen` varchar(50) NOT NULL,
  `id` int(12) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `username` varchar(35) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `status` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`nama_dosen`, `id`, `jenis_kelamin`, `username`, `jabatan`, `status`, `alamat`, `foto`) VALUES
('Meli', 18099919, 'L', 'meli@if.itera.ac.id', 'Dosen Informatika', 'kordinator', 'Bandar Lampung, Lampung.', 'meli.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `id` char(8) NOT NULL,
  `prodi` varchar(2) NOT NULL,
  `username` varchar(35) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`id`, `prodi`, `username`, `nama`, `jenis_kelamin`, `telp`, `alamat`, `foto`) VALUES
('14115019', 'IF', 'kurnia.14116001@student.itera.ac.id', 'kurnia', 'L', '082278301833', 'Kos FKPM', 'kurniapp.jpg'),
('14115021', 'IF', 'Ichsan.14116002@student.itera.ac.id', 'Ichsan', 'L', '082123339887', 'Kos. Pak Aji Squad', 'PP.jpg'),
('14115029', 'IF', 'tobi.1415029@student.itera.ac.id', 'Tobi Santoso', 'L', '081247594248', 'FKPM', 'a.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `id` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `username` varchar(35) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`id`, `nama`, `jenis_kelamin`, `username`, `jabatan`, `alamat`, `foto`) VALUES
(98111012, 'Arum', 'L', 'arum@staff.itera.ac.id', 'Staff Jurusan', 'Kalianda, Lampung Selatan.', 'arum2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(12) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(10) NOT NULL,
  `type` varchar(5) NOT NULL,
  `active` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `type`, `active`) VALUES
(14115019, 'kurnia.14116001@student.itera.ac.id', 'adiadi', 'mhs', '1'),
(14115021, 'Ichsan.14116002@student.itera.ac.id', 'icanican', 'mhs', '1'),
(14115029, 'tobi.1415029@student.itera.ac.id', 'pw', 'mhs', '1'),
(18099919, 'meli@if.itera.ac.id', '123456', 'dosen', '1'),
(98111012, 'arum@staff.itera.ac.id', '12345678', 'staff', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_kp`
--
ALTER TABLE `daftar_kp`
  ADD PRIMARY KEY (`id_pendaftarankp`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `daftar_seminar`
--
ALTER TABLE `daftar_seminar`
  ADD PRIMARY KEY (`id_seminar`),
  ADD KEY `id_daftar_kp` (`id_daftar_kp`);

--
-- Indexes for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_kp`
--
ALTER TABLE `daftar_kp`
  MODIFY `id_pendaftarankp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `daftar_seminar`
--
ALTER TABLE `daftar_seminar`
  MODIFY `id_seminar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_kp`
--
ALTER TABLE `daftar_kp`
  ADD CONSTRAINT `daftar_kp_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tbl_mhs` (`id`);

--
-- Constraints for table `daftar_seminar`
--
ALTER TABLE `daftar_seminar`
  ADD CONSTRAINT `daftar_seminar_ibfk_1` FOREIGN KEY (`id_daftar_kp`) REFERENCES `daftar_kp` (`id_pendaftarankp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
