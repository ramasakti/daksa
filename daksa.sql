-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for daksa
CREATE DATABASE IF NOT EXISTS `daksa` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `daksa`;

-- Dumping structure for table daksa.jasa
CREATE TABLE IF NOT EXISTS `jasa` (
  `id_jasa` int NOT NULL AUTO_INCREMENT,
  `creator` varchar(255) NOT NULL,
  `nama_jasa` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_jasa`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table daksa.jasa: ~5 rows (approximately)
DELETE FROM `jasa`;
/*!40000 ALTER TABLE `jasa` DISABLE KEYS */;
INSERT INTO `jasa` (`id_jasa`, `creator`, `nama_jasa`, `jenis`, `gambar`, `deskripsi`) VALUES
	(1, 'perdiananda', 'Jasa Gaming MEEL', 'Gaming', '', '<script>\r\nalert(asd)\r\n</script>'),
	(2, 'ramasakti', 'Laravel Developer', 'Programming', 'Untitled.png', 'Mengapa dunia ini penuh dengan sepak bola'),
	(3, 'ramasakti', 'ReactJS Developer', 'Marketing', '', 'Deskripsi'),
	(4, 'ramasakti', 'ExpressJS', 'Programming', 'Logo SMPISPA Tranparan BIRUFULL.png', ''),
	(5, 'ramasakti', 'Jasa Pembuatan Uang', 'Writing', 'foto.png', ''),
	(6, 'ramasakti', 'ExpressJS 2', 'Programming', 'bg putih.png', '');
/*!40000 ALTER TABLE `jasa` ENABLE KEYS */;

-- Dumping structure for table daksa.user
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `nope` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table daksa.user: ~2 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`username`, `password`, `fullname`, `status`, `nope`) VALUES
	('perdiananda', 'perdiananda', 'Ferdi Ananda Frasta', 'Creator', '611201873'),
	('ramasakti', 'ramasakti', 'Rama Sakti', 'Admin', '6285157177034');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
