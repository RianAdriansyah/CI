-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 23, 2019 at 04:14 AM
-- Server version: 5.7.19
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelayanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` varchar(2) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `bergabung` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`, `nama`, `level`, `telp`, `email`, `img`, `bergabung`) VALUES
(1, 'superadmin', 'helloworld', 'Super Admin', '0', '6282128579730', 'mailadmin1@uinsgd.ac.id', 'default0.png', '20.08.2019 14:00:00'),
(2, 'siapuinsgd', 'siliwang!', 'Pelayanan UINSGD', '1', '6282128579730', 'mailadmin1@uinsgd.ac.id', 'default.png', '22.09.2019 09:35:49'),
(6, 'robot', 'robot', 'Robot', '3', '0000001', 'robot@r.id', 'default.png', '24.09.2019 07:44:37'),
(7, 'sulaiman', 'sulaiman', 'Sulaiman', '3', '085794309431', 'sulaiman@gmail.com', 'default.png', '18.10.2019 14:49:50');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_email_dosen`
--

CREATE TABLE `daftar_email_dosen` (
  `id` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `divisi` varchar(128) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `status` varchar(128) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `m` varchar(2) NOT NULL,
  `y` varchar(4) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_email_dosen`
--

INSERT INTO `daftar_email_dosen` (`id`, `nama`, `nip`, `fakultas`, `jurusan`, `divisi`, `telp`, `email1`, `email2`, `status`, `tanggal`, `m`, `y`, `jam`, `edit`) VALUES
(1, 'asssssss', '1091877872', 'Adab & Humaniora', 'Bahasa dan Sastra Arab', '', '628123456789', 'gery@uinsgd.ac.id', 'a@g.com', 'Sudah Dikerjakan', '23.09.2019', '09', '2019', '15:15:30', '07.10.2019 10:52:42 oleh Super Admin'),
(2, 'Rian Adriansyah', '2342', 'Adab & Humaniora', 'Bahasa dan Sastra Arab', '', '6285659603699', 'nama@uinsgd.ac.id', 'apanama@uinsgd.ac.id', 'Belum Dikerjakan', '04.10.2019', '10', '2019', '13:37:06', '04.10.2019 14:19:33 oleh Super Admin'),
(3, 'Rian Adriansyah', '776', 'Adab & Humaniora', 'Bahasa dan Sastra Arab', '', '6281910186646', 'rian@uinsgd.ac.id', 'apanama@uinsgd.ac.id', 'Sudah Dikerjakan', '07.10.2019', '10', '2019', '10:43:55', '07.10.2019 11:01:35 oleh Super Admin'),
(4, 'Rian Adriansyah', '112233333', 'Adab & Humaniora', 'Bahasa dan Sastra Arab', '', '6281910186646', 'nama@uinsgd.ac.id', 'apanama@uinsgd.ac.id', 'Sedang Dikerjakan', '21.10.2019', '10', '2019', '10:45:46', '21.10.2019 11:31:01 oleh Super Admin'),
(5, 'Rian Adriansyah', '123432', 'Sains & Teknologi', 'Pertanian/Agroteknologi', 'Pelayanan', '6281910186646', 'nama@uinsgd.ac.id', 'apanama@uinsgd.ac.id', 'Belum Dikerjakan', '23.10.2019', '10', '2019', '10:18:42', 'Belum Di Edit');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_email_lembaga`
--

CREATE TABLE `daftar_email_lembaga` (
  `id` int(8) NOT NULL,
  `nama_lembaga` varchar(100) NOT NULL,
  `nama_penanggung` varchar(100) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `divisi` varchar(128) NOT NULL,
  `unit` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `m` varchar(2) NOT NULL,
  `y` varchar(4) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_email_lembaga`
--

INSERT INTO `daftar_email_lembaga` (`id`, `nama_lembaga`, `nama_penanggung`, `telp`, `email`, `divisi`, `unit`, `status`, `tanggal`, `m`, `y`, `jam`, `edit`) VALUES
(1, 'FISIP UIN Sunan Gunung Djati', 'Nandang Yatna Jatnika', '6281282249706', 'perpustakaanfsp@uinsgd.ac.id', '', '', 'Sudah Dikerjakan', '12.09.2019', '', '', '08:21:15', '20.09.2019 14:42:22 oleh Super Admin'),
(2, 'Jurusan Kimia FST', 'Eko Prabowo H. ,M.P.Kim', '628562196819', 'chemcon@uinsgd.ac.id', '', 'LPM', 'Sudah Dikerjakan', '12.09.2019', '', '', '08:23:29', '21.10.2019 09:27:44 oleh Super Admin'),
(3, 'Prodi Jurnalistik', 'Acep Muslim', '6281223398409', 'jurnalistik.ilkom@uinsgd.ac.id', '', '', 'Sudah Dikerjakan', '12.09.2019', '', '', '08:31:56', '20.09.2019 14:41:51 oleh Super Admin'),
(4, 'fisip', 'gery', '62812356789', 'fisip@uinsgd.ac.id', '', '', 'Sudah Dikerjakan', '20.09.2019', '', '', '07:45:26', '07.10.2019 11:09:56 oleh Super Admin'),
(6, 'SMK', 'Admin', '6281910186646', 'arifridhwan68@gmail.com', '', '', 'Belum Dikerjakan', '07.10.2019', '10', '2019', '11:16:14', 'Belum Di Edit'),
(7, 'SMA', 'Member', '6281910186646', 'member@uinsgd.ac.id', '', '', 'Belum Dikerjakan', '07.10.2019', '10', '2019', '11:18:33', '07.10.2019 11:18:56 oleh Super Admin'),
(8, 'SD', 'Dewek', '6281910186646', 'hahaha@official.co.id', '', '', 'Belum Dikerjakan', '09.10.2019', '10', '2019', '15:21:10', 'Belum Di Edit'),
(9, 'SMA', 'Admin', '6281910186646', 'nama@uinsgd.ac.id', '', 'Pusat Karir', 'Belum Dikerjakan', '21.10.2019', '10', '2019', '09:10:55', '21.10.2019 09:20:00 oleh Super Admin'),
(10, 'SMA', 'Member', '6281910186646', 'nama@uinsgd.ac.id', '', 'Perpustakaan', 'Sedang Dikerjakan', '21.10.2019', '10', '2019', '09:26:24', '21.10.2019 11:31:27 oleh Super Admin'),
(11, 'SMA', 'Dewek', '6281910186646', 'nama@uinsgd.ac.id', '', 'Perpustakaan', 'Sudah Dikerjakan', '21.10.2019', '10', '2019', '09:45:28', '21.10.2019 11:31:18 oleh Super Admin'),
(12, 'SMA', 'Member', '6281910186646', 'rianjh2@gmail.com', '', 'Pusat Bahasa', 'Belum Dikerjakan', '21.10.2019', '10', '2019', '13:50:29', 'Belum Di Edit'),
(13, 'SMA', 'Admin', '6281910186646', 'admin@gmail.com', 'Pelayanan', 'Pusat Bahasa', 'Belum Dikerjakan', '23.10.2019', '10', '2019', '10:28:17', 'Belum Di Edit');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_email_mahasiswa`
--

CREATE TABLE `daftar_email_mahasiswa` (
  `id` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `divisi` varchar(128) DEFAULT NULL,
  `telp` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(128) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `m` varchar(2) NOT NULL,
  `y` varchar(4) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_email_mahasiswa`
