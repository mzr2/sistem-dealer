-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 04:11 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE `adm` (
  `userAdm` varchar(20) NOT NULL,
  `passAdm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adm`
--

INSERT INTO `adm` (`userAdm`, `passAdm`) VALUES
('mzul', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `dt_mbl`
--

CREATE TABLE `dt_mbl` (
  `kdProduk` int(11) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `jBody` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `stok` int(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `userGdg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_mbl`
--

INSERT INTO `dt_mbl` (`kdProduk`, `merk`, `type`, `jBody`, `harga`, `gambar`, `stok`, `status`, `deskripsi`, `userGdg`) VALUES
(13, 'Toyota', 'Rush', 'Carbon', '250000000', 'Rush2.png', 40, '', '<p>Minibus/2018</p>\r\n<p>Family Car</p>\r\n<p>1500cc</p>', 'nco'),
(14, 'Toyota', 'Avanza', 'Carbon', '200000000', 'avanza.png', 4, '', '<p>Minibus/2017</p>\r\n<p>Family Car</p>\r\n<p>1300cc</p>', 'nco');

-- --------------------------------------------------------

--
-- Table structure for table `finish`
--

CREATE TABLE `finish` (
  `idHistory` int(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ktp` varchar(10) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kdProduk` int(100) NOT NULL,
  `warna` varchar(15) NOT NULL,
  `metPem` varchar(10) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `tagihan` varchar(20) NOT NULL,
  `statpes` varchar(20) NOT NULL,
  `idPes` int(255) NOT NULL,
  `userAdm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finish`
--

INSERT INTO `finish` (`idHistory`, `nama`, `ktp`, `hp`, `alamat`, `kdProduk`, `warna`, `metPem`, `merk`, `type`, `gambar`, `tagihan`, `statpes`, `idPes`, `userAdm`) VALUES
(2, 'Muhammad Zulfikar', '1301164313', '082115350924', 'rajagaluh, majalengka', 14, 'abu-abu', 'Credit', 'Toyota', 'Avanza', 'avanza.png', 'Dalam masa cicilan', 'Sudah diproses', 20, 'mzul');

-- --------------------------------------------------------

--
-- Table structure for table `peggudang`
--

CREATE TABLE `peggudang` (
  `userGdg` varchar(20) NOT NULL,
  `passGdg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peggudang`
--

INSERT INTO `peggudang` (`userGdg`, `passGdg`) VALUES
('nco', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `metPem` varchar(10) NOT NULL,
  `idPem` int(255) NOT NULL,
  `tagihan` varchar(20) NOT NULL,
  `statPes` varchar(20) NOT NULL,
  `ktp` varchar(10) NOT NULL,
  `idPes` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`metPem`, `idPem`, `tagihan`, `statPes`, `ktp`, `idPes`) VALUES
('Cash', 15, '250000000', 'Belum diproses', '1301164313', 19),
('Credit', 16, '200000000', 'Sudah diproses', '1301164313', 20);

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `nama` varchar(50) NOT NULL,
  `ktp` varchar(10) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`nama`, `ktp`, `hp`, `alamat`) VALUES
('Enrico', '1301164263', '088877442234', 'sukabumi'),
('Muhammad Zulfikar', '1301164313', '082115350924', 'rajagaluh, majalengka');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `idPes` int(255) NOT NULL,
  `kdProduk` int(100) NOT NULL,
  `warna` varchar(15) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `ktp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`idPes`, `kdProduk`, `warna`, `merk`, `type`, `gambar`, `ktp`) VALUES
(19, 13, 'hitam', 'Toyota', 'Rush', 'Rush2.png', '1301164313'),
(20, 14, 'abu-abu', 'Toyota', 'Avanza', 'avanza.png', '1301164313');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`userAdm`);

--
-- Indexes for table `dt_mbl`
--
ALTER TABLE `dt_mbl`
  ADD PRIMARY KEY (`kdProduk`),
  ADD KEY `userGdg` (`userGdg`);

--
-- Indexes for table `finish`
--
ALTER TABLE `finish`
  ADD PRIMARY KEY (`idHistory`),
  ADD KEY `finish_ibfk_1` (`idPes`),
  ADD KEY `finish_ibfk_2` (`userAdm`);

--
-- Indexes for table `peggudang`
--
ALTER TABLE `peggudang`
  ADD PRIMARY KEY (`userGdg`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idPem`),
  ADD KEY `ktp` (`ktp`),
  ADD KEY `idPes` (`idPes`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`ktp`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`idPes`),
  ADD KEY `ktp` (`ktp`),
  ADD KEY `kdProduk` (`kdProduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dt_mbl`
--
ALTER TABLE `dt_mbl`
  MODIFY `kdProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `finish`
--
ALTER TABLE `finish`
  MODIFY `idHistory` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `idPem` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `idPes` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dt_mbl`
--
ALTER TABLE `dt_mbl`
  ADD CONSTRAINT `dt_mbl_ibfk_1` FOREIGN KEY (`userGdg`) REFERENCES `peggudang` (`userGdg`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `finish`
--
ALTER TABLE `finish`
  ADD CONSTRAINT `finish_ibfk_1` FOREIGN KEY (`idPes`) REFERENCES `pesanan` (`idPes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `finish_ibfk_2` FOREIGN KEY (`userAdm`) REFERENCES `adm` (`userAdm`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`ktp`) REFERENCES `pembeli` (`ktp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`idPes`) REFERENCES `pesanan` (`idPes`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`ktp`) REFERENCES `pembeli` (`ktp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`kdProduk`) REFERENCES `dt_mbl` (`kdProduk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
