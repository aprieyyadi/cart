-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2019 at 07:47 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appci`
--

-- --------------------------------------------------------

--
-- Table structure for table `jualan`
--

CREATE TABLE `jualan` (
  `id` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `harga` int(7) NOT NULL,
  `gambar` varchar(10) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jualan`
--

INSERT INTO `jualan` (`id`, `nama`, `harga`, `gambar`, `deskripsi`) VALUES
(2, 'Pisang Nugget', 15000, '', 'Olahan pisang yang dikukus membentuk sebuah nugget dan digoreng beberapa saat.'),
(3, 'Choco Lava Cake', 20000, '', 'Kue coklat yang didalamnya terdapat coklat lumer.'),
(4, 'Bola Pisang', 10000, '', 'Olahan pisang yang dibentuk menjadi bola bola yang diberi isi.'),
(6, 'Cilok Krispy', 10000, '', 'Olahan aci yang dibentuk menjadi bola, yang dimasak dan didalamnya terdapat keju'),
(7, 'Pisang lumer', 10000, '', 'Olahan pisang yang dibelah dan ditengahnya ditaruh coklat batang. Dibalut dengan tepung panir.'),
(11, 'Bakso aci', 12500, '', 'Bakso yang terbuat dari aci');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `no_order` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `jenis_pesanan` varchar(100) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_order` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_kirim` date DEFAULT NULL,
  `total_harga` int(8) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`no_order`, `id`, `nama`, `email`, `notelp`, `jenis_pesanan`, `jumlah`, `alamat`, `tgl_order`, `tgl_kirim`, `total_harga`, `status`) VALUES
(6, 7, 'adly', 'muhammads@gmail.com', '087879596823', 'Cilok Krispy', 10, 'Pondok Surya Mandala', '2019-06-12 15:34:59', '2019-06-15', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Dicatat'),
(2, 'Dibuat'),
(3, 'Dikirim');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(2) NOT NULL,
  `date_created` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role_id`, `date_created`, `image`) VALUES
(6, 'Adly Muhammad Shidieq', 'blackidz250@gmail.com', '$2y$10$SnWXk2JCMCCR1bmHEGCD3eC/bIepGYpj7Whhdw6kKpnQ44mAHyYim', 1, 1553871712, 'default.jpg'),
(7, 'muhammad', 'muhammads@gmail.com', '$2y$10$16SHSmrM75L/1lVrzcHtIusbUKw7O4NpQS9QZuQBzK8t6HCjpNORS', 2, 1560326196, 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jualan`
--
ALTER TABLE `jualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`no_order`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jualan`
--
ALTER TABLE `jualan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `no_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