--

INSERT INTO `daftar_email_mahasiswa` (`id`, `nama`, `nim`, `fakultas`, `jurusan`, `divisi`, `telp`, `email`, `status`, `tanggal`, `m`, `y`, `jam`, `edit`) VALUES
(2, 'Pirda Aulia', '1172090092', 'Mail Managemen', '', NULL, '628980490362', 'pirdaaulia06@gmail.com', 'Sudah Dikerjakan', '12.09.2019', '02', '2019', '08:12:59', '22.09.2019 08:30:40 oleh Super Admin'),
(3, 'Maulana Sidiq Al-Alawi', '1172090051', 'Staf Puskom', '', NULL, '6283892802577', 'alawisidiq@gmail.com', 'Sudah Dikerjakan', '12.09.2019', '02', '2019', '08:13:12', '20.09.2019 15:04:13 oleh Super Admin'),
(4, 'Pelayanan UINSGD 01', '1', '1', '', NULL, '0812356789', 'fisip@uinsgd.ac.id', 'Belum Dikerjakan', '22.09.2019', '01', '2019', '17:46:45', 'Belum Di Edit'),
(5, 'bfgmobfg', '2314', '2', '', NULL, '2343', 'gary98k@gmail.com', 'Belum Dikerjakan', '22.09.2019', '01', '2019', '17:59:13', 'Belum Di Edit'),
(6, 'Pelayanan UINSGD 01', '23189', 'Staf Administrasi', 'apa', NULL, '08123456789', 'gary98k@gmail.com', 'Sudah Dikerjakan', '22.09.2019', '12', '2020', '20:17:29', '22.09.2019 20:52:01 oleh Super Admin'),
(7, 'fgd', '23189', 'Adab & Humaniora', 'ada', NULL, '0813456789', 'mailadmin1@uinsgd.ac.id', 'Belum Dikerjakan', '22.09.2019', '', '', '20:56:16', 'Belum Di Edit'),
(8, 'rifqi', '2314', 'Adab & Humaniora', 'ada', NULL, '08123456789', 'hgergashi@yahoo.com', 'Sudah Dikerjakan', '23.09.2019', '', '', '11:30:48', '23.09.2019 11:34:08 oleh Super Admin'),
(9, 'rifqi', '2314', 'Adab & Humaniora', 'Administrasi Negara', NULL, '0813456789', 'mailadmin1@uinsgd.ac.id', 'Sudah Dikerjakan', '23.09.2019', '09', '2019', '12:50:00', '27.09.2019 13:39:57 oleh Super Admin'),
(10, 'weqew', '231', 'Ushuluddin', 'Fisika', NULL, '213123', 'hgergashi@yahoo.com', 'Belum Dikerjakan', '23.09.2019', '09', '2019', '12:50:19', '23.09.2019 13:50:26 oleh Super Admin'),
(11, 'aa', '48111555555', 'Psikologi', 'Psikologi', NULL, '05552455245', 'a@gmail.com', 'Belum Dikerjakan', '27.09.2019', '09', '2019', '13:44:20', 'Belum Di Edit'),
(12, 'aaa', '1516654122', 'Mail Managemen', 'Mail Managemen', NULL, '0854655554', 'a@gmail.com', 'Belum Dikerjakan', '27.09.2019', '09', '2019', '13:45:08', 'Belum Di Edit'),
(13, 'admiin', '151665412', 'Psikologi', 'Psikologi', NULL, '08546555542', 'a@gmail.com', 'Belum Dikerjakan', '27.09.2019', '09', '2019', '13:46:44', 'Belum Di Edit'),
(14, 'aaas', '1516654', 'Syariah & Hukum', 'Ilmu Hukum ', NULL, '0233386868', 'afd@gmail.com', 'Belum Dikerjakan', '27.09.2019', '09', '2019', '13:47:03', 'Belum Di Edit'),
(15, 'admiinss', '481115555', 'Ilmu Sosial & Ilmu Politik', 'Manajemen', NULL, '023338686821', 'ad@gmail.com', 'Belum Dikerjakan', '27.09.2019', '09', '2019', '13:47:25', 'Belum Di Edit'),
(17, 'admiinw', '48111555555', 'Psikologi', 'Psikologi', NULL, '05552455245', 'ddaa@gmail.com', 'Belum Dikerjakan', '27.09.2019', '09', '2019', '13:47:59', 'Belum Di Edit'),
(18, 'Muramasa Senju', '12345654321', 'Adab & Humaniora', 'Administrasi Negara', NULL, '6281910186646', 'rianjh2@gmail.com', 'Sudah Dikerjakan', '27.09.2019', '09', '2019', '15:54:31', '01.10.2019 08:07:14 oleh Super Admin'),
(19, 'Rian Adriansyah', '12343315427', 'Psikologi', 'Psikologi', NULL, '6281910186646', 'rianjh2@gmail.com', 'Belum Dikerjakan', '01.10.2019', '10', '2019', '14:58:36', 'Belum Di Edit'),
(21, 'RianAd', '326757', 'Syariah & Hukum', 'Ekonomi Syariah', NULL, '6281910186646', 'zaynmalik@gmail.com', 'Belum Dikerjakan', '01.10.2019', '10', '2019', '15:13:36', 'Belum Di Edit'),
(22, 'Naruto', '11269', 'Ilmu Sosial & Ilmu Politik', 'Administrasi Negara', NULL, '6285659603699', 'member@gmail.com', 'Belum Dikerjakan', '01.10.2019', '10', '2019', '15:15:49', 'Belum Di Edit'),
(24, 'Risma Noor Amalia', '665339', 'Adab & Humaniora', 'Bahasa dan Sastra Arab', NULL, '6281910186646', 'zaynmalik@gmail.com', 'Belum Dikerjakan', '02.10.2019', '10', '2019', '10:42:38', '02.10.2019 11:02:15 oleh Super Admin'),
(25, 'Rian Adriansyah', '3232', 'Sains & Teknologi', 'Fisika', NULL, '6281910186646', 'zaynmalik@gmail.com', 'Belum Dikerjakan', '02.10.2019', '10', '2019', '11:09:15', 'Belum Di Edit'),
(26, 'RianAd', '665328', 'Dakwah & Komunikasi', 'Ilmu Komunikasi Prodi Hubungan Masyarakat', NULL, '6281910186646', 'zaynmalik@gmail.com', 'Belum Dikerjakan', '02.10.2019', '10', '2019', '11:21:07', 'Belum Di Edit'),
(27, 'Rian Adriansyah', '69', 'Psikologi', 'Psikologi', NULL, '6281910186646', 'rianjh2@gmail.com', 'Belum Dikerjakan', '04.10.2019', '10', '2019', '10:04:29', 'Belum Di Edit'),
(29, 'RianAd', '32329', 'Tidak ada', 'Tidak ada', NULL, '6281910186646', 'rianjh2@gmail.com', 'Belum Dikerjakan', '04.10.2019', '10', '2019', '10:13:03', 'Belum Di Edit'),
(31, 'RianAd', '11221', 'Tarbiyah & Keguruan', 'Pendidikan Bahasa Inggris ', NULL, '6281910186646', 'member@gmail.com', 'Belum Dikerjakan', '07.10.2019', '10', '2019', '09:00:51', 'Belum Di Edit'),
(34, 'Naruto', '887', 'Adab & Humaniora', 'Bahasa dan Sastra Arab', NULL, '6281910186645', 'nialljh2@gmail.com', 'Belum Dikerjakan', '07.10.2019', '10', '2019', '09:33:28', '07.10.2019 11:32:44 oleh Super Admin'),
(35, 'Rifat', '11234', 'Adab & Humaniora', 'Bahasa dan Sastra Arab', NULL, '6281910186646', 'zaynmalik@gmail.com', 'Sedang Dikerjakan', '18.10.2019', '10', '2019', '14:23:09', '21.10.2019 11:30:47 oleh Super Admin'),
(36, 'Sulaiman', '333', 'Adab & Humaniora', 'Bahasa dan Sastra Arab', NULL, '6285794309431', 'sulaiman@gmail.com', 'Sedang Dikerjakan', '18.10.2019', '10', '2019', '14:38:30', '21.10.2019 11:29:05 oleh Super Admin'),
(37, 'Rian Adriansyah', '889665332', 'Adab & Humaniora', 'Bahasa dan Sastra Arab', NULL, '6281910186646', 'rianjh2@gmail.com', 'Sudah Dikerjakan', '18.10.2019', '10', '2019', '14:57:03', '21.10.2019 11:29:18 oleh Super Admin'),
(38, 'Risma Noor Amalia', '111667', 'Tarbiyah & Keguruan', 'Manajemen Pendidikan Islam', NULL, '6281910186646', 'member@gmail.com', 'Sedang Dikerjakan', '21.10.2019', '10', '2019', '13:42:47', '21.10.2019 13:44:30 oleh Super Admin'),
(39, 'Rian Adriansyah', '874456', 'Ilmu Sosial & Ilmu Politik', 'Manajemen', NULL, '6281910186646', 'zaynmalik@gmail.com', 'Belum Dikerjakan', '22.10.2019', '10', '2019', '15:42:46', 'Belum Di Edit'),
(40, 'Zayn Malik', '225890', 'Syariah & Hukum', 'Perbandingan Madzhab dan Hukum', NULL, '6281910186646', 'zaynmalik@gmail.com', 'Belum Dikerjakan', '22.10.2019', '10', '2019', '15:48:05', 'Belum Di Edit'),
(64, 'Zayn Malik', '111', 'Dakwah & Komunikasi', 'Ilmu Komunikasi Prodi Hubungan Masyarakat', 'Pelayanan', '6281910186646', 'zaynmalik@gmail.com', 'Belum Dikerjakan', '23.10.2019', '10', '2019', '09:26:16', 'Belum Di Edit'),
(65, 'Muramasa Senju', '111', 'Adab & Humaniora', 'Sejarah dan Peradaban Islam', 'Pelayanan', '6281910186646', 'member@gmail.com', 'Belum Dikerjakan', '23.10.2019', '10', '2019', '09:29:33', 'Belum Di Edit'),
(66, 'Naruto', '111', 'Ilmu Sosial & Ilmu Politik', 'Administrasi Negara', 'Pelayanan', '6281910186646', 'member@gmail.com', 'Belum Dikerjakan', '23.10.2019', '10', '2019', '09:31:31', 'Belum Di Edit'),
(67, 'Naruto', '111', 'Dakwah & Komunikasi', 'Bimbingan dan Penyuluhan Islam', 'Pelayanan', '6281910186646', 'zaynmalik@gmail.com', 'Belum Dikerjakan', '23.10.2019', '10', '2019', '09:51:57', 'Belum Di Edit'),
(68, 'Naruto', '3', 'Adab & Humaniora', 'Bahasa dan Sastra Inggris', 'Pelayanan', '6281910186646', 'member@gmail.com', 'Belum Dikerjakan', '23.10.2019', '10', '2019', '09:52:58', 'Belum Di Edit');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id` int(11) NOT NULL,
  `namadivisi` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id`, `namadivisi`, `email`) VALUES
