-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2023 pada 17.08
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapelanggan`
--

CREATE TABLE `datapelanggan` (
  `No.` int(50) NOT NULL,
  `Nama Lengkap` varchar(100) NOT NULL,
  `No.Handphone` int(50) NOT NULL,
  `Alamat` varchar(1000) NOT NULL,
  `Pesanan` varchar(50) NOT NULL,
  `Banyak Pesanan` int(50) NOT NULL,
  `Note` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapelanggan`
--

INSERT INTO `datapelanggan` (`No.`, `Nama Lengkap`, `No.Handphone`, `Alamat`, `Pesanan`, `Banyak Pesanan`, `Note`) VALUES
(1, 'Caroline Pollard', 082348458, '4492 Reynold Falls', 'Nasi Omelet', 5, 'GPL (Gak Pakai Lama)'),
(2, 'Joseph Taylor', 0812348375, '99563 Leda Trafficway Apt. 463', 'Sop Iga 2, Jus Apel 2', 4, 'Seger daripada Panas'),
(3, 'Kathleen Hoover', 0854784797, '85068 Jaida Port', 'Tongseng Daging 1', 1, 'Cabainya level 10 '),
(4, 'Safia Alexander', 0897563824, '1164 Pollich Wall Apt. 734', 'Nasi Goreng Sapi 2, Jus Sirsak 3', 5, 'Makan sendiri biar kenyang'),
(5, 'Alice George', 0854726281, '100 Dena Keys Apt. 727', 'Capcay Ayam 2, Es Kelapa 1', 3, 'Kesempurnaan tiada tara'),
(6, 'Emmanuel Rodriguez', 0845674827, '600 Monahan Stream Suite 622', 'Kol Goreng 1, Chicken Katsu 1', 2, '-'),
(7, 'Brianna Vance', 0875747386, '825 Novella Bypass Suite 086', 'Udang Goreng 4, Hamburger 3', 7, 'Udang goreng nya dipisah'),
(8, 'Leia Robinson', 0876482648, '2303 Bahringer Flats', 'Cumi Goreng, Nasi', 1, 'Goreng garing merinting'),
(9, 'Karina Frederick', 0856726737, '2754 Witting Lakes Apt. 793', 'Mie Goreng Pedas', 2, '-'),
(10,'Izabella Blanchard', 0862381494, '73761 Broderick Rue Suite 193', 'Nasi Hainan Chicken 1', 1, 'Mentega dikit aja'),
(11,'Muse', 089328451, '4492 Sukabirus Falls', 'Nasi Omelet', 5, 'GPL (Gak Pakai Lama)'),
(12,'Coldplay', 0832448375, '99563 Citereup Trafficway Apt. 463', 'Sop Iga 2, Jus Apel 2', 4, 'Seger daripada Panas'),
(13,'Metro Boomin', 0854783902, '85068 Lengkong Port', 'Tongseng Daging 1', 1, 'Cabainya level 10 '),
(14,'Travis Scoot', 0897561024, '1164 Pollich Sukapura Apt. 734', 'Nasi Goreng Sapi 2, Jus Sirsak 3', 5, 'Makan sendiri biar kenyang'),
(15,'Artics Monkey', 0812426281, '100 Dena PGA. 727', 'Capcay Ayam 2, Es Kelapa 1', 3, 'Kesempurnaan tiada tara'),
(16,'The Weeknd', 0823624827, '600 PBB Stream Suite 622', 'Kol Goreng 1, Chicken Katsu 1', 2, '-'),
(17,'Twice', 08125747386, '825 Griya Nasti 086', 'Udang Goreng 4, Hamburger 3', 7, 'Udang goreng nya dipisah'),
(18,'Blackpink', 0811586648, '2303 Adonis Flats', 'Cumi Goreng, Nasi', 1, 'Goreng garing merinting'),
(19,'Quantum', 0856726077, '2754 Pondok Yogya Lakes Apt. 793', 'Mie Goreng Pedas', 2, '-'),
(20,'Appa', 0867412484, '73761 Indra Giri Suite 193', 'Nasi Hainan Chicken 1', 1, 'Mentega dikit aja');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
