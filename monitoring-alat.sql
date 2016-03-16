-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2016 at 09:15 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring-alat`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `id_petugas` varchar(10) NOT NULL,
  `absen` enum('1','2','3') NOT NULL COMMENT '1 utk masuk, 2 utk ijin, 3 utk bolos',
  `tgl` date NOT NULL,
  `keterangan` text NOT NULL,
  `created_by` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `id_petugas`, `absen`, `tgl`, `keterangan`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'byu', '3', '1900-12-06', 'edan banget', 'admin', '2016-02-24 16:15:44', '2016-02-21 13:17:04'),
(2, 'rjk', '3', '0000-00-00', 'okkkjjj', 'rejak', '2016-02-22 14:07:21', '2016-02-21 13:52:08'),
(3, 'IPG', '2', '2016-03-01', 'hooooooooooooooooooooooooo', 'admin', '2016-02-24 16:16:09', '2016-02-21 13:53:54'),
(4, '1312', '3', '1900-12-07', 'okkk', 'rejak', '2016-02-22 14:10:24', '2016-02-22 04:32:55'),
(5, '54326', '3', '2016-02-18', 'ra genah', 'admin', '2016-02-24 15:30:26', '2016-02-24 08:30:26'),
(6, '54326', '3', '2016-02-11', 'wah bolosan ki', 'admin', '2016-02-24 15:59:28', '2016-02-24 08:36:58'),
(7, '54326', '1', '2016-02-16', '', 'admin', '2016-02-24 15:42:49', '2016-02-24 08:42:49'),
(8, '54326', '1', '2016-02-04', '', 'admin', '2016-02-24 15:45:12', '2016-02-24 08:45:12'),
(10, '54326', '1', '2016-02-10', '', 'admin', '2016-02-24 15:47:07', '2016-02-24 08:47:07'),
(11, '54326', '3', '2016-02-05', 'wkwkwkwkw', 'admin', '2016-02-24 15:48:01', '2016-02-24 08:48:01'),
(12, 'QWEQWRQRQ', '1', '2016-02-24', '', 'admin', '2016-02-25 07:07:28', '2016-02-25 00:07:28'),
(13, '4260UJH', '2', '2016-02-16', 'sakit', 'admin', '2016-02-25 07:09:43', '2016-02-25 00:09:43'),
(14, '4260UJH', '3', '2016-02-24', 'ijin cuti 5 tahun', 'ipung', '2016-02-25 07:11:33', '2016-02-25 00:11:33'),
(15, '523J', '2', '2016-02-18', '', 'admin', '2016-02-26 14:53:15', '2016-02-26 07:53:15');

-- --------------------------------------------------------

--
-- Table structure for table `alat`
--

CREATE TABLE `alat` (
  `id` int(11) NOT NULL,
  `id_alat` int(11) NOT NULL,
  `nama_alat` varchar(100) NOT NULL,
  `lokasi` text NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alat`
--

INSERT INTO `alat` (`id`, `id_alat`, `nama_alat`, `lokasi`, `created_at`, `update_at`) VALUES
(2, 32141, 'Alat Parkir 2', 'haha lucu', '2016-02-25 10:47:29', '2016-02-25 03:47:29'),
(3, 123, 'alat parkiran', 'semarang', '2016-02-25 11:06:27', '2016-02-25 04:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('cf0a0edfa8c56d32cfe091ddf683a3da', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1458109670, 'a:2:{s:9:"user_data";s:0:"";s:7:"session";a:8:{s:2:"id";s:2:"34";s:7:"id_user";s:5:"ADMIN";s:4:"role";s:1:"0";s:8:"username";s:5:"admin";s:8:"password";s:32:"21232f297a57a5a743894a0e4a801fc3";s:2:"ip";N;s:7:"browser";N;s:10:"last_login";s:19:"2016-03-15 14:36:37";}}');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(10) NOT NULL,
  `jabatan_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan_name`) VALUES
(0, '-'),
(1, 'Admin'),
(2, 'Penjaga Warung'),
(3, 'teknisi'),
(4, 'manajer_parkir');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_maintenance`
--

CREATE TABLE `jadwal_maintenance` (
  `id_kegiatan` int(11) NOT NULL,
  `id_periode_maintenance` int(11) NOT NULL,
  `kegiatan` text NOT NULL,
  `created_by` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_maintenance`
--

INSERT INTO `jadwal_maintenance` (`id_kegiatan`, `id_periode_maintenance`, `kegiatan`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'akuuu', 'ipung', '2016-02-22 14:17:08', '2016-02-22 07:17:08'),
(2, 2, 'kue', 'ipung', '2016-02-22 14:17:14', '2016-02-22 07:17:14'),
(3, 1, 'edann', 'ipung', '2016-02-22 14:17:18', '2016-02-22 07:17:18'),
(4, 2, 'ituuuu', 'ipung', '2016-02-22 14:17:27', '2016-02-22 07:17:27'),
(5, 3, 'Memasang Antena', 'ipung', '2016-02-24 09:06:38', '2016-02-24 02:06:38'),
(7, 3, 'Mencari Dana SUmbangan', 'ipung', '2016-02-24 09:07:09', '2016-02-24 02:07:09'),
(8, 3, 'Masang Wifi\r\n', 'ipung', '2016-02-24 09:07:20', '2016-02-24 02:07:20'),
(10, 4, 'Golek Duit', 'ipung', '2016-02-24 10:17:47', '2016-02-24 03:17:47'),
(11, 5, 'Fanti Rumah', 'ipung', '2016-02-24 10:40:55', '2016-02-24 03:40:55'),
(12, 5, 'Mencari Petenakan', 'ipung', '2016-02-24 10:41:04', '2016-02-24 03:41:04'),
(13, 1, 'h', 'ipung', '2016-03-11 06:26:20', '2016-03-10 23:26:20'),
(14, 1, 'i\r\n', 'ipung', '2016-03-11 06:26:25', '2016-03-10 23:26:25'),
(15, 1, '413', 'ipung', '2016-03-11 06:26:29', '2016-03-10 23:26:29'),
(16, 1, '23w', 'ipung', '2016-03-11 06:26:33', '2016-03-10 23:26:33');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pengaduan`
--

CREATE TABLE `jenis_pengaduan` (
  `id` int(11) NOT NULL,
  `id_jenis` varchar(10) NOT NULL,
  `pengaduan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pengaduan`
--

INSERT INTO `jenis_pengaduan` (`id`, `id_jenis`, `pengaduan`) VALUES
(1, 'p1', 'Kerusakan'),
(2, 'p2', 'Maintenance'),
(3, 'p3', 'Pelayanan');

-- --------------------------------------------------------

--
-- Table structure for table `master_lokasi`
--

CREATE TABLE `master_lokasi` (
  `id` int(11) NOT NULL,
  `id_lokasi` varchar(10) NOT NULL,
  `lokasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_lokasi`
--

INSERT INTO `master_lokasi` (`id`, `id_lokasi`, `lokasi`) VALUES
(1, 'l_1', 'banyumanik'),
(2, 'l_2', 'pemuda');

-- --------------------------------------------------------

--
-- Table structure for table `master_periode_maintenance`
--

CREATE TABLE `master_periode_maintenance` (
  `id_periode_maintenance` int(11) NOT NULL,
  `periode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_periode_maintenance`
--

INSERT INTO `master_periode_maintenance` (`id_periode_maintenance`, `periode`) VALUES
(1, 'Harian'),
(2, 'Mingguan'),
(3, 'Bulanan'),
(4, 'Triwulan'),
(5, 'Semester');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(10) NOT NULL,
  `nama_menu` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `segment` varchar(100) NOT NULL,
  `parent` int(10) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `flag_aktif` int(10) DEFAULT NULL,
  `sort` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `pengadu` enum('1','2') NOT NULL DEFAULT '1',
  `id_jenis` varchar(10) NOT NULL,
  `id_petugas` varchar(10) NOT NULL,
  `kode_unit_parkir` varchar(10) NOT NULL,
  `tgl_aduan` date NOT NULL DEFAULT '0000-00-00',
  `keterangan` text NOT NULL,
  `tgl_verifikasi` date NOT NULL DEFAULT '0000-00-00',
  `status_verifikasi` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1 utk belum, 2 utk sudah',
  `verifikator` varchar(10) NOT NULL,
  `keterangan_verifikator` text NOT NULL,
  `created_by` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `pengadu`, `id_jenis`, `id_petugas`, `kode_unit_parkir`, `tgl_aduan`, `keterangan`, `tgl_verifikasi`, `status_verifikasi`, `verifikator`, `keterangan_verifikator`, `created_by`, `created_at`, `updated_at`) VALUES
(176, '1', 'p2', '1312', '23', '0000-00-00', 'fffd', '2016-03-01', '2', 'bayu', 'bagus kok', 'rejak', '2016-02-22 14:12:27', '2016-02-22 07:12:27'),
(177, '1', 'p2', '54326', 'd32da', '0000-00-00', 'parkiran bocor', '0000-00-00', '2', 'bayu', 'sudah di perbaiki', 'admin', '2016-02-24 16:27:37', '2016-02-24 09:27:37'),
(178, '2', 'p2', 'masy', 'srf24', '0000-00-00', 'vsfv ', '0000-00-00', '1', '', '', 'admin', '2016-02-24 16:30:37', '2016-02-24 09:30:37'),
(179, '1', 'p3', '54326', '4qtf', '0000-00-00', 'werfvd', '0000-00-00', '1', '', '', 'admin', '2016-02-24 16:31:09', '2016-02-24 09:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `pengecekan_alat`
--

CREATE TABLE `pengecekan_alat` (
  `id` int(11) NOT NULL,
  `id_periode_maintenance` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `id_alat` int(11) NOT NULL,
  `status_verifikasi` enum('1','2') NOT NULL COMMENT '1 utk belum, 2 utk sudah',
  `verifikator` varchar(10) NOT NULL,
  `tgl_verifikasi` date NOT NULL DEFAULT '0000-00-00',
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengecekan_alat`
--

