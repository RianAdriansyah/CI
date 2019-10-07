-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2019 at 01:14 AM
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
(6, 'robot', 'robot', 'Robot', '3', '0000001', 'robot@r.id', 'default.png', '24.09.2019 07:44:37');

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
  `unit` varchar(200) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `status` varchar(16) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `m` varchar(2) NOT NULL,
  `y` varchar(4) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_email_dosen`
--

INSERT INTO `daftar_email_dosen` (`id`, `nama`, `nip`, `fakultas`, `jurusan`, `unit`, `telp`, `email1`, `email2`, `status`, `tanggal`, `m`, `y`, `jam`, `edit`) VALUES
(1, 'asssssss', '1091877872', 'Adab & Humaniora', 'Bahasa dan Sastra Arab', 'TU', '08123456789', 'gery@uinsgd.ac.id', 'a@g.com', 'Sudah Dikerjakan', '23.09.2019', '09', '2019', '15:15:30', '04.10.2019 14:39:19 oleh Super Admin'),
(2, 'Rian Adriansyah', '2342', 'Adab & Humaniora', 'Bahasa dan Sastra Arab', 'TU', '6285659603699', 'nama@uinsgd.ac.id', 'apanama@uinsgd.ac.id', 'Belum Dikerjakan', '04.10.2019', '10', '2019', '13:37:06', '04.10.2019 14:19:33 oleh Super Admin');

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
  `status` varchar(16) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `m` varchar(2) NOT NULL,
  `y` varchar(4) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_email_lembaga`
--

