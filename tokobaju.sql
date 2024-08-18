-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 10:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokobaju`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `id_users`, `id_product`) VALUES
(5, 6, 11),
(6, 6, 9);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id_item` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id_item`, `id_transaksi`, `id_product`) VALUES
(8, 4, 9),
(9, 5, 9),
(10, 6, 9),
(11, 8, 15),
(12, 9, 16),
(14, 11, 24),
(15, 11, 15),
(16, 12, 15),
(17, 12, 16),
(18, 13, 15);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` int(13) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kodepos` varchar(255) NOT NULL,
  `jalan` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `rekening` varchar(255) NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_users`, `nama`, `nohp`, `provinsi`, `kota`, `kecamatan`, `kodepos`, `jalan`, `bank`, `rekening`, `pengirim`, `catatan`) VALUES
(10, 12, 'Pembeli', 812345, 'Riau', 'Pekanbaru', 'Rumbai', '123456', 'Jl. Berdikari', 'BNI', '1234456677', 'fadil', 'blablabla');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `nama_product` varchar(100) NOT NULL,
  `harga_product` int(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `gambar_product` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `nama_product`, `harga_product`, `deskripsi`, `kategori`, `gambar_product`) VALUES
(15, 'Slide Red Sandal', 120, 'Cece Slide Red Sandal, the smooth slip-on that presents a “Cece” signature at the upper arch. This slip-on made with EVA outsole for lightweight comfort, rubber sole, with a synthetic for a soft feel, and featuring a cloudfoam plus footbed with pillow-sof', 'Accessories', 'Slide-Red-Sandal-1-600x720.jpg'),
(16, ' Uncrowned Earth White T-Shirt', 70, 'Uncrowned Earth White from the cotton combed materials, with a white and red printed graphic design “Skull with the hotline call 911” at the back. Made with cotton combed 30s, cut in a regular fit, and a rib-knit crew neck. White color gives you a casual ', 'tshirt', 'UNCROWNED-EARTH-WHITE-1-1000x1455.jpg'),
(17, 'Flashy White T-Shirt', 70, 'Let’s make it flashy! Flashy White T-Shirt featuring a small lettering “Cece” at the chest. And it’s a huge print design with the quotes about ‘painting’ that’s overwritten by colorful paint strokes at the back. This t-shirt is topped with short sleeves, ', 'tshirt', 'Flashy-White-T-Shirt-1-1-704x1024.jpg'),
(18, 'Dream Scape Black T-Shirt', 70, 'Dreamscape Black T-Shirt with a lettering ‘Cece’ at the left chest and the meaning of ‘Dreamscape ; A landscape or scene with the strangeness or mystery characteristic of dreams’ at the right side. For the back side there’s a graphic design about a human ', 'tshirt', 'dreamscape-1-704x1024.jpg'),
(20, 'Polo Slub Navy Shirt', 75, 'This polo shirt became part of the wardrobe for horse-related sports. Nowadays, a polo shirt means for daily wear and any occasion. The materials are from Lacoste and Pique Cotton, soft and breathable materials. Complete with ribbed collar, buttoned half-', 'shirt', 'Polo-Shirt-Navy-1-1000x1000.jpg'),
(21, ' Polo Slub Green Shirt', 75, 'This polo shirt became part of the wardrobe for horse-related sports. Nowadays, a polo shirt means for daily wear and any occasion. The materials are from Lacoste and Pique Cotton, soft and breathable materials. Complete with ribbed collar, buttoned half-', 'shirt', 'Polo-Shirt-green-1A-1-704x1024.jpg'),
(22, 'Basic SS Polo White Shirt', 75, 'This polo shirt became part of the wardrobe for horse-related sports. For nowadays, polo shirt means for a daily wear and any occasion. The materials are from Lacoste and Pique Cotton, soft and breathable materials. Complete with ribbed collar, buttoned h', 'shirt', 'POLO-WHITE-1-1-704x1024.jpg'),
(23, ' Basic Logo Misty Hoodie', 150, 'Basic Logo Misty Hoodie featured with embroidery lettering “W” at the chest, with a simple side-seamed design, With a soft handfeel, cut in a relaxed fit. This materials are made from cotton-fleece with an adjustable drawstring closure, a front pocket, an', 'hoodie', 'basic-logo-hoodie-misty-1-704x1024.jpg'),
(24, 'New Born Black Coach Black Jacket', 150, 'Going to grow up. New Born Coach Black Jacket with a round Wellborn’s small icon at the left chest. With a new upsized chart, from a lightweight Mayer (polyester) for water and wind resistance. A huge graphic design of human and skull, with the quotes at ', 'jacket', 'CATALOGUE-NEW-BORN-COACH-JACKET-BLACK-BACK-1000x1000.jpg'),
(25, '1618 Coach Maroon Jacket', 150, '1618 Coach Maroon Jacket with the lettering “Wellborn” and a small golden ratio in there. Made for oversized fittings tailored in a lightweight Mayer (polyester) for water and wind resistance. For the back, there’s a graphic design about the 1.618 divine ', 'jacket', '1618-Coach-Jacket-Maroon-2-704x1024.jpg'),
(26, 'Herb Coach Black Jacket', 150, 'Herb Coach Black Jacket with a small lettering ‘Wellborn’ with a little flower at the left chest. For the backside there’s a huge printed design with a lettering W and herb flower. Made for oversized fittings tailored in a lightweight mayer (polyester) fo', 'jacket', 'Herb-Coach-Jacket-2-724x1024.jpg'),
(27, 'Envoy Navy Bag', 78, 'ENVOY Bag features dual separate compartments at the front with zip fly closures and a bigger compartment at the back. Finished with adjustable strap with buckle closure which makes you more comfortable while doing some errands.', 'Accessories', 'envoy-navy-2-724x1024.jpg'),
(28, 'Pocket Bucket Hat Olive', 70, 'Wellborn Pocket Bucket Hat Olive with durable fedora materials. The crown features a small zip pocket in black color. Olive, it’s a warm and neutral color and you can adjust this Olive Bucket Hat with your outfit. This accessory you should have, essential', 'Accessories', 'BUCKET-OLIVE-4-704x1024.jpg'),
(29, 'Black Daily Bag', 120, 'Perfect for an everyday pack our Daily Bag’s made from Taslan to provide a water resistant and strong bag that you can use every day in any weathers. It features standard main compartment, a laptop slot inside, and an outer pocket to carry all of your dai', 'Accessories', 'Daily-Bag-Black-1-719x1024.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `status` enum('belum dibayar','dibayar','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_users`, `status`) VALUES
(13, 12, 'proses');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`) VALUES
(7, 'fadil', 'fadil'),
(8, 'lala', 'lala'),
(13, 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_user` (`id_users`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_users` (`id_product`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
