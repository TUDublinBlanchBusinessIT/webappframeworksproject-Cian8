-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.6.13 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for covidhospital
DROP DATABASE IF EXISTS `covidhospital`;
CREATE DATABASE IF NOT EXISTS `covidhospital` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `covidhospital`;

-- Dumping structure for table covidhospital.doctors
DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `Feild` varchar(30) DEFAULT NULL,
  `Salary` varchar(30) DEFAULT NULL,
  `Employement` tinyint(1) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table covidhospital.doctors: ~6 rows (approximately)
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;
INSERT INTO `doctors` (`id`, `firstname`, `surname`, `dateofbirth`, `Feild`, `Salary`, `Employement`, `updated_at`, `created_at`) VALUES
	(1, 'Jim', 'O Callaghan', '1958-03-19', 'Cardiologist', '€110,000', 1, '2020-05-03', '2020-05-03'),
	(2, 'Sarah', 'Lynn', '1977-02-17', 'Surgeon', '€90,000', 1, '2020-05-03', '2020-05-03'),
	(3, 'Sinead', 'Wild', '1973-05-22', 'Pediatrician', '€100,000', 1, '2020-05-03', '2020-05-03'),
	(4, 'Cody', 'Rurke', '1990-04-29', 'Clinical', '€68,000', 1, '2020-05-03', '2020-05-03'),
	(5, 'Andy', 'Benson', '1965-05-06', 'Psychiatrist', '€74,000', 1, '2020-05-03', '2020-05-03'),
	(6, 'Liam', 'Hunt', '1983-04-29', 'Neurologist', '€120,000', 1, '2020-05-03', '2020-05-03');
/*!40000 ALTER TABLE `doctors` ENABLE KEYS */;

