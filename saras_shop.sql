-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2020 at 01:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saras_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_brg` int(20) NOT NULL,
  `nama_brg` varchar(45) NOT NULL,
  `harga` int(20) NOT NULL,
  `id_paket` int(20) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `id_pegawai` int(20) NOT NULL,
  `photo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_brg`, `nama_brg`, `harga`, `id_paket`, `nama_paket`, `id_pegawai`, `photo`) VALUES
(1, 'greenshake dan micatea', 340000, 1, 'paket langsing', 123, 0),
(2, '2 micatea', 300000, 2, 'paket lancar', 124, 0);

-- --------------------------------------------------------

--
-- Table structure for table `table paket`
--

CREATE TABLE `table paket` (
  `nama_paket` varchar(30) NOT NULL,
  `harga_paket` int(20) NOT NULL,
  `nama_brg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table paket`
--

INSERT INTO `table paket` (`nama_paket`, `harga_paket`, `nama_brg`) VALUES
('paket langsing', 340000, 'greenshake dan micatea'),
('paket lancar', 280000, '2 micatea');

-- --------------------------------------------------------

--
-- Table structure for table `table pegawai`
--

CREATE TABLE `table pegawai` (
  `id_pegawai` int(20) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table pegawai`
--

INSERT INTO `table pegawai` (`id_pegawai`, `nama_pegawai`) VALUES
(123, 'ayu '),
(124, 'putri');

-- --------------------------------------------------------

--
-- Table structure for table `table pembeli`
--

CREATE TABLE `table pembeli` (
  `nama_pembeli` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table pembeli`
--

INSERT INTO `table pembeli` (`nama_pembeli`, `alamat`, `no_hp`) VALUES
('tomi mahendra', 'desa kemoning, klungkung', '083115911515'),
('gita oktayani', 'desa gelgel,klungkung', '081999672962');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `active` set('Y','N') NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `id_pegawai`, `active`, `id`) VALUES
('saras26@gmail.com', '3d2172418ce305c7d16d4b05597c6a59', 0, 'Y', 11),
('saras26@gmail.com', '3d2172418ce305c7d16d4b05597c6a59', 123, 'Y', 11),
('madearta29@gmail.com', 'made26', 123, 'Y', 12);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