INSERT INTO `daftar_email_lembaga` (`id`, `nama_lembaga`, `nama_penanggung`, `telp`, `email`, `status`, `tanggal`, `m`, `y`, `jam`, `edit`) VALUES
(1, 'FISIP UIN Sunan Gunung Djati', 'Nandang Yatna Jatnika', '6281282249706', 'perpustakaanfsp@uinsgd.ac.id', 'Sudah Dikerjakan', '12.09.2019', '', '', '08:21:15', '20.09.2019 14:42:22 oleh Super Admin'),
(2, 'Jurusan Kimia FST', 'Eko Prabowo H. ,M.P.Kim', '628562196819', 'chemcon@uinsgd.ac.id', 'Sudah Dikerjakan', '12.09.2019', '', '', '08:23:29', '20.09.2019 14:42:12 oleh Super Admin'),
(3, 'Prodi Jurnalistik', 'Acep Muslim', '6281223398409', 'jurnalistik.ilkom@uinsgd.ac.id', 'Sudah Dikerjakan', '12.09.2019', '', '', '08:31:56', '20.09.2019 14:41:51 oleh Super Admin'),
(4, 'fisip', 'gery', '0812356789', 'fisip@uinsgd.ac.id', 'Sudah Dikerjakan', '20.09.2019', '', '', '07:45:26', '27.09.2019 13:40:27 oleh Super Admin');

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
  `unit` varchar(128) DEFAULT NULL,
  `telp` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(16) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `m` varchar(2) NOT NULL,
  `y` varchar(4) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_email_mahasiswa`
--

INSERT INTO `daftar_email_mahasiswa` (`id`, `nama`, `nim`, `fakultas`, `jurusan`, `unit`, `telp`, `email`, `status`, `tanggal`, `m`, `y`, `jam`, `edit`) VALUES
(2, 'Pirda Aulia', '1172090092', 'Mail Managemen', '', '', '628980490362', 'pirdaaulia06@gmail.com', 'Sudah Dikerjakan', '12.09.2019', '02', '2019', '08:12:59', '22.09.2019 08:30:40 oleh Super Admin'),
(3, 'Maulana Sidiq Al-Alawi', '1172090051', 'Staf Puskom', '', '', '6283892802577', 'alawisidiq@gmail.com', 'Sudah Dikerjakan', '12.09.2019', '02', '2019', '08:13:12', '20.09.2019 15:04:13 oleh Super Admin'),
(4, 'Pelayanan UINSGD 01', '1', '1', '', '', '0812356789', 'fisip@uinsgd.ac.id', 'Belum Dikerjakan', '22.09.2019', '01', '2019', '17:46:45', 'Belum Di Edit'),
(5, 'bfgmobfg', '2314', '2', '', '', '2343', 'gary98k@gmail.com', 'Belum Dikerjakan', '22.09.2019', '01', '2019', '17:59:13', 'Belum Di Edit'),
(6, 'Pelayanan UINSGD 01', '23189', 'Staf Administrasi', 'apa', '', '08123456789', 'gary98k@gmail.com', 'Sudah Dikerjakan', '22.09.2019', '12', '2020', '20:17:29', '22.09.2019 20:52:01 oleh Super Admin'),
(7, 'fgd', '23189', 'Adab & Humaniora', 'ada', '', '0813456789', 'mailadmin1@uinsgd.ac.id', 'Belum Dikerjakan', '22.09.2019', '', '', '20:56:16', 'Belum Di Edit'),
(8, 'rifqi', '2314', 'Adab & Humaniora', 'ada', '', '08123456789', 'hgergashi@yahoo.com', 'Sudah Dikerjakan', '23.09.2019', '', '', '11:30:48', '23.09.2019 11:34:08 oleh Super Admin'),
(9, 'rifqi', '2314', 'Adab & Humaniora', 'Administrasi Negara', '', '0813456789', 'mailadmin1@uinsgd.ac.id', 'Sudah Dikerjakan', '23.09.2019', '09', '2019', '12:50:00', '27.09.2019 13:39:57 oleh Super Admin'),
(10, 'weqew', '231', 'Ushuluddin', 'Fisika', '', '213123', 'hgergashi@yahoo.com', 'Belum Dikerjakan', '23.09.2019', '09', '2019', '12:50:19', '23.09.2019 13:50:26 oleh Super Admin'),
(11, 'aa', '48111555555', 'Psikologi', 'Psikologi', '', '05552455245', 'a@gmail.com', 'Belum Dikerjakan', '27.09.2019', '09', '2019', '13:44:20', 'Belum Di Edit'),
(12, 'aaa', '1516654122', 'Mail Managemen', 'Mail Managemen', '', '0854655554', 'a@gmail.com', 'Belum Dikerjakan', '27.09.2019', '09', '2019', '13:45:08', 'Belum Di Edit'),
(13, 'admiin', '151665412', 'Psikologi', 'Psikologi', '', '08546555542', 'a@gmail.com', 'Belum Dikerjakan', '27.09.2019', '09', '2019', '13:46:44', 'Belum Di Edit'),
(14, 'aaas', '1516654', 'Syariah & Hukum', 'Ilmu Hukum ', '', '0233386868', 'afd@gmail.com', 'Belum Dikerjakan', '27.09.2019', '09', '2019', '13:47:03', 'Belum Di Edit'),
(15, 'admiinss', '481115555', 'Ilmu Sosial & Ilmu Politik', 'Manajemen', '', '023338686821', 'ad@gmail.com', 'Belum Dikerjakan', '27.09.2019', '09', '2019', '13:47:25', 'Belum Di Edit'),
(16, 'aa', '48111555555', 'Ilmu Sosial & Ilmu Politik', 'Manajemen', '', '0854655554', 'af@gmail.com', 'Belum Dikerjakan', '27.09.2019', '09', '2019', '13:47:45', 'Belum Di Edit'),
(17, 'admiinw', '48111555555', 'Psikologi', 'Psikologi', '', '05552455245', 'ddaa@gmail.com', 'Belum Dikerjakan', '27.09.2019', '09', '2019', '13:47:59', 'Belum Di Edit'),
(18, 'Muramasa Senju', '12345654321', 'Adab & Humaniora', 'Administrasi Negara', '', '6281910186646', 'rianjh2@gmail.com', 'Sudah Dikerjakan', '27.09.2019', '09', '2019', '15:54:31', '01.10.2019 08:07:14 oleh Super Admin'),
(19, 'Rian Adriansyah', '12343315427', 'Psikologi', 'Psikologi', '', '6281910186646', 'rianjh2@gmail.com', 'Belum Dikerjakan', '01.10.2019', '10', '2019', '14:58:36', 'Belum Di Edit'),
(21, 'RianAd', '326757', 'Syariah & Hukum', 'Ekonomi Syariah', '', '6281910186646', 'zaynmalik@gmail.com', 'Belum Dikerjakan', '01.10.2019', '10', '2019', '15:13:36', 'Belum Di Edit'),
(22, 'Naruto', '11269', 'Ilmu Sosial & Ilmu Politik', 'Administrasi Negara', '', '6285659603699', 'member@gmail.com', 'Belum Dikerjakan', '01.10.2019', '10', '2019', '15:15:49', 'Belum Di Edit'),
(24, 'Risma Noor Amalia', '665339', 'Adab & Humaniora', 'Bahasa dan Sastra Arab', 'TU', '6281910186646', 'zaynmalik@gmail.com', 'Belum Dikerjakan', '02.10.2019', '10', '2019', '10:42:38', '02.10.2019 11:02:15 oleh Super Admin'),
(25, 'Rian Adriansyah', '3232', 'Sains & Teknologi', 'Fisika', 'PTIPD', '6281910186646', 'zaynmalik@gmail.com', 'Belum Dikerjakan', '02.10.2019', '10', '2019', '11:09:15', 'Belum Di Edit'),
(26, 'RianAd', '665328', 'Dakwah & Komunikasi', 'Ilmu Komunikasi Prodi Hubungan Masyarakat', 'PTIPD', '6281910186646', 'zaynmalik@gmail.com', 'Belum Dikerjakan', '02.10.2019', '10', '2019', '11:21:07', 'Belum Di Edit'),
(27, 'Rian Adriansyah', '69', 'Psikologi', 'Psikologi', NULL, '6281910186646', 'rianjh2@gmail.com', 'Belum Dikerjakan', '04.10.2019', '10', '2019', '10:04:29', 'Belum Di Edit'),
(29, 'RianAd', '32329', 'Tidak ada', 'Tidak ada', 'TU', '6281910186646', 'rianjh2@gmail.com', 'Belum Dikerjakan', '04.10.2019', '10', '2019', '10:13:03', 'Belum Di Edit');

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
(8, 'Ushuluddin'),
(9, 'Mail Managemen'),
(10, 'Pusat Teknologi Informasi & Pangkalan Data'),
(11, 'Staf Administrasi'),
(12, 'Staf Puskom'),
(13, 'Staf Lainnya'),
(999, 'Tidak ada'),
(1000, 'administrasi umum');

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
  `permohonan` text NOT NULL,
  `solusi` text NOT NULL,
  `status` varchar(16) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `m` varchar(2) NOT NULL,
  `y` varchar(4) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ganti_server`
