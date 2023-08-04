-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 07:35 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `jenkel_admin` varchar(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `jenkel_admin`, `username`, `password`, `level`) VALUES
(1, 'kheylina', 'female', 'kheylina@gmail', 'khey1234', 'SUPER'),
(10, 'Vino rainshus', 'Male', 'vino', 'vino', 'ADMIN'),
(11, 'aulia', 'Female', 'aulia', '2345', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `no_polisi` varchar(12) NOT NULL,
  `merk` varchar(90) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `harga` double NOT NULL,
  `s_mobil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `no_polisi`, `merk`, `tahun`, `harga`, `s_mobil`) VALUES
(5, 'BK 1234 XX', 'Avanza', '2000', 17099, 'AKTIF'),
(6, 'BK 1709 KY', 'Tesla', '2022', 19000000, 'AKTIF'),
(7, 'A 1709 AD', 'Avanza', '2000', 300000, 'AKTIF'),
(8, 'BK 1700 JK', 'Kijang', '2001', 4000000, 'AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id_sewa` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `nama_sewa` varchar(90) NOT NULL,
  `ktp` varchar(25) NOT NULL,
  `jenkel_sewa` varchar(25) NOT NULL,
  `alamat` varchar(90) NOT NULL,
  `tlp_sewa` varchar(12) NOT NULL,
  `tujuan` varchar(90) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `lama` int(11) NOT NULL,
  `harga_total` double NOT NULL,
  `s_order` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id_sewa`, `id_mobil`, `id_admin`, `nama_sewa`, `ktp`, `jenkel_sewa`, `alamat`, `tlp_sewa`, `tujuan`, `tgl_sewa`, `tgl_kembali`, `lama`, `harga_total`, `s_order`) VALUES
(2, 6, 1, 'kezia', '1234', 'Female', 'medan', '081234', 'palembang', '2022-06-25', '2022-06-28', 3, 57000000, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
