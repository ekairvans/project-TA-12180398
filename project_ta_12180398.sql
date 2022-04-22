-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Agu 2021 pada 11.06
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ta_12180398`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id_absen` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nip_user` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `pengajar` varchar(50) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `materi` varchar(25) NOT NULL,
  `judul_kelas` varchar(50) NOT NULL,
  `pertemuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id_absen`, `id_kelas`, `nip_user`, `status`, `pengajar`, `tanggal`, `materi`, `judul_kelas`, `pertemuan`) VALUES
(1, 1, 2021010101, 1, 'Samsuri', 1623287879, 'Mengetik 10 Jari', 'Pengenalan Kayboard', 1),
(2, 2, 2021010101, 1, 'Samsuri', 1623287883, 'Mengetik 10 Jari', 'Cara Mengetik Yang Baik', 2),
(3, 3, 2021010101, 1, 'Samsuri', 1623287886, 'Mengetik 10 Jari', 'Cara Mengetik Dengan Cepat', 3),
(4, 4, 2021010101, 1, 'Komarullah', 1623287893, 'Mengenal Windows', 'Apa Itu Windows', 4),
(5, 5, 2021010101, 1, 'Komarullah', 1623287897, 'Mengenal Windows', 'Pengenalan Tools Windows', 5),
(6, 6, 2021010101, 1, 'Komarullah', 1623287901, 'Mengenal Windows', 'Penggunaan Windows', 6),
(7, 7, 2021010101, 1, 'Samsuri', 1623287907, 'Mengenal Internet', 'Pengenalan Internet', 7),
(8, 8, 2021010101, 1, 'Samsuri', 1623287912, 'Mengenal Internet', 'Jaringan Internet', 8),
(9, 9, 2021010101, 1, 'Samsuri', 1623287917, 'Mengenal Internet', 'Menggunakan Internet', 9),
(10, 10, 2021010101, 1, 'Komarullah', 1623287921, 'Microsoft Word', 'Pengenalan Ms.Word', 10),
(11, 11, 2021010101, 1, 'Komarullah', 1623287925, 'Microsoft Word', 'Pengenalan Tools Pada Ms.word', 11),
(12, 12, 2021010101, 1, 'Komarullah', 1623287931, 'Microsoft Word', 'Membuat Surat Lamaran Dengan Ms.Word', 12),
(13, 13, 2021010101, 1, 'Samsuri', 1623287938, 'Microsoft Excel', 'Pengenalan Ms.Excel', 13),
(14, 14, 2021010101, 1, 'Samsuri', 1623287944, 'Microsoft Excel', 'Pengenalan Tools Pada Ms.Excel', 14),
(15, 15, 2021010101, 1, 'Samsuri', 1623287949, 'Microsoft Excel', 'Membuat Tabel dan Rumus Ms.excel', 15),
(16, 16, 2021010101, 1, 'Komarullah', 1623287962, 'Microsoft Power Point', 'Pengenalan Ms.PPT', 16),
(17, 17, 2021010101, 1, 'Komarullah', 1623287966, 'Microsoft Power Point', 'Pengenalan Tools pada Ms.PPT', 17),
(18, 18, 2021010101, 1, 'Komarullah', 1623287970, 'Microsoft Power Point', 'Membuat Tampilan Presentasi', 18),
(19, 1, 2021010102, 1, 'Samsuri', 1623288757, 'Mengetik 10 Jari', 'Pengenalan Kayboard', 1),
(20, 2, 2021010102, 1, 'Samsuri', 1623288761, 'Mengetik 10 Jari', 'Cara Mengetik Yang Baik', 2),
(21, 3, 2021010102, 1, 'Samsuri', 1623288764, 'Mengetik 10 Jari', 'Cara Mengetik Dengan Cepat', 3),
(22, 4, 2021010102, 1, 'Komarullah', 1623288767, 'Mengenal Windows', 'Apa Itu Windows', 4),
(23, 5, 2021010102, 1, 'Komarullah', 1623288774, 'Mengenal Windows', 'Pengenalan Tools Windows', 5),
(24, 6, 2021010102, 1, 'Komarullah', 1623288778, 'Mengenal Windows', 'Penggunaan Windows', 6),
(25, 7, 2021010102, 1, 'Samsuri', 1623288782, 'Mengenal Internet', 'Pengenalan Internet', 7),
(26, 8, 2021010102, 1, 'Samsuri', 1623288788, 'Mengenal Internet', 'Jaringan Internet', 8),
(27, 9, 2021010102, 1, 'Samsuri', 1623288797, 'Mengenal Internet', 'Menggunakan Internet', 9),
(28, 10, 2021010102, 1, 'Komarullah', 1623288802, 'Microsoft Word', 'Pengenalan Ms.Word', 10),
(29, 11, 2021010102, 1, 'Komarullah', 1623288807, 'Microsoft Word', 'Pengenalan Tools Pada Ms.word', 11),
(30, 12, 2021010102, 1, 'Komarullah', 1623288812, 'Microsoft Word', 'Membuat Surat Lamaran Dengan Ms.Word', 12),
(31, 13, 2021010102, 1, 'Samsuri', 1623288816, 'Microsoft Excel', 'Pengenalan Ms.Excel', 13),
(32, 14, 2021010102, 1, 'Samsuri', 1623288821, 'Microsoft Excel', 'Pengenalan Tools Pada Ms.Excel', 14),
(33, 15, 2021010102, 1, 'Samsuri', 1623288827, 'Microsoft Excel', 'Membuat Tabel dan Rumus Ms.excel', 15),
(34, 16, 2021010102, 1, 'Komarullah', 1623288832, 'Microsoft Power Point', 'Pengenalan Ms.PPT', 16),
(35, 17, 2021010102, 1, 'Komarullah', 1623288842, 'Microsoft Power Point', 'Pengenalan Tools pada Ms.PPT', 17),
(36, 18, 2021010102, 1, 'Komarullah', 1623288846, 'Microsoft Power Point', 'Membuat Tampilan Presentasi', 18),
(37, 1, 2021010103, 1, 'Samsuri', 1623289142, 'Mengetik 10 Jari', 'Pengenalan Kayboard', 1),
(38, 2, 2021010103, 1, 'Samsuri', 1623289147, 'Mengetik 10 Jari', 'Cara Mengetik Yang Baik', 2),
(39, 3, 2021010103, 1, 'Samsuri', 1623289150, 'Mengetik 10 Jari', 'Cara Mengetik Dengan Cepat', 3),
(40, 4, 2021010103, 1, 'Komarullah', 1623289154, 'Mengenal Windows', 'Apa Itu Windows', 4),
(41, 5, 2021010103, 1, 'Komarullah', 1623289158, 'Mengenal Windows', 'Pengenalan Tools Windows', 5),
(42, 6, 2021010103, 1, 'Komarullah', 1623289162, 'Mengenal Windows', 'Penggunaan Windows', 6),
(43, 7, 2021010103, 1, 'Samsuri', 1623289167, 'Mengenal Internet', 'Pengenalan Internet', 7),
(44, 8, 2021010103, 1, 'Samsuri', 1623289172, 'Mengenal Internet', 'Jaringan Internet', 8),
(45, 9, 2021010103, 1, 'Samsuri', 1623289176, 'Mengenal Internet', 'Menggunakan Internet', 9),
(46, 10, 2021010103, 1, 'Komarullah', 1623289180, 'Microsoft Word', 'Pengenalan Ms.Word', 10),
(47, 11, 2021010103, 1, 'Komarullah', 1623289185, 'Microsoft Word', 'Pengenalan Tools Pada Ms.word', 11),
(48, 12, 2021010103, 1, 'Komarullah', 1623289192, 'Microsoft Word', 'Membuat Surat Lamaran Dengan Ms.Word', 12),
(49, 13, 2021010103, 1, 'Samsuri', 1623289197, 'Microsoft Excel', 'Pengenalan Ms.Excel', 13),
(50, 14, 2021010103, 1, 'Samsuri', 1623289203, 'Microsoft Excel', 'Pengenalan Tools Pada Ms.Excel', 14),
(51, 15, 2021010103, 1, 'Samsuri', 1623289209, 'Microsoft Excel', 'Membuat Tabel dan Rumus Ms.excel', 15),
(52, 16, 2021010103, 1, 'Komarullah', 1623289213, 'Microsoft Power Point', 'Pengenalan Ms.PPT', 16),
(53, 17, 2021010103, 1, 'Komarullah', 1623289219, 'Microsoft Power Point', 'Pengenalan Tools pada Ms.PPT', 17),
(54, 18, 2021010103, 1, 'Komarullah', 1623289225, 'Microsoft Power Point', 'Membuat Tampilan Presentasi', 18),
(55, 1, 2021010104, 1, 'Samsuri', 1623289255, 'Mengetik 10 Jari', 'Pengenalan Kayboard', 1),
(56, 2, 2021010104, 1, 'Samsuri', 1623289258, 'Mengetik 10 Jari', 'Cara Mengetik Yang Baik', 2),
(57, 3, 2021010104, 1, 'Samsuri', 1623289261, 'Mengetik 10 Jari', 'Cara Mengetik Dengan Cepat', 3),
(58, 4, 2021010104, 1, 'Komarullah', 1623289265, 'Mengenal Windows', 'Apa Itu Windows', 4),
(59, 5, 2021010104, 1, 'Komarullah', 1623289267, 'Mengenal Windows', 'Pengenalan Tools Windows', 5),
(60, 6, 2021010104, 1, 'Komarullah', 1623289272, 'Mengenal Windows', 'Penggunaan Windows', 6),
(61, 7, 2021010104, 1, 'Samsuri', 1623289276, 'Mengenal Internet', 'Pengenalan Internet', 7),
(62, 8, 2021010104, 1, 'Samsuri', 1623289280, 'Mengenal Internet', 'Jaringan Internet', 8),
(63, 9, 2021010104, 1, 'Samsuri', 1623289285, 'Mengenal Internet', 'Menggunakan Internet', 9),
(64, 10, 2021010104, 1, 'Komarullah', 1623289290, 'Microsoft Word', 'Pengenalan Ms.Word', 10),
(65, 11, 2021010104, 1, 'Komarullah', 1623289294, 'Microsoft Word', 'Pengenalan Tools Pada Ms.word', 11),
(66, 12, 2021010104, 1, 'Komarullah', 1623289298, 'Microsoft Word', 'Membuat Surat Lamaran Dengan Ms.Word', 12),
(67, 13, 2021010104, 1, 'Samsuri', 1623289304, 'Microsoft Excel', 'Pengenalan Ms.Excel', 13),
(68, 14, 2021010104, 1, 'Samsuri', 1623289310, 'Microsoft Excel', 'Pengenalan Tools Pada Ms.Excel', 14),
(69, 15, 2021010104, 1, 'Samsuri', 1623289315, 'Microsoft Excel', 'Membuat Tabel dan Rumus Ms.excel', 15),
(70, 16, 2021010104, 1, 'Komarullah', 1623289320, 'Microsoft Power Point', 'Pengenalan Ms.PPT', 16),
(71, 17, 2021010104, 1, 'Komarullah', 1623289325, 'Microsoft Power Point', 'Pengenalan Tools pada Ms.PPT', 17),
(72, 18, 2021010104, 1, 'Komarullah', 1623289330, 'Microsoft Power Point', 'Membuat Tampilan Presentasi', 18),
(73, 1, 2021010105, 1, 'Samsuri', 1623289348, 'Mengetik 10 Jari', 'Pengenalan Kayboard', 1),
(74, 2, 2021010105, 1, 'Samsuri', 1623289398, 'Mengetik 10 Jari', 'Cara Mengetik Yang Baik', 2),
(75, 3, 2021010105, 1, 'Samsuri', 1623289353, 'Mengetik 10 Jari', 'Cara Mengetik Dengan Cepat', 3),
(76, 4, 2021010105, 1, 'Komarullah', 1623289366, 'Mengenal Windows', 'Apa Itu Windows', 4),
(77, 5, 2021010105, 1, 'Komarullah', 1623289370, 'Mengenal Windows', 'Pengenalan Tools Windows', 5),
(79, 6, 2021010105, 1, 'Komarullah', 1623289494, 'Mengenal Windows', 'Penggunaan Windows', 6),
(80, 7, 2021010105, 1, 'Samsuri', 1623289499, 'Mengenal Internet', 'Pengenalan Internet', 7),
(81, 8, 2021010105, 1, 'Samsuri', 1623289503, 'Mengenal Internet', 'Jaringan Internet', 8),
(82, 9, 2021010105, 1, 'Samsuri', 1623289508, 'Mengenal Internet', 'Menggunakan Internet', 9),
(83, 10, 2021010105, 1, 'Komarullah', 1623289512, 'Microsoft Word', 'Pengenalan Ms.Word', 10),
(84, 11, 2021010105, 1, 'Komarullah', 1623289516, 'Microsoft Word', 'Pengenalan Tools Pada Ms.word', 11),
(85, 12, 2021010105, 1, 'Komarullah', 1623289522, 'Microsoft Word', 'Membuat Surat Lamaran Dengan Ms.Word', 12),
(86, 13, 2021010105, 1, 'Samsuri', 1623289527, 'Microsoft Excel', 'Pengenalan Ms.Excel', 13),
(87, 14, 2021010105, 1, 'Samsuri', 1623289532, 'Microsoft Excel', 'Pengenalan Tools Pada Ms.Excel', 14),
(88, 15, 2021010105, 1, 'Samsuri', 1623289536, 'Microsoft Excel', 'Membuat Tabel dan Rumus Ms.excel', 15),
(89, 16, 2021010105, 1, 'Komarullah', 1623289541, 'Microsoft Power Point', 'Pengenalan Ms.PPT', 16),
(90, 17, 2021010105, 1, 'Komarullah', 1623289548, 'Microsoft Power Point', 'Pengenalan Tools pada Ms.PPT', 17),
(91, 18, 2021010105, 1, 'Komarullah', 1623289552, 'Microsoft Power Point', 'Membuat Tampilan Presentasi', 18),
(92, 1, 2021010106, 1, 'Samsuri', 1623289701, 'Mengetik 10 Jari', 'Pengenalan Kayboard', 1),
(93, 2, 2021010106, 1, 'Samsuri', 1623289705, 'Mengetik 10 Jari', 'Cara Mengetik Yang Baik', 2),
(94, 3, 2021010106, 1, 'Samsuri', 1623289711, 'Mengetik 10 Jari', 'Cara Mengetik Dengan Cepat', 3),
(95, 4, 2021010106, 1, 'Komarullah', 1623289717, 'Mengenal Windows', 'Apa Itu Windows', 4),
(96, 5, 2021010106, 1, 'Komarullah', 1623289720, 'Mengenal Windows', 'Pengenalan Tools Windows', 5),
(97, 6, 2021010106, 1, 'Komarullah', 1623289725, 'Mengenal Windows', 'Penggunaan Windows', 6),
(98, 7, 2021010106, 1, 'Samsuri', 1623289729, 'Mengenal Internet', 'Pengenalan Internet', 7),
(99, 8, 2021010106, 1, 'Samsuri', 1623289732, 'Mengenal Internet', 'Jaringan Internet', 8),
(100, 9, 2021010106, 1, 'Samsuri', 1623289740, 'Mengenal Internet', 'Menggunakan Internet', 9),
(101, 10, 2021010106, 1, 'Komarullah', 1623289744, 'Microsoft Word', 'Pengenalan Ms.Word', 10),
(102, 11, 2021010106, 1, 'Komarullah', 1623289748, 'Microsoft Word', 'Pengenalan Tools Pada Ms.word', 11),
(103, 12, 2021010106, 1, 'Komarullah', 1623289753, 'Microsoft Word', 'Membuat Surat Lamaran Dengan Ms.Word', 12),
(104, 13, 2021010106, 1, 'Samsuri', 1623289757, 'Microsoft Excel', 'Pengenalan Ms.Excel', 13),
(105, 14, 2021010106, 1, 'Samsuri', 1623289763, 'Microsoft Excel', 'Pengenalan Tools Pada Ms.Excel', 14),
(106, 15, 2021010106, 1, 'Samsuri', 1623289767, 'Microsoft Excel', 'Membuat Tabel dan Rumus Ms.excel', 15),
(107, 16, 2021010106, 1, 'Komarullah', 1623289771, 'Microsoft Power Point', 'Pengenalan Ms.PPT', 16),
(108, 17, 2021010106, 1, 'Komarullah', 1623289776, 'Microsoft Power Point', 'Pengenalan Tools pada Ms.PPT', 17),
(109, 18, 2021010106, 1, 'Komarullah', 1623289781, 'Microsoft Power Point', 'Membuat Tampilan Presentasi', 18),
(110, 1, 2021010107, 1, 'Samsuri', 1623289802, 'Mengetik 10 Jari', 'Pengenalan Kayboard', 1),
(111, 2, 2021010107, 1, 'Samsuri', 1623289805, 'Mengetik 10 Jari', 'Cara Mengetik Yang Baik', 2),
(112, 3, 2021010107, 1, 'Samsuri', 1623289808, 'Mengetik 10 Jari', 'Cara Mengetik Dengan Cepat', 3),
(113, 4, 2021010107, 1, 'Komarullah', 1623289812, 'Mengenal Windows', 'Apa Itu Windows', 4),
(114, 5, 2021010107, 1, 'Komarullah', 1623289815, 'Mengenal Windows', 'Pengenalan Tools Windows', 5),
(115, 6, 2021010107, 1, 'Komarullah', 1623289818, 'Mengenal Windows', 'Penggunaan Windows', 6),
(116, 7, 2021010107, 1, 'Samsuri', 1623289823, 'Mengenal Internet', 'Pengenalan Internet', 7),
(117, 8, 2021010107, 1, 'Samsuri', 1623289827, 'Mengenal Internet', 'Jaringan Internet', 8),
(118, 9, 2021010107, 1, 'Samsuri', 1623289831, 'Mengenal Internet', 'Menggunakan Internet', 9),
(119, 10, 2021010107, 1, 'Komarullah', 1623289835, 'Microsoft Word', 'Pengenalan Ms.Word', 10),
(120, 11, 2021010107, 1, 'Komarullah', 1623289839, 'Microsoft Word', 'Pengenalan Tools Pada Ms.word', 11),
(121, 12, 2021010107, 1, 'Komarullah', 1623289844, 'Microsoft Word', 'Membuat Surat Lamaran Dengan Ms.Word', 12),
(122, 13, 2021010107, 1, 'Samsuri', 1623289848, 'Microsoft Excel', 'Pengenalan Ms.Excel', 13),
(123, 14, 2021010107, 1, 'Samsuri', 1623289855, 'Microsoft Excel', 'Pengenalan Tools Pada Ms.Excel', 14),
(124, 15, 2021010107, 1, 'Samsuri', 1623289860, 'Microsoft Excel', 'Membuat Tabel dan Rumus Ms.excel', 15),
(125, 16, 2021010107, 1, 'Komarullah', 1623289864, 'Microsoft Power Point', 'Pengenalan Ms.PPT', 16),
(126, 17, 2021010107, 1, 'Komarullah', 1623289867, 'Microsoft Power Point', 'Pengenalan Tools pada Ms.PPT', 17),
(127, 18, 2021010107, 1, 'Komarullah', 1623289872, 'Microsoft Power Point', 'Membuat Tampilan Presentasi', 18),
(128, 1, 2021010108, 1, 'Samsuri', 1623289901, 'Mengetik 10 Jari', 'Pengenalan Kayboard', 1),
(129, 2, 2021010108, 1, 'Samsuri', 1623289904, 'Mengetik 10 Jari', 'Cara Mengetik Yang Baik', 2),
(130, 3, 2021010108, 1, 'Samsuri', 1623289907, 'Mengetik 10 Jari', 'Cara Mengetik Dengan Cepat', 3),
(131, 4, 2021010108, 1, 'Komarullah', 1623289910, 'Mengenal Windows', 'Apa Itu Windows', 4),
(132, 5, 2021010108, 1, 'Komarullah', 1623289917, 'Mengenal Windows', 'Pengenalan Tools Windows', 5),
(133, 6, 2021010108, 1, 'Komarullah', 1623289921, 'Mengenal Windows', 'Penggunaan Windows', 6),
(134, 7, 2021010108, 1, 'Samsuri', 1623289926, 'Mengenal Internet', 'Pengenalan Internet', 7),
(135, 8, 2021010108, 1, 'Samsuri', 1623289930, 'Mengenal Internet', 'Jaringan Internet', 8),
(136, 9, 2021010108, 1, 'Samsuri', 1623289934, 'Mengenal Internet', 'Menggunakan Internet', 9),
(137, 10, 2021010108, 1, 'Komarullah', 1623289939, 'Microsoft Word', 'Pengenalan Ms.Word', 10),
(138, 11, 2021010108, 1, 'Komarullah', 1623289943, 'Microsoft Word', 'Pengenalan Tools Pada Ms.word', 11),
(139, 12, 2021010108, 1, 'Komarullah', 1623289947, 'Microsoft Word', 'Membuat Surat Lamaran Dengan Ms.Word', 12),
(140, 13, 2021010108, 1, 'Samsuri', 1623289951, 'Microsoft Excel', 'Pengenalan Ms.Excel', 13),
(141, 14, 2021010108, 1, 'Samsuri', 1623289956, 'Microsoft Excel', 'Pengenalan Tools Pada Ms.Excel', 14),
(142, 15, 2021010108, 1, 'Samsuri', 1623289961, 'Microsoft Excel', 'Membuat Tabel dan Rumus Ms.excel', 15),
(143, 16, 2021010108, 1, 'Komarullah', 1623289966, 'Microsoft Power Point', 'Pengenalan Ms.PPT', 16),
(144, 17, 2021010108, 1, 'Komarullah', 1623289970, 'Microsoft Power Point', 'Pengenalan Tools pada Ms.PPT', 17),
(145, 18, 2021010108, 1, 'Komarullah', 1623289974, 'Microsoft Power Point', 'Membuat Tampilan Presentasi', 18),
(146, 1, 2021010109, 1, 'Samsuri', 1623289999, 'Mengetik 10 Jari', 'Pengenalan Kayboard', 1),
(147, 2, 2021010109, 1, 'Samsuri', 1623290002, 'Mengetik 10 Jari', 'Cara Mengetik Yang Baik', 2),
(148, 3, 2021010109, 1, 'Samsuri', 1623290005, 'Mengetik 10 Jari', 'Cara Mengetik Dengan Cepat', 3),
(149, 4, 2021010109, 1, 'Komarullah', 1623290010, 'Mengenal Windows', 'Apa Itu Windows', 4),
(150, 5, 2021010109, 1, 'Komarullah', 1623290013, 'Mengenal Windows', 'Pengenalan Tools Windows', 5),
(151, 6, 2021010109, 1, 'Komarullah', 1623290016, 'Mengenal Windows', 'Penggunaan Windows', 6),
(152, 7, 2021010109, 1, 'Samsuri', 1623290020, 'Mengenal Internet', 'Pengenalan Internet', 7),
(153, 8, 2021010109, 1, 'Samsuri', 1623290028, 'Mengenal Internet', 'Jaringan Internet', 8),
(154, 9, 2021010109, 1, 'Samsuri', 1623290032, 'Mengenal Internet', 'Menggunakan Internet', 9),
(155, 10, 2021010109, 1, 'Komarullah', 1623290036, 'Microsoft Word', 'Pengenalan Ms.Word', 10),
(156, 11, 2021010109, 1, 'Komarullah', 1623290042, 'Microsoft Word', 'Pengenalan Tools Pada Ms.word', 11),
(157, 12, 2021010109, 1, 'Komarullah', 1623290047, 'Microsoft Word', 'Membuat Surat Lamaran Dengan Ms.Word', 12),
(158, 13, 2021010109, 1, 'Samsuri', 1623290052, 'Microsoft Excel', 'Pengenalan Ms.Excel', 13),
(159, 14, 2021010109, 1, 'Samsuri', 1623290057, 'Microsoft Excel', 'Pengenalan Tools Pada Ms.Excel', 14),
(160, 15, 2021010109, 1, 'Samsuri', 1623290062, 'Microsoft Excel', 'Membuat Tabel dan Rumus Ms.excel', 15),
(161, 16, 2021010109, 1, 'Komarullah', 1623290065, 'Microsoft Power Point', 'Pengenalan Ms.PPT', 16),
(162, 17, 2021010109, 1, 'Komarullah', 1623290070, 'Microsoft Power Point', 'Pengenalan Tools pada Ms.PPT', 17),
(163, 18, 2021010109, 1, 'Komarullah', 1623290075, 'Microsoft Power Point', 'Membuat Tampilan Presentasi', 18),
(164, 1, 2021010110, 1, 'Samsuri', 1623290117, 'Mengetik 10 Jari', 'Pengenalan Kayboard', 1),
(165, 2, 2021010110, 1, 'Samsuri', 1623290120, 'Mengetik 10 Jari', 'Cara Mengetik Yang Baik', 2),
(166, 3, 2021010110, 1, 'Samsuri', 1623290122, 'Mengetik 10 Jari', 'Cara Mengetik Dengan Cepat', 3),
(167, 4, 2021010110, 1, 'Komarullah', 1623290125, 'Mengenal Windows', 'Apa Itu Windows', 4),
(168, 5, 2021010110, 1, 'Komarullah', 1623290128, 'Mengenal Windows', 'Pengenalan Tools Windows', 5),
(169, 6, 2021010110, 1, 'Komarullah', 1623290132, 'Mengenal Windows', 'Penggunaan Windows', 6),
(170, 7, 2021010110, 1, 'Samsuri', 1623290135, 'Mengenal Internet', 'Pengenalan Internet', 7),
(171, 8, 2021010110, 1, 'Samsuri', 1623290139, 'Mengenal Internet', 'Jaringan Internet', 8),
(172, 9, 2021010110, 1, 'Samsuri', 1623290143, 'Mengenal Internet', 'Menggunakan Internet', 9),
(173, 10, 2021010110, 1, 'Komarullah', 1623290148, 'Microsoft Word', 'Pengenalan Ms.Word', 10),
(174, 11, 2021010110, 1, 'Komarullah', 1623290151, 'Microsoft Word', 'Pengenalan Tools Pada Ms.word', 11),
(175, 12, 2021010110, 1, 'Komarullah', 1623290156, 'Microsoft Word', 'Membuat Surat Lamaran Dengan Ms.Word', 12),
(176, 13, 2021010110, 1, 'Samsuri', 1623290161, 'Microsoft Excel', 'Pengenalan Ms.Excel', 13),
(177, 14, 2021010110, 1, 'Samsuri', 1623290165, 'Microsoft Excel', 'Pengenalan Tools Pada Ms.Excel', 14),
(178, 15, 2021010110, 1, 'Samsuri', 1623290170, 'Microsoft Excel', 'Membuat Tabel dan Rumus Ms.excel', 15),
(179, 16, 2021010110, 1, 'Komarullah', 1623290175, 'Microsoft Power Point', 'Pengenalan Ms.PPT', 16),
(180, 17, 2021010110, 1, 'Komarullah', 1623290179, 'Microsoft Power Point', 'Pengenalan Tools pada Ms.PPT', 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `access_menu`
--

CREATE TABLE `access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `access_menu`
--

