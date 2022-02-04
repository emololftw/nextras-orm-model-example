-- Adminer 4.8.1 MySQL 8.0.27 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `db` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_czech_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db`;

DROP TABLE IF EXISTS `stations`;
CREATE TABLE `stations` (
  `id` varchar(20) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `customer_id` varchar(30) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `modules` mediumtext CHARACTER SET utf8 COLLATE utf8_czech_ci,
  `voltage_supply` mediumtext CHARACTER SET utf8 COLLATE utf8_czech_ci,
  `location` mediumtext CHARACTER SET utf8 COLLATE utf8_czech_ci,
  `inputs` int NOT NULL DEFAULT '16',
  `type` enum('box','minibox') CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `isim` varchar(100) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `iccid` varchar(100) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `ip` varchar(50) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`),
  CONSTRAINT `stations_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_czech_ci;

INSERT INTO `stations` (`id`, `customer_id`, `title`, `modules`, `voltage_supply`, `location`, `inputs`, `type`, `isim`, `iccid`, `ip`) VALUES
('dEn2vqhe6JdUTvZzfHHa',	'development',	'Testovací zařízení',	'Nic',	'24VDC',	'Nikde',	16,	'box',	'',	'',	''),
('qqU9PHAHBmHXRGGOoYML',	'development',	'Testovací zařízení #2',	'Nic',	'24VDC',	'Nikde',	7,	'minibox',	'901405102547021',	'8988228066602547021',	'10.236.38.1'),
('wwU9PHAHBmHXRGGOoYML',	'beinbauer',	'Testovací zařízení #3',	'Nic',	'24VDC',	'Nikde',	7,	'minibox',	'',	'',	'');

DROP TABLE IF EXISTS `stations_tag`;
CREATE TABLE `stations_tag` (
  `id` int NOT NULL AUTO_INCREMENT,
  `station_id` varchar(20) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `input` int NOT NULL,
  `technology_id` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `technology_id` (`technology_id`),
  KEY `controller_id` (`station_id`),
  CONSTRAINT `stations_tag_ibfk_2` FOREIGN KEY (`station_id`) REFERENCES `stations` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_czech_ci;

INSERT INTO `stations_tag` (`id`, `station_id`, `input`, `technology_id`, `created_at`) VALUES
(1,	'qqU9PHAHBmHXRGGOoYML',	10,	'gK2c41Sfsq',	'2021-12-08 12:28:35'),
(4,	'dEn2vqhe6JdUTvZzfHHa',	15,	'BMxlGRkP68',	'2021-12-20 14:30:01');


-- 2022-02-04 09:56:48