-- Dumping structure for table covidhospital.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table covidhospital.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table covidhospital.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table covidhospital.migrations: ~3 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table covidhospital.nurses
DROP TABLE IF EXISTS `nurses`;
CREATE TABLE IF NOT EXISTS `nurses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `Salary` varchar(30) DEFAULT NULL,
  `Employement` tinyint(1) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table covidhospital.nurses: ~14 rows (approximately)
/*!40000 ALTER TABLE `nurses` DISABLE KEYS */;
INSERT INTO `nurses` (`id`, `firstname`, `surname`, `dateofbirth`, `Salary`, `Employement`, `updated_at`, `created_at`) VALUES
	(1, 'Denise', 'Rich', '1982-07-14', '€38,000', 1, '2020-05-03', '2020-05-03'),
	(2, 'Megan', 'O Malley', '1996-02-28', '€34,000', 1, NULL, NULL),
	(3, 'David', 'Horseman', '1996-02-28', '€34,000', 1, NULL, NULL),
	(4, 'Wayne', 'Ronn', '1994-06-15', '€40,000', 1, NULL, NULL),
	(5, 'Olivia', 'Newer', '1988-07-08', '€44,000', 1, NULL, NULL),
	(6, 'Rebecca', 'Curtain', '1976-12-03', '€30,000', 1, NULL, NULL),
	(7, 'Amy', 'Comer', '1998-11-09', '€32,000', 1, NULL, NULL),
	(8, 'Steven', 'Trump', '1999-05-17', '€39,000', 1, NULL, NULL),
	(9, 'Martin', 'Kerns', '1990-08-12', '€50,000', 1, NULL, NULL),
	(10, 'Ben', 'Law', '1967-07-11', '€48,000', 1, NULL, NULL),
	(11, 'Conor', 'Murph', '1989-09-29', '€56,000', 1, NULL, NULL),
	(12, 'leigh', 'Swan', '1978-01-25', '€42,000', 1, NULL, NULL),
	(13, 'Megan', 'Dill', '1959-03-26', '€34,000', 1, NULL, NULL),
	(14, 'Roisin', 'Doyle', '1976-04-20', '€38,000', 1, NULL, NULL);
/*!40000 ALTER TABLE `nurses` ENABLE KEYS */;

-- Dumping structure for table covidhospital.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table covidhospital.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table covidhospital.patients
DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `symptoms` varchar(30) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table covidhospital.patients: ~16 rows (approximately)
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;
INSERT INTO `patients` (`id`, `firstname`, `surname`, `dateofbirth`, `symptoms`, `location`, `updated_at`, `created_at`) VALUES
	(1, 'oliver', 'kerr', '2000-01-31', 'Flu', 'Ward C', NULL, NULL),
	(2, 'Ben', 'Watt', '1960-04-26', 'Cough', 'Ward B', NULL, NULL),
	(3, 'Steven', 'Bell', '1977-12-18', 'Cough', 'Ward A', NULL, NULL),
	(4, 'Megan', 'Better', '1988-08-11', 'Flu', 'Ward B', NULL, NULL),
	(5, 'Sara', 'Castle', '1973-04-13', 'Tempature', 'Ward E', NULL, NULL),
	(6, 'Daniel', 'Murphu', '1962-04-17', 'Cough', 'Ward F', NULL, NULL),
	(7, 'Rachel', 'Lex', '1937-10-18', 'Vomiting', 'Ward F', NULL, NULL),
	(8, 'Melanie', 'Setter', '1982-06-01', 'Flu', 'Ward E', NULL, NULL),
	(9, 'Ross', 'Geller', '2002-03-17', 'Flu', 'Ward A', NULL, NULL),
	(10, 'Jack', 'Byrne', '1969-07-25', 'Cough', 'Ward B', NULL, NULL),
	(11, 'Kurt', 'Lynch', '1972-11-18', 'Cough', 'Ward C', NULL, NULL),
	(12, 'Sean', 'Maguirk', '1944-05-14', 'Tempature', 'Ward C', NULL, NULL),
	(13, 'Lucy', 'Cage', '2000-08-04', 'Flu', 'Ward B', NULL, NULL),
	(14, 'Anna', 'Slane', '1983-04-29', 'Cough', 'Ward B', NULL, NULL),
	(15, 'Justine', 'Teff', '1995-10-19', 'Vomiting', 'Ward A', NULL, NULL),
	(16, 'ALix', 'Murke', '1922-03-04', 'Tempature', 'Ward F', NULL, NULL);
/*!40000 ALTER TABLE `patients` ENABLE KEYS */;

-- Dumping structure for table covidhospital.register
DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `Occupation` varchar(30) DEFAULT NULL,
  `Employement` tinyint(1) DEFAULT NULL,
  `DateofRegistartion` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table covidhospital.register: ~15 rows (approximately)
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` (`id`, `firstname`, `surname`, `dateofbirth`, `Occupation`, `Employement`, `DateofRegistartion`, `updated_at`, `created_at`) VALUES
	(4, 'Laura', 'Daniels', '1996-02-28', 'Midwife', 1, '2020-05-02', NULL, NULL),
	(5, 'Oisin', 'Watts', '1993-04-20', 'Therapist', 1, '2020-05-02', NULL, NULL),
	(6, 'Amanda', 'Feilds', '1990-01-18', 'Doctor', 1, '2020-05-01', NULL, NULL),
	(7, 'Simon', 'Coveny', '1998-07-08', 'Radiologist', 0, '2020-05-01', NULL, NULL),
	(8, 'Ciara', 'Sher', '1994-02-14', 'Midwife', 0, '2020-05-01', NULL, NULL),
	(9, 'Nicola', 'Ghur', '1988-03-24', 'Nurse', 1, '2020-05-02', NULL, NULL),
	(10, 'Michelle', 'Walls', '1990-05-22', 'Palative Care Nurse', 1, '2020-04-29', NULL, NULL),
	(11, 'Oscar', 'Fines', '1986-11-23', 'Pediatrician', 1, '2020-04-28', NULL, NULL),
	(12, 'Micheal', 'Foo', '1994-02-28', 'Surgeon', 1, '2020-04-26', NULL, NULL),
	(13, 'Vlad', 'Dill', '1980-10-01', 'Dermatologist', 0, '2020-04-20', NULL, NULL),
	(14, 'Harold', 'Qiki', '1978-04-11', 'OR Nurse', 1, '2020-04-19', NULL, NULL),
	(15, 'Millissa', 'Comer', '1993-05-17', 'Cardiac Nurse', 1, '2020-04-19', NULL, NULL),
	(16, 'Heather', 'Clark', '1990-06-04', 'Midwife', 0, '2020-04-18', NULL, NULL),
	(17, 'Ken', 'Kenny', '1999-04-23', 'Clinical Doctor', 1, '2020-04-18', NULL, NULL),
	(18, 'Frank', 'Saddo', '1989-12-12', 'Geriatric Nurse', 0, '2020-04-18', NULL, NULL);
/*!40000 ALTER TABLE `register` ENABLE KEYS */;

-- Dumping structure for table covidhospital.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table covidhospital.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'BillC', 'test@mail.ie', NULL, '$2y$10$OenUAk8dK6ec6ShYnNQe0eFbHrAZEwovjDE09NLcqwnt0majl0HaS', NULL, '2020-04-30 12:44:22', '2020-04-30 12:44:22');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table covidhospital.wards
DROP TABLE IF EXISTS `wards`;
CREATE TABLE IF NOT EXISTS `wards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Ward` varchar(30) DEFAULT NULL,
  `NumofPatients` int(11) DEFAULT NULL,
  `DoctorsonDuty` int(11) DEFAULT NULL,
  `NursesonDuty` int(11) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table covidhospital.wards: ~6 rows (approximately)
/*!40000 ALTER TABLE `wards` DISABLE KEYS */;
INSERT INTO `wards` (`id`, `Ward`, `NumofPatients`, `DoctorsonDuty`, `NursesonDuty`, `updated_at`, `created_at`) VALUES
	(1, 'Ward A', 10, 2, 4, '2020-05-02', '2020-05-02'),
	(2, 'Ward B', 14, 2, 5, NULL, NULL),
	(3, 'Ward C', 19, 1, 6, NULL, NULL),
	(4, 'Ward D', 20, 4, 6, NULL, NULL),
	(5, 'Ward E', 4, 1, 2, NULL, NULL),
	(6, 'Ward F', 30, 8, 6, '2020-05-02', '2020-05-02');
/*!40000 ALTER TABLE `wards` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
