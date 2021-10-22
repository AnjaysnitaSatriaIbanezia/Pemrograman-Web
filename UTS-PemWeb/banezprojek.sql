-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table uts-pemweb.course
CREATE TABLE IF NOT EXISTS `course` (
  `judul` varchar(50) DEFAULT NULL,
  `deskripsi1` text,
  `deskripsi2` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table uts-pemweb.course: ~1 rows (approximately)
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` (`judul`, `deskripsi1`, `deskripsi2`) VALUES
	('Kursus Online Kami!', 'Counter Strike Global Offensive merupakan game yang sangat populer di kalangan penggemar game FPS online. Selain karena gratis di download, size yang kecil, dan tidak dibutuhkan spesifikasi yang sangat tinggi untuk memainkan game ini, Counter Strike menjadi game kompetitif yang sangat memacu adrenalin dan menjalin kerja sama antar pemain.', 'Saking banyaknya pemain yang gemar memainkan game ini, sekarang Counter Strike menjadi game E-Sport yang banyak diminati para gamers profesional. Dan tentu seiring berjalannya waktu, semakin banyak pemain yang memiliki skill tinggi dalam memainkan game tersebut. Ingin menjadi salah satunya? Ayo gabung dengan kami! Kalian akan dibimbing oleh para mentor yang super keren ini!');
/*!40000 ALTER TABLE `course` ENABLE KEYS */;

-- Dumping structure for table uts-pemweb.home
CREATE TABLE IF NOT EXISTS `home` (
  `judul` varchar(50) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table uts-pemweb.home: ~2 rows (approximately)
/*!40000 ALTER TABLE `home` DISABLE KEYS */;
INSERT INTO `home` (`judul`, `deskripsi`) VALUES
	('Moli B4nana', 'Belajar Aim di Moli B4nana #SambilDiscordDirumah'),
	(NULL, 'Tetap Semangat, Walau di CS Sering Kena Granat');
/*!40000 ALTER TABLE `home` ENABLE KEYS */;

-- Dumping structure for table uts-pemweb.kontak
CREATE TABLE IF NOT EXISTS `kontak` (
  `judul` varchar(50) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table uts-pemweb.kontak: ~4 rows (approximately)
/*!40000 ALTER TABLE `kontak` DISABLE KEYS */;
INSERT INTO `kontak` (`judul`, `deskripsi`) VALUES
	('Moli B4nana', ''),
	('About', ''),
	('Address', NULL),
	('Social Media', NULL);
/*!40000 ALTER TABLE `kontak` ENABLE KEYS */;

-- Dumping structure for table uts-pemweb.mentors
CREATE TABLE IF NOT EXISTS `mentors` (
  `nama` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table uts-pemweb.mentors: ~4 rows (approximately)
/*!40000 ALTER TABLE `mentors` DISABLE KEYS */;
INSERT INTO `mentors` (`nama`, `foto`) VALUES
	('Anjaysnita S. Ibanezia', 'images/20210805_113928.jpg'),
	('Muhammad Bagoes Wicaksono', 'images/PhotoGrid_Plus_1634905141836.png'),
	('Yanwar Slamet', 'images/IMG-20210804-WA0014.jpg'),
	('Ari Gunawan', 'images/PhotoGrid_Plus_1634905547395.png');
/*!40000 ALTER TABLE `mentors` ENABLE KEYS */;

-- Dumping structure for table uts-pemweb.partner
CREATE TABLE IF NOT EXISTS `partner` (
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table uts-pemweb.partner: ~3 rows (approximately)
/*!40000 ALTER TABLE `partner` DISABLE KEYS */;
INSERT INTO `partner` (`gambar`) VALUES
	('images/Himaforka_Putih2.png'),
	('images/UPJ_Putih_Bulat.png'),
	('images/Informatika.jpg');
/*!40000 ALTER TABLE `partner` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
