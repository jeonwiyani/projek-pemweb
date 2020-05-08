-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 09:08 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `tanggalPesan` datetime NOT NULL,
  `jumlah` int(100) NOT NULL,
  `metodePembayaran` varchar(100) NOT NULL,
  `buktiPembayaran` varchar(100) NOT NULL,
  `statusPembayaran` varchar(100) NOT NULL,
  `Resi` int(20) NOT NULL,
  `id_cust` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `tanggalPesan`, `jumlah`, `metodePembayaran`, `buktiPembayaran`, `statusPembayaran`, `Resi`, `id_cust`, `id_product`) VALUES
(4, '0000-00-00 00:00:00', 4, '', '', '', 0, 1, 1),
(5, '2019-04-26 16:01:03', 2, '', '', '', 0, 1, 2),
(6, '2019-04-26 16:01:14', 1, ' ', '', '', 0, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `namaCust` varchar(100) NOT NULL,
  `alamatCust` varchar(255) NOT NULL,
  `bankCust` varchar(20) NOT NULL,
  `rekening` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `noHP` int(13) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `password`, `namaCust`, `alamatCust`, `bankCust`, `rekening`, `email`, `noHP`, `foto`) VALUES
(1, '123', 'aaaabbbb', 'wwww', 'bbbb', 1111, 'erlina.bisa@gmail.com', 0, 'profile.png'),
(2, 'jeon', 'Jeowandha Ria Wiyani', '', '', 0, 'jeolu.jhenmarie@gmail.com', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `namaProduct` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `stock` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `namaProduct`, `harga`, `jenis`, `foto`, `stock`) VALUES
(1, 'Pashmina abu-abu', 55000, 'hijab', 'product-01.jpg', 15),
(2, 'Scarf Pink', 42000, 'hijab', 'product-02.jpg', 10),
(3, 'Rose Hibicus', 60000, 'skincare', 'product-03.jpg', 20),
(4, 'Pashmina Ungu', 55000, 'hijab', 'product-04.jpg', 12),
(5, 'Scarf Maroon', 44000, 'hijab', 'product-05.jpg', 25),
(6, 'Natural Sun Eco', 35000, 'skincare', 'product-06.jpg', 35),
(7, 'Hijab Abu-abu Muda', 40000, 'hijab', 'product-07.jpg', 25),
(8, 'Pasmina Pink Pastel', 55000, 'hijab', 'product-08.jpg', 15),
(9, 'Sleeping Mask', 48000, 'skincare', 'product-09.jpg', 24),
(10, 'Hijab Instan', 46000, 'hijab', 'product-10.jpg', 14),
(11, 'Revive Day Serum', 45000, 'skincare', 'product-11.jpg', 13),
(12, 'Clean and Clear', 25000, 'skincare', 'product-12.jpg', 28),
(13, 'Hijab Instan Coklat', 44000, 'hijab', 'product-13.jpg', 21),
(14, 'Scarf Abu dan Hitam', 47000, 'hijab', 'product-14.jpg', 13),
(15, 'Hijab Instan Biru Muda', 40000, 'hijab', 'product-15.jpg', 22),
(16, 'Scarf Kuning', 40000, 'hijab', 'product-16.jpg', 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_cust`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `id_customer` FOREIGN KEY (`id_cust`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `id_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
