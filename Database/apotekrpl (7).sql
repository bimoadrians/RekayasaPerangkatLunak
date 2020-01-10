-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 05:49 PM
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
-- Database: `apotekrpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1561522976),
('admin', '100', 1561523613),
('gudang', '101', 1561541491),
('kasir', '102', 1561541500);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, 'dapat mengakses semua', NULL, NULL, 1561522976, 1561541295),
('createAsset', 2, 'Create Asset', NULL, NULL, 1561522973, 1561522973),
('createProfile', 2, 'Create User Profile', NULL, NULL, 1561522974, 1561522974),
('createReport', 2, 'Create Report', NULL, NULL, 1561522974, 1561522974),
('createResident', 2, 'Create Resident', NULL, NULL, 1561522974, 1561522974),
('deleteAsset', 2, 'Delete Asset', NULL, NULL, 1561522974, 1561522974),
('deleteResident', 2, 'Delete Asset', NULL, NULL, 1561522974, 1561522974),
('editAsset', 2, 'Edit Asset', NULL, NULL, 1561522974, 1561522974),
('editResident', 2, 'Edit Resident', NULL, NULL, 1561522974, 1561522974),
('gudang', 1, 'tidak dapat mengakses transaksi', NULL, NULL, 1561522975, 1561523186),
('kasir', 1, 'dapat membuka tab kasir', NULL, NULL, 1561522974, 1561541277),
('makePayment', 2, 'Make Payment', NULL, NULL, 1561522974, 1561522974),
('viewAsset', 2, 'View Asset', NULL, NULL, 1561522974, 1561522974),
('viewDashboards', 2, 'View Dashboards', NULL, NULL, 1561522974, 1561522974),
('viewPayment', 2, 'View Payment', NULL, NULL, 1561522974, 1561522974),
('viewProfile', 2, 'View User Profile', NULL, NULL, 1561522974, 1561522974),
('viewReport', 2, 'Edit Report', NULL, NULL, 1561522974, 1561522974),
('viewResident', 2, 'View Resident', NULL, NULL, 1561522974, 1561522974);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'createAsset'),
('admin', 'createProfile'),
('admin', 'createReport'),
('admin', 'createResident'),
('admin', 'deleteAsset'),
('admin', 'deleteResident'),
('admin', 'editAsset'),
('admin', 'editResident'),
('admin', 'gudang'),
('admin', 'kasir'),
('admin', 'makePayment'),
('admin', 'viewAsset'),
('admin', 'viewDashboards'),
('admin', 'viewPayment'),
('admin', 'viewProfile'),
('admin', 'viewReport'),
('admin', 'viewResident'),
('gudang', 'editAsset'),
('kasir', 'makePayment');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `keuangan`
-- (See below for the actual view)
--
CREATE TABLE `keuangan` (
`tanggal` date
,`omzet` decimal(42,0)
,`harga_pokok` decimal(42,0)
,`laba` decimal(43,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(144) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(144) NOT NULL,
  `id_petugas` int(11) DEFAULT NULL,
  `tipe` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `id_petugas`, `tipe`) VALUES
(100, 'haki', 'kida', NULL, 0),
(101, 'arjuna', 'ganteng', 1, 1),
(102, 'sadewa', 'kembar', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1561521363),
('m140506_102106_rbac_init', 1561521781),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1561521782),
('m180523_151638_rbac_updates_indexes_without_prefix', 1561521783);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `kode_obat` char(10) NOT NULL,
  `nama_obat` varchar(35) NOT NULL,
  `produsen_obat` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kode_obat`, `nama_obat`, `produsen_obat`, `stok`, `harga_jual`, `harga_beli`) VALUES
('1010101010', 'Paracetamol', 'PT Kimia Biologi', 200, 15000, 10000),
('1111111111', 'Puyer', 'Tukang Jamu', 100, 50000, 40000),
('2222222222', 'Obat bius', 'anestesi jawa barat', 20, 100000, 99000);

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(35) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_member`, `nama_member`, `alamat`) VALUES
(1, 'Painem', 'Bogor '),
(2, 'Wagiyo', 'Magetan');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(144) NOT NULL,
  `nama_petugas` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `alamat`) VALUES
(1, 'Arjuna', 'Manggeh Baru'),
(2, 'Sadewa', 'Manggeh Lama');

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE `posisi` (
  `id` int(3) NOT NULL COMMENT '0 = admin. 1 = petugas gudang, 2 = petugas kasir',
  `nama` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posisi`
--

INSERT INTO `posisi` (`id`, `nama`) VALUES
(0, 'admin owner'),
(1, 'petugas gudang'),
(2, 'petugas kasir');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `waktu_transaksi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_member` int(11) DEFAULT NULL,
  `id_petugas` int(11) NOT NULL,
  `kode_obat` char(10) NOT NULL,
  `jumlah_beli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `waktu_transaksi`, `id_member`, `id_petugas`, `kode_obat`, `jumlah_beli`) VALUES
(3, '2019-06-26 22:13:43', NULL, 1, '1010101010', 10),
(4, '2019-06-26 22:20:13', NULL, 1, '1010101010', 111),
(5, '2019-06-27 22:20:24', 1, 1, '1010101010', 5),
(6, '2019-06-26 22:26:19', 2, 1, '2222222222', 5);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_obat`
--

CREATE TABLE `transaksi_obat` (
  `id` int(11) NOT NULL,
  `kode_obat` char(10) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `keuangan`
--
DROP TABLE IF EXISTS `keuangan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `keuangan`  AS  select cast(`transaksi`.`waktu_transaksi` as date) AS `tanggal`,sum(((select `obat`.`harga_jual` from `obat` where (`obat`.`kode_obat` = `transaksi`.`kode_obat`)) * `transaksi`.`jumlah_beli`)) AS `omzet`,sum(((select `obat`.`harga_beli` from `obat` where (`obat`.`kode_obat` = `transaksi`.`kode_obat`)) * `transaksi`.`jumlah_beli`)) AS `harga_pokok`,(sum(((select `obat`.`harga_jual` from `obat` where (`obat`.`kode_obat` = `transaksi`.`kode_obat`)) * `transaksi`.`jumlah_beli`)) - sum(((select `obat`.`harga_beli` from `obat` where (`obat`.`kode_obat` = `transaksi`.`kode_obat`)) * `transaksi`.`jumlah_beli`))) AS `laba` from `transaksi` group by cast(`transaksi`.`waktu_transaksi` as date) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `tipe` (`tipe`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `kode_obat` (`kode_obat`);

--
-- Indexes for table `transaksi_obat`
--
ALTER TABLE `transaksi_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `kode_obat` (`kode_obat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi_obat`
--
ALTER TABLE `transaksi_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `login_ibfk_2` FOREIGN KEY (`tipe`) REFERENCES `posisi` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `pembeli` (`id_member`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`kode_obat`) REFERENCES `obat` (`kode_obat`);

--
-- Constraints for table `transaksi_obat`
--
ALTER TABLE `transaksi_obat`
  ADD CONSTRAINT `transaksi_obat_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `transaksi_obat_ibfk_2` FOREIGN KEY (`kode_obat`) REFERENCES `obat` (`kode_obat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
