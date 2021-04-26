-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2021 at 03:06 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_ws`
--

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_wisata` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tiket_wisata` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `alamat_wisata`, `tiket_wisata`) VALUES
(1, 'Taman Wisata Karang Resik', 'Jl. Mohamad Hatta, Sukamanah, Kec. Cipedes, Tasikmalaya, Jawa Barat', 'Rp 15.000'),
(2, 'Tonjong Canyon Cipatujah', 'Nagrog, Cipatujah, Tasikmalaya, Jawa Barat', 'Rp 2.000'),
(3, 'Bukit Kacapi', 'Tanjungkarang, Cigalontang, Tasikmalaya, Jawa Barat', 'Rp 7.000'),
(5, 'Gunung Galunggung', 'Kadipaten, Kec. Kadipaten, Tasikmalaya, Jawa Barat', 'Rp 10.000'),
(8, 'Situ Gede', 'Jl. Desa Linggaraja, Tasikmalaya, Jawa Barat', 'Rp 5.000');

-- --------------------------------------------------------

--
-- Table structure for table `wisatawan`
--

CREATE TABLE `wisatawan` (
  `id_wisatawan` int(11) NOT NULL,
  `nama_wisatawan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `asal_wisatan` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `email_wisatawan` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sosmed_wisatawan` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wisatawan`
--

INSERT INTO `wisatawan` (`id_wisatawan`, `nama_wisatawan`, `asal_wisatan`, `email_wisatawan`, `sosmed_wisatawan`) VALUES
(1, 'Rahmi Intari', 'Sukaraja', 'rahmiintari22@gmail.com', 'ig: rahmiin'),
(2, 'Cecep Hadi Maulana', 'Cibeureum', 'cecephm17@gmail.com', 'ig : cecephm17'),
(3, 'Nopan Aditia Rahayu', 'Indihiang', 'novanar11@gmail.com', 'ig : Novanar_'),
(4, 'Anifia Husna Z', 'Tasikmalaya', NULL, 'fb : anifia husna zenita'),
(5, 'Mia', 'Kabupaten Tasikmalaya', 'miammm22@gmail.com', 'fb : MiaMa'),
(6, 'Alwi Fauzan Mulyadi', 'Cijoho', 'alwifauzan16@gmail.com', 'ig : alwifauzan16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- Indexes for table `wisatawan`
--
ALTER TABLE `wisatawan`
  ADD PRIMARY KEY (`id_wisatawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wisatawan`
--
ALTER TABLE `wisatawan`
  MODIFY `id_wisatawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