(1, 'Pelayanan', 'rianjh2@gmail.com'),
(2, 'Infrastruktur & Jaringan', 'rianjh2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` int(3) NOT NULL,
  `fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `fakultas`) VALUES
(1, 'Adab & Humaniora'),
(2, 'Dakwah & Komunikasi'),
(3, 'Tarbiyah & Keguruan'),
(4, 'Ilmu Sosial & Ilmu Politik'),
(5, 'Psikologi'),
(6, 'Sains & Teknologi'),
(7, 'Syariah & Hukum'),
(8, 'Ushuluddin');

-- --------------------------------------------------------

--
-- Table structure for table `ganti_server`
--

CREATE TABLE `ganti_server` (
  `id` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ni` varchar(18) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `divisi` varchar(128) NOT NULL,
  `permohonan` text NOT NULL,
  `solusi` text NOT NULL,
  `status` varchar(128) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `m` varchar(2) NOT NULL,
  `y` varchar(4) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ganti_server`
--

INSERT INTO `ganti_server` (`id`, `nama`, `ni`, `telp`, `email`, `divisi`, `permohonan`, `solusi`, `status`, `tanggal`, `m`, `y`, `jam`, `edit`) VALUES
(1, 'rifqi', '213312', '8123456789', 'member@gmail.com', '', 'contoh', 'Belum Ada Solusi', 'Belum Dikerjakan', '20.09.2019', '', '', '07:46:51', '08.10.2019 07:59:06 oleh Super Admin'),
(2, 'Rian Adriansyah', '998546', '6281910186646', 'rianjh2@gmail.com', '', 'Reset Domain', 'Belum Ada Solusi', 'Sudah Dikerjakan', '07.10.2019', '10', '2019', '13:21:41', '07.10.2019 13:41:15 oleh Super Admin'),
(3, 'Muramasa Senju', '222357890', '6281910186646', 'member@gmail.com', '', 'DLL', 'Belum Ada Solusi', 'Sedang Dikerjakan', '15.10.2019', '10', '2019', '10:32:17', '21.10.2019 11:32:10 oleh Super Admin'),
(4, 'Naruto', '65764', '6281910186646', 'member@gmail.com', 'Infrastruktur & Jaringan', 'hehe', 'Belum Ada Solusi', 'Belum Dikerjakan', '23.10.2019', '10', '2019', '10:32:55', 'Belum Di Edit');

-- --------------------------------------------------------

--
-- Table structure for table `jaringan_baru`
--

CREATE TABLE `jaringan_baru` (
  `id` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ni` varchar(18) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `divisi` varchar(128) NOT NULL,
  `permohonan` text NOT NULL,
  `solusi` text NOT NULL,
  `status` varchar(128) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `m` varchar(2) NOT NULL,
  `y` varchar(4) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jaringan_baru`
--

INSERT INTO `jaringan_baru` (`id`, `nama`, `ni`, `telp`, `email`, `divisi`, `permohonan`, `solusi`, `status`, `tanggal`, `m`, `y`, `jam`, `edit`) VALUES
(1, 'rifqi', '213312', '08123456789', 'hgergashi@yahoo.com', '', 'Contoh', 'Belum Ada Solusi', 'Sudah Dikerjakan', '20.09.2019', '', '', '07:47:50', '20.09.2019 08:37:09 oleh Pelayanan UINSGD 01'),
(2, 'Rian Adriansyah', '1234', '6281910186646', 'zaynmalik@gmail.com', '', 'okok', 'Belum Ada Solusi', 'Sedang Dikerjakan', '07.10.2019', '10', '2019', '14:37:55', '21.10.2019 11:32:39 oleh Super Admin'),
(3, 'RianAd', '34567', '6281910186646', 'admin@gmail.com', 'Infrastruktur & Jaringan', 'd', 'Belum Ada Solusi', 'Belum Dikerjakan', '23.10.2019', '10', '2019', '10:33:48', 'Belum Di Edit');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(3) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `jfakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `jurusan`, `jfakultas`) VALUES
(1, 'Akidah Filsafat', 'Ushuluddin'),
(2, 'Perbandingan Agama', 'Ushuluddin'),
(3, 'Tafsir Hadits ', 'Ushuluddin'),
(4, 'Tasawuf dan Psikoterapi ', 'Ushuluddin'),
(5, 'Manajemen Pendidikan Islam', 'Tarbiyah & Keguruan'),
(6, 'Pendidikan Agama Islam ', 'Tarbiyah & Keguruan'),
(7, 'Pendidikan Bahasa Arab ', 'Tarbiyah & Keguruan'),
(8, 'Pendidikan Bahasa Inggris ', 'Tarbiyah & Keguruan'),
(9, 'Pendidikan Matematika ', 'Tarbiyah & Keguruan'),
(10, 'Peradilan Agama dan Hukum Keluarga Islam', 'Syariah & Hukum'),
(11, 'Pendidikan Biologi', 'Tarbiyah & Keguruan'),
(12, 'Pendidikan Fisika ', 'Tarbiyah & Keguruan'),
(13, 'Pendidikan Kimia', 'Tarbiyah & Keguruan'),
(14, 'Pendidikan Guru Madrasah Ibtidaiyah (PGMI)', 'Tarbiyah & Keguruan'),
(15, 'Hukum Bisnis Syariah dan Perbankan Syariah', 'Syariah & Hukum'),
(16, 'Hukum Ketatanegaraan dan Politik Islam', 'Syariah & Hukum'),
(17, 'Perbandingan Madzhab dan Hukum', 'Syariah & Hukum'),
(18, 'Ilmu Hukum ', 'Syariah & Hukum'),
(19, 'Hukum Pidana Islam ', 'Syariah & Hukum'),
(20, 'Manajemen Keuangan Syariah', 'Syariah & Hukum'),
(21, 'Ekonomi Syariah', 'Syariah & Hukum'),
(22, 'Akuntansi Syariah', 'Syariah & Hukum'),
(23, 'Bimbingan dan Penyuluhan Islam', 'Dakwah & Komunikasi'),
(24, 'Komunikasi dan Penyiaran Islam', 'Dakwah & Komunikasi'),
(25, 'Manajemen Dakwah', 'Dakwah & Komunikasi'),
(26, 'Pengembangan Masyarakat Islam', 'Dakwah & Komunikasi'),
(27, 'Ilmu Komunikasi Prodi Jurnalistik', 'Dakwah & Komunikasi'),
(28, 'Ilmu Komunikasi Prodi Hubungan Masyarakat', 'Dakwah & Komunikasi'),
(29, 'Sejarah dan Peradaban Islam', 'Adab & Humaniora'),
(30, 'Bahasa dan Sastra Arab', 'Adab & Humaniora'),
(31, 'Bahasa dan Sastra Inggris', 'Adab & Humaniora'),
(32, 'Terjemah Bahasa Inggris', 'Adab & Humaniora'),
(33, 'Psikologi', 'Psikologi'),
(34, 'Matematika', 'Sains & Teknologi'),
(35, 'Biologi', 'Sains & Teknologi'),
(36, 'Fisika', 'Sains & Teknologi'),
(37, 'Kimia', 'Sains & Teknologi'),
(38, 'Teknik Informatika', 'Sains & Teknologi'),
(39, 'Pertanian/Agroteknologi', 'Sains & Teknologi'),
(40, 'Teknik Elektro', 'Sains & Teknologi'),
(41, 'Sosiologi', 'Ilmu Sosial & Ilmu Politik'),
(42, 'Administrasi Negara', 'Ilmu Sosial & Ilmu Politik'),
(43, 'Manajemen', 'Ilmu Sosial & Ilmu Politik'),
(44, 'Tidak ada', 'Tidak ada'),
(45, 'Staf Lainnya', 'Staf Lainnya'),
(46, 'Staf Puskom', 'Staf Puskom'),
(47, 'Staf Administrasi', 'Staf Administrasi'),
(48, 'PTIPD', 'Pusat Teknologi Informasi & Pangkalan Data'),
(49, 'Mail Managemen', 'Mail Managemen');

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `id` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ni` varchar(18) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `unit` varchar(128) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `keluhan` text NOT NULL,
  `solusi` text NOT NULL,
  `status` varchar(128) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `m` varchar(2) NOT NULL,
  `y` varchar(4) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluhan`