--

INSERT INTO `ganti_server` (`id`, `nama`, `ni`, `telp`, `email`, `permohonan`, `solusi`, `status`, `tanggal`, `m`, `y`, `jam`, `edit`) VALUES
(1, 'rifqi', '213312', '08123456789', 'member@gmail.com', 'contoh', 'Belum Ada Solusi', 'Belum Dikerjakan', '20.09.2019', '', '', '07:46:51', '27.09.2019 15:17:29 oleh Super Admin');

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
  `permohonan` text NOT NULL,
  `solusi` text NOT NULL,
  `status` varchar(16) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `m` varchar(2) NOT NULL,
  `y` varchar(4) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jaringan_baru`
--

INSERT INTO `jaringan_baru` (`id`, `nama`, `ni`, `telp`, `email`, `permohonan`, `solusi`, `status`, `tanggal`, `m`, `y`, `jam`, `edit`) VALUES
(1, 'rifqi', '213312', '08123456789', 'hgergashi@yahoo.com', 'Contoh', 'Belum Ada Solusi', 'Sudah Dikerjakan', '20.09.2019', '', '', '07:47:50', '20.09.2019 08:37:09 oleh Pelayanan UINSGD 01');

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
(20, 'Manajeman Keuangan Syariah', 'Syariah & Hukum'),
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
  `perihal` varchar(50) NOT NULL,
  `keluhan` text NOT NULL,
  `solusi` text NOT NULL,
  `status` varchar(16) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `m` varchar(2) NOT NULL,
  `y` varchar(4) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluhan`
--