INSERT INTO `access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(6, 1, 9),
(7, 2, 9),
(8, 3, 9),
(9, 1, 10),
(10, 2, 10),
(11, 3, 10),
(12, 1, 4),
(15, 2, 5),
(19, 2, 7),
(21, 3, 6),
(22, 3, 7),
(27, 1, 3),
(28, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat_forum`
--

CREATE TABLE `chat_forum` (
  `id_chat` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `date_create` datetime DEFAULT NULL,
  `photo` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `chat_forum`
--

INSERT INTO `chat_forum` (`id_chat`, `id_user`, `id_kelas`, `name`, `pesan`, `date_create`, `photo`) VALUES
(2, 4, 4, 'Samsuri', 'Assalamualaikum Wr.Wb ', '2021-06-16 21:12:24', 'default.jpg'),
(4, 4, 4, 'Samsuri', 'Kita akan memulai diskusi', '2021-06-16 21:13:34', 'default.jpg'),
(5, 5, 4, 'Eka Irvan Supendi', 'Wa\'alikumsalam pak', '2021-06-16 21:14:33', 'ekairvans1.jpg'),
(6, 5, 4, 'Eka Irvan Supendi', 'Baik pak', '2021-06-16 21:14:41', 'ekairvans1.jpg'),
(7, 6, 4, 'Mery Ajohan', 'Wa\'alikumsalam', '2021-06-16 21:15:25', 'punyaku.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `doc_user`
--

CREATE TABLE `doc_user` (
  `id` int(11) NOT NULL,
  `nip_user` varchar(15) DEFAULT NULL,
  `ijasah` varchar(50) DEFAULT NULL,
  `krt_keluarga` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `doc_user`
--

INSERT INTO `doc_user` (`id`, `nip_user`, `ijasah`, `krt_keluarga`) VALUES
(1, '2021010111', 'Tugas_-_Copy57.pdf', 'Tugas_124.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nip_user` varchar(15) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `judul_kelas` varchar(50) NOT NULL,
  `pertemuan` int(11) NOT NULL,
  `jam_mulai` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jam_selesei` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nip_user`, `id_materi`, `judul_kelas`, `pertemuan`, `jam_mulai`, `jam_selesei`, `date_create`) VALUES
(1, 'SSR0102', 1, 'Pengenalan Kayboard', 10, '2021-03-22 09:00:00', '2021-03-22 11:00:00', 1623146054),
(2, 'SSR0102', 1, 'Cara Mengetik Yang Baik', 11, '2021-03-24 09:00:00', '2021-03-24 11:00:00', 1623146132),
(3, 'SSR0102', 1, 'Cara Mengetik Dengan Cepat', 12, '2021-03-26 09:00:00', '2021-03-26 11:00:00', 1623146300),
(4, 'KRH0101', 2, 'Apa Itu Windows', 1, '2021-03-01 09:00:00', '2021-03-01 11:00:00', 1623146380),
(5, 'KRH0101', 2, 'Pengenalan Tools Windows', 2, '2021-03-03 09:00:00', '2021-03-03 11:00:00', 1623146420),
(6, 'KRH0101', 2, 'Penggunaan Windows', 3, '2021-03-05 09:00:00', '2021-03-05 11:00:00', 1623146514),
(7, 'SSR0102', 3, 'Pengenalan Internet', 13, '2021-03-29 09:00:00', '2021-03-29 11:00:00', 1623146825),
(8, 'SSR0102', 3, 'Jaringan Internet', 14, '2021-03-31 09:00:00', '2021-03-31 11:00:00', 1623146881),
(9, 'SSR0102', 3, 'Menggunakan Internet', 15, '2021-04-02 09:00:00', '2021-04-02 11:00:00', 1623147038),
(10, 'KRH0101', 4, 'Pengenalan Ms.Word', 4, '2021-03-08 09:00:00', '2021-03-08 11:00:00', 1623147174),
(11, 'KRH0101', 4, 'Pengenalan Tools Pada Ms.word', 5, '2021-03-10 09:00:00', '2021-03-10 11:00:00', 1623147222),
(12, 'KRH0101', 4, 'Membuat Surat Lamaran Dengan Ms.Word', 6, '2021-03-12 09:00:00', '2021-03-12 11:00:00', 1623147277),
(13, 'SSR0102', 5, 'Pengenalan Ms.Excel', 16, '2021-04-05 09:00:00', '2021-04-05 11:00:00', 1623147431),
(14, 'SSR0102', 5, 'Pengenalan Tools Pada Ms.Excel', 17, '2021-04-07 09:00:00', '2021-04-07 11:00:00', 1623147508),
(15, 'SSR0102', 5, 'Membuat Tabel dan Rumus Ms.excel', 18, '2021-04-09 09:00:00', '2021-04-09 11:00:00', 1623147582),
(16, 'KRH0101', 6, 'Pengenalan Ms.PPT', 7, '2021-03-15 09:00:00', '2021-03-15 11:00:00', 1623147675),
(17, 'KRH0101', 6, 'Pengenalan Tools pada Ms.PPT', 8, '2021-03-17 09:00:00', '2021-03-17 11:00:00', 1623147730),
(18, 'KRH0101', 6, 'Membuat Tampilan Presentasi', 9, '2021-03-19 09:00:00', '2021-03-19 11:00:00', 1623147787);

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `judul_materi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id_materi`, `judul_materi`) VALUES
(1, 'Mengetik 10 Jari'),
(2, 'Mengenal Windows'),
(3, 'Mengenal Internet'),
(4, 'Microsoft Word'),
(5, 'Microsoft Excel'),
(6, 'Microsoft Power Point');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(5, 'Pengajar'),
(6, 'Siswa'),
(7, 'Profile');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelajaran`
--

CREATE TABLE `pembelajaran` (
  `id_pem` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `description` text NOT NULL,
  `file` varchar(50) NOT NULL,
  `video` varchar(50) DEFAULT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembelajaran`
--

INSERT INTO `pembelajaran` (`id_pem`, `id_kelas`, `description`, `file`, `video`, `date_create`) VALUES
(1, 1, 'pertemuan 1', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', 'https://www.youtube.com/embed/36cajdJ9dIY', 1623148571),
(3, 2, 'pertemuan 2', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', 'https://www.youtube.com/embed/36cajdJ9dIY', 1623149439),
(4, 3, 'pertemuan 3', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', 'https://www.youtube.com/embed/36cajdJ9dIY', 1623149505),
(5, 4, 'pertemuan 4', 'pertemuan 5', 'https://www.youtube.com/embed/36cajdJ9dIY', 1623158172),
(6, 5, 'pertemuan 5', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', 'https://www.youtube.com/embed/36cajdJ9dIY', 1623158355),
(7, 6, 'pertemuan 6', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', 'https://www.youtube.com/embed/36cajdJ9dIY', 1623158406),
(8, 7, 'pertemuan 17', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', 'https://www.youtube.com/embed/36cajdJ9dIY', 1623158469),
(9, 8, 'pertemuan 8', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', 'https://www.youtube.com/embed/36cajdJ9dIY', 1623158525),
(10, 9, 'pertemuan 9', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', 'https://www.youtube.com/embed/36cajdJ9dIY', 1623158588),
(11, 10, 'pertemuan 10', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', 'https://www.youtube.com/embed/36cajdJ9dIY', 1623158707),
(12, 11, 'pertemuan 11', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', 'https://www.youtube.com/embed/36cajdJ9dIY', 1623158784),
(13, 12, 'pertemuan 12', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', 'https://www.youtube.com/embed/36cajdJ9dIY', 1623158935),
(14, 13, 'Pertemuan 13', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', 'https://www.youtube.com/embed/36cajdJ9dIY', 1623159928),
(15, 14, 'Pertemuan 14', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', 'https://www.youtube.com/embed/36cajdJ9dIY', 1623159977),
(16, 15, 'Pertemuan 15', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', 'https://www.youtube.com/embed/36cajdJ9dIY', 1623160058),
(17, 16, 'Pertemuan 16', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', 'https://www.youtube.com/embed/36cajdJ9dIY', 1623160194),
(18, 17, 'Pertemuan 17', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', 'https://www.youtube.com/embed/36cajdJ9dIY', 1623160289),
(19, 18, 'Pertemuan 18', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', 'https://www.youtube.com/embed/36cajdJ9dIY', 1623160368);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id_pendaftar` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `ijasah` varchar(50) DEFAULT NULL,
  `krt_keluarga` varchar(50) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`id_pendaftar`, `email`, `name`, `alamat`, `no_telp`, `tgl_lahir`, `image`, `ijasah`, `krt_keluarga`, `is_active`, `date_created`) VALUES
(3, 'pandawa.000004@gmail.com', 'Eka Irvan Supendi', 'Jalan Alur Laut Blok GG', '0892123123', '1996-11-21', 'ekairvans.jpg', 'Tugas_130.pdf', 'Tugas_-_Copy61.pdf', 1, 1623834541),
(4, 'pandawa.000004@gmail.com', 'Eka Irvan Supendi', 'jalan', '0892123123', '2021-06-17', NULL, 'Tugas_-_Copy62.pdf', 'Tugas_131.pdf', 0, 1623919698),
(5, 'pandawa.000004@gmail.com', 'Eka Irvan Supendi', 'jalan', '0892123123', '2021-06-17', NULL, NULL, NULL, 0, 1623919811);

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi_pendaftar`
--

CREATE TABLE `relasi_pendaftar` (
  `id` int(11) NOT NULL,
  `id_pendaftar` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi_token`
--

CREATE TABLE `relasi_token` (
  `id` int(11) NOT NULL,
  `id_pendaftar` int(11) DEFAULT NULL,
  `id_token` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi_tugas`
--

CREATE TABLE `relasi_tugas` (
  `id_relasi` int(11) NOT NULL,
  `nip` varchar(15) DEFAULT NULL,
  `id_tugas` int(11) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `relasi_create` varchar(20) DEFAULT NULL,
  `relasi_update` varchar(20) DEFAULT NULL,
  `file_tugas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `relasi_tugas`
--

INSERT INTO `relasi_tugas` (`id_relasi`, `nip`, `id_tugas`, `nilai`, `relasi_create`, `relasi_update`, `file_tugas`) VALUES
(1, '2021010101', 1, 95, '08-06-2021 21:28', '08-06-2021 21:30', 'Tugas_1.pdf'),
(2, '2021010101', 2, 90, '08-06-2021 21:37', '', 'Tugas1.pdf'),
(3, '2021010101', 3, 85, '08-06-2021 21:38', '', 'Tugas2.pdf'),
(4, '2021010101', 4, 95, '08-06-2021 21:38', '', 'Tugas3.pdf'),
(5, '2021010101', 5, 90, '08-06-2021 21:39', '', 'Tugas4.pdf'),
(6, '2021010101', 6, 87, '08-06-2021 21:39', '', 'Tugas5.pdf'),
(7, '2021010101', 7, 90, '08-06-2021 21:40', '', 'Tugas6.pdf'),
(8, '2021010101', 8, 95, '08-06-2021 21:41', '', 'Tugas7.pdf'),
(9, '2021010101', 9, 85, '08-06-2021 21:48', '', 'Tugas8.pdf'),
(10, '2021010101', 10, 90, '08-06-2021 21:48', '', 'Tugas9.pdf'),
(11, '2021010101', 11, 95, '08-06-2021 21:48', '', 'Tugas10.pdf'),
(12, '2021010101', 12, 90, '08-06-2021 21:49', '', 'Tugas11.pdf'),
(13, '2021010101', 13, 90, '08-06-2021 21:49', '', 'Tugas12.pdf'),
(14, '2021010101', 14, 87, '08-06-2021 21:49', '', 'Tugas13.pdf'),
(15, '2021010101', 15, 95, '08-06-2021 21:49', '', 'Tugas14.pdf'),
(16, '2021010101', 16, 90, '08-06-2021 21:50', '', 'Tugas15.pdf'),
(17, '2021010101', 17, 95, '08-06-2021 21:50', '', 'Tugas16.pdf'),
(18, '2021010101', 18, 90, '08-06-2021 21:50', '', 'Tugas17.pdf'),
(19, '2021010102', 1, 85, '09-06-2021 07:51', '', 'Tugas18.pdf'),
(20, '2021010102', 2, 90, '09-06-2021 07:51', '', 'Tugas19.pdf'),
(21, '2021010102', 3, 95, '09-06-2021 07:51', '', 'Tugas20.pdf'),
(22, '2021010102', 4, 87, '09-06-2021 07:52', '', 'Tugas21.pdf'),
(23, '2021010102', 5, 87, '09-06-2021 07:52', '', 'Tugas22.pdf'),
(24, '2021010102', 6, 95, '09-06-2021 07:53', '', 'Tugas23.pdf'),
(25, '2021010102', 7, 90, '09-06-2021 07:53', '', 'Tugas24.pdf'),
(26, '2021010102', 8, 90, '09-06-2021 07:53', '', 'Tugas25.pdf'),
(27, '2021010102', 9, 95, '09-06-2021 07:54', '', 'Tugas26.pdf'),
(28, '2021010102', 10, 95, '09-06-2021 07:54', '', 'Tugas27.pdf'),
(29, '2021010102', 12, 95, '09-06-2021 07:54', '', 'Tugas28.pdf'),
(30, '2021010102', 13, 90, '09-06-2021 07:55', '', 'Tugas29.pdf'),
(31, '2021010102', 14, 90, '09-06-2021 07:55', '', 'Tugas30.pdf'),
(32, '2021010102', 15, 95, '09-06-2021 07:55', '', 'Tugas31.pdf'),
(33, '2021010102', 11, 90, '09-06-2021 07:56', '', 'Tugas32.pdf'),
(34, '2021010102', 16, 95, '09-06-2021 07:56', '', 'Tugas33.pdf'),
(35, '2021010102', 17, 90, '09-06-2021 07:57', '', 'Tugas34.pdf'),
(36, '2021010102', 18, 85, '09-06-2021 07:57', '', 'Tugas35.pdf'),
(37, '2021010103', 1, 87, '09-06-2021 08:00', '', 'Tugas36.pdf'),
(38, '2021010103', 2, 85, '09-06-2021 08:00', '', 'Tugas37.pdf'),
(39, '2021010103', 3, 87, '09-06-2021 08:01', '', 'Tugas38.pdf'),
(40, '2021010103', 4, 87, '09-06-2021 08:01', '', 'Tugas39.pdf'),
(41, '2021010103', 5, 75, '09-06-2021 08:01', '', 'Tugas40.pdf'),
(42, '2021010103', 6, 90, '09-06-2021 08:02', '', 'Tugas41.pdf'),
(43, '2021010103', 7, 87, '09-06-2021 08:02', '', 'Tugas42.pdf'),
(44, '2021010103', 8, 85, '09-06-2021 08:02', '', 'Tugas43.pdf'),
(45, '2021010103', 9, 85, '09-06-2021 08:02', '', 'Tugas44.pdf'),
(46, '2021010103', 10, 85, '09-06-2021 08:03', '', 'Tugas45.pdf'),
(47, '2021010103', 11, 85, '09-06-2021 08:03', '', 'Tugas46.pdf'),
(48, '2021010103', 12, 85, '09-06-2021 08:03', '', 'Tugas47.pdf'),
(49, '2021010103', 13, 87, '09-06-2021 08:03', '', 'Tugas48.pdf'),
(50, '2021010103', 14, 87, '09-06-2021 08:04', '', 'Tugas49.pdf'),
(51, '2021010103', 15, 87, '09-06-2021 08:04', '', 'Tugas50.pdf'),
(52, '2021010103', 16, 87, '09-06-2021 08:04', '', 'Tugas51.pdf'),
(53, '2021010103', 17, 87, '09-06-2021 08:04', '', 'Tugas52.pdf'),
(54, '2021010103', 18, 85, '09-06-2021 08:05', '', 'Tugas53.pdf'),
(55, '2021010104', 1, 90, '09-06-2021 08:05', '', 'Tugas54.pdf'),
(56, '2021010104', 2, 75, '09-06-2021 08:05', '', 'Tugas55.pdf'),
(57, '2021010104', 3, 75, '09-06-2021 08:06', '', 'Tugas56.pdf'),
(58, '2021010104', 4, 90, '09-06-2021 08:06', '', 'Tugas57.pdf'),
(59, '2021010104', 5, 80, '09-06-2021 08:06', '', 'Tugas58.pdf'),
(60, '2021010104', 6, 90, '09-06-2021 08:06', '', 'Tugas59.pdf'),
(61, '2021010104', 7, 80, '09-06-2021 08:07', '', 'Tugas60.pdf'),
(62, '2021010104', 8, 95, '09-06-2021 08:07', '', 'Tugas61.pdf'),
(63, '2021010104', 9, 90, '09-06-2021 08:07', '', 'Tugas62.pdf'),
(64, '2021010104', 10, 75, '09-06-2021 08:07', '', 'Tugas63.pdf'),
(65, '2021010104', 11, 87, '09-06-2021 08:08', '', 'Tugas64.pdf'),
(66, '2021010104', 12, 85, '09-06-2021 08:08', '', 'Tugas65.pdf'),
(67, '2021010104', 13, 75, '09-06-2021 08:08', '', 'Tugas66.pdf'),
(68, '2021010104', 14, 85, '09-06-2021 08:09', '', 'Tugas67.pdf'),
(69, '2021010104', 15, 75, '09-06-2021 08:09', '', 'Tugas68.pdf'),
(70, '2021010104', 16, 87, '09-06-2021 08:09', '', 'Tugas69.pdf'),
(71, '2021010104', 17, 80, '09-06-2021 08:09', '', 'Tugas70.pdf'),
(72, '2021010104', 18, 87, '09-06-2021 08:10', '', 'Tugas71.pdf'),
(73, '2021010105', 1, 75, '09-06-2021 08:10', '', 'Tugas72.pdf'),
(74, '2021010105', 2, 70, '09-06-2021 08:10', '', 'Tugas73.pdf'),
(75, '2021010105', 3, 80, '09-06-2021 08:10', '', 'Tugas74.pdf'),
(76, '2021010105', 4, 85, '09-06-2021 08:11', '', 'Tugas75.pdf'),
(77, '2021010105', 5, 95, '09-06-2021 08:11', '', 'Tugas76.pdf'),
(78, '2021010105', 6, 80, '09-06-2021 08:11', '', 'Tugas77.pdf'),
(79, '2021010105', 7, 75, '09-06-2021 08:11', '', 'Tugas78.pdf'),
(80, '2021010105', 8, 75, '09-06-2021 08:11', '', 'Tugas79.pdf'),
(81, '2021010105', 9, 75, '09-06-2021 08:12', '', 'Tugas80.pdf'),
(82, '2021010105', 10, 87, '09-06-2021 08:12', '', 'Tugas81.pdf'),
(83, '2021010105', 11, 90, '09-06-2021 08:12', '', 'Tugas82.pdf'),
(84, '2021010105', 12, 87, '09-06-2021 08:12', '', 'Tugas83.pdf'),
(85, '2021010105', 13, 80, '09-06-2021 08:12', '', 'Tugas84.pdf'),
(86, '2021010105', 14, 80, '09-06-2021 08:13', '', 'Tugas85.pdf'),
(87, '2021010105', 15, 80, '09-06-2021 08:13', '', 'Tugas86.pdf'),
(88, '2021010105', 16, 90, '09-06-2021 08:13', '', 'Tugas87.pdf'),
(89, '2021010105', 17, 87, '09-06-2021 08:13', '', 'Tugas88.pdf'),
(90, '2021010105', 18, 80, '09-06-2021 08:13', '', 'Tugas89.pdf'),
(91, '2021010106', 1, 85, '09-06-2021 08:14', '', 'Tugas90.pdf'),
(92, '2021010106', 2, 75, '09-06-2021 08:15', '', 'Tugas91.pdf'),
(93, '2021010106', 3, 85, '09-06-2021 08:15', '', 'Tugas92.pdf'),
(94, '2021010106', 4, 75, '09-06-2021 08:15', '', 'Tugas93.pdf'),
(95, '2021010106', 5, 80, '09-06-2021 08:15', '', 'Tugas94.pdf'),
(96, '2021010106', 6, 75, '09-06-2021 08:15', '', 'Tugas95.pdf'),
(97, '2021010106', 7, 95, '09-06-2021 08:16', '', 'Tugas96.pdf'),
(98, '2021010106', 8, 90, '09-06-2021 08:16', '', 'Tugas97.pdf'),
(99, '2021010106', 9, 75, '09-06-2021 08:16', '', 'Tugas98.pdf'),
(100, '2021010106', 10, 80, '09-06-2021 08:16', '', 'Tugas99.pdf'),
(101, '2021010106', 11, 85, '09-06-2021 08:17', '', 'Tugas_11.pdf'),
(102, '2021010106', 12, 95, '09-06-2021 08:18', '', 'Tugas_-_Copy.pdf'),
(103, '2021010106', 13, 90, '09-06-2021 08:20', '', 'Tugas_-_Copy1.pdf'),
(104, '2021010106', 14, 87, '09-06-2021 08:20', '', 'Tugas_-_Copy2.pdf'),
(105, '2021010106', 15, 75, '09-06-2021 08:20', '', 'Tugas_-_Copy3.pdf'),
(106, '2021010106', 16, 85, '09-06-2021 08:21', '', 'Tugas_-_Copy4.pdf'),
(107, '2021010106', 17, 85, '09-06-2021 08:21', '', 'Tugas_-_Copy5.pdf'),
(108, '2021010106', 18, 85, '09-06-2021 08:21', '', 'Tugas_-_Copy6.pdf'),
(109, '2021010107', 1, 87, '09-06-2021 08:22', '', 'Tugas_-_Copy7.pdf'),
(110, '2021010107', 2, 90, '09-06-2021 08:24', '', 'Tugas_-_Copy8.pdf'),
(111, '2021010107', 3, 90, '09-06-2021 08:25', '', 'Tugas_-_Copy9.pdf'),
(112, '2021010107', 4, 85, '09-06-2021 08:25', '', 'Tugas_-_Copy10.pdf'),
(113, '2021010107', 5, 85, '09-06-2021 08:25', '', 'Tugas_-_Copy11.pdf'),
(114, '2021010107', 6, 90, '09-06-2021 08:25', '', 'Tugas_-_Copy12.pdf'),
(115, '2021010107', 7, 85, '09-06-2021 08:25', '', 'Tugas_-_Copy13.pdf'),
(116, '2021010107', 8, 87, '09-06-2021 08:26', '', 'Tugas_-_Copy14.pdf'),
(117, '2021010107', 9, 85, '09-06-2021 08:26', '', 'Tugas_-_Copy15.pdf'),
(118, '2021010107', 10, 87, '09-06-2021 08:26', '', 'Tugas_-_Copy16.pdf'),
(119, '2021010107', 11, 87, '09-06-2021 08:26', '', 'Tugas_-_Copy17.pdf'),
(120, '2021010107', 12, 87, '09-06-2021 08:27', '', 'Tugas_-_Copy18.pdf'),
(121, '2021010107', 13, 75, '09-06-2021 08:27', '', 'Tugas_-_Copy19.pdf'),
(122, '2021010107', 14, 85, '09-06-2021 08:27', '', 'Tugas_-_Copy20.pdf'),
(123, '2021010107', 15, 75, '09-06-2021 08:27', '', 'Tugas_-_Copy21.pdf'),
(124, '2021010107', 16, 87, '09-06-2021 08:27', '', 'Tugas_-_Copy22.pdf'),
(125, '2021010107', 17, 87, '09-06-2021 08:28', '', 'Tugas_-_Copy23.pdf'),
(126, '2021010107', 18, 95, '09-06-2021 08:28', '', 'Tugas_-_Copy24.pdf'),
(127, '2021010108', 1, 75, '09-06-2021 08:28', '', 'Tugas_-_Copy25.pdf'),
(128, '2021010108', 3, 95, '09-06-2021 08:28', '', 'Tugas_-_Copy26.pdf'),
(129, '2021010108', 4, 90, '09-06-2021 08:29', '', 'Tugas_-_Copy27.pdf'),
(130, '2021010108', 5, 80, '09-06-2021 08:29', '', 'Tugas_-_Copy28.pdf'),
(131, '2021010108', 6, 85, '09-06-2021 08:29', '', 'Tugas_-_Copy29.pdf'),
(132, '2021010108', 7, 80, '09-06-2021 08:29', '', 'Tugas_-_Copy30.pdf'),
(133, '2021010108', 8, 75, '09-06-2021 08:29', '', 'Tugas_-_Copy31.pdf'),
(134, '2021010108', 9, 90, '09-06-2021 08:30', '', 'Tugas_-_Copy32.pdf'),
(135, '2021010108', 10, 95, '09-06-2021 08:30', '', 'Tugas_-_Copy33.pdf'),
(136, '2021010108', 11, 85, '09-06-2021 08:30', '', 'Tugas_-_Copy34.pdf'),
(137, '2021010108', 12, 85, '09-06-2021 08:30', '', 'Tugas_-_Copy35.pdf'),
(138, '2021010108', 13, 95, '09-06-2021 08:30', '', 'Tugas_-_Copy36.pdf'),
(139, '2021010108', 14, 80, '09-06-2021 08:31', '', 'Tugas_-_Copy37.pdf'),
(140, '2021010108', 15, 95, '09-06-2021 08:31', '', 'Tugas_-_Copy38.pdf'),
(141, '2021010108', 16, 75, '09-06-2021 08:31', '', 'Tugas_-_Copy39.pdf'),
(142, '2021010108', 17, 85, '09-06-2021 08:31', '', 'Tugas_-_Copy40.pdf'),
(143, '2021010108', 18, 90, '09-06-2021 08:32', '', 'Tugas_-_Copy41.pdf'),
(144, '2021010109', 1, 70, '09-06-2021 08:32', '', 'Tugas_-_Copy42.pdf'),
(145, '2021010109', 2, 80, '09-06-2021 08:33', '', 'Tugas_-_Copy43.pdf'),
(146, '2021010109', 3, 75, '09-06-2021 08:33', '', 'Tugas_12.pdf'),
(147, '2021010109', 4, 95, '09-06-2021 08:33', '', 'Tugas_-_Copy44.pdf'),
(148, '2021010109', 5, 75, '09-06-2021 08:33', '', 'Tugas_-_Copy45.pdf'),
(149, '2021010109', 6, 95, '09-06-2021 08:34', '', 'Tugas_-_Copy46.pdf'),
(150, '2021010109', 7, 87, '09-06-2021 08:34', '', 'Tugas_-_Copy47.pdf'),
(151, '2021010109', 8, 95, '09-06-2021 08:34', '', 'Tugas_-_Copy48.pdf'),
(152, '2021010109', 9, 95, '09-06-2021 08:34', '', 'Tugas_-_Copy49.pdf'),
(153, '2021010109', 10, 87, '09-06-2021 08:35', '', 'Tugas_-_Copy50.pdf'),
(154, '2021010109', 13, 80, '09-06-2021 08:35', '', 'Tugas_13.pdf'),
(155, '2021010109', 14, 87, '09-06-2021 08:35', '', 'Tugas_14.pdf'),
(156, '2021010109', 15, 85, '09-06-2021 08:35', '', 'Tugas_-_Copy51.pdf'),
(157, '2021010109', 16, 75, '09-06-2021 08:35', '', 'Tugas_-_Copy52.pdf'),
(158, '2021010109', 17, 87, '09-06-2021 08:36', '', 'Tugas_-_Copy53.pdf'),
(159, '2021010109', 18, 85, '09-06-2021 08:36', '', 'Tugas_-_Copy54.pdf'),
(160, '2021010110', 1, 80, '09-06-2021 08:37', '', 'Tugas_15.pdf'),
(161, '2021010110', 2, 87, '09-06-2021 08:37', '', 'Tugas_16.pdf'),
(162, '2021010110', 3, 85, '09-06-2021 08:37', '', 'Tugas_17.pdf'),
(163, '2021010110', 4, 87, '09-06-2021 08:37', '', 'Tugas_18.pdf'),
(164, '2021010110', 5, 85, '09-06-2021 08:37', '', 'Tugas_19.pdf'),
(165, '2021010110', 6, 75, '09-06-2021 08:38', '', 'Tugas_110.pdf'),
(166, '2021010110', 7, 90, '09-06-2021 08:38', '', 'Tugas_111.pdf'),
(167, '2021010110', 8, 95, '09-06-2021 08:38', '', 'Tugas_112.pdf'),
(168, '2021010110', 9, 90, '09-06-2021 08:38', '', 'Tugas_113.pdf'),
(169, '2021010110', 10, 75, '09-06-2021 08:38', '', 'Tugas_114.pdf'),
(170, '2021010110', 11, 75, '09-06-2021 08:39', '', 'Tugas_115.pdf'),
(171, '2021010110', 12, 87, '09-06-2021 08:39', '', 'Tugas_116.pdf'),
(172, '2021010110', 13, 90, '09-06-2021 08:39', '', 'Tugas_117.pdf'),
(173, '2021010110', 14, 85, '09-06-2021 08:39', '', 'Tugas_118.pdf'),
(174, '2021010110', 15, 90, '09-06-2021 08:39', '', 'Tugas_119.pdf'),
(175, '2021010110', 16, 87, '09-06-2021 08:40', '', 'Tugas_120.pdf'),
(176, '2021010110', 17, 95, '09-06-2021 08:40', '', 'Tugas_121.pdf'),
(177, '2021010110', 18, 87, '09-06-2021 08:40', '', 'Tugas_122.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `url` varchar(25) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw  fa-tachometer-alt', 1),
(2, 7, 'My Profile', 'profile', 'fas fa-fw fa-user', 1),
(3, 7, 'Edit Profile', 'profile/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder-plus', 1),
(5, 3, 'Sub Menu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(11, 2, 'Pengajar', 'user', 'fas fa-fw fa-user-tie', 1),
(14, 2, 'Siswa', 'user/siswa', 'fas fa-fw fa-user-graduate', 1),
(15, 2, 'Tambah User', 'user/tambahUser', 'fas fa-fw fa-user-plus', 1),
(18, 1, 'Pendaftaran', 'pendaftaran/listPendaftar', 'fas fa-fw fa-user-plus', 1),
(20, 5, 'Ruang Kelas', 'pengajar', 'fas fa-fw fa-chalkboard-teacher', 1),
(21, 5, 'Nilai Raport', 'pengajar/nilaiRaport', 'fas fa-fw fa-chalkboard', 1),
(24, 6, 'Ruang Kelas', 'siswa', 'fas fa-fw fa-chalkboard-teacher', 1),
(25, 6, 'Rekap Absen', 'siswa/rekapAbsen', 'fas fa-fw fa-folder-open', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` int(11) NOT NULL,
  `id_pem` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `pertemuan` int(11) DEFAULT NULL,
  `judul_tugas` varchar(50) NOT NULL,
  `desc_tugas` text NOT NULL,
  `file` varchar(50) NOT NULL,
  `date_exp` datetime NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id_tugas`, `id_pem`, `id_kelas`, `pertemuan`, `judul_tugas`, `desc_tugas`, `file`, `date_exp`, `date_create`) VALUES
(1, 1, 1, 1, 'Tugas Mengetik 1', 'Kerjakan dengan benar', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', '2021-06-09 17:40:00', 1623148843),
(2, 3, 2, 2, 'Tugas Mengetik 2', 'Kerjakan dengan benar', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', '2021-06-09 17:51:00', 1623149462),
(3, 4, 3, 3, 'Tugas Mengetik 3', 'Kerjakan dengan benar', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', '2021-06-09 17:51:00', 1623149520),
(4, 5, 4, 4, 'Tugas Windows 1', 'Kerjakan dengan benar', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', '2021-06-09 20:16:00', 1623158206),
(5, 6, 5, 5, 'Tugas Windows 2', 'Kerjakan dengan benar', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', '2021-06-09 20:19:00', 1623158384),
(6, 7, 6, 6, 'Tugas Windows 3', 'Kerjakan dengan benar', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', '2021-06-09 20:20:00', 1623158431),
(7, 8, 7, 7, 'Tugas Internet 1', 'Kerjakan dengan benar', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', '2021-06-09 20:21:00', 1623158503),
(8, 9, 8, 8, 'Tugas Internet 2', 'Kerjakan dengan benar', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', '2021-06-09 20:22:00', 1623158550),
(9, 10, 9, 9, 'Tugas Internet 3', 'Kerjakan dengan benar', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', '2021-06-09 20:24:00', 1623158683),
(10, 12, 10, 10, 'Tugas Ms.word 1', 'Kerjakan dengan benar', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', '2021-06-09 20:26:00', 1623158803),
(11, 11, 11, 11, 'Tugas Ms.word 2', 'Kerjakan dengan benar', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', '2021-06-09 20:28:00', 1623158901),
(12, 13, 12, 12, 'Tugas Ms.word 3', 'Kerjakan dengan benar', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', '2021-06-09 20:30:00', 1623159007),
(13, 14, 13, 13, 'Tugas Ms.excel 1', 'Kerjakan dengan benar', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', '2021-06-09 20:45:00', 1623159957),
(14, 15, 14, 14, 'Tugas Ms.excel 2', 'Kerjakan dengan benar', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', '2021-06-09 20:46:00', 1623159995),
(15, 16, 15, 15, 'Tugas Ms.excel 3', 'Kerjakan dengan benar', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', '2021-06-09 20:48:00', 1623160097),
(16, 17, 16, 16, 'Tugas Ms.PPT 1', 'Kerjakan dengan benar', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', '2021-06-09 20:50:00', 1623160261),
(17, 18, 17, 17, 'Tugas Ms.PPT 2', 'Kerjakan dengan benar', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', '2021-06-09 20:51:00', 1623160310),
(18, 19, 18, 18, 'Tugas Ms.PPT 3', 'Kerjakan dengan benar', 'Surat_Pernyataan_Magang_(Eka_Irvan_Supendi_-_12180', '2021-06-09 20:53:00', 1623160388);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `nip` varchar(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `role_id`, `name`, `nip`, `alamat`, `email`, `no_telp`, `tgl_lahir`, `image`, `password`, `is_active`, `date_created`) VALUES
(1, 1, 'Administrator', 'admin0101', NULL, 'studiokelas@gmail.com', NULL, NULL, 'default.jpg', '$2y$10$B/ATyTh3S7CrNJoJ4fV2Q.FypN53XLh86pctHdiDwQWIXYGDCHS6a', 1, NULL),
(2, 1, 'Administrator', 'admin0102', NULL, 'studiokelas@gmail.com', NULL, NULL, 'default.jpg', '$2y$10$B/ATyTh3S7CrNJoJ4fV2Q.FypN53XLh86pctHdiDwQWIXYGDCHS6a', 1, NULL),
(3, 2, 'Komarullah', 'KRH0101', 'Jl. Klp. Muda IX No.8, RT.2/RW.7, Tugu Utara, Kec. Koja, Kota Jkt Utara', 'komarullah@gmail.com', NULL, NULL, 'default.jpg', '$2y$10$B/ATyTh3S7CrNJoJ4fV2Q.FypN53XLh86pctHdiDwQWIXYGDCHS6a', 1, 1623113867),
(4, 2, 'Samsuri', 'SSR0102', 'Jl. Klp. Muda IX No.8, RT.2/RW.7, Tugu Utara, Kec. Koja, Kota Jkt Utara', 'samsuri@gmail.com', '', NULL, 'default.jpg', '$2y$10$B/ATyTh3S7CrNJoJ4fV2Q.FypN53XLh86pctHdiDwQWIXYGDCHS6a', 1, 1623113898),
(5, 3, 'Eka Irvan Supendi', '2021010101', 'Jalan. ', 'eka@gmail.com', '0892123123', '1996-11-21', 'ekairvans1.jpg', '$2y$10$B/ATyTh3S7CrNJoJ4fV2Q.FypN53XLh86pctHdiDwQWIXYGDCHS6a', 1, 1623114243),
(6, 3, 'Mery Ajohan', '2021010102', 'Jalan. ', 'mery@gmail.com', '', NULL, 'punyaku.jpg', '$2y$10$B/ATyTh3S7CrNJoJ4fV2Q.FypN53XLh86pctHdiDwQWIXYGDCHS6a', 1, 1623114267),
(7, 3, 'Desi Anjani', '2021010103', 'Jalan.', 'desi@gmail.com', NULL, NULL, 'default.jpg', '$2y$10$B/ATyTh3S7CrNJoJ4fV2Q.FypN53XLh86pctHdiDwQWIXYGDCHS6a', 1, 1623114310),
(8, 3, 'Hendra Sukmawijaya', '2021010104', 'Jalan. ', 'hendra@gmail.com', NULL, NULL, 'default.jpg', '$2y$10$B/ATyTh3S7CrNJoJ4fV2Q.FypN53XLh86pctHdiDwQWIXYGDCHS6a', 1, 1623114346),
(9, 3, 'Farhan Radifan', '2021010105', 'Jalan. ', 'farhan@gmail.com', NULL, NULL, 'default.jpg', '$2y$10$B/ATyTh3S7CrNJoJ4fV2Q.FypN53XLh86pctHdiDwQWIXYGDCHS6a', 1, 1623114385),
(10, 3, 'Farah Isma Nisrina', '2021010106', 'Jalan. ', 'farah@gmail.com', NULL, NULL, 'default.jpg', '$2y$10$B/ATyTh3S7CrNJoJ4fV2Q.FypN53XLh86pctHdiDwQWIXYGDCHS6a', 1, 1623114493),
(11, 3, 'Joko Waskito', '2021010107', 'Jalan. ', 'ray@gmail.com', NULL, NULL, 'default.jpg', '$2y$10$B/ATyTh3S7CrNJoJ4fV2Q.FypN53XLh86pctHdiDwQWIXYGDCHS6a', 1, 1623114533),
(12, 3, 'Muhammad Rifqi Alamsyah ', '2021010108', 'Jalan. ', 'rifqi@gmail.com', NULL, NULL, 'default.jpg', '$2y$10$B/ATyTh3S7CrNJoJ4fV2Q.FypN53XLh86pctHdiDwQWIXYGDCHS6a', 1, 1623114581),
(13, 3, 'Rohmatunisa', '2021010109', 'Jalan. ', 'rohmatunisa@gmail.com', NULL, NULL, 'default.jpg', '$2y$10$B/ATyTh3S7CrNJoJ4fV2Q.FypN53XLh86pctHdiDwQWIXYGDCHS6a', 1, 1623114626),
(14, 3, 'Patimah Hartini', '2021010110', 'Jalan. ', 'patimah@gmail.com', NULL, NULL, 'default.jpg', '$2y$10$B/ATyTh3S7CrNJoJ4fV2Q.FypN53XLh86pctHdiDwQWIXYGDCHS6a', 1, 1623114667);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Pengajar'),
(3, 'Siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` varchar(125) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(11, 'pandawa.000004@gmail.com', 'hpsQoUy5hu15Wcb9LFerhqsFdiqwlMfDjFZ7Kl11ZO8=', 1623919698),
(12, 'pandawa.000004@gmail.com', 'bw7cuuAHSlIkfeu/LA/sDVhY9MesyUTv/pWRbTreBH8=', 1623919811);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `nip_user` (`nip_user`);

--
-- Indeks untuk tabel `access_menu`
--
ALTER TABLE `access_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indeks untuk tabel `chat_forum`
--
ALTER TABLE `chat_forum`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `id_perkuliahan` (`id_kelas`),
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indeks untuk tabel `doc_user`
--
ALTER TABLE `doc_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nip_user` (`nip_user`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_materi` (`id_materi`),
  ADD KEY `nip_user` (`nip_user`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembelajaran`
--
ALTER TABLE `pembelajaran`
  ADD PRIMARY KEY (`id_pem`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indeks untuk tabel `relasi_pendaftar`
--
ALTER TABLE `relasi_pendaftar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pendaftar` (`id_pendaftar`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `relasi_token`
--
ALTER TABLE `relasi_token`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pendaftar` (`id_pendaftar`),
  ADD KEY `id_token` (`id_token`);

--
-- Indeks untuk tabel `relasi_tugas`
--
ALTER TABLE `relasi_tugas`
  ADD PRIMARY KEY (`id_relasi`),
  ADD KEY `nip` (`nip`),
  ADD KEY `id_tugas` (`id_tugas`);

--
-- Indeks untuk tabel `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_tugas`),
  ADD KEY `id_pem` (`id_pem`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT untuk tabel `access_menu`
--
ALTER TABLE `access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `chat_forum`
--
ALTER TABLE `chat_forum`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `doc_user`
--
ALTER TABLE `doc_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pembelajaran`
--
ALTER TABLE `pembelajaran`
  MODIFY `id_pem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `relasi_pendaftar`
--
ALTER TABLE `relasi_pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `relasi_token`
--
ALTER TABLE `relasi_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `relasi_tugas`
--
ALTER TABLE `relasi_tugas`
  MODIFY `id_relasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT untuk tabel `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