INSERT INTO `pengecekan_alat` (`id`, `id_periode_maintenance`, `id_kegiatan`, `id_alat`, `status_verifikasi`, `verifikator`, `tgl_verifikasi`, `created_at`, `updated_at`, `id_petugas`) VALUES
(39, 2, 2, 0, '1', '', '2016-02-17', '2016-02-24 07:37:55', '2016-02-24 10:03:52', 0),
(40, 2, 2, 0, '2', 'byu', '2016-02-09', '2016-02-24 07:37:58', '2016-02-24 00:37:58', 0),
(41, 2, 2, 0, '2', 'byu', '2016-02-01', '2016-02-24 07:38:01', '2016-02-24 10:04:07', 0),
(43, 2, 8, 0, '2', 'byu', '0000-00-00', '2016-02-24 09:44:05', '2016-02-24 02:44:05', 0),
(44, 3, 5, 0, '2', 'byu', '2016-01-01', '2016-02-24 09:45:19', '2016-02-24 02:45:19', 0),
(45, 3, 5, 0, '2', 'byu', '2016-02-01', '2016-02-24 10:08:14', '2016-02-24 03:08:14', 0),
(46, 3, 7, 0, '2', 'byu', '2016-02-01', '2016-02-24 10:10:20', '2016-02-24 03:10:20', 0),
(47, 3, 9, 0, '1', '', '2016-01-01', '2016-02-24 10:26:27', '2016-02-24 03:26:27', 0),
(48, 3, 8, 0, '2', 'byu', '2016-02-01', '2016-02-24 10:29:05', '2016-02-24 03:29:05', 0),
(49, 3, 7, 0, '1', '', '2016-01-01', '2016-02-24 10:29:11', '2016-02-24 03:29:11', 0),
(50, 3, 9, 0, '1', '', '2015-09-01', '2016-02-24 10:37:11', '2016-02-24 03:37:11', 0),
(51, 3, 9, 0, '2', 'byu', '2015-07-01', '2016-02-24 10:37:14', '2016-02-24 03:37:14', 0),
(52, 3, 11, 0, '2', '3ADMIN', '2016-01-01', '2016-02-24 10:41:44', '2016-02-25 05:05:07', 0),
(53, 3, 12, 0, '2', 'byu', '2016-01-01', '2016-02-24 10:41:47', '2016-02-24 03:41:47', 0),
(54, 3, 10, 0, '2', 'byu', '2015-07-01', '2016-02-24 10:44:20', '2016-02-24 03:44:20', 0),
(55, 2, 2, 0, '2', 'byu', '0001-02-01', '2016-02-24 11:09:00', '2016-02-24 04:09:00', 0),
(56, 3, 1, 0, '2', 'byu', '2016-02-24', '2016-02-24 13:49:16', '2016-02-24 06:49:16', 0),
(57, 3, 1, 0, '1', '', '2016-02-21', '2016-02-24 13:50:23', '2016-02-24 06:50:23', 0),
(58, 3, 3, 0, '2', 'byu', '2016-02-22', '2016-02-24 13:52:04', '2016-02-24 06:52:04', 0),
(59, 3, 1, 0, '2', 'byu', '2016-02-21', '2016-02-24 13:52:12', '2016-02-24 06:52:12', 0),
(60, 3, 3, 0, '2', 'byu', '2016-02-24', '2016-02-24 14:41:28', '2016-02-24 07:41:28', 0),
(61, 3, 7, 0, '2', 'byu', '2015-11-01', '2016-02-24 14:42:22', '2016-02-24 07:42:22', 0),
(62, 3, 5, 0, '2', 'byu', '2015-01-01', '2016-02-24 14:42:50', '2016-02-24 07:42:50', 0),
(63, 2, 4, 0, '2', 'byu', '2016-02-17', '2016-02-24 16:59:17', '2016-02-24 09:59:17', 0),
(64, 3, 1, 0, '1', '', '2016-02-23', '2016-02-24 17:04:30', '2016-02-24 10:04:30', 0),
(65, 1, 1, 0, '2', '3ADMIN', '0000-00-00', '2016-02-25 12:03:25', '2016-02-25 05:03:25', 0),
(66, 2, 2, 32141, '2', '3ADMIN', '2016-01-01', '2016-02-25 12:28:25', '2016-02-25 05:28:45', 0),
(67, 2, 2, 32141, '2', '3ADMIN', '2016-01-25', '2016-02-25 12:28:32', '2016-02-25 05:28:32', 0),
(68, 2, 4, 32141, '2', '3ADMIN', '2016-01-25', '2016-02-25 12:28:38', '2016-02-25 05:28:38', 0),
(69, 2, 2, 32141, '1', '', '2016-02-25', '2016-02-25 13:36:04', '2016-02-26 06:48:35', 0),
(70, 3, 5, 32141, '2', '3ADMIN', '2016-02-01', '2016-02-25 13:36:21', '2016-02-25 06:36:59', 0),
(71, 3, 5, 32141, '2', '3ADMIN', '2016-01-01', '2016-02-25 13:36:25', '2016-02-25 06:36:25', 0),
(72, 3, 8, 32141, '1', '', '2016-02-01', '2016-02-25 13:36:33', '2016-02-25 06:36:33', 0),
(73, 3, 8, 32141, '1', '', '2016-01-01', '2016-02-25 13:37:50', '2016-02-25 06:37:50', 0),
(74, 3, 9, 32141, '1', '', '2016-01-01', '2016-02-25 13:38:06', '2016-02-25 06:38:06', 0),
(75, 3, 10, 32141, '2', '3ADMIN', '2016-01-01', '2016-02-25 13:38:15', '2016-02-25 06:38:15', 0),
(76, 3, 11, 123, '2', '3ADMIN', '2016-01-01', '2016-02-25 13:38:30', '2016-02-25 06:38:30', 0),
(77, 3, 12, 32141, '2', '3ADMIN', '2016-01-01', '2016-02-25 13:38:39', '2016-02-25 06:38:39', 0),
(78, 1, 1, 123, '2', '3ADMIN', '2016-01-12', '2016-02-25 13:47:25', '2016-02-25 06:47:25', 0),
(79, 1, 1, 123, '1', '', '2016-02-25', '2016-02-25 13:47:38', '2016-02-25 06:47:38', 0),
(80, 1, 3, 0, '2', '25', '0000-00-00', '2016-02-25 14:18:38', '2016-02-25 07:18:38', 0),
(81, 1, 1, 32141, '2', 'ADMIN', '2016-02-10', '2016-02-26 09:30:03', '2016-02-26 02:30:03', 0),
(82, 1, 1, 32141, '2', 'ADMIN', '2016-02-22', '2016-02-26 09:31:21', '2016-02-26 02:31:21', 0),
(83, 1, 1, 32141, '1', '', '2016-02-26', '2016-02-26 09:31:43', '2016-02-26 02:31:43', 0),
(84, 1, 1, 32141, '1', '', '2016-02-26', '2016-02-26 09:34:20', '2016-02-26 02:34:20', 0),
(85, 1, 1, 32141, '2', 'ADMIN', '2016-02-16', '2016-02-26 09:34:25', '2016-02-26 02:34:25', 0),
(86, 1, 1, 32141, '2', 'ADMIN', '2016-02-16', '2016-02-26 09:38:09', '2016-02-26 02:38:09', 0),
(87, 1, 3, 32141, '2', 'ADMIN', '2016-02-26', '2016-02-26 09:38:15', '2016-02-26 02:38:15', 0),
(88, 1, 1, 32141, '1', '', '2016-02-26', '2016-02-26 10:51:30', '2016-02-26 03:51:30', 523),
(89, 1, 3, 32141, '1', '', '2016-02-26', '2016-02-26 10:52:06', '2016-02-26 03:52:06', 523),
(90, 1, 3, 32141, '2', 'ADMIN', '2016-02-25', '2016-02-26 10:52:57', '2016-02-26 03:52:57', 523),
(91, 1, 1, 32141, '1', '', '2016-02-26', '2016-02-26 10:54:51', '2016-02-26 03:54:51', 523),
(92, 2, 2, 32141, '1', '', '2016-02-01', '2016-02-26 11:16:59', '2016-02-26 04:27:48', 523),
(93, 2, 4, 32141, '2', 'ADMIN', '2016-02-09', '2016-02-26 11:21:07', '2016-02-26 04:21:07', 523),
(94, 2, 2, 32141, '1', '', '2016-02-09', '2016-02-26 11:23:33', '2016-02-26 04:28:28', 523),
(95, 2, 2, 32141, '1', '', '2016-02-25', '2016-02-26 11:28:33', '2016-02-26 06:53:06', 523),
(96, 2, 4, 32141, '1', '', '2016-02-25', '2016-02-26 11:29:13', '2016-02-26 06:14:29', 523),
(97, 3, 8, 32141, '2', 'ADMIN', '2016-02-01', '2016-02-26 13:08:11', '2016-02-26 06:38:50', 523),
(98, 3, 8, 32141, '2', 'ADMIN', '2016-01-01', '2016-02-26 13:08:16', '2016-02-26 06:08:16', 523),
(99, 1, 3, 32141, '1', '', '2016-02-24', '2016-02-26 13:11:45', '2016-02-26 06:11:45', 523),
(100, 1, 3, 32141, '1', '', '2016-02-24', '2016-02-26 13:11:50', '2016-02-26 06:11:50', 523),
(101, 1, 1, 32141, '2', 'ADMIN', '2016-02-22', '2016-02-26 13:11:53', '2016-02-26 06:11:53', 523),
(102, 1, 3, 32141, '2', 'ADMIN', '2016-02-26', '2016-02-26 13:13:11', '2016-02-26 06:13:11', 523),
(103, 1, 1, 32141, '2', 'ADMIN', '2016-02-26', '2016-02-26 13:13:15', '2016-02-26 06:13:15', 523),
(104, 2, 4, 32141, '2', 'ADMIN', '2016-02-17', '2016-02-26 13:14:24', '2016-02-26 06:14:24', 523),
(105, 3, 11, 32141, '1', '', '2016-01-01', '2016-02-26 13:20:15', '2016-02-26 06:23:50', 523),
(106, 3, 12, 32141, '1', '', '2016-01-01', '2016-02-26 13:21:45', '2016-02-26 06:23:41', 523),
(107, 3, 10, 32141, '1', '', '2016-01-01', '2016-02-26 13:33:22', '2016-02-26 06:38:27', 523),
(108, 3, 5, 32141, '1', '', '2016-02-01', '2016-02-26 13:38:44', '2016-02-26 06:38:44', 523),
(109, 3, 5, 32141, '2', 'ADMIN', '2016-01-01', '2016-02-26 13:38:47', '2016-02-26 06:38:47', 523),
(110, 1, 1, 32141, '2', 'ADMIN', '2016-01-07', '2016-02-26 13:42:41', '2016-02-26 06:42:41', 523),
(111, 1, 1, 32141, '2', 'ADMIN', '2016-02-26', '2016-02-26 13:48:11', '2016-02-26 06:48:11', 0),
(112, 1, 3, 32141, '1', '', '2016-02-25', '2016-02-26 13:48:16', '2016-02-26 06:48:16', 0),
(113, 1, 1, 32141, '2', 'ADMIN', '2016-03-02', '2016-03-02 13:54:58', '2016-03-02 06:54:58', 0),
(114, 1, 1, 123, '2', 'ADMIN', '2016-03-16', '2016-03-16 12:15:15', '2016-03-16 05:15:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_history`
--

CREATE TABLE `t_history` (
  `id` int(11) NOT NULL,
  `id_user` varchar(20) DEFAULT NULL,
  `aksi` varchar(200) DEFAULT NULL,
  `keterangan` text,
  `ip` varchar(20) DEFAULT NULL,
  `nama_host` varchar(100) DEFAULT NULL,
  `mac_address` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_history`
--

INSERT INTO `t_history` (`id`, `id_user`, `aksi`, `keterangan`, `ip`, `nama_host`, `mac_address`, `created_at`, `updated_at`) VALUES
(205, 'byu', '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-02-24 08:20:20'),
(206, 'byu', '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-02-24 08:21:55'),
(207, 'byu', '1', 'Insert Master Absensi,  (2016-02-18) ''ra genah''', '::1', 'system32-PC', '::1', NULL, '2016-02-24 08:30:26'),
(208, 'byu', '1', 'Insert Master Absensi, 54326 (2016-02-11) ''''', '::1', 'system32-PC', '::1', NULL, '2016-02-24 08:36:58'),
(209, 'byu', '1', 'Insert Master Absensi, ipung (2016-02-16) ''''', '::1', 'system32-PC', '::1', NULL, '2016-02-24 08:42:49'),
(210, 'byu', '1', 'Insert Master Absensi, ipung (2016-02-04) ''''', '::1', 'system32-PC', '::1', NULL, '2016-02-24 08:45:12'),
(211, 'byu', '1', 'Insert Master Absensi, ipung (2016-02-18) ''haha''', '::1', 'system32-PC', '::1', NULL, '2016-02-24 08:45:57'),
(212, 'byu', '1', 'Insert Master Absensi, 54326 (2016-02-10) ''''', '::1', 'system32-PC', '::1', NULL, '2016-02-24 08:47:07'),
(213, 'byu', '1', 'Insert Master Absensi, ipung (2016-02-05) ''wkwkwkwkw''', '::1', 'system32-PC', '::1', NULL, '2016-02-24 08:48:01'),
(214, 'byu', '1', 'Update Master Absensi,  => 1 byu 3 1900-12-06 edan banget admin 2016-02-24 16:15:44', '::1', 'system32-PC', '::1', NULL, '2016-02-24 09:15:44'),
(215, 'byu', '1', 'Update Master Absensi, [{"id":"3","id_petugas":"IPG","absen":"2","tgl":"2016-03-01","keterangan":"sakit","created_by":"rejak","created_at":"2016-02-21 20:53:54","updated_at":"2016-02-21 20:53:54"}] => {"id":"3","id_petugas":"IPG","absen":"2","tgl":"2016-03-01","keterangan":"hooooooooooooooooooooooooo","created_by":"admin","created_at":"2016-02-24 16:16:09"}', '::1', 'system32-PC', '::1', NULL, '2016-02-24 09:16:09'),
(216, 'byu', '2', 'Update Master Pengaduan, Verifikasi {"id":"177","status_verifikasi":"2","tgl_verifikasi":false,"verifikator":"bayu","keterangan_verifikator":"sudah di perbaiki"}', '::1', 'system32-PC', '::1', NULL, '2016-02-24 09:29:22'),
(217, 'byu', '1', 'Insert Master Pengaduan, {"pengadu":"2","id_jenis":"p2","id_petugas":"masy","kode_unit_parkir":"srf24","tgl_aduan":" ->post(''tgl_aduan'')","keterangan":"vsfv ","created_by":"admin","created_at":"2016-02-24 16:30:37"}', '::1', 'system32-PC', '::1', NULL, '2016-02-24 09:30:37'),
(218, 'byu', '1', 'Insert Master Pengaduan, {"pengadu":"1","id_jenis":"p3","id_petugas":"54326","kode_unit_parkir":"4qtf","tgl_aduan":" ->post(''tgl_aduan'')","keterangan":"werfvd","created_by":"admin","created_at":"2016-02-24 16:31:09"}', '::1', 'system32-PC', '::1', NULL, '2016-02-24 09:31:09'),
(219, 'byu', '1', 'Insert Jadwal Maintenance , {"id_periode_maintenance":"3","kegiatan":"Masang Wifi","created_by":"ipung","created_at":"2016-02-24 16:39:04"}', '::1', 'system32-PC', '::1', NULL, '2016-02-24 09:39:04'),
(220, 'byu', '3', 'Delete Jadwal Maintenance , [{"id_kegiatan":"13","id_periode_maintenance":"3","kegiatan":"Masang Wifi"}]', '::1', 'system32-PC', '::1', NULL, '2016-02-24 09:39:20'),
(221, 'byu', '2', 'Update Jadwal Maintenance , [{"id_kegiatan":"8","id_periode_maintenance":"3","kegiatan":"Golek Kacang"}] => {"id_periode_maintenance":"3","kegiatan":"Masang Wifi"}', '::1', 'system32-PC', '::1', NULL, '2016-02-24 09:40:34'),
(222, 'byu', '2', 'Update Jadwal Maintenance , [{"id_kegiatan":"8","id_periode_maintenance":"3","kegiatan":"Golek Kacang"}] => {"id_periode_maintenance":"3","kegiatan":"Masang Wifi\\r\\n"}', '::1', 'system32-PC', '::1', NULL, '2016-02-24 09:41:09'),
(223, 'byu', '1', 'Update Pengecekan Mingguan , {"verifikator":"byu","id_periode_maintenance":2,"id_kegiatan":"4","status_verifikasi":2,"tgl_verifikasi":"2016-2-17","created_at":"2016-02-24 16:59:17"}', '::1', 'system32-PC', '::1', NULL, '2016-02-24 09:59:17'),
(224, 'byu', '2', 'Update Pengecekan Mingguan , [{"id_kegiatan":"2","status_verifikasi":"2","verifikator":"byu","tgl_verifikasi":"2016-02-17","updated_at":"2016-02-24 07:37:55"}] => {"verifikator":null,"tgl_verifikasi":"2016-2-17","status_verifikasi":1,"updated_at":"2016-02-24 17:03:52"}', '::1', 'system32-PC', '::1', NULL, '2016-02-24 10:03:52'),
(225, 'byu', '2', 'Update Pengecekan Mingguan , [{"id_kegiatan":"2","status_verifikasi":"1","verifikator":"","tgl_verifikasi":"2016-02-01","updated_at":"2016-02-24 07:38:01"}] => {"verifikator":"byu","status_verifikasi":2,"tgl_verifikasi":"2016-2-1","updated_at":"2016-02-24 17:04:07"}', '::1', 'system32-PC', '::1', NULL, '2016-02-24 10:04:07'),
(226, 'byu', '1', 'Insert Pengecekan Harian, {"verifikator":"byu","id_periode_maintenance":3,"id_kegiatan":"1","status_verifikasi":2,"tgl_verifikasi":"2016-2-23","created_at":"2016-02-24 17:04:30"}', '::1', 'system32-PC', '::1', NULL, '2016-02-24 10:04:30'),
(227, 'byu', '2', 'Update Pengecekan , [{"id_kegiatan":"1","status_verifikasi":"2","verifikator":"byu","tgl_verifikasi":"2016-02-23","updated_at":"2016-02-24 17:04:30"}] => {"verifikator":null,"tgl_verifikasi":"2016-2-23","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-24 10:04:45'),
(228, 'byu', '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-02-24 14:36:33'),
(229, 'byu', '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-02-24 14:39:38'),
(230, 'byu', '1', 'insert Master User,{"id_user":"REZA940","nama_lengkap":"rreza saputra","nip":"0937181","nik":"876291389","tmpt_lahir":"BLORA","tgl_lahir":"17-02-2016","jabatan":"1","telp":"09381731913","created_at":"2016-02-24 22:46:25"} + admin + {"id_user":"reza940","role":0,"username":"rejak","password":"8806ae0d9c8eb9e58da741d380b6d94e","created_at":"2016-02-24 22:46:25"}', '::1', 'system32-PC', '::1', NULL, '2016-02-24 15:46:25'),
(231, 'byu', '3', 'Delete User, [{"id":"26","id_user":"REZA940","nama_lengkap":"rreza saputra","jabatan":"1","tmpt_lahir":"BLORA","tgl_lahir":"17-02-2016","nip":"0937181","nik":"876291389","telp":"09381731913","keterangan":"","created_at":"22:46:25","update_at":"2016-02-24 22:46:25"}]', '::1', 'system32-PC', '::1', NULL, '2016-02-24 15:51:42'),
(232, 'byu', '1', 'insert Master User,{"id_user":"RQQQQE","nama_lengkap":"Nurreza Adi S","nip":"948209","nik":"0984298","tmpt_lahir":"PATI","tgl_lahir":"17-02-2016","jabatan":"1","telp":"98207384","created_at":"2016-02-24 22:52:37"} + admin + {"id_user":"rqqqqe","role":0,"username":"rejak","password":"8806ae0d9c8eb9e58da741d380b6d94e","created_at":"2016-02-24 22:52:37"}', '::1', 'system32-PC', '::1', NULL, '2016-02-24 15:52:37'),
(233, 'byu', '1', 'insert Master User,{"id_user":"IP","nama_lengkap":"jlfaj","nip":"084510287","nik":"6796936","tmpt_lahir":"OIAUJSL","tgl_lahir":"17-02-2016","jabatan":"1","telp":"iukhj,nams","created_at":"2016-02-24 23:02:12"} + admin + {"id_user":"ip","role":0,"username":"ipung","password":"2c21ea4dfaae1f43f6f917bc2b400a42","created_at":"2016-02-24 23:02:12"}', '::1', 'system32-PC', '::1', NULL, '2016-02-24 16:02:12'),
(234, 'byu', '1', 'insert Master User,{"id_user":"IPUNGGG","nama_lengkap":"ipunggg","nip":"09973685","nik":"6578787","tmpt_lahir":"PATI","tgl_lahir":"17-02-2016","jabatan":"1","telp":"08845278","created_at":"2016-02-24 23:10:34"} + admin + {"id_user":"ipunggg","role":0,"username":"ipung","password":"72c936fc65ed18442a81ea8ca4b5ab20","created_at":"2016-02-24 23:10:34"}', '::1', 'system32-PC', '::1', NULL, '2016-02-24 16:10:34'),
(235, 'byu', '2', 'Update User Admin , [{"id":"19","id_user":"masy","nama_lengkap":"Masyarakat","jabatan":"3","tmpt_lahir":"REMBANG","tgl_lahir":"22-02-2016","nip":"2334","nik":"2424","telp":"2434","keterangan":"","created_at":"00:00:00","update_at":"2016-02-21 18:34:15"}] + delete admin +masy => ', '::1', 'system32-PC', '::1', NULL, '2016-02-24 16:17:56'),
(236, 'byu', '1', 'insert Master User,{"id_user":"983Y5HO","nama_lengkap":"yuyu","nip":"8768425","nik":"8768","tmpt_lahir":"PAI","tgl_lahir":"17-02-2016","jabatan":"1","telp":"24698736","created_at":"2016-02-24 23:45:13"} + admin + {"id_user":"983y5ho","role":0,"username":"97634q","password":"006296d38cf2db4fb75592313987b46a","created_at":"2016-02-24 23:45:13"}', '::1', 'system32-PC', '::1', NULL, '2016-02-24 16:45:13'),
(237, 'byu', '2', 'Update User Admin , [{"id":"29","id_user":"IPUNGG","nama_lengkap":"ipunggg7","jabatan":"1","tmpt_lahir":"PATI","tgl_lahir":"17-02-2016","nip":"09973685","nik":"6578787","telp":"08845278","keterangan":"","created_at":"23:10:34","update_at":"2016-02-24 23:16:07"}] + delete admin +IPUNGG => ', '::1', 'system32-PC', '::1', NULL, '2016-02-24 16:46:25'),
(238, 'byu', '2', 'Update User Admin , [{"id":"30","id_user":"983Y5HO","nama_lengkap":"yuyu8756","jabatan":"1","tmpt_lahir":"PAI","tgl_lahir":"17-02-2016","nip":"8768425","nik":"8768","telp":"24698736","keterangan":"","created_at":"23:45:13","update_at":"2016-02-24 23:46:05"}] + insert admin +{"id_user":"qweqwrqrq","role":0,"username":"97634q","password":"d41d8cd98f00b204e9800998ecf8427e","created_at":"2016-02-24 23:48:03"} => ', '::1', 'system32-PC', '::1', NULL, '2016-02-24 16:48:03'),
(239, NULL, '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-02-25 00:04:32'),
(240, NULL, '1', 'Insert Master Absensi, yuyu8756qweqqwe (2016-02-24), absen = 1 ('''')', '::1', 'system32-PC', '::1', NULL, '2016-02-25 00:07:28'),
(241, NULL, '1', 'insert Master User,{"id_user":"523J","nama_lengkap":"ipung","nip":"7632579496","nik":"86763294956","tmpt_lahir":"LASEM","tgl_lahir":"18-02-2016","jabatan":"1","telp":"08572624824","created_at":"2016-02-25 07:08:27"} + admin + {"id_user":"523j","role":0,"username":"ipun","password":"50551663f2c6481e4efa6a7011065702","created_at":"2016-02-25 07:08:27"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 00:08:27'),
(242, NULL, '1', 'insert Master User, {"id_user":"4260UJH","nama_lengkap":"rejak","nip":"wkwkwk","nik":"98235623596","tmpt_lahir":"BLORA","tgl_lahir":"17-02-2016","jabatan":"2","telp":"05759248281","created_at":"2016-02-25 07:08:55"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 00:08:55'),
(243, NULL, '1', 'Insert Master Absensi, rejak (2016-02-16), absen = 2 (''sakit'')', '::1', 'system32-PC', '::1', NULL, '2016-02-25 00:09:43'),
(244, NULL, '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-02-25 00:10:30'),
(245, NULL, '1', 'insert Master User,{"id_user":"3ADMIN","nama_lengkap":"admin","nip":"0947262574","nik":"47682485285","tmpt_lahir":"LASEM","tgl_lahir":"17-02-2016","jabatan":"1","telp":"02397258625","created_at":"2016-02-25 07:11:07"} + admin + {"id_user":"3admin","role":0,"username":"ipung","password":"72c936fc65ed18442a81ea8ca4b5ab20","created_at":"2016-02-25 07:11:07"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 00:11:07'),
(246, '3admin', '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-02-25 00:11:17'),
(247, '3admin', '1', 'Insert Master Absensi, rejak (2016-02-24), absen = 3 (''ijin cuti 5 tahun'')', '::1', 'system32-PC', '::1', NULL, '2016-02-25 00:11:33'),
(248, '3admin', '1', 'Insert Master alat, {"id_alat":"8926136","nama_alat":"Alat Parkir 1","keterangan":"alamat Kakarta 1","created_at":"2016-02-25 10:44:55"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 03:44:55'),
(249, '3admin', '1', 'Insert Master alat, {"id_alat":"32141","nama_alat":"Alat Parkir 2","keterangan":"haha lucu","created_at":"2016-02-25 10:47:29"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 03:47:29'),
(250, '3admin', '2', 'Update Master Alat , [{"id":"1","id_alat":"8926136","nama_alat":"0","keterangan":"alamat Kakarta 1","created_at":"2016-02-25 10:44:55","update_at":"2016-02-25 10:44:55"}] => {"id_alat":"8926136","nama_alat":"443q","keterangan":"\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\talamat Kakarta 1\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 03:59:22'),
(251, '3admin', '3', 'Delete Master alat , [{"id":"1","id_alat":"8926136","nama_alat":"443q","keterangan":"\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\talamat Kakarta 1\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t","created_at":"2016-02-25 10:44:55","update_at":"2016-02-25 10:59:22"}]', '::1', 'system32-PC', '::1', NULL, '2016-02-25 03:59:26'),
(252, '3admin', '3', 'Delete Master alat , [{"id":"1","id_alat":"8926136","nama_alat":"443q","lokasi":"\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\talamat Kakarta 1\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t","created_at":"2016-02-25 10:44:55","update_at":"2016-02-25 10:59:22"}]', '::1', 'system32-PC', '::1', NULL, '2016-02-25 04:01:56'),
(253, '3admin', '3', 'Delete Master alat , [{"id":"1","id_alat":"8926136","nama_alat":"443q","lokasi":"\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\talamat Kakarta 1\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t","created_at":"2016-02-25 10:44:55","update_at":"2016-02-25 10:59:22"}]', '::1', 'system32-PC', '::1', NULL, '2016-02-25 04:02:14'),
(254, '3admin', '3', 'Delete Master alat , [{"id":"1","id_alat":"8926136","nama_alat":"443q","lokasi":"\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\talamat Kakarta 1\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t","created_at":"2016-02-25 10:44:55","update_at":"2016-02-25 10:59:22"}]', '::1', 'system32-PC', '::1', NULL, '2016-02-25 04:02:51'),
(255, '3admin', '1', 'Insert Master alat, {"id_alat":"123","nama_alat":"alat parkiran","lokasi":"semarang","created_at":"2016-02-25 11:06:27"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 04:06:27'),
(256, '3admin', '2', 'Update Pengecekan Semseter, [{"id_kegiatan":"11","status_verifikasi":"1","verifikator":"","tgl_verifikasi":"2016-01-01","updated_at":"2016-02-24 10:41:44"}] => {"verifikator":"3ADMIN","status_verifikasi":2,"tgl_verifikasi":"2016-1-1","updated_at":"2016-02-25 12:00:13"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 05:00:13'),
(257, '3admin', '2', 'Update Pengecekan Semseter, [{"id_kegiatan":"11","status_verifikasi":"2","verifikator":"3ADMIN","tgl_verifikasi":"2016-01-01","updated_at":"2016-02-25 12:00:13"}] => {"verifikator":null,"tgl_verifikasi":"2016-1-1","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 05:02:48'),
(258, '3admin', '1', 'Insert Pengecekan Harian, {"verifikator":"3ADMIN","id_periode_maintenance":1,"id_kegiatan":"1","status_verifikasi":2,"tgl_verifikasi":"2016-2-32141","created_at":"2016-02-25 12:03:25"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 05:03:25'),
(259, '3admin', '2', 'Update Pengecekan Semseter, [{"id_kegiatan":"11","status_verifikasi":"1","verifikator":"","tgl_verifikasi":"2016-01-01","updated_at":"2016-02-25 12:00:13"}] => {"verifikator":"3ADMIN","status_verifikasi":2,"tgl_verifikasi":"2016-1-1","updated_at":"2016-02-25 12:05:07"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 05:05:07'),
(260, '3admin', '1', 'Insert Pengecekan Mingguan , {"verifikator":"3ADMIN","id_periode_maintenance":2,"id_alat":"32141","id_kegiatan":"2","status_verifikasi":2,"tgl_verifikasi":"2016-1-1","created_at":"2016-02-25 12:28:25"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 05:28:26'),
(261, '3admin', '1', 'Insert Pengecekan Mingguan , {"verifikator":"3ADMIN","id_periode_maintenance":2,"id_alat":"32141","id_kegiatan":"2","status_verifikasi":2,"tgl_verifikasi":"2016-1-25","created_at":"2016-02-25 12:28:32"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 05:28:32'),
(262, '3admin', '1', 'Insert Pengecekan Mingguan , {"verifikator":"3ADMIN","id_periode_maintenance":2,"id_alat":"32141","id_kegiatan":"4","status_verifikasi":2,"tgl_verifikasi":"2016-1-25","created_at":"2016-02-25 12:28:38"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 05:28:38'),
(263, '3admin', '2', 'Update Pengecekan Mingguan , [{"id_kegiatan":"2","status_verifikasi":"2","verifikator":"3ADMIN","tgl_verifikasi":"2016-01-01","updated_at":"2016-02-25 12:28:25"}] => {"verifikator":null,"tgl_verifikasi":"2016-1-1","status_verifikasi":1,"updated_at":"2016-02-25 12:28:42"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 05:28:42'),
(264, '3admin', '2', 'Update Pengecekan Mingguan , [{"id_kegiatan":"2","status_verifikasi":"1","verifikator":"","tgl_verifikasi":"2016-01-01","updated_at":"2016-02-25 12:28:42"}] => {"verifikator":"3ADMIN","status_verifikasi":2,"tgl_verifikasi":"2016-1-1","updated_at":"2016-02-25 12:28:45"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 05:28:45'),
(265, '3admin', '1', 'Insert Pengecekan Mingguan , {"verifikator":"3ADMIN","id_periode_maintenance":2,"id_alat":"32141","id_kegiatan":"2","status_verifikasi":2,"tgl_verifikasi":"2016-2-25","created_at":"2016-02-25 13:36:04"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 06:36:04'),
(266, '3admin', '1', 'Insert Pengecekan Bulanan, {"verifikator":"3ADMIN","id_periode_maintenance":3,"id_kegiatan":"5","id_alat":"32141","status_verifikasi":2,"tgl_verifikasi":"2016-2-1","created_at":"2016-02-25 13:36:21"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 06:36:21'),
(267, '3admin', '1', 'Insert Pengecekan Bulanan, {"verifikator":"3ADMIN","id_periode_maintenance":3,"id_kegiatan":"5","id_alat":"32141","status_verifikasi":2,"tgl_verifikasi":"2016-1-1","created_at":"2016-02-25 13:36:25"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 06:36:25'),
(268, '3admin', '1', 'Insert Pengecekan Bulanan, {"verifikator":"3ADMIN","id_periode_maintenance":3,"id_kegiatan":"8","id_alat":"32141","status_verifikasi":2,"tgl_verifikasi":"2016-2-1","created_at":"2016-02-25 13:36:33"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 06:36:33'),
(269, '3admin', '2', 'Update Pengecekan Bulanan, [{"id_kegiatan":"5","status_verifikasi":"2","verifikator":"byu","tgl_verifikasi":"2016-02-01","updated_at":"2016-02-24 10:08:14"},{"id_kegiatan":"5","status_verifikasi":"2","verifikator":"3ADMIN","tgl_verifikasi":"2016-02-01","updated_at":"2016-02-25 13:36:21"}] => {"verifikator":null,"tgl_verifikasi":"2016-2-1","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 06:36:36'),
(270, '3admin', '2', 'Update Pengecekan Bulanan, [{"id_kegiatan":"8","status_verifikasi":"2","verifikator":"byu","tgl_verifikasi":"2016-02-01","updated_at":"2016-02-24 10:29:05"},{"id_kegiatan":"8","status_verifikasi":"2","verifikator":"3ADMIN","tgl_verifikasi":"2016-02-01","updated_at":"2016-02-25 13:36:33"}] => {"verifikator":null,"tgl_verifikasi":"2016-2-1","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 06:36:39'),
(271, '3admin', '2', 'Update Pengecekan Bulanan, [{"id_kegiatan":"5","status_verifikasi":"2","verifikator":"byu","tgl_verifikasi":"2016-02-01","updated_at":"2016-02-24 10:08:14"},{"id_kegiatan":"5","status_verifikasi":"1","verifikator":"","tgl_verifikasi":"2016-02-01","updated_at":"2016-02-25 13:36:21"}] => {"verifikator":"3ADMIN","status_verifikasi":2,"tgl_verifikasi":"2016-2-1","updated_at":"2016-02-25 13:36:50"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 06:36:50'),
(272, '3admin', '2', 'Update Pengecekan Bulanan, [{"id_kegiatan":"5","status_verifikasi":"2","verifikator":"byu","tgl_verifikasi":"2016-02-01","updated_at":"2016-02-24 10:08:14"},{"id_kegiatan":"5","status_verifikasi":"2","verifikator":"3ADMIN","tgl_verifikasi":"2016-02-01","updated_at":"2016-02-25 13:36:50"}] => {"verifikator":null,"tgl_verifikasi":"2016-2-1","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 06:36:55'),
(273, '3admin', '2', 'Update Pengecekan Bulanan, [{"id_kegiatan":"5","status_verifikasi":"2","verifikator":"byu","tgl_verifikasi":"2016-02-01","updated_at":"2016-02-24 10:08:14"},{"id_kegiatan":"5","status_verifikasi":"1","verifikator":"","tgl_verifikasi":"2016-02-01","updated_at":"2016-02-25 13:36:50"}] => {"verifikator":"3ADMIN","status_verifikasi":2,"tgl_verifikasi":"2016-2-1","updated_at":"2016-02-25 13:36:59"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 06:36:59'),
(274, '3admin', '1', 'Insert Pengecekan Bulanan, {"verifikator":"3ADMIN","id_periode_maintenance":3,"id_kegiatan":"8","id_alat":"32141","status_verifikasi":2,"tgl_verifikasi":"2016-1-1","created_at":"2016-02-25 13:37:50"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 06:37:50'),
(275, '3admin', '2', 'Update Pengecekan Bulanan, [{"id_kegiatan":"8","status_verifikasi":"2","verifikator":"3ADMIN","tgl_verifikasi":"2016-01-01","updated_at":"2016-02-25 13:37:50"}] => {"verifikator":null,"tgl_verifikasi":"2016-1-1","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 06:37:53'),
(276, '3admin', '1', 'Insert Pengecekan Triwulan, {"verifikator":"3ADMIN","id_periode_maintenance":3,"id_kegiatan":"9","id_alat":"32141","status_verifikasi":2,"tgl_verifikasi":"2016-1-1","created_at":"2016-02-25 13:38:06"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 06:38:06'),
(277, '3admin', '1', 'Insert Pengecekan Triwulan, {"verifikator":"3ADMIN","id_periode_maintenance":3,"id_kegiatan":"10","id_alat":"32141","status_verifikasi":2,"tgl_verifikasi":"2016-1-1","created_at":"2016-02-25 13:38:15"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 06:38:15'),
(278, '3admin', '2', 'Update Pengecekan Triwulan, [{"id_kegiatan":"9","status_verifikasi":"1","verifikator":"","tgl_verifikasi":"2016-01-01","updated_at":"2016-02-24 10:26:27"},{"id_kegiatan":"9","status_verifikasi":"2","verifikator":"3ADMIN","tgl_verifikasi":"2016-01-01","updated_at":"2016-02-25 13:38:06"}] => {"verifikator":null,"tgl_verifikasi":"2016-1-1","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 06:38:19'),
(279, '3admin', '1', 'Insert Pengecekan Semseter, {"verifikator":"3ADMIN","id_periode_maintenance":3,"id_kegiatan":"11","id_alat":"123","status_verifikasi":2,"tgl_verifikasi":"2016-1-1","created_at":"2016-02-25 13:38:30"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 06:38:30'),
(280, '3admin', '1', 'Insert Pengecekan Semseter, {"verifikator":"3ADMIN","id_periode_maintenance":3,"id_kegiatan":"12","id_alat":"32141","status_verifikasi":2,"tgl_verifikasi":"2016-1-1","created_at":"2016-02-25 13:38:39"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 06:38:39'),
(281, '3admin', '1', 'Insert Pengecekan Harian, {"verifikator":"3ADMIN","id_alat":"123","id_periode_maintenance":1,"id_kegiatan":"1","status_verifikasi":2,"tgl_verifikasi":"2016-1-12","created_at":"2016-02-25 13:47:25"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 06:47:25'),
(282, '3admin', '1', 'Insert Pengecekan Harian, {"verifikator":"3ADMIN","id_alat":"123","id_periode_maintenance":1,"id_kegiatan":"1","status_verifikasi":2,"tgl_verifikasi":"2016-2-25","created_at":"2016-02-25 13:47:38"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 06:47:38'),
(283, '3admin', '2', 'Update Pengecekan , [{"id_kegiatan":"1","status_verifikasi":"2","verifikator":"3ADMIN","tgl_verifikasi":"2016-02-25","updated_at":"2016-02-25 13:47:38"}] => {"verifikator":null,"tgl_verifikasi":"2016-2-25","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 06:47:45'),
(284, '3admin', '3', 'Delete Jadwal Maintenance , [{"id_kegiatan":"9","id_periode_maintenance":"4","kegiatan":"Cek Mesin Motor\\r\\n"}]', '::1', 'system32-PC', '::1', NULL, '2016-02-25 06:52:13'),
(285, '3admin', '1', 'Insert Pengecekan Harian, {"verifikator":"25","id_alat":"undefined123","id_periode_maintenance":1,"id_kegiatan":"3","status_verifikasi":2,"tgl_verifikasi":"3ADMIN-2016-2","created_at":"2016-02-25 14:18:38"}', '::1', 'system32-PC', '::1', NULL, '2016-02-25 07:18:38'),
(286, NULL, '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-02-25 22:16:15'),
(287, NULL, '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-02-26 02:03:55'),
(288, NULL, '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-02-26 02:04:16'),
(289, NULL, '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-02-26 02:09:22'),
(290, NULL, '1', 'insert Master User,{"id_user":"ADMIN","nama_lengkap":"admni","nip":"dmin","nik":"admin","tmpt_lahir":"ADMIN","tgl_lahir":"17-02-2016","jabatan":"1","telp":"08371396713","created_at":"2016-02-26 09:09:51"} + admin + {"id_user":"ADMIN","role":0,"username":"admin","password":"21232f297a57a5a743894a0e4a801fc3","created_at":"2016-02-26 09:09:51"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 02:09:51'),
(291, 'ADMIN', '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-02-26 02:10:28'),
(292, 'ADMIN', '1', 'Insert Pengecekan Harian, {"verifikator":"ADMIN","id_alat":"32141","id_periode_maintenance":1,"id_kegiatan":"1","status_verifikasi":2,"tgl_verifikasi":"2016-2-10","created_at":"2016-02-26 09:30:03"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 02:30:03'),
(293, 'ADMIN', '1', 'Insert Pengecekan Harian, {"verifikator":"ADMIN","id_alat":"32141","id_periode_maintenance":1,"id_kegiatan":"1","status_verifikasi":2,"tgl_verifikasi":"2016-2-22","created_at":"2016-02-26 09:31:21"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 02:31:21'),
(294, 'ADMIN', '1', 'Insert Pengecekan Harian, {"verifikator":"ADMIN","id_alat":"32141","id_periode_maintenance":1,"id_kegiatan":"1","status_verifikasi":2,"tgl_verifikasi":"2016-2-26","created_at":"2016-02-26 09:31:43"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 02:31:43'),
(295, 'ADMIN', '1', 'Insert Pengecekan Harian, {"verifikator":"ADMIN","id_alat":"32141","id_periode_maintenance":1,"id_kegiatan":"1","status_verifikasi":2,"tgl_verifikasi":"2016-2-26","created_at":"2016-02-26 09:34:20"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 02:34:20'),
(296, 'ADMIN', '1', 'Insert Pengecekan Harian, {"verifikator":"ADMIN","id_alat":"32141","id_periode_maintenance":1,"id_kegiatan":"1","status_verifikasi":2,"tgl_verifikasi":"2016-2-16","created_at":"2016-02-26 09:34:25"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 02:34:25'),
(297, 'ADMIN', '1', 'Insert Pengecekan Harian, {"verifikator":"ADMIN","id_alat":"32141","id_periode_maintenance":1,"id_kegiatan":"1","status_verifikasi":2,"tgl_verifikasi":"2016-2-16","created_at":"2016-02-26 09:38:09"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 02:38:09'),
(298, 'ADMIN', '1', 'Insert Pengecekan Harian, {"verifikator":"ADMIN","id_alat":"32141","id_periode_maintenance":1,"id_kegiatan":"3","status_verifikasi":2,"tgl_verifikasi":"2016-2-26","created_at":"2016-02-26 09:38:15"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 02:38:15'),
(299, 'ADMIN', '2', 'Update Pengecekan , [{"id_kegiatan":"1","status_verifikasi":"2","verifikator":"ADMIN","tgl_verifikasi":"2016-02-26","updated_at":"2016-02-26 09:31:43"},{"id_kegiatan":"1","status_verifikasi":"2","verifikator":"ADMIN","tgl_verifikasi":"2016-02-26","updated_at":"2016-02-26 09:34:20"}] => {"verifikator":null,"tgl_verifikasi":"2016-2-26","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 02:38:43'),
(300, 'ADMIN', '1', 'Insert Pengecekan Harian, {"verifikator":"ADMIN","id_alat":"32141","id_periode_maintenance":1,"id_petugas":"523J","id_kegiatan":"1","status_verifikasi":2,"tgl_verifikasi":"2016-2-26","created_at":"2016-02-26 10:51:30"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 03:51:30'),
(301, 'ADMIN', '1', 'Insert Pengecekan Harian, {"verifikator":"ADMIN","id_alat":"32141","id_periode_maintenance":1,"id_petugas":"523J","id_kegiatan":"3","status_verifikasi":2,"tgl_verifikasi":"2016-2-26","created_at":"2016-02-26 10:52:06"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 03:52:06'),
(302, 'ADMIN', '1', 'Insert Pengecekan Harian, {"verifikator":"ADMIN","id_alat":"32141","id_periode_maintenance":1,"id_petugas":"523J","id_kegiatan":"3","status_verifikasi":2,"tgl_verifikasi":"2016-2-25","created_at":"2016-02-26 10:52:57"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 03:52:57'),
(303, 'ADMIN', '2', 'Update Pengecekan , [] => {"verifikator":null,"tgl_verifikasi":"2016-2-26","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 03:54:44'),
(304, 'ADMIN', '1', 'Insert Pengecekan Harian, {"verifikator":"ADMIN","id_alat":"32141","id_periode_maintenance":1,"id_petugas":"523J","id_kegiatan":"1","status_verifikasi":2,"tgl_verifikasi":"2016-2-26","created_at":"2016-02-26 10:54:51"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 03:54:51'),
(305, 'ADMIN', '1', 'Insert Pengecekan Mingguan , {"verifikator":"ADMIN","id_periode_maintenance":2,"id_alat":"32141","id_petugas":"523J","id_kegiatan":"2","status_verifikasi":2,"tgl_verifikasi":"2016-2-1","created_at":"2016-02-26 11:16:59"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 04:16:59'),
(306, 'ADMIN', '1', 'Insert Pengecekan Mingguan , {"verifikator":"ADMIN","id_periode_maintenance":2,"id_alat":"32141","id_petugas":"523J","id_kegiatan":"4","status_verifikasi":2,"tgl_verifikasi":"2016-2-9","created_at":"2016-02-26 11:21:07"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 04:21:07'),
(307, 'ADMIN', '2', 'Update Pengecekan , [] => {"verifikator":null,"tgl_verifikasi":"2016-2-2","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 04:21:11'),
(308, 'ADMIN', '2', 'Update Pengecekan , [] => {"verifikator":null,"tgl_verifikasi":"2016-2-2","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 04:21:23'),
(309, 'ADMIN', '2', 'Update Pengecekan , [] => {"verifikator":null,"tgl_verifikasi":"2016-2-1","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 04:23:09'),
(310, 'ADMIN', '2', 'Update Pengecekan , [] => {"verifikator":null,"tgl_verifikasi":"2016-2-2","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 04:23:26'),
(311, 'ADMIN', '1', 'Insert Pengecekan Mingguan , {"verifikator":"ADMIN","id_periode_maintenance":2,"id_alat":"32141","id_petugas":"523J","id_kegiatan":"2","status_verifikasi":2,"tgl_verifikasi":"2016-2-9","created_at":"2016-02-26 11:23:33"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 04:23:33'),
(312, 'ADMIN', '2', 'Update Pengecekan Mingguan , [{"id_kegiatan":"2","status_verifikasi":"1","verifikator":"","tgl_verifikasi":"2016-02-01","updated_at":"2016-02-26 11:16:59"}] => {"verifikator":"ADMIN","status_verifikasi":2,"tgl_verifikasi":"2016-2-1","updated_at":"2016-02-26 11:23:40"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 04:23:40'),
(313, 'ADMIN', '2', 'Update Pengecekan Mingguan , [] => {"verifikator":null,"tgl_verifikasi":"2016-2-9","status_verifikasi":1,"updated_at":"2016-02-26 11:26:34"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 04:26:34'),
(314, 'ADMIN', '2', 'Update Pengecekan Mingguan , [{"id_kegiatan":"2","status_verifikasi":"1","verifikator":"","tgl_verifikasi":"2016-02-09","updated_at":"2016-02-26 11:26:34"}] => {"verifikator":"ADMIN","status_verifikasi":2,"tgl_verifikasi":"2016-2-9","updated_at":"2016-02-26 11:26:41"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 04:26:41'),
(315, 'ADMIN', '2', 'Update Pengecekan Mingguan , [] => {"verifikator":null,"tgl_verifikasi":"2016-2-1","status_verifikasi":1,"updated_at":"2016-02-26 11:27:48"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 04:27:48'),
(316, 'ADMIN', '2', 'Update Pengecekan Mingguan , [] => {"verifikator":null,"tgl_verifikasi":"2016-2-9","status_verifikasi":1,"updated_at":"2016-02-26 11:28:28"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 04:28:28'),
(317, 'ADMIN', '1', 'Insert Pengecekan Mingguan , {"verifikator":"ADMIN","id_periode_maintenance":2,"id_alat":"32141","id_petugas":"523J","id_kegiatan":"2","status_verifikasi":2,"tgl_verifikasi":"2016-2-25","created_at":"2016-02-26 11:28:33"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 04:28:33'),
(318, 'ADMIN', '2', 'Update Pengecekan Mingguan , [] => {"verifikator":null,"tgl_verifikasi":"2016-2-25","status_verifikasi":1,"updated_at":"2016-02-26 11:28:38"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 04:28:38'),
(319, 'ADMIN', '2', 'Update Pengecekan Mingguan , [{"id_kegiatan":"2","status_verifikasi":"1","verifikator":"","tgl_verifikasi":"2016-02-25","updated_at":"2016-02-26 11:28:38"}] => {"verifikator":"ADMIN","status_verifikasi":2,"tgl_verifikasi":"2016-2-25","updated_at":"2016-02-26 11:29:08"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 04:29:08'),
(320, 'ADMIN', '1', 'Insert Pengecekan Mingguan , {"verifikator":"ADMIN","id_periode_maintenance":2,"id_alat":"32141","id_petugas":"523J","id_kegiatan":"4","status_verifikasi":2,"tgl_verifikasi":"2016-2-25","created_at":"2016-02-26 11:29:13"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 04:29:13'),
(321, 'ADMIN', '2', 'Update Pengecekan Mingguan , [] => {"verifikator":null,"tgl_verifikasi":"2016-2-25","status_verifikasi":1,"updated_at":"2016-02-26 11:29:31"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 04:29:31'),
(322, 'ADMIN', '2', 'Update Pengecekan Mingguan , [] => {"verifikator":null,"tgl_verifikasi":"2016-2-25","status_verifikasi":1,"updated_at":"2016-02-26 11:31:17"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 04:31:17'),
(323, 'ADMIN', '2', 'Update Pengecekan Mingguan , [{"id_kegiatan":"4","status_verifikasi":"1","verifikator":"","tgl_verifikasi":"2016-02-25","updated_at":"2016-02-26 11:31:17"}] => {"verifikator":"ADMIN","status_verifikasi":2,"tgl_verifikasi":"2016-2-25","updated_at":"2016-02-26 11:31:20"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 04:31:20'),
(324, 'ADMIN', '1', 'Insert Pengecekan Bulanan, {"verifikator":"ADMIN","id_periode_maintenance":3,"id_kegiatan":"8","id_alat":"32141","status_verifikasi":2,"id_petugas":"523J","tgl_verifikasi":"2016-2-1","created_at":"2016-02-26 13:08:11"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:08:11'),
(325, 'ADMIN', '1', 'Insert Pengecekan Bulanan, {"verifikator":"ADMIN","id_periode_maintenance":3,"id_kegiatan":"8","id_alat":"32141","status_verifikasi":2,"id_petugas":"523J","tgl_verifikasi":"2016-1-1","created_at":"2016-02-26 13:08:16"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:08:16'),
(326, 'ADMIN', '2', 'Update Pengecekan Bulanan, [] => {"verifikator":null,"tgl_verifikasi":"2016-2-1","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:08:23'),
(327, 'ADMIN', '2', 'Update Pengecekan , [] => {"verifikator":null,"tgl_verifikasi":"2016-2-26","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:11:11'),
(328, 'ADMIN', '1', 'Insert Pengecekan Harian, {"verifikator":"ADMIN","id_alat":"32141","id_periode_maintenance":1,"id_petugas":"523J","id_kegiatan":"3","status_verifikasi":2,"tgl_verifikasi":"2016-2-24","created_at":"2016-02-26 13:11:45"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:11:45'),
(329, 'ADMIN', '1', 'Insert Pengecekan Harian, {"verifikator":"ADMIN","id_alat":"32141","id_periode_maintenance":1,"id_petugas":"523J","id_kegiatan":"3","status_verifikasi":2,"tgl_verifikasi":"2016-2-24","created_at":"2016-02-26 13:11:50"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:11:50'),
(330, 'ADMIN', '1', 'Insert Pengecekan Harian, {"verifikator":"ADMIN","id_alat":"32141","id_periode_maintenance":1,"id_petugas":"523J","id_kegiatan":"1","status_verifikasi":2,"tgl_verifikasi":"2016-2-22","created_at":"2016-02-26 13:11:53"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:11:53'),
(331, 'ADMIN', '2', 'Update Pengecekan , [] => {"verifikator":null,"tgl_verifikasi":"2016-2-24","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:12:18'),
(332, 'ADMIN', '2', 'Update Pengecekan , [] => {"verifikator":null,"tgl_verifikasi":"2016-2-26","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:12:46'),
(333, 'ADMIN', '1', 'Insert Pengecekan Harian, {"verifikator":"ADMIN","id_alat":"32141","id_periode_maintenance":1,"id_petugas":"523J","id_kegiatan":"3","status_verifikasi":2,"tgl_verifikasi":"2016-2-26","created_at":"2016-02-26 13:13:11"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:13:11'),
(334, 'ADMIN', '1', 'Insert Pengecekan Harian, {"verifikator":"ADMIN","id_alat":"32141","id_periode_maintenance":1,"id_petugas":"523J","id_kegiatan":"1","status_verifikasi":2,"tgl_verifikasi":"2016-2-26","created_at":"2016-02-26 13:13:15"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:13:15'),
(335, 'ADMIN', '1', 'Insert Pengecekan Mingguan , {"verifikator":"ADMIN","id_periode_maintenance":2,"id_alat":"32141","id_petugas":"523J","id_kegiatan":"4","status_verifikasi":2,"tgl_verifikasi":"2016-2-17","created_at":"2016-02-26 13:14:24"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:14:24'),
(336, 'ADMIN', '2', 'Update Pengecekan Mingguan , [] => {"verifikator":null,"tgl_verifikasi":"2016-2-25","status_verifikasi":1,"updated_at":"2016-02-26 13:14:29"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:14:29'),
(337, 'ADMIN', '1', 'Insert Pengecekan Semseter, {"verifikator":"ADMIN","id_periode_maintenance":3,"id_kegiatan":"11","id_alat":"32141","status_verifikasi":2,"id_petugas":"523J","tgl_verifikasi":"2016-1-1","created_at":"2016-02-26 13:20:15"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:20:15'),
(338, 'ADMIN', '1', 'Insert Pengecekan Semseter, {"verifikator":"ADMIN","id_periode_maintenance":3,"id_kegiatan":"12","id_alat":"32141","status_verifikasi":2,"id_petugas":"523J","tgl_verifikasi":"2016-1-1","created_at":"2016-02-26 13:21:45"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:21:45'),
(339, 'ADMIN', '2', 'Update Pengecekan Semseter, [] => {"verifikator":null,"tgl_verifikasi":"2016-1-1","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:21:49'),
(340, 'ADMIN', '2', 'Update Pengecekan Semseter, [] => {"verifikator":"ADMIN","status_verifikasi":2,"tgl_verifikasi":"2016-1-1","updated_at":"2016-02-26 13:22:14"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:22:14'),
(341, 'ADMIN', '2', 'Update Pengecekan Semseter, [] => {"verifikator":null,"tgl_verifikasi":"2016-1-1","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:22:18'),
(342, 'ADMIN', '2', 'Update Pengecekan Semseter, [] => {"verifikator":null,"tgl_verifikasi":"2016-1-1","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:22:34'),
(343, 'ADMIN', '2', 'Update Pengecekan Semseter, [] => {"verifikator":null,"tgl_verifikasi":"2016-1-1","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:22:38'),
(344, 'ADMIN', '2', 'Update Pengecekan Semseter, [] => {"verifikator":"ADMIN","status_verifikasi":2,"tgl_verifikasi":"2016-1-1","updated_at":"2016-02-26 13:22:42"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:22:42'),
(345, 'ADMIN', '2', 'Update Pengecekan Semseter, [] => {"verifikator":"ADMIN","status_verifikasi":2,"tgl_verifikasi":"2016-1-1","updated_at":"2016-02-26 13:22:48"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:22:48'),
(346, 'ADMIN', '2', 'Update Pengecekan Semseter, [] => {"verifikator":null,"tgl_verifikasi":"2016-1-1","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:23:23'),
(347, 'ADMIN', '2', 'Update Pengecekan Semseter, [] => {"verifikator":"ADMIN","status_verifikasi":2,"tgl_verifikasi":"2016-1-1","updated_at":"2016-02-26 13:23:26"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:23:26'),
(348, 'ADMIN', '2', 'Update Pengecekan Semseter, [] => {"verifikator":null,"tgl_verifikasi":"2016-1-1","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:23:37'),
(349, 'ADMIN', '2', 'Update Pengecekan Semseter, [] => {"verifikator":"ADMIN","status_verifikasi":2,"tgl_verifikasi":"2016-1-1","updated_at":"2016-02-26 13:23:41"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:23:41'),
(350, 'ADMIN', '2', 'Update Pengecekan Semseter, [] => {"verifikator":null,"tgl_verifikasi":"2016-1-1","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:23:46'),
(351, 'ADMIN', '2', 'Update Pengecekan Semseter, [] => {"verifikator":"ADMIN","status_verifikasi":2,"tgl_verifikasi":"2016-1-1","updated_at":"2016-02-26 13:23:50"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:23:50'),
(352, 'ADMIN', '2', 'Update Pengecekan Semseter, [] => {"verifikator":null,"tgl_verifikasi":"2016-1-1","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:23:56'),
(353, 'ADMIN', '1', 'Insert Pengecekan Triwulan, {"verifikator":"ADMIN","id_periode_maintenance":3,"id_kegiatan":"10","id_alat":"32141","status_verifikasi":2,"id_petugas":"523J","tgl_verifikasi":"2016-1-1","created_at":"2016-02-26 13:33:22"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:33:22'),
(354, 'ADMIN', '2', 'Update Pengecekan Triwulan, [] => {"verifikator":null,"tgl_verifikasi":"2016-1-1","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:33:34'),
(355, 'ADMIN', '2', 'Update Pengecekan Triwulan, [] => {"verifikator":"ADMIN","status_verifikasi":2,"tgl_verifikasi":"2016-1-1","updated_at":"2016-02-26 13:34:39"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:34:39'),
(356, 'ADMIN', '2', 'Update Pengecekan Triwulan, [] => {"verifikator":null,"tgl_verifikasi":"2016-1-1","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:36:46'),
(357, 'ADMIN', '2', 'Update Pengecekan Triwulan, [] => {"verifikator":"ADMIN","status_verifikasi":2,"tgl_verifikasi":"2016-1-1","updated_at":"2016-02-26 13:38:19"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:38:19'),
(358, 'ADMIN', '2', 'Update Pengecekan Triwulan, [] => {"verifikator":null,"tgl_verifikasi":"2016-1-1","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:38:24'),
(359, 'ADMIN', '2', 'Update Pengecekan Triwulan, [] => {"verifikator":"ADMIN","status_verifikasi":2,"tgl_verifikasi":"2016-1-1","updated_at":"2016-02-26 13:38:27"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:38:27'),
(360, 'ADMIN', '2', 'Update Pengecekan Triwulan, [] => {"verifikator":null,"tgl_verifikasi":"2016-1-1","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:38:33'),
(361, 'ADMIN', '1', 'Insert Pengecekan Bulanan, {"verifikator":"ADMIN","id_periode_maintenance":3,"id_kegiatan":"5","id_alat":"32141","status_verifikasi":2,"id_petugas":"523J","tgl_verifikasi":"2016-2-1","created_at":"2016-02-26 13:38:44"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:38:44'),
(362, 'ADMIN', '1', 'Insert Pengecekan Bulanan, {"verifikator":"ADMIN","id_periode_maintenance":3,"id_kegiatan":"5","id_alat":"32141","status_verifikasi":2,"id_petugas":"523J","tgl_verifikasi":"2016-1-1","created_at":"2016-02-26 13:38:47"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:38:47'),
(363, 'ADMIN', '2', 'Update Pengecekan Bulanan, [] => {"verifikator":"ADMIN","status_verifikasi":2,"tgl_verifikasi":"2016-2-1","updated_at":"2016-02-26 13:38:50"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:38:50'),
(364, 'ADMIN', '2', 'Update Pengecekan Bulanan, [] => {"verifikator":null,"tgl_verifikasi":"2016-2-1","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:39:15'),
(365, 'ADMIN', '1', 'Insert Pengecekan Harian, {"verifikator":"ADMIN","id_alat":"32141","id_periode_maintenance":1,"id_petugas":"523J","id_kegiatan":"1","status_verifikasi":2,"tgl_verifikasi":"2016-1-7","created_at":"2016-02-26 13:42:41"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:42:41'),
(366, 'ADMIN', '1', 'Insert Pengecekan Harian, {"verifikator":"ADMIN","id_alat":"32141","id_periode_maintenance":1,"id_petugas":"MASY","id_kegiatan":"1","status_verifikasi":2,"tgl_verifikasi":"2016-2-26","created_at":"2016-02-26 13:48:11"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:48:11'),
(367, 'ADMIN', '1', 'Insert Pengecekan Harian, {"verifikator":"ADMIN","id_alat":"32141","id_periode_maintenance":1,"id_petugas":"MASY","id_kegiatan":"3","status_verifikasi":2,"tgl_verifikasi":"2016-2-25","created_at":"2016-02-26 13:48:16"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:48:17'),
(368, 'ADMIN', '2', 'Update Pengecekan , [] => {"verifikator":null,"tgl_verifikasi":"2016-2-25","status_verifikasi":1}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:48:25'),
(369, 'ADMIN', '2', 'Update Pengecekan Mingguan , [] => {"verifikator":null,"tgl_verifikasi":"2016-2-25","status_verifikasi":1,"updated_at":"2016-02-26 13:48:35"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:48:35'),
(370, 'ADMIN', '2', 'Update Pengecekan Mingguan , [{"id_kegiatan":"2","status_verifikasi":"1","verifikator":"","tgl_verifikasi":"2016-02-25","updated_at":"2016-02-26 11:29:31"}] => {"verifikator":"ADMIN","status_verifikasi":2,"tgl_verifikasi":"2016-2-25","updated_at":"2016-02-26 13:48:47"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:48:48'),
(371, 'ADMIN', '2', 'Update Pengecekan Mingguan , [] => {"verifikator":null,"tgl_verifikasi":"2016-2-25","status_verifikasi":1,"updated_at":"2016-02-26 13:53:06"}', '::1', 'system32-PC', '::1', NULL, '2016-02-26 06:53:06'),
(372, 'ADMIN', '1', 'Insert Master Absensi, ipung (2016-02-18), absen = 2 ('''')', '::1', 'system32-PC', '::1', NULL, '2016-02-26 07:53:15'),
(373, 'ADMIN', '1', 'Insert Pengecekan Harian, {"verifikator":"ADMIN","id_alat":"32141","id_periode_maintenance":1,"id_petugas":"MASY","id_kegiatan":"1","status_verifikasi":2,"tgl_verifikasi":"2016-3-2","created_at":"2016-03-02 13:54:58"}', '::1', 'system32-PC', '::1', NULL, '2016-03-02 06:54:58'),
(374, 'ADMIN', '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-03-06 02:27:08'),
(375, 'ADMIN', '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-03-06 05:26:10'),
(376, 'ADMIN', '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-03-10 02:14:14'),
(377, 'ADMIN', '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-03-10 05:51:32'),
(378, 'ADMIN', '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-03-10 08:51:18'),
(379, 'ADMIN', '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-03-10 12:49:12'),
(380, 'ADMIN', '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-03-10 16:51:07'),
(381, 'ADMIN', '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-03-10 21:35:41'),
(382, 'ADMIN', '1', 'Insert Jadwal Maintenance , {"id_periode_maintenance":"1","kegiatan":"h","created_by":"ipung","created_at":"2016-03-11 06:26:20"}', '::1', 'system32-PC', '::1', NULL, '2016-03-10 23:26:21'),
(383, 'ADMIN', '1', 'Insert Jadwal Maintenance , {"id_periode_maintenance":"1","kegiatan":"i\\r\\n","created_by":"ipung","created_at":"2016-03-11 06:26:25"}', '::1', 'system32-PC', '::1', NULL, '2016-03-10 23:26:25'),
(384, 'ADMIN', '1', 'Insert Jadwal Maintenance , {"id_periode_maintenance":"1","kegiatan":"413","created_by":"ipung","created_at":"2016-03-11 06:26:29"}', '::1', 'system32-PC', '::1', NULL, '2016-03-10 23:26:29'),
(385, 'ADMIN', '1', 'Insert Jadwal Maintenance , {"id_periode_maintenance":"1","kegiatan":"23w","created_by":"ipung","created_at":"2016-03-11 06:26:33"}', '::1', 'system32-PC', '::1', NULL, '2016-03-10 23:26:33'),
(386, 'ADMIN', '1', 'insert Master User, {"id_user":"ASF","nama_lengkap":"ipugna","nip":"79263596","nik":"983625","tmpt_lahir":"KHDSFUF","tgl_lahir":"18-03-2016","jabatan":"2","telp":"0935615","created_at":"2016-03-11 06:51:28"}', '::1', 'system32-PC', '::1', NULL, '2016-03-10 23:51:28'),
(387, 'ADMIN', '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-03-11 03:45:15'),
(388, 'ADMIN', '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-03-15 07:36:37'),
(389, 'ADMIN', '4', 'User Login', '::1', 'system32-PC', '::1', NULL, '2016-03-16 05:08:53'),
(390, 'ADMIN', '1', 'Insert Pengecekan Harian, {"verifikator":"ADMIN","id_alat":"123","id_periode_maintenance":1,"id_petugas":"MASY","id_kegiatan":"1","status_verifikasi":2,"tgl_verifikasi":"2016-3-16","created_at":"2016-03-16 12:15:15"}', '::1', 'system32-PC', '::1', NULL, '2016-03-16 05:15:15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `id_user` varchar(11) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `jabatan` int(2) NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(100) DEFAULT NULL,
  `nip` varchar(100) DEFAULT NULL,
  `nik` varchar(100) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `keterangan` text NOT NULL,
  `created_at` time NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_user`, `nama_lengkap`, `jabatan`, `tmpt_lahir`, `tgl_lahir`, `nip`, `nik`, `telp`, `keterangan`, `created_at`, `update_at`) VALUES
(19, 'MASY', 'Masyarakat', 3, 'REMBANG', '22-02-2016', '233490', '2424', '2434', '', '00:00:00', '2016-02-24 16:17:56'),
(30, 'QWEQWRQRQ', 'yuyu8756qweqqwe', 1, 'PAIQWEQWE', '17-02-2016', '8768425', '8768qweqwe', '24698736', '', '23:45:13', '2016-02-24 16:48:03'),
(31, '523J', 'ipung', 1, 'LASEM', '18-02-2016', '7632579496', '86763294956', '08572624824', '', '07:08:27', '2016-02-25 00:08:27'),
(29, 'IPUNGG', 'ipunggg7', 2, 'PATI', '17-02-2016', '09973685', '6578787', '08845278', '', '23:10:34', '2016-02-24 16:46:25'),
(32, '4260UJH', 'rejak', 2, 'BLORA', '17-02-2016', 'wkwkwk', '98235623596', '05759248281', '', '07:08:55', '2016-02-25 00:08:55'),
(33, '3ADMIN', 'admin', 1, 'LASEM', '17-02-2016', '0947262574', '47682485285', '02397258625', '', '07:11:07', '2016-02-25 00:11:07'),
(34, 'ADMIN', 'admni', 1, 'ADMIN', '17-02-2016', 'dmin', 'admin', '08371396713', '', '09:09:51', '2016-02-26 02:09:52'),
(35, 'ASF', 'ipugna', 2, 'KHDSFUF', '18-03-2016', '79263596', '983625', '0935615', '', '06:51:28', '2016-03-10 23:51:28');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `id_user` varchar(11) NOT NULL,
  `role` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `browser` varchar(200) DEFAULT NULL,
  `log_time` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `id_user`, `role`, `username`, `password`, `ip`, `browser`, `log_time`, `created_at`, `updated_at`) VALUES
