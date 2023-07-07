-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.27-MariaDB - Source distribution
-- Server OS:                    Linux
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table gudangantiq.barang
CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `toko_id` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga_barang` double NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `foto3` varchar(255) DEFAULT NULL,
  `foto4` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_barang`),
  KEY `FK_barang_toko` (`toko_id`),
  CONSTRAINT `FK_barang_toko` FOREIGN KEY (`toko_id`) REFERENCES `toko` (`id_toko`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table gudangantiq.barang: ~1 rows (approximately)
DELETE FROM `barang`;
INSERT INTO `barang` (`id_barang`, `toko_id`, `nama_barang`, `deskripsi`, `harga_barang`, `jumlah_barang`, `foto1`, `foto2`, `foto3`, `foto4`) VALUES
	(17, 16, 'Test', 'Test', 10000, 1, NULL, NULL, NULL, NULL),
	(19, 16, 'Gemastik', '123', 123, 123, 'Gemastik.png', '', NULL, NULL);

-- Dumping structure for table gudangantiq.checkout
CREATE TABLE IF NOT EXISTS `checkout` (
  `id_checkout` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `toko_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  PRIMARY KEY (`id_checkout`),
  KEY `FKUserCheckout` (`user_id`),
  KEY `FKTokoCheckout` (`toko_id`),
  KEY `FKBarangCheckout` (`barang_id`),
  CONSTRAINT `FKBarangCheckout` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FKTokoCheckout` FOREIGN KEY (`toko_id`) REFERENCES `toko` (`id_toko`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FKUserCheckout` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table gudangantiq.checkout: ~0 rows (approximately)
DELETE FROM `checkout`;

-- Dumping structure for table gudangantiq.keranjang
CREATE TABLE IF NOT EXISTS `keranjang` (
  `id_keranjang` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `toko_id` int(11) NOT NULL,
  PRIMARY KEY (`id_keranjang`),
  KEY `FKbarangcart` (`barang_id`),
  KEY `FKtoko` (`toko_id`),
  KEY `FKuserCart` (`user_id`),
  CONSTRAINT `FKbarangcart` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FKtoko` FOREIGN KEY (`toko_id`) REFERENCES `toko` (`id_toko`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FKuserCart` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table gudangantiq.keranjang: ~1 rows (approximately)
DELETE FROM `keranjang`;
INSERT INTO `keranjang` (`id_keranjang`, `user_id`, `barang_id`, `toko_id`) VALUES
	(2, 6, 17, 16);

-- Dumping structure for table gudangantiq.komentar
CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `isi_komentar` varchar(255) NOT NULL,
  PRIMARY KEY (`id_komentar`),
  KEY `FKuserKomentar` (`user_id`),
  KEY `FKbarangKomentar` (`barang_id`),
  CONSTRAINT `FKbarangKomentar` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FKuserKomentar` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table gudangantiq.komentar: ~0 rows (approximately)
DELETE FROM `komentar`;

-- Dumping structure for table gudangantiq.rating
CREATE TABLE IF NOT EXISTS `rating` (
  `id_rating` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_rating`),
  KEY `FKUserRating` (`user_id`),
  CONSTRAINT `FKUserRating` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table gudangantiq.rating: ~0 rows (approximately)
DELETE FROM `rating`;

-- Dumping structure for table gudangantiq.role
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table gudangantiq.role: ~2 rows (approximately)
DELETE FROM `role`;
INSERT INTO `role` (`id_role`, `role`) VALUES
	(1, 'User'),
	(2, 'Penjual'),
	(3, 'Admin');

-- Dumping structure for table gudangantiq.toko
CREATE TABLE IF NOT EXISTS `toko` (
  `id_toko` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `foto_toko` varchar(255) DEFAULT NULL,
  `nama_toko` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id_toko`),
  KEY `FKuser` (`user_id`),
  CONSTRAINT `FKuser` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table gudangantiq.toko: ~1 rows (approximately)
DELETE FROM `toko`;
INSERT INTO `toko` (`id_toko`, `user_id`, `foto_toko`, `nama_toko`, `tanggal`) VALUES
	(16, 6, 'google.png', 'Google Inc', '2023-07-02');

-- Dumping structure for table gudangantiq.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `FKrole` (`role_id`),
  CONSTRAINT `FKrole` FOREIGN KEY (`role_id`) REFERENCES `role` (`id_role`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table gudangantiq.user: ~3 rows (approximately)
DELETE FROM `user`;
INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `password`, `role_id`) VALUES
	(6, NULL, 'Thordaff23', 'thoriqdaff@gmail.com', '$2y$10$d2RQPlbnXUN/ENEIurKbeeqHK.Du4VD21o9nbfMjT3gUFf7KSiRUe', 2),
	(7, NULL, 'Thoriq', 'thordaf2305@gmail.com', '$2y$10$ovctIGR4zoGcHDq5uVzsi.iY0lRIvArC7Tn2ybJgKawHAupw0h5cu', 3),
	(8, NULL, 'Penjual1', 'penjual@gmail.com', '$2y$10$z8J5OZxO5FXeKoUO8iTNwe.nwwQQl9Nv3DQJKT/uM9IuBMK3vI3dm', 2);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