INSERT INTO `keluhan` (`id`, `nama`, `ni`, `fakultas`, `jurusan`, `telp`, `email`, `perihal`, `keluhan`, `solusi`, `status`, `tanggal`, `m`, `y`, `jam`, `edit`) VALUES
(1, 'rifqi', '213312', 'Adab & Humaniora', 'Administrasi Negara', '08123456789', 'hgergashi@yahoo.com', 'Beasiswa', 'COntoh', 'Belum Ada Solusi', 'Belum Dikerjakan', '20.09.2019', '', '', '07:47:20', '25.09.2019 09:03:47 oleh Super Admin'),
(2, 'weqew', '', 'Ushuluddin', '', '0813456789', 'mailadmin1@uinsgd.ac.id', 'Lain-lain', 'apa?123', 'Belum Ada Solusi', 'Belum Dikerjakan', '22.09.2019', '', '', '11:44:23', 'Belum Di Edit'),
(3, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(4, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(5, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(6, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(7, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(8, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(9, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(10, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(11, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(12, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(13, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(14, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(15, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(16, 'sam', '31', 'Adab & Humaniora', 'Administrasi Negara', '634', 'mailadmin1@uinsgd.ac.id', 'Hotspot', 'rtyry', 'rtryr', 'Sudah Dikerjakan', '', '', '', '', '24.09.2019 11:31:38 oleh C'),
(17, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(18, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(19, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(20, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(21, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(22, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(23, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(24, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(25, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(26, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(27, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(28, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(29, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(30, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(31, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(32, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(33, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(34, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(35, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(36, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(37, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(38, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(39, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(40, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(41, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(42, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(43, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(44, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(45, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(46, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(47, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(48, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(49, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(50, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(51, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(52, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(53, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(54, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(55, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(56, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(57, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(58, 'sam', '31', 'gsd', '', '634', 'mailadmin1@uinsgd.ac.id', 'lain', 'rtyry', 'rtryr', '', '', '', '', '', ''),
(59, 'sam', '31', 'Adab & Humaniora', ' Pendidikan Kimia', '634', 'mailadmin1@uinsgd.ac.id', 'Beasiswa', 'rtyry', 'rtryr', 'Belum Dikerjakan', '', '', '', '', '23.09.2019 15:37:30 oleh Super Admin'),
(60, 'rifqi', '213312', 'Adab & Humaniora', 'Administrasi Negara', '08123456789', 'hgergashi@yahoo.com', 'ICT', 'hahahahha', 'Belum Ada Solusi', 'Sudah Dikerjakan', '24.09.2019', '09', '2019', '08:22:28', '24.09.2019 09:07:47 oleh Super Admin'),
(61, 'ggegegrege', '213312', 'Adab & Humaniora', 'Administrasi Negara', '08123456789', 'fisip@uinsgd.ac.id', 'Dosen PDDIKTI', 'aaaaaaaaaaa', 'Belum Ada Solusi', 'Sudah Dikerjakan', '24.09.2019', '09', '2019', '09:05:01', '24.09.2019 11:16:04 oleh ad');

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
  `permohonan` text NOT NULL,
  `solusi` text NOT NULL,
  `status` varchar(16) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `m` varchar(2) NOT NULL,
  `y` varchar(4) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunjungan_dc`
--

INSERT INTO `kunjungan_dc` (`id`, `nama`, `ni`, `telp`, `email`, `permohonan`, `solusi`, `status`, `tanggal`, `m`, `y`, `jam`, `edit`) VALUES
(1, 'weqew', '213312', '213123', '', '2313123123', 'Belum Ada Solusi', 'Belum Dikerjakan', '17.09.2019', '', '', '11:16:41', 'Belum Di Edit'),
(2, 'rifqi', '213312', '08123456789', 'hgergashi@yahoo.com', 'contoh', 'Belum Ada Solusi', '', '20.09.2019', '', '', '07:47:07', '23.09.2019 12:03:24 oleh Super Admin'),
(3, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(4, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(5, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(6, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(7, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(8, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(9, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(10, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(11, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(12, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(13, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(14, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(15, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(16, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(17, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(18, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(19, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(20, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(21, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(22, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(23, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(24, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(25, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(26, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(27, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(28, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(29, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(30, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(31, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(32, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(33, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(34, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(35, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(36, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(37, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(38, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(39, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(40, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(41, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(42, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(43, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(44, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(45, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(46, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(47, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(48, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(49, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(50, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(51, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(52, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(53, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(54, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(55, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(56, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(57, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(58, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(59, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(60, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(61, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(62, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(63, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(64, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(65, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum'),
(66, 'gg', '12', '21', 'fefewfef@uinsgd.ac.id', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'oke', 'Belum Dikerjakan', '20.09.2019', '09', '2019', '20:17:29', 'Belum');

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
  `unit` varchar(200) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `status` varchar(16) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `m` varchar(2) NOT NULL,
  `y` varchar(4) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reset_password_dosen`
--

INSERT INTO `reset_password_dosen` (`id`, `nama`, `nip`, `fakultas`, `jurusan`, `unit`, `telp`, `email1`, `email2`, `status`, `tanggal`, `m`, `y`, `jam`, `edit`) VALUES
(1, 'rifqi', '1091877872', 'Adab & Humaniora', 'Bahasa dan Sastra Arab', 'TU', '08123456789', 'gery@uinsgd.ac.id', 'a@g.com', 'Sudah Dikerjakan', '20.09.2019', '', '', '07:46:19', '04.10.2019 14:43:09 oleh Super Admin');

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
  `status` varchar(16) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `m` varchar(2) NOT NULL,
  `y` varchar(4) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reset_password_lembaga`
--

INSERT INTO `reset_password_lembaga` (`id`, `nama_lembaga`, `nama_penanggung`, `telp`, `email`, `status`, `tanggal`, `m`, `y`, `jam`, `edit`) VALUES
(1, 'fisip', 'gery', '08123456789', 'hgergashi@yahoo.com', 'Sudah Dikerjakan', '20.09.2019', '', '', '07:46:39', '20.09.2019 08:39:29 oleh Pelayanan UINSGD 01');

-- --------------------------------------------------------

--
-- Table structure for table `reset_password_mahasiswa`
--

CREATE TABLE `reset_password_mahasiswa` (
  `id` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `unit` varchar(200) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(16) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `m` varchar(2) NOT NULL,
  `y` varchar(4) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reset_password_mahasiswa`
--

INSERT INTO `reset_password_mahasiswa` (`id`, `nama`, `nim`, `fakultas`, `unit`, `jurusan`, `telp`, `email`, `status`, `tanggal`, `m`, `y`, `jam`, `edit`) VALUES
(1, 'Rifqi', '011717171', 'Adab & Humaniora', '', '', '08123456789', 'hgergashi@yahoo.com', 'Sudah Dikerjakan', '20.09.2019', '', '', '07:45:53', '20.09.2019 15:39:48 oleh '),
(2, 'gery', '1', 'Adab & Humaniora', '', '', '08123456789', 'mailadmin1@uinsgd.ac.id', 'Belum Dikerjakan', '22.09.2019', '', '', '12:37:29', 'Belum Di Edit'),
(3, 'reset', '2314', 'Adab & Humaniora', '', 'ada', '08123456789', 'fisip@uinsgd.ac.id', 'Belum Dikerjakan', '23.09.2019', '09', '2019', '12:57:10', 'Belum Di Edit'),
(7, 'Rian Adriansyah', '9987', 'Adab & Humaniora', 'Tidak Ada', 'Bahasa dan Sastra Arab', '6281910186646', 'rianjh2@gmail.com', 'Sudah Dikerjakan', '04.10.2019', '10', '2019', '15:03:22', '04.10.2019 15:29:24 oleh Super Admin');

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
(1, 'PTIPD'),
(5, 'TU'),
(999, 'Tidak Ada');

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `daftar_email_dosen`
--
ALTER TABLE `daftar_email_dosen`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `daftar_email_lembaga`
--
ALTER TABLE `daftar_email_lembaga`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `daftar_email_mahasiswa`
--
ALTER TABLE `daftar_email_mahasiswa`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT for table `ganti_server`
--
ALTER TABLE `ganti_server`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jaringan_baru`
--
ALTER TABLE `jaringan_baru`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `kunjungan_dc`
--
ALTER TABLE `kunjungan_dc`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `perihal_keluhan`
--
ALTER TABLE `perihal_keluhan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reset_password_dosen`
--
ALTER TABLE `reset_password_dosen`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reset_password_lembaga`
--
ALTER TABLE `reset_password_lembaga`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reset_password_mahasiswa`
--
ALTER TABLE `reset_password_mahasiswa`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