(6, 'IPG', '0', 'ipung', '72c936fc65ed18442a81ea8ca4b5ab20', NULL, NULL, '2016-02-26 09:04:16', '2016-02-26 09:04:16', '2016-02-18 04:15:45'),
(10, 'IP9', '0', 'ipung', '2c21ea4dfaae1f43f6f917bc2b400a42', NULL, NULL, '2016-02-26 09:04:16', '2016-02-26 09:04:16', '2016-02-24 16:02:12'),
(13, 'QWEQWRQRQ', '0', '97634qwqeqwrqwr', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, '2016-02-24 23:49:17', '2016-02-24 16:48:03'),
(12, '983y5ho', '0', '97634q', '006296d38cf2db4fb75592313987b46a', NULL, NULL, NULL, '2016-02-24 23:45:13', '2016-02-24 16:45:13'),
(14, '523j', '0', 'ipun', '50551663f2c6481e4efa6a7011065702', NULL, NULL, NULL, '2016-02-25 07:08:27', '2016-02-25 00:08:27'),
(15, '3admin', '0', 'ipung', '72c936fc65ed18442a81ea8ca4b5ab20', NULL, NULL, '2016-02-26 09:04:16', '2016-02-26 09:04:16', '2016-02-25 00:11:07'),
(16, 'ADMIN', '0', 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, '2016-03-16 12:08:53', '2016-03-16 12:08:53', '2016-02-26 02:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(10) NOT NULL,
  `id_menu` int(10) DEFAULT NULL,
  `id_user` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_petugas` (`id_petugas`,`tgl`);

--
-- Indexes for table `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alat` (`id_alat`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `jadwal_maintenance`
--
ALTER TABLE `jadwal_maintenance`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `jenis_pengaduan`
--
ALTER TABLE `jenis_pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_lokasi`
--
ALTER TABLE `master_lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_periode_maintenance`
--
ALTER TABLE `master_periode_maintenance`
  ADD PRIMARY KEY (`id_periode_maintenance`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengecekan_alat`
--
ALTER TABLE `pengecekan_alat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alat` (`id_alat`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `t_history`
--
ALTER TABLE `t_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `alat`
--
ALTER TABLE `alat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jadwal_maintenance`
--
ALTER TABLE `jadwal_maintenance`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `jenis_pengaduan`
--
ALTER TABLE `jenis_pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `master_lokasi`
--
ALTER TABLE `master_lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `master_periode_maintenance`
--
ALTER TABLE `master_periode_maintenance`
  MODIFY `id_periode_maintenance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;
--
-- AUTO_INCREMENT for table `pengecekan_alat`
--
ALTER TABLE `pengecekan_alat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `t_history`
--
ALTER TABLE `t_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=391;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
