-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 22 Oca 2023, 13:35:32
-- Sunucu sürümü: 8.0.31
-- PHP Sürümü: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `satranc`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contents`
--

DROP TABLE IF EXISTS `contents`;
CREATE TABLE IF NOT EXISTS `contents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `views` int NOT NULL DEFAULT '0',
  `publish` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `contents`
--

INSERT INTO `contents` (`id`, `title`, `description`, `content`, `author`, `date`, `views`, `publish`) VALUES
(1, 'deneme', 'deneme deneme deneme deneme deneme deneme deneme deneme deneme', 'deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme\r\ndeneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme denemedeneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme denemedeneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme denemedeneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme\r\ndeneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme denemedeneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme denemedeneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme denemedeneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme', 'Kerem Mert', '2023-01-22 13:04:58', 4, '1'),
(2, 'deneme', 'deneme deneme deneme deneme deneme deneme deneme deneme deneme', 'deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme\r\ndeneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme denemedeneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme denemedeneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme denemedeneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme\r\ndeneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme denemedeneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme denemedeneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme denemedeneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme deneme', 'Kerem Mert', '2023-01-22 13:04:58', 1, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `featured`
--

DROP TABLE IF EXISTS `featured`;
CREATE TABLE IF NOT EXISTS `featured` (
  `id` int NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `featured`
--

INSERT INTO `featured` (`id`, `text`, `author`, `publish`) VALUES
(1, 'Hafif üstün oyun sonu kaznılır.', 'Magnus Carlsen', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `title`, `description`, `author`, `owner`, `template`) VALUES
(1, 'Satranç - keremmert.net', 'Satranç ile ilgili yazılar', 'Kerem Mert', 'Kerem Mert', 'grey');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
