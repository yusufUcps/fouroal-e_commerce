-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Des 2022 pada 05.38
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahabat_anda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kb` varchar(20) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `stok` varchar(15) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kb`, `gambar`, `nama`, `perusahaan`, `jenis`, `stok`, `harga`, `tanggal`) VALUES
('10001', 'migoreng.jpg', 'Indomie Goreng Original', 'indofood', 'Makanan', '100', '3500', '2022-12-28 04:18:37'),
('10002', 'mikabw.jpg', 'Mie kuah ayam bawang', 'indofood', 'Makanan', '150', '3500', '2022-12-28 04:19:03'),
('10003', 'miksoto.jpg', 'Mie kuah Soto', 'indofood', 'Makanan', '150', '3500', '2022-12-28 04:19:32'),
('10004', 'mirendang.jpg', 'Mie Goreng Rendang', 'indofood', 'Makanan', '100', '3500', '2022-12-28 04:19:56'),
('10005', 'mijumbo.jpg', 'Mie Goreng jumbo', 'indofood', 'Makanan', '100', '5500', '2022-12-28 04:20:43'),
('20001', 'kapalapi.jpg', 'Kopi Kapal Api', 'Kapal Api', 'Minuman', '222', '4500', '2022-12-28 04:21:29'),
('20002', 'pockecil.jpg', 'Pocari botol kecil', 'Otsuka', 'Minuman', '75', '4500', '2022-12-28 04:22:08'),
('20003', 'pocbesar.jpg', 'Pocari botol besar', 'Otsuka', 'Minuman', '60', '8000', '2022-12-28 04:22:49'),
('20004', 'mizoly.jpg', 'Mizone lychee Lemon', 'Danone', 'Minuman', '22', '4500', '2022-12-28 04:23:39'),
('20005', 'luakw.jpg', 'Luwak White Coffee', 'Javaprima Abadi', 'Minuman', '75', '3000', '2022-12-28 04:33:08'),
('30001', 'panamera.jpg', 'Panadol Merah', 'GSK', 'Obat', '100', '4300', '2022-12-28 04:33:47'),
('30002', 'panabiru.jpg', 'Panadol Biru', 'GSK', 'Obat', '100', '6500', '2022-12-28 04:34:28'),
('30003', 'insto.jpg', 'Insto', 'Pharma Health Care', 'Obat', '22', '19000', '2022-12-28 04:34:57'),
('30004', 'promag.jpg', 'Promag', 'Kalbe', 'Obat', '80', '14000', '2022-12-28 04:35:24'),
('3005', 'panaextra.jpg', 'Panadol Extra', 'GSK', 'Obat', '75', '6500', '2022-12-28 04:35:50'),
('40001', 'pulpen.jpg', 'Pulpen Standard AE7', 'Standard Pen', 'Perlengkapan', '222', '16000', '2022-12-28 04:36:44'),
('40002', 'pidolw.jpg', 'Spidol Snowman Whiteboard', 'snowman', 'Perlengkapan', '75', '7500', '2022-12-28 04:37:10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
