-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2019 at 11:24 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `nama_bank` varchar(225) NOT NULL,
  `kode_bank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `nama_bank`, `kode_bank`) VALUES
(1, 'BNI', 25),
(2, 'BRI', 26),
(3, 'MANDIRI', 27);

-- --------------------------------------------------------

--
-- Table structure for table `grup`
--

CREATE TABLE `grup` (
  `id_grup` int(11) NOT NULL,
  `nama_grup` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grup`
--

INSERT INTO `grup` (`id_grup`, `nama_grup`) VALUES
(1, 'penjual\r\n'),
(2, 'pembeli'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(0, 'belum di proses'),
(1, 'tertunda'),
(2, 'berhasil'),
(3, 'gagal');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_topup` double NOT NULL,
  `id_user` int(11) NOT NULL,
  `jumlah_saldo` int(225) NOT NULL,
  `status_topup` int(1) NOT NULL DEFAULT '0' COMMENT '0=belum di proses, 1=tertunda, 2=berhasil, 3=gagal',
  `tanggal` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_bank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_topup`, `id_user`, `jumlah_saldo`, `status_topup`, `tanggal`, `id_bank`) VALUES
(201908280021, 47, 150000, 2, '2019-08-28 12:46:27', 3),
(201908290004, 51, 100000, 2, '2019-08-29 11:18:37', 1),
(201908300004, 51, 100000, 2, '2019-08-30 14:56:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_grup` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `nama_lengkap` varchar(60) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `no_hp` double NOT NULL,
  `lantai` int(11) DEFAULT NULL,
  `saldo` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_grup`, `username`, `nama_lengkap`, `password`, `email`, `no_hp`, `lantai`, `saldo`) VALUES
(39, 3, 'admin', 'admin clr cff', '21232f297a57a5a743894a0e4a801fc3', 'admin@xmail.com', 82251252772, 4, 0),
(40, 1, 'aldi', 'aldi', '5cf15fc7e77e85f5d525727358c0ffc9', 'aldi@xmail.com', 82251252772, 3, 0),
(43, 2, 'bambang', 'bambang a', '8672aa5c7a99f955f87426063b0481aa', 'bambang@xmail.com', 82251252772, 3, 0),
(47, 2, 'agus', 'agus aja', '80748430dea0437a37e1760874e3f85e', 'agus@xmail.com', 82251252772, 3, 2400000),
(51, 2, 'rr', 'rr', '514f1b439f404f86f77090fa9edc96ce', 'rr@xmail.com', 82251252772, 3, 400000);

-- --------------------------------------------------------

--
-- Table structure for table `va`
--

CREATE TABLE `va` (
  `id_va` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_bank` int(11) NOT NULL,
  `nomer_va` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `grup`
--
ALTER TABLE `grup`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_topup`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `va`
--
ALTER TABLE `va`
  ADD PRIMARY KEY (`id_va`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `grup`
--
ALTER TABLE `grup`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `va`
--
ALTER TABLE `va`
  MODIFY `id_va` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