--

INSERT INTO `keluhan` (`id`, `nama`, `ni`, `fakultas`, `jurusan`, `telp`, `email`, `unit`, `perihal`, `keluhan`, `solusi`, `status`, `tanggal`, `m`, `y`, `jam`, `edit`) VALUES
(1, 'rifqi', '213312', 'Adab & Humaniora', 'Administrasi Negara', '08123456789', 'hgergashi@yahoo.com', '', 'Beasiswa', 'COntoh', 'Belum Ada Solusi', 'Belum Dikerjakan', '20.09.2019', '', '', '07:47:20', '25.09.2019 09:03:47 oleh Super Admin'),
(2, 'weqew', '', 'Ushuluddin', '', '0813456789', 'mailadmin1@uinsgd.ac.id', '', 'Lain-lain', 'apa?123', 'Belum Ada Solusi', 'Belum Dikerjakan', '22.09.2019', '', '', '11:44:23', 'Belum Di Edit'),
(3, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(4, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(5, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(6, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(7, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(8, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(9, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(10, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(11, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(12, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(13, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(14, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(15, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(16, 'sam', '31', 'Adab & Humaniora', 'Administrasi Negara', '634', 'mailadmin1@uinsgd.ac.id', '', 'Hotspot', 'rtyry', 'rtryr', 'Sudah Dikerjakan', '', '', '', '', '24.09.2019 11:31:38 oleh C'),
(17, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(18, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(19, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(20, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(21, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(22, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(23, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(24, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(25, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(26, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(27, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(28, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(29, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(30, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(31, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(32, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(33, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(34, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(35, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(36, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(37, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(38, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(39, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(40, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(41, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(42, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(43, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(44, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(45, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(46, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(47, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(48, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(49, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(50, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(51, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(52, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(53, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(54, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(55, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(56, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(57, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(58, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', '', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(59, 'sam', '31', 'Adab & Humaniora', 'Bahasa dan Sastra Arab', '634', 'mailadmin1@uinsgd.ac.id', '', 'Beasiswa', 'rtyry', 'rtryr', 'Belum Dikerjakan', '', '', '', '', '21.10.2019 13:51:03 oleh Super Admin'),
(60, 'rifqi', '213312', 'Adab & Humaniora', 'Administrasi Negara', '08123456789', 'hgergashi@yahoo.com', '', 'ICT', 'hahahahha', 'Belum Ada Solusi', 'Sudah Dikerjakan', '24.09.2019', '09', '2019', '08:22:28', '24.09.2019 09:07:47 oleh Super Admin'),
(61, 'ggegegrege', '213312', 'Adab & Humaniora', 'Administrasi Negara', '08123456789', 'fisip@uinsgd.ac.id', '', 'Dosen PDDIKTI', 'aaaaaaaaaaa', 'Belum Ada Solusi', 'Sudah Dikerjakan', '24.09.2019', '09', '2019', '09:05:01', '24.09.2019 11:16:04 oleh ad'),
(62, 'Rian Adriansyah', '345678', 'Sains & Teknologi', 'Teknik Elektro', '6281910186646', 'zaynmalik@gmail.com', '', 'On Site Internet', 'blagohuddgo;jjkjhgjgd', 'Belum Ada Solusi', 'Belum Dikerjakan', '07.10.2019', '10', '2019', '13:53:32', 'Belum Di Edit'),
(63, 'RianAd', '24556656565', 'Sains & Teknologi', 'Matematika', '6281910186646', 'member@gmail.com', '', 'Hotspot', 'sfsdfjjdffjfdd', 'Belum Ada Solusi', 'Belum Dikerjakan', '07.10.2019', '10', '2019', '13:57:39', 'Belum Di Edit'),
(64, 'Sulaiman', '1178890', 'Adab & Humaniora', 'Bahasa dan Sastra Arab', '6285794309431', 'sulaiman@gmail.com', '', 'Infrastruktur & Jaringan', 'Wifi Rusak', 'Belum Ada Solusi', 'Sedang Dikerjakan', '18.10.2019', '10', '2019', '14:47:01', '21.10.2019 11:32:27 oleh Super Admin');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan_dc`
--

CREATE TABLE `kunjungan_dc` (
  `id` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ni` varchar(18) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `divisi` varchar(128) NOT NULL,
  `permohonan` text NOT NULL,
  `solusi` text NOT NULL,
  `status` varchar(128) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `m` varchar(2) NOT NULL,
  `y` varchar(4) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunjungan_dc`
--

INSERT INTO `kunjungan_dc` (`id`, `nama`, `ni`, `telp`, `email`, `divisi`, `permohonan`, `solusi`, `status`, `tanggal`, `m`, `y`, `jam`, `edit`) VALUES
(1, 'weqew', '213312', '213123', 'admin@gmail.com', '', '2313123123', 'Belum Ada Solusi', 'Sudah Dikerjakan', '17.09.2019', '', '', '11:16:41', '21.10.2019 11:15:27 oleh Super Admin'),
(2, 'rifqi', '213312', '8123456789', 'hgergashi@yahoo.com', '', 'contoh', 'Belum Ada Solusi', 'Sedang Dikerjakan', '20.09.2019', '', '', '07:47:07', '21.10.2019 11:07:16 oleh Super Admin'),
(3, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(4, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(5, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(6, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(7, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(8, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(9, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(10, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(11, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(12, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(13, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(14, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(15, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(16, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(17, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(18, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(19, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(20, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(21, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(22, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(23, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(24, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(25, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(26, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(27, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(28, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(29, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(30, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(31, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(32, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(33, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(34, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(35, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(36, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(37, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(38, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(39, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(40, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(41, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(42, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(43, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(44, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(45, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(46, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(47, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(48, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(49, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(50, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(51, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(52, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(53, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(54, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(55, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(56, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(57, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(58, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(59, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(60, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(61, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(63, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', '07.10.2019 13:40:09 oleh Super Admin'),
(64, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(65, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Sedang Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', '21.10.2019 11:14:33 oleh Super Admin'),
(66, 'gg', '12', '6281910186646', 'fefewfef@uinsgd.ac.id', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Sudah Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', '21.10.2019 11:06:47 oleh Super Admin'),
(67, 'Rian Adriansyah', '223', '6281910186646', 'zaynmalik@gmail.com', '', 'For Fun', 'Belum Ada Solusi', 'Sedang Dikerjakan', '07.10.2019', '10', '2019', '13:28:10', '21.10.2019 11:05:46 oleh Super Admin'),
(68, 'Naruto', '64534678', '6281910186646', 'admin@gmail.com', 'Infastruktur & Jaringan', 'hehehehe', 'Belum Ada Solusi', 'Belum Dikerjakan', '23.10.2019', '10', '2019', '10:33:22', 'Belum Di Edit');

-- --------------------------------------------------------

--
-- Table structure for table `perihal_keluhan`
--

CREATE TABLE `perihal_keluhan` (
  `id` int(3) NOT NULL,
  `perihal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perihal_keluhan`
--

INSERT INTO `perihal_keluhan` (`id`, `perihal`) VALUES
(1, 'ICT'),
(2, 'SIMAK & SALAM'),
(3, 'Subdomain'),
(4, 'Beasiswa'),
(5, 'On Site Internet'),
(6, 'Hotspot'),
(7, 'Pelaporan PDDIKTI'),
(8, 'Mahasiswa PDDIKTI'),
(9, 'Dosen PDDIKTI'),
(10, 'Permohonan Ijazah Nasional'),
(11, 'Lain-lain'),
(12, 'Infrastruktur & Jaringan'),
(13, 'Email');

-- --------------------------------------------------------

--
-- Table structure for table `reset_password_dosen`
--

CREATE TABLE `reset_password_dosen` (
  `id` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `divisi` varchar(128) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `status` varchar(128) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `m` varchar(2) NOT NULL,
  `y` varchar(4) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reset_password_dosen`
--

INSERT INTO `reset_password_dosen` (`id`, `nama`, `nip`, `fakultas`, `jurusan`, `divisi`, `telp`, `email1`, `email2`, `status`, `tanggal`, `m`, `y`, `jam`, `edit`) VALUES
(1, 'rifqi', '1091877872', 'Adab & Humaniora', 'Bahasa dan Sastra Arab', '', '08123456789', 'gery@uinsgd.ac.id', 'a@g.com', 'Sudah Dikerjakan', '20.09.2019', '', '', '07:46:19', '04.10.2019 14:43:09 oleh Super Admin'),
(2, 'Asuma', '223', 'Tidak ada', 'Tidak ada', '', '6281910186646', 'nama@uinsgd.ac.id', 'apanama@uinsgd.ac.id', 'Belum Dikerjakan', '07.10.2019', '10', '2019', '11:43:43', 'Belum Di Edit'),
(3, 'Rian Adriansyah', '11221', 'Adab & Humaniora', 'Bahasa dan Sastra Arab', '', '6281910186646', 'rian@uinsgd.ac.id', 'apanama@uinsgd.ac.id', 'Sudah Dikerjakan', '07.10.2019', '10', '2019', '11:45:02', '21.10.2019 10:51:21 oleh Super Admin'),
(4, 'Alby boy', '567', 'Adab & Humaniora', 'Bahasa dan Sastra Arab', '', '6281910186646', 'nama@uinsgd.ac.id', 'apanama@uinsgd.ac.id', 'Sedang Dikerjakan', '21.10.2019', '10', '2019', '10:53:19', '21.10.2019 11:31:49 oleh Super Admin'),
(5, 'Naruto', '887', 'Psikologi', 'Psikologi', 'Pelayanan', '6281910186646', 'nama@uinsgd.ac.id', 'apanama@uinsgd.ac.id', 'Belum Dikerjakan', '23.10.2019', '10', '2019', '10:31:04', 'Belum Di Edit');

-- --------------------------------------------------------

--
-- Table structure for table `reset_password_lembaga`
--

CREATE TABLE `reset_password_lembaga` (
  `id` int(8) NOT NULL,
  `nama_lembaga` varchar(100) NOT NULL,
  `nama_penanggung` varchar(100) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `divisi` varchar(128) NOT NULL,
  `unit` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `m` varchar(2) NOT NULL,
  `y` varchar(4) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reset_password_lembaga`
--

INSERT INTO `reset_password_lembaga` (`id`, `nama_lembaga`, `nama_penanggung`, `telp`, `email`, `divisi`, `unit`, `status`, `tanggal`, `m`, `y`, `jam`, `edit`) VALUES
(1, 'fisip', 'gery', '08123456789', 'hgergashi@yahoo.com', '', '', 'Sudah Dikerjakan', '20.09.2019', '', '', '07:46:39', '20.09.2019 08:39:29 oleh Pelayanan UINSGD 01'),
(3, 'SMA', 'Admin', '6281910186646', 'arifridhwan61@gmail.com', '', '', 'Belum Dikerjakan', '07.10.2019', '10', '2019', '13:12:49', '07.10.2019 13:13:32 oleh Super Admin'),
(4, 'SD', 'Member', '6281910186646', 'nama@uinsgd.ac.id', '', 'Pusat Bahasa', 'Belum Dikerjakan', '21.10.2019', '10', '2019', '09:47:53', 'Belum Di Edit'),
(5, 'SMA', 'Saya', '6281910186646', 'nama@uinsgd.ac.id', '', '', 'Sedang Dikerjakan', '21.10.2019', '10', '2019', '09:49:11', '21.10.2019 11:31:59 oleh Super Admin'),
(8, 'SMU', 'Mereka', '6281910186646', 'nama@uinsgd.ac.id', '', 'Perencanaan', 'Belum Dikerjakan', '21.10.2019', '10', '2019', '13:49:58', 'Belum Di Edit'),
(9, 'TK', 'Admin', '6281910186646', 'nama@uinsgd.ac.id', 'Pelayanan', 'Pusat Bisnis', 'Belum Dikerjakan', '23.10.2019', '10', '2019', '10:31:45', 'Belum Di Edit');

-- --------------------------------------------------------

--
-- Table structure for table `reset_password_mahasiswa`
--

CREATE TABLE `reset_password_mahasiswa` (
  `id` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `divisi` varchar(128) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(128) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `m` varchar(2) NOT NULL,
  `y` varchar(4) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reset_password_mahasiswa`
--

INSERT INTO `reset_password_mahasiswa` (`id`, `nama`, `nim`, `fakultas`, `jurusan`, `divisi`, `telp`, `email`, `status`, `tanggal`, `m`, `y`, `jam`, `edit`) VALUES
(1, 'Rifqi', '011717171', 'Adab & Humaniora', '', '', '08123456789', 'hgergashi@yahoo.com', 'Sudah Dikerjakan', '20.09.2019', '', '', '07:45:53', '20.09.2019 15:39:48 oleh '),
(2, 'gery', '1', 'Adab & Humaniora', '', '', '08123456789', 'mailadmin1@uinsgd.ac.id', 'Belum Dikerjakan', '22.09.2019', '', '', '12:37:29', 'Belum Di Edit'),
(3, 'reset', '2314', 'Adab & Humaniora', 'ada', '', '08123456789', 'fisip@uinsgd.ac.id', 'Belum Dikerjakan', '23.09.2019', '09', '2019', '12:57:10', 'Belum Di Edit'),
(7, 'Rian Adriansyah', '9987', 'Adab & Humaniora', 'Bahasa dan Sastra Arab', '', '6281910186646', 'rianjh2@gmail.com', 'Sudah Dikerjakan', '04.10.2019', '10', '2019', '15:03:22', '07.10.2019 11:33:31 oleh Super Admin'),
(9, 'RianAd', '899', 'Tidak ada', 'Tidak ada', '', '6281910186646', 'rianjh2@gmail.com', 'Belum Dikerjakan', '07.10.2019', '10', '2019', '14:14:12', 'Belum Di Edit'),
(10, 'RianAd', '3232', 'Adab & Humaniora', 'Bahasa dan Sastra Arab', '', '6281910186646', 'zaynmalik@gmail.com', 'Sedang Dikerjakan', '21.10.2019', '10', '2019', '10:52:47', '21.10.2019 11:31:38 oleh Super Admin'),
(11, 'Naruto', '998898', 'Ushuluddin', 'Perbandingan Agama', '', '6281910186646', 'zaynmalik@gmail.com', 'Belum Dikerjakan', '21.10.2019', '10', '2019', '13:45:52', 'Belum Di Edit'),
(12, 'Rian Adriansyah', '111', 'Dakwah & Komunikasi', 'Ilmu Komunikasi Prodi Hubungan Masyarakat', 'Pelayanan', '6281910186646', 'rianjh2@gmail.com', 'Belum Dikerjakan', '23.10.2019', '10', '2019', '10:30:36', 'Belum Di Edit');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `unit` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `unit`) VALUES
(1, 'Pusat Teknologi Informasi & Pangkalan Data'),
(999, 'Tidak Ada'),
(1000, 'Mail Management'),
(1001, 'Staf Administrasi'),
(1002, 'Staf Puskom'),
(1003, 'Staf Lainnya'),
(1004, 'Administrasi Umum'),
(1005, 'ULP'),
(1006, 'Humas'),
(1007, 'Keuangan'),
(1008, 'Akademik'),
(1009, 'Kemahasiswaan'),
(1010, 'Kerja sama'),
(1011, 'LPM'),
(1012, 'Pusat Kerja Sama'),
(1013, 'Perpustakaan'),
(1014, 'Pusat Bisnis'),
(1015, 'Pusat Bahasa'),
(1016, 'Jurnal'),
(1017, 'Kopertais'),
(1018, 'Poliklinik'),
(1019, 'Pusat Karir'),
(1020, 'Pusat Kajian Wahyu Memandu Ilmu'),
(1021, 'Mahad'),
(1022, 'LP2M'),
(1023, 'Kepegawaian'),
(1024, 'SPI'),
(1025, 'Perencanaan'),
(1026, 'Rektorat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_email_dosen`
--
ALTER TABLE `daftar_email_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_email_lembaga`
--
ALTER TABLE `daftar_email_lembaga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_email_mahasiswa`
--
ALTER TABLE `daftar_email_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ganti_server`
--
ALTER TABLE `ganti_server`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jaringan_baru`
--
ALTER TABLE `jaringan_baru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kunjungan_dc`
--
ALTER TABLE `kunjungan_dc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perihal_keluhan`
--
ALTER TABLE `perihal_keluhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_password_dosen`
--
ALTER TABLE `reset_password_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_password_lembaga`
--
ALTER TABLE `reset_password_lembaga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_password_mahasiswa`
--
ALTER TABLE `reset_password_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `daftar_email_dosen`
--
ALTER TABLE `daftar_email_dosen`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `daftar_email_lembaga`
--
ALTER TABLE `daftar_email_lembaga`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `daftar_email_mahasiswa`
--
ALTER TABLE `daftar_email_mahasiswa`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ganti_server`
--
ALTER TABLE `ganti_server`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jaringan_baru`
--
ALTER TABLE `jaringan_baru`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `kunjungan_dc`
--
ALTER TABLE `kunjungan_dc`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `perihal_keluhan`
--
ALTER TABLE `perihal_keluhan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reset_password_dosen`
--
ALTER TABLE `reset_password_dosen`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reset_password_lembaga`
--
ALTER TABLE `reset_password_lembaga`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reset_password_mahasiswa`
--
ALTER TABLE `reset_password_mahasiswa`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1027;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
