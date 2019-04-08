-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 28, 2019 at 11:33 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

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
  `nama_lengkap` varchar(100) NOT NULL,
  `nim` char(8) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `alamat_instansi` varchar(100) NOT NULL,
  `telp_instansi` varchar(15) NOT NULL,
  `bidang` set('-Pilih-','Software Engineer','Game Developer','System Analyst dan System Integrator','Konsultan IT','Database Engineer / Database Administrator','Web Engineer / Web Administrator','Programmer','Intelligent System Developer','Other') NOT NULL,
  `posisi` set('-Pilih-','Front End Developer','Back End Developer','Data Analyst','Data Scientist','Quality Assurance','UI/UX Designer','Other') NOT NULL,
  `transkrip` mediumblob NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_kp`
--
ALTER TABLE `daftar_kp`
  ADD PRIMARY KEY (`id_pendaftarankp`);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daftarMhsKP`
--

CREATE TABLE `tbl_daftarMhsKP` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(45) NOT NULL,
  `handphone` bigint(14) NOT NULL,
  `nim` int(14) NOT NULL,
  `prodi` varchar(2) NOT NULL,
  `berkas_transkip` varchar(20) NOT NULL,
  `validasi_pendaftaran` enum('sudah','belum') NOT NULL,
  `validasi_dosen` enum('sudah','belum') NOT NULL,
  `validasi_transkrip` enum('sudah','belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_daftarMhsKP`
--

INSERT INTO `tbl_daftarMhsKP` (`nama`, `email`, `handphone`, `nim`, `prodi`, `berkas_transkip`, `validasi_pendaftaran`, `validasi_dosen`, `validasi_transkrip`) VALUES
('s', 'a', 829812, 615261, 'IF', '', 'sudah', 'sudah', 'sudah'),
('Tobii', 'tobi@gmail.com', 8232313232, 14115019, 'IF', '', 'sudah', 'sudah', 'sudah'),
('Tobi Santoso', 'tobi.14115029@student.itera.ac.id', 81245454421, 14115029, 'IF', '14115029.jpg', 'sudah', 'sudah', 'sudah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `nama` varchar(50) NOT NULL,
  `id` int(12) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `username` varchar(35) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`nama`, `id`, `jenis_kelamin`, `username`, `jabatan`, `alamat`, `foto`) VALUES
('Meli', 18099919, 'L', 'meli@if.itera.ac.id', 'Dosen Informatika', 'Bandar Lampung, Lampung.', '18099919.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `nim` int(12) NOT NULL,
  `prodi` varchar(2) NOT NULL,
  `username` varchar(35) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(13) NOT NULL,
  `id_dosenpembimbing` int(12) NOT NULL,
  `kp` enum('sudah','belum') NOT NULL,
  `kkn` enum('sudah','belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`nim`, `prodi`, `username`, `nama`, `jenis_kelamin`, `telp`, `alamat`, `foto`, `id_dosenpembimbing`, `kp`, `kkn`) VALUES
(14115019, 'IF', 'kurnia.14116001@student.itera.ac.id', 'kurnia', 'L', '082278301833', 'Kos FKPM', 'imgdosen.jpg', 18099919, 'sudah', 'sudah'),
(14115021, 'IF', 'Ichsan.14116002@student.itera.ac.id', 'Ichsan', 'L', '082123339887', 'Kos. Pak Aji Squad', 'imgdosen.jpg', 18099919, 'sudah', 'belum'),
(14115029, 'IF', 'tobi.1415029@student.itera.ac.id', 'Tobi Santoso', 'L', '081247594248', 'FKPM', 'a.png', 18099919, 'sudah', '');

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
(98111012, 'Arum', 'L', 'arum@jurusan.itera.ac.id', 'Staff Jurusan', 'Kalianda, Lampung Selatan.', '98111012.jpeg');

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
-- Indexes for table `tbl_daftarMhsKP`
--
ALTER TABLE `tbl_daftarMhsKP`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`nim`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
