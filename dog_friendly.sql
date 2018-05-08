-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 07, 2018 at 10:30 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dog_friendly`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation`
--

DROP TABLE IF EXISTS `accommodation`;
CREATE TABLE IF NOT EXISTS `accommodation` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `stars` int(6) NOT NULL,
  `basic_bed` int(6) NOT NULL,
  `extra_bed` int(6) NOT NULL,
  `rooms` int(6) NOT NULL,
  `wifi` tinyint(1) NOT NULL,
  `parking` tinyint(1) NOT NULL,
  `grill` tinyint(1) NOT NULL,
  `pool` tinyint(1) NOT NULL,
  `ac` tinyint(1) NOT NULL,
  `tv` tinyint(1) NOT NULL,
  `dist_beach` int(6) NOT NULL,
  `dist_shop` int(6) NOT NULL,
  `dist_rest` int(6) NOT NULL,
  `dog_food` tinyint(1) NOT NULL,
  `dog_bowl` tinyint(1) NOT NULL,
  `dog_bed` tinyint(1) NOT NULL,
  `fk_address` int(6) NOT NULL,
  `fk_name` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fk_name` (`fk_name`),
  KEY `fk_address` (`fk_address`),
  KEY `fk_name_2` (`fk_name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accommodation`
--

INSERT INTO `accommodation` (`id`, `stars`, `basic_bed`, `extra_bed`, `rooms`, `wifi`, `parking`, `grill`, `pool`, `ac`, `tv`, `dist_beach`, `dist_shop`, `dist_rest`, `dog_food`, `dog_bowl`, `dog_bed`, `fk_address`, `fk_name`) VALUES
(6, 3, 4, 1, 2, 1, 1, 1, 1, 1, 1, 850, 800, 800, 0, 0, 0, 38, 5),
(7, 4, 8, 2, 4, 1, 1, 1, 1, 1, 0, 700, 1000, 1000, 0, 0, 0, 39, 8),
(8, 1, 4, 1, 2, 1, 1, 1, 0, 0, 1, 2000, 1000, 100, 0, 0, 0, 40, 7),
(9, 1, 2, 1, 2, 1, 1, 1, 0, 0, 1, 2000, 1000, 100, 0, 0, 0, 41, 6);

-- --------------------------------------------------------

--
-- Table structure for table `accommodation_name`
--

DROP TABLE IF EXISTS `accommodation_name`;
CREATE TABLE IF NOT EXISTS `accommodation_name` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `en` varchar(50) NOT NULL,
  `hr` varchar(50) NOT NULL,
  `hu` varchar(50) NOT NULL,
  `de` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accommodation_name`
--

INSERT INTO `accommodation_name` (`id`, `en`, `hr`, `hu`, `de`) VALUES
(5, 'Apartment Divna', 'Apartman Divna', 'test', 'Appartement Divna'),
(6, 'Apartment Matej', 'Apartman Matej', 'test', 'Appartement Matej'),
(7, 'Apartment David', 'Apartman David', 'test', 'Appartement David'),
(8, 'Vaccation house Velimir', 'Kuća za odmor Velimir', 'test', 'Ferienhaus Velimir');

-- --------------------------------------------------------

--
-- Table structure for table `accommodation_pics`
--

DROP TABLE IF EXISTS `accommodation_pics`;
CREATE TABLE IF NOT EXISTS `accommodation_pics` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `path_big` varchar(255) NOT NULL,
  `part` enum('main','street','garden','balcony','livingroom','kitchen','bedroom','bathroom','diningroom','pool') NOT NULL,
  `fk_accomm` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_accomm` (`fk_accomm`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accommodation_pics`
--

INSERT INTO `accommodation_pics` (`id`, `path`, `path_big`, `part`, `fk_accomm`) VALUES
(15, '../img/accommodation/divna/main.png', '../img/accommodation/divna/main.JPG', 'main', 6),
(16, '../img/accommodation/divna/street.png', '../img/accommodation/divna/street.JPG', 'street', 6),
(17, '../img/accommodation/divna/garden.png', '../img/accommodation/divna/garden.JPG', 'garden', 6),
(18, '../img/accommodation/divna/terasa.png', '../img/accommodation/divna/terasa.jpg', 'balcony', 6),
(19, '../img/accommodation/divna/living.png', '../img/accommodation/divna/living.JPG', 'livingroom', 6),
(20, '../img/accommodation/divna/kitchen.png', '../img/accommodation/divna/kitchen.JPG', 'kitchen', 6),
(21, '../img/accommodation/divna/bedroom.png', '../img/accommodation/divna/bedroom.JPG', 'bedroom', 6),
(22, '../img/accommodation/divna/bathroom.png', '../img/accommodation/divna/bathroom.JPG', 'bathroom', 6),
(23, '../img/accommodation/divna/dining.png', '../img/accommodation/divna/dining.JPG', 'diningroom', 6),
(24, '../img/accommodation/divna/bazen.png', '../img/accommodation/divna/bazen.jpg', 'pool', 6),
(45, '../img/accommodation/velimir/main.png', '../img/accommodation/velimir/main.jpg', 'main', 7),
(46, '../img/accommodation/velimir/balcony.png', '../img/accommodation/velimir/balcony.jpg', 'balcony', 7),
(47, '../img/accommodation/velimir/street.png', '../img/accommodation/velimir/street.jpg', 'street', 7),
(48, '../img/accommodation/velimir/bathroom.png', '../img/accommodation/velimir/bathroom.jpg', 'bathroom', 7),
(49, '../img/accommodation/velimir/bedroom.png', '../img/accommodation/velimir/bedroom.jpg', 'bedroom', 7),
(50, '../img/accommodation/velimir/dining.png', '../img/accommodation/velimir/dining.jpg', 'diningroom', 7),
(51, '../img/accommodation/velimir/garden.png', '../img/accommodation/velimir/garden.jpg', 'garden', 7),
(52, '../img/accommodation/velimir/kitchen.png', '../img/accommodation/velimir/kitchen.jpg', 'kitchen', 7),
(53, '../img/accommodation/velimir/living.png', '../img/accommodation/velimir/living.jpg', 'livingroom', 7),
(54, '../img/accommodation/velimir/pool.png', '../img/accommodation/velimir/pool.jpg', 'pool', 7),
(110, '../img/accommodation/david/main.png', '../img/accommodation/david/main.jpg', 'main', 8),
(111, '../img/accommodation/david/balcony.png', '../img/accommodation/david/balcony.jpg', 'balcony', 8),
(112, '../img/accommodation/david/bathroom.png', '../img/accommodation/david/bathroom.jpg', 'bathroom', 8),
(113, '../img/accommodation/david/bedroom.png', '../img/accommodation/david/bedroom.jpg', 'bedroom', 8),
(114, '../img/accommodation/david/dining.png', '../img/accommodation/david/dining.jpg', 'diningroom', 8),
(115, '../img/accommodation/david/garden.png', '../img/accommodation/david/garden.jpg', 'garden', 8),
(116, '../img/accommodation/david/street.png', '../img/accommodation/david/street.jpg', 'street', 8),
(117, '../img/accommodation/david/living.png', '../img/accommodation/david/living.jpg', 'livingroom', 8),
(118, '../img/accommodation/david/kitchen.png', '../img/accommodation/david/kitchen.jpg', 'kitchen', 8),
(119, '../img/accommodation/matej/main.png', '../img/accommodation/matej/main.jpg', 'main', 9),
(120, '../img/accommodation/matej/balcony.png', '../img/accommodation/matej/balcony.jpg', 'balcony', 9),
(121, '../img/accommodation/matej/bathroom.png', '../img/accommodation/matej/bathroom.jpg', 'bathroom', 9),
(122, '../img/accommodation/matej/bedroom.png', '../img/accommodation/matej/bedroom.jpg', 'bedroom', 9),
(123, '../img/accommodation/matej/dining.png', '../img/accommodation/matej/dining.jpg', 'diningroom', 9),
(124, '../img/accommodation/matej/living.png', '../img/accommodation/matej/living.jpg', 'livingroom', 9),
(125, '../img/accommodation/matej/garden.png', '../img/accommodation/matej/garden.jpg', 'garden', 9),
(126, '../img/accommodation/matej/street.png', '../img/accommodation/matej/street.jpg', 'street', 9),
(127, '../img/accommodation/matej/kitchen.png', '../img/accommodation/matej/kitchen.jpg', 'kitchen', 9);

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `lat` decimal(10,8) NOT NULL,
  `lng` decimal(11,8) NOT NULL,
  `village` varchar(30) NOT NULL,
  `fk_city` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_city` (`fk_city`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `name`, `lat`, `lng`, `village`, `fk_city`) VALUES
(37, 'Redagara', '45.02470600', '14.58833500', 'Krk', 51500),
(38, 'Brzac 9D', '45.07884600', '14.44776300', 'Brzac', 51500),
(39, 'Brzac 160A', '45.07999300', '14.44659600', 'Brzac', 51500),
(40, 'Linardići 67', '45.07333100', '14.46358600', 'Linardić', 51500),
(41, 'Linardići 67', '45.07330400', '14.46363000', 'Linardić', 51500),
(42, 'Joakima Tončića 7', '45.12613700', '14.52798700', 'Malinska', 51511),
(43, 'Antuna Barca 3b', '45.34248000', '14.41196700', 'Rijeka', 51000),
(44, 'Zagrebačka 53', '45.03094500', '14.56867700', 'Krk', 51500),
(45, 'Zagrebačka 53', '45.03096200', '14.56876200', 'Krk', 51500);

-- --------------------------------------------------------

--
-- Table structure for table `beach`
--

DROP TABLE IF EXISTS `beach`;
CREATE TABLE IF NOT EXISTS `beach` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `fk_address` int(6) NOT NULL,
  `fk_desc` int(6) NOT NULL,
  `fk_loc` int(6) NOT NULL,
  `fk_name` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_address` (`fk_address`),
  KEY `fk_desc` (`fk_desc`),
  KEY `fk_loc` (`fk_loc`),
  KEY `fk_name` (`fk_name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beach`
--

INSERT INTO `beach` (`id`, `fk_address`, `fk_desc`, `fk_loc`, `fk_name`) VALUES
(7, 37, 8, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `beach_desc`
--

DROP TABLE IF EXISTS `beach_desc`;
CREATE TABLE IF NOT EXISTS `beach_desc` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `hr` text NOT NULL,
  `hu` text NOT NULL,
  `en` text NOT NULL,
  `de` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beach_desc`
--

INSERT INTO `beach_desc` (`id`, `hr`, `hu`, `en`, `de`) VALUES
(8, 'Mala šljuncčna plaža za ljubimce i njihove vlasnike u gradu Krku. Nalazi se u blizini borove šume a od glavne plaže udaljena je samo 50 metara.', '', 'A small pebble beach for pets and their owners in the town of Krk. It is located in the vicinity of a pine forest, just 50 m away from the main beach.', '');

-- --------------------------------------------------------

--
-- Table structure for table `beach_loc`
--

DROP TABLE IF EXISTS `beach_loc`;
CREATE TABLE IF NOT EXISTS `beach_loc` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `hr` text NOT NULL,
  `en` text NOT NULL,
  `de` text NOT NULL,
  `hu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beach_loc`
--

INSERT INTO `beach_loc` (`id`, `hr`, `en`, `de`, `hu`) VALUES
(1, 'Do glavne plaže \"Koralj\" možete doci autom ili šetnjom kroz grad Krk. Od plaže Koralj krenite lijevo (ako ste došli autom) i nastavite uz obalu u smjeru suprotom od grada. More bi trebalo biti na Vašoj desnoj strani. Nakon kratke šetnje kroz borovu šumu stici cete do plaže.', 'You can get to the main beach \"Koralj\" by car or walking through the town of Krk. When you get to the beach \"Koralj\", turn left (if you arrived by car) and continue walking by the shore in the direction opposite to the town of Krk. The sea should be on your right side. After a short walk through the pine forest, you will arrive at the beach.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `beach_name`
--

DROP TABLE IF EXISTS `beach_name`;
CREATE TABLE IF NOT EXISTS `beach_name` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `en` varchar(50) NOT NULL,
  `hr` varchar(50) NOT NULL,
  `de` varchar(50) NOT NULL,
  `hu` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beach_name`
--

INSERT INTO `beach_name` (`id`, `en`, `hr`, `de`, `hu`) VALUES
(1, 'Beach Redagara', 'Plaža Redagara', 'Redagara', 'Redagara');

-- --------------------------------------------------------

--
-- Table structure for table `beach_pics`
--

DROP TABLE IF EXISTS `beach_pics`;
CREATE TABLE IF NOT EXISTS `beach_pics` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `path_big` varchar(255) NOT NULL,
  `part` enum('main','side') NOT NULL,
  `fk_beach` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_beach` (`fk_beach`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beach_pics`
--

INSERT INTO `beach_pics` (`id`, `path`, `path_big`, `part`, `fk_beach`) VALUES
(29, '../img/beach/redagara/redagara1.png', '../img/beach/redagara/redagara1.jpg', 'side', 7),
(30, '../img/beach/redagara/redagara2.png', '../img/beach/redagara/redagara2.jpg', 'side', 7),
(31, '../img/beach/redagara/redagara6.png', '../img/beach/redagara/redagara6.jpg', 'side', 7),
(32, '../img/beach/redagara/redagara7.png', '../img/beach/redagara/redagara7.jpg', 'side', 7),
(33, '../img/beach/redagara/redagara8.png', '../img/beach/redagara/redagara8.jpg', 'side', 7),
(35, '../img/beach/redagara/redagara3.png', '../img/beach/redagara/redagara3.jpg', 'side', 7),
(36, '../img/beach/redagara/redagara4.png', '../img/beach/redagara/redagara4.jpg', 'main', 7),
(37, '../img/beach/redagara/redagara5.png', '../img/beach/redagara/redagara5.jpg', 'side', 7);

-- --------------------------------------------------------

--
-- Table structure for table `beauty`
--

DROP TABLE IF EXISTS `beauty`;
CREATE TABLE IF NOT EXISTS `beauty` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(255) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `fk_address` int(6) NOT NULL,
  `fk_desc` int(6) NOT NULL,
  `fk_name` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_address` (`fk_address`),
  KEY `fk_desc` (`fk_desc`),
  KEY `fk_name` (`fk_name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beauty`
--

INSERT INTO `beauty` (`id`, `facebook`, `telephone`, `mail`, `fk_address`, `fk_desc`, `fk_name`) VALUES
(6, 'http://www.facebook.com/nerosalonzapse', '+385 91 1234 054', 'nerosalonzapse@gmail.com', 42, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `beauty_desc`
--

DROP TABLE IF EXISTS `beauty_desc`;
CREATE TABLE IF NOT EXISTS `beauty_desc` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `hr` text NOT NULL,
  `hu` text NOT NULL,
  `en` text NOT NULL,
  `de` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beauty_desc`
--

INSERT INTO `beauty_desc` (`id`, `hr`, `hu`, `en`, `de`) VALUES
(6, 'NERO je novouređeni salon za pse smješten u Malinskoj,ispod pizzerie Matteo. Prije dotjerivanja Vašeg ljubimca, odradit ćemo sa Vama razgovor kako bi udovoljili Vašim željama i potrebama. Dobrobit Vaših pasa naš je prioritet od početka do kraja tretmana. Vaš će pas dobiti našu stopostotnu pozornost. Salon je u potpunosti opremljen visokokvalitetnom grooming opremom i vrhunskim preparatima kako bi Vaši ljubimci dobili jedinstvenu njegu. Usluge koje nudimo:\r\n- raspetljavanje \r\n- kupanje\r\n- šišanje\r\n- rješavanje problema pretjeranog linjanja\r\n- njega krzna kvalitetnim kozmetičkim preparatima\r\n- higijena ušiju\r\n- podrezivanje i lakiranje noktiju', '', 'NERO is a brand new dog salon located in Malinska, just beneath Pizzeria Matteo. Before grooming your favourite pet we are going to have an individual talk to meet your wishes and needs. Your dog wellbeing is our priority from the beginning all the way to end of the treatment. Your dog is going to get our full attention. The salon is fully equipped with high quality grooming equipment and top quality products to help your pets get a unique care. Services we provide: \r\n- untangling\r\n- bathing\r\n- haircut\r\n- solving excessive shedding problem\r\n- fur coat with quality cosmetic preparations\r\n- hygiene of the ears\r\n- trimming and nail painting', '');

-- --------------------------------------------------------

--
-- Table structure for table `beauty_hours`
--

DROP TABLE IF EXISTS `beauty_hours`;
CREATE TABLE IF NOT EXISTS `beauty_hours` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `day` int(1) NOT NULL,
  `open` varchar(5) NOT NULL,
  `close` varchar(5) NOT NULL,
  `open2` varchar(5) NOT NULL,
  `close2` varchar(5) NOT NULL,
  `fk_beauty` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_beauty` (`fk_beauty`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beauty_hours`
--

INSERT INTO `beauty_hours` (`id`, `day`, `open`, `close`, `open2`, `close2`, `fk_beauty`) VALUES
(1, 1, '13:00', '20:00', 'null', 'null', 6),
(2, 2, '8:00', '15:00', 'null', 'null', 6),
(3, 3, '13:00', '20:00', 'null', 'null', 6),
(4, 4, '8:00', '15:00', 'null', 'null', 6),
(5, 5, '13:00', '20:00', 'null', 'null', 6),
(6, 6, '8:00', '15:00', 'null', 'null', 6),
(7, 7, 'null', 'null', 'null', 'null', 6);

-- --------------------------------------------------------

--
-- Table structure for table `beauty_name`
--

DROP TABLE IF EXISTS `beauty_name`;
CREATE TABLE IF NOT EXISTS `beauty_name` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `en` varchar(50) NOT NULL,
  `hr` varchar(50) NOT NULL,
  `de` varchar(50) NOT NULL,
  `hu` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beauty_name`
--

INSERT INTO `beauty_name` (`id`, `en`, `hr`, `de`, `hu`) VALUES
(1, 'Beauty Salon Nero', 'Salon Nero', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `beauty_pics`
--

DROP TABLE IF EXISTS `beauty_pics`;
CREATE TABLE IF NOT EXISTS `beauty_pics` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `path_big` varchar(255) NOT NULL,
  `part` enum('main','side') NOT NULL,
  `fk_beauty` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_beauty` (`fk_beauty`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beauty_pics`
--

INSERT INTO `beauty_pics` (`id`, `path`, `path_big`, `part`, `fk_beauty`) VALUES
(6, '../img/beauty/nero/nero1.png', '../img/beauty/nero/nero1.jpg', 'main', 6),
(7, '../img/beauty/nero/nero2.png', '../img/beauty/nero/nero2.jpg', 'side', 6),
(8, '../img/beauty/nero/nero3.png', '../img/beauty/nero/nero3.jpg', 'side', 6),
(9, '../img/beauty/nero/nero4.png', '../img/beauty/nero/nero4.jpg', 'side', 6),
(10, '../img/beauty/nero/nero5.png', '../img/beauty/nero/nero5.jpg', 'side', 6),
(11, '../img/beauty/nero/nero6.png', '../img/beauty/nero/nero6.jpg', 'side', 6),
(12, '../img/beauty/nero/nero7.png', '../img/beauty/nero/nero7.jpg', 'side', 6),
(13, '../img/beauty/nero/nero8.png', '../img/beauty/nero/nero8.jpg', 'side', 6),
(14, '../img/beauty/nero/nero9.png', '../img/beauty/nero/nero9.jpg', 'side', 6),
(15, '../img/beauty/nero/nero10.png', '../img/beauty/nero/nero10.jpg', 'side', 6);

-- --------------------------------------------------------

--
-- Table structure for table `beauty_reviews`
--

DROP TABLE IF EXISTS `beauty_reviews`;
CREATE TABLE IF NOT EXISTS `beauty_reviews` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `author` varchar(30) NOT NULL,
  `hr_review` text NOT NULL,
  `en_review` text NOT NULL,
  `hu_review` text NOT NULL,
  `de_review` text NOT NULL,
  `fk_beauty` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_beauty` (`fk_beauty`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beauty_reviews`
--

INSERT INTO `beauty_reviews` (`id`, `author`, `hr_review`, `en_review`, `hu_review`, `de_review`, `fk_beauty`) VALUES
(1, 'Jasmina Ivanović', 'Odlična usluga.....Baš kako smo se dogovorile....dobila je i ljubičasti repić :-)', 'Great service....Just the way we planned....she got a purple little tail :-)', '', '', 6),
(2, 'Jadranka Orešković', 'Vidi se kada netko radi posao koji voli. Svaka preporuka.', 'You can tell when someone loves his job. Recommended.', '', '', 6),
(3, 'Emanuela Linardić', 'Gazdarica malog Bonija je odusevljena tretmanom i uslugom koju je njen pas dobio. Svakako preporucam svima! Super obavljen posao Matea!', 'Boni\'s owner is amazed by the service and treatment her dog got. I recommend it to everybody! Great Job Matea!', '', '', 6),
(4, 'Sara Purić', 'Odlican salon, Matea je jako profesionalna i odlicno obavlja svoj posao, tople preporuke! :)', 'Great salon, Matea is very professional and she\'s doing her job great, warmest recommendations! :)', '', '', 6),
(5, 'Rea Konfić', 'Stark je uzivao i zadovoljni smo u potpunosti sa uslugom i druzenjem, a i keksici su fini ', 'Stark and us have had a wonderful time with service and company, and the cookies were delicious', '', '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `zip` int(6) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`zip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`zip`, `name`) VALUES
(51000, 'RIJEKA'),
(51500, 'KRK'),
(51511, 'MALINSKA'),
(51512, 'NJIVICE'),
(51513, 'OMIŠALJ'),
(51514, 'DOBRINJ'),
(51515, 'ŠILO'),
(51516, 'VRBNIK'),
(51517, 'KORNIĆ'),
(51521, 'PUNAT'),
(51522, 'BAŠĆANSKA DRAGA'),
(51523, 'BAŠKA');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

DROP TABLE IF EXISTS `medicine`;
CREATE TABLE IF NOT EXISTS `medicine` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `web` varchar(255) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `fk_address` int(6) NOT NULL,
  `fk_desc` int(6) NOT NULL,
  `fk_name` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_address` (`fk_address`),
  KEY `fk_desc` (`fk_desc`),
  KEY `fk_name` (`fk_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `facebook`, `mail`, `web`, `telephone`, `fk_address`, `fk_desc`, `fk_name`) VALUES
(1, 'https://www.facebook.com/OvoJeNjuska', 'darkolustica@yahoo.com', 'https://njuska.fullbusiness.com/', '+385 51 411 013', 43, 1, 1),
(2, 'https://www.facebook.com/vetstri', 'ambulantakrk@vetstri.hr', 'http://www.vetstri.hr/krk/', '+385 51 604 484', 44, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_desc`
--

DROP TABLE IF EXISTS `medicine_desc`;
CREATE TABLE IF NOT EXISTS `medicine_desc` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `hr` text NOT NULL,
  `hu` text NOT NULL,
  `en` text NOT NULL,
  `de` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicine_desc`
--

INSERT INTO `medicine_desc` (`id`, `hr`, `hu`, `en`, `de`) VALUES
(1, 'Cijepljenje, fizikalna terapija za životinje, šišanje pasa i mačaka, grooming salon, hrana, oprema i kozmetika za kućne ljubimce, salon za kućne ljubimce, testiranje na zarazne bolesti, parazitarne i mikrobiološke pretrage, pretrage urina i fecesa, pretrage krvi, MRS, struja, hitne intervencije za kućne ljubimce, terapijski ultrazvuk, određivanje razine hormona, testiranja na parazitarne bolesti, poliranje zubi, ultrazvučno uklanjanje kamenca.', '', 'Vaccination, physical therapies for animals, grooming for dogs and cats, food, equipment and pet cosmetics, pet salon, testing for infectious diseases, parasitic and microbiological tests, urine tests and fatigue, blood tests, MRS, currents, emergency pet dental interventions, therapeutic ultrasound, hormone level determination, parasitic disease testing, teeth polishing, ultrasonic scaling.', ''),
(2, 'Preventivna cijepljenja, internistički pregledi, kirurški zahvati, hospitalizacija bolesnih životinja, pregled mesa na trihinelozu, liječenje životinja na terenu, cijepljenje protiv bjesnoće, cijepljenje peradi, umjetno osjemenjivanje, pretraga na brucelozu, praćenje bolesti pčela, uzimanje i slanje materijala na pretrage', '', 'Preventive vaccinations, internistic examinations, surgical procedures, hospitalization of diseased animals, examination of meat on trichinella, treatment of animals in the field, vaccination against rabies, poultry vaccination, artificial insemination, brucellosis examination, bee tracking, picking and sending of search material', '');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_hours`
--

DROP TABLE IF EXISTS `medicine_hours`;
CREATE TABLE IF NOT EXISTS `medicine_hours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` int(3) NOT NULL,
  `open` varchar(5) DEFAULT NULL,
  `close` varchar(5) DEFAULT NULL,
  `open2` varchar(5) DEFAULT NULL,
  `close2` varchar(5) DEFAULT NULL,
  `fk_medicine` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_medicine` (`fk_medicine`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicine_hours`
--

INSERT INTO `medicine_hours` (`id`, `day`, `open`, `close`, `open2`, `close2`, `fk_medicine`) VALUES
(8, 1, '08:00', '12:00', '16:00', '20:00', 1),
(9, 2, '08:00', '12:00', '16:00', '20:00', 1),
(10, 3, '08:00', '12:00', '16:00', '20:00', 1),
(11, 4, '08:00', '12:00', '16:00', '20:00', 1),
(12, 5, '08:00', '12:00', '16:00', '20:00', 1),
(13, 6, '09:00', '13:00', 'null', 'null', 1),
(14, 7, 'null', 'null', 'null', 'null', 1),
(15, 1, '07:00', '21:00', 'null', 'null', 2),
(16, 2, '07:00', '21:00', 'null', 'null', 2),
(17, 3, '07:00', '21:00', 'null', 'null', 2),
(18, 4, '07:00', '21:00', 'null', 'null', 2),
(19, 5, '07:00', '21:00', 'null', 'null', 2),
(20, 6, '09:00', '17:00', 'null', 'null', 2),
(21, 7, 'null', 'null', 'null', 'null', 2);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_name`
--

DROP TABLE IF EXISTS `medicine_name`;
CREATE TABLE IF NOT EXISTS `medicine_name` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `en` varchar(50) NOT NULL,
  `hr` varchar(50) NOT NULL,
  `de` varchar(50) NOT NULL,
  `hu` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicine_name`
--

INSERT INTO `medicine_name` (`id`, `en`, `hr`, `de`, `hu`) VALUES
(1, 'Vet Ambulance Njuška', 'Veterinarska Ambulanta Njuška', 'test', 'test'),
(2, 'Vet Ambulance Krk', 'Veterinarska Ambulanta Krk', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_pics`
--

DROP TABLE IF EXISTS `medicine_pics`;
CREATE TABLE IF NOT EXISTS `medicine_pics` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `part` enum('main','side') NOT NULL,
  `fk_medicine` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_medicine` (`fk_medicine`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicine_pics`
--

INSERT INTO `medicine_pics` (`id`, `path`, `part`, `fk_medicine`) VALUES
(1, '../img/medicine/njuska/njuska1.png', 'main', 1),
(2, '../img/medicine/njuska/njuska2.png', 'side', 1),
(3, '../img/medicine/njuska/njuska3.png', 'side', 1),
(4, '../img/medicine/krk/krk1.png', 'main', 2),
(5, '../img/medicine/krk/krk2.png', 'side', 2);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

DROP TABLE IF EXISTS `restaurant`;
CREATE TABLE IF NOT EXISTS `restaurant` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `fk_address` int(6) NOT NULL,
  `fk_desc` int(6) NOT NULL,
  `fk_name` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_address` (`fk_address`),
  KEY `fk_desc` (`fk_desc`),
  KEY `fk_name` (`fk_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_desc`
--

DROP TABLE IF EXISTS `restaurant_desc`;
CREATE TABLE IF NOT EXISTS `restaurant_desc` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `hr` text NOT NULL,
  `hu` text NOT NULL,
  `en` text NOT NULL,
  `de` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_name`
--

DROP TABLE IF EXISTS `restaurant_name`;
CREATE TABLE IF NOT EXISTS `restaurant_name` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `en` varchar(50) NOT NULL,
  `hr` varchar(50) NOT NULL,
  `de` varchar(50) NOT NULL,
  `hu` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_pics`
--

DROP TABLE IF EXISTS `restaurant_pics`;
CREATE TABLE IF NOT EXISTS `restaurant_pics` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `part` enum('main','side') NOT NULL,
  `fk_restaurant` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_restaurant` (`fk_restaurant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

DROP TABLE IF EXISTS `shopping`;
CREATE TABLE IF NOT EXISTS `shopping` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `web` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `fk_address` int(6) NOT NULL,
  `fk_name` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_address` (`fk_address`),
  KEY `fk_name` (`fk_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shopping`
--

INSERT INTO `shopping` (`id`, `web`, `mail`, `telephone`, `facebook`, `fk_address`, `fk_name`) VALUES
(1, 'http://vetstri.hr/ljekarne-i-pet-shop/', 'ambulantakrk@vetstri.hr', '+385 51 604 484', 'https://www.facebook.com/vetstri', 45, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_hours`
--

DROP TABLE IF EXISTS `shopping_hours`;
CREATE TABLE IF NOT EXISTS `shopping_hours` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `day` int(3) NOT NULL,
  `open` varchar(5) NOT NULL,
  `close` varchar(5) NOT NULL,
  `open2` varchar(5) NOT NULL,
  `close2` varchar(5) NOT NULL,
  `fk_shopping` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_shopping` (`fk_shopping`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shopping_hours`
--

INSERT INTO `shopping_hours` (`id`, `day`, `open`, `close`, `open2`, `close2`, `fk_shopping`) VALUES
(22, 1, '07:00', '21:00', 'null', 'null', 1),
(23, 2, '07:00', '21:00', 'null', 'null', 1),
(24, 3, '07:00', '21:00', 'null', 'null', 1),
(25, 4, '07:00', '21:00', 'null', 'null', 1),
(26, 5, '07:00', '21:00', 'null', 'null', 1),
(27, 6, '09:00', '17:00', 'null', 'null', 1),
(28, 7, 'null', 'null', 'null', 'null', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_name`
--

DROP TABLE IF EXISTS `shopping_name`;
CREATE TABLE IF NOT EXISTS `shopping_name` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `en` varchar(50) NOT NULL,
  `hr` varchar(50) NOT NULL,
  `de` varchar(50) NOT NULL,
  `hu` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shopping_name`
--

INSERT INTO `shopping_name` (`id`, `en`, `hr`, `de`, `hu`) VALUES
(1, 'Pet Shop Krk', 'Pet Shop Krk', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_pics`
--

DROP TABLE IF EXISTS `shopping_pics`;
CREATE TABLE IF NOT EXISTS `shopping_pics` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `path_big` varchar(255) NOT NULL,
  `part` enum('main','side') NOT NULL,
  `fk_shopping` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_shopping` (`fk_shopping`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shopping_pics`
--

INSERT INTO `shopping_pics` (`id`, `path`, `path_big`, `part`, `fk_shopping`) VALUES
(1, '../img/shopping/krk/krk1.png', '../img/shopping/krk/krk1.jpg', 'main', 1),
(2, '../img/shopping/krk/krk2.png', '../img/shopping/krk/krk2.jpg', 'side', 1),
(3, '../img/shopping/krk/krk3.png', '../img/shopping/krk/krk3.jpg', 'side', 1),
(4, '../img/shopping/krk/krk4.png', '../img/shopping/krk/krk4.jpg', 'side', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

DROP TABLE IF EXISTS `transport`;
CREATE TABLE IF NOT EXISTS `transport` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `fk_address` int(6) NOT NULL,
  `fk_desc` int(6) NOT NULL,
  `fk_name` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_address` (`fk_address`),
  KEY `fk_desc` (`fk_desc`),
  KEY `fk_name` (`fk_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transport_desc`
--

DROP TABLE IF EXISTS `transport_desc`;
CREATE TABLE IF NOT EXISTS `transport_desc` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `hr` text NOT NULL,
  `hu` text NOT NULL,
  `en` text NOT NULL,
  `de` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transport_name`
--

DROP TABLE IF EXISTS `transport_name`;
CREATE TABLE IF NOT EXISTS `transport_name` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `en` int(50) NOT NULL,
  `hr` int(50) NOT NULL,
  `de` int(50) NOT NULL,
  `hu` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transport_pics`
--

DROP TABLE IF EXISTS `transport_pics`;
CREATE TABLE IF NOT EXISTS `transport_pics` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `part` enum('main','side') NOT NULL,
  `fk_transport` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_transport` (`fk_transport`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD CONSTRAINT `accommodation_ibfk_1` FOREIGN KEY (`fk_address`) REFERENCES `address` (`id`),
  ADD CONSTRAINT `accommodation_ibfk_2` FOREIGN KEY (`fk_name`) REFERENCES `accommodation_name` (`id`);

--
-- Constraints for table `accommodation_pics`
--
ALTER TABLE `accommodation_pics`
  ADD CONSTRAINT `accommodation_pics_ibfk_1` FOREIGN KEY (`fk_accomm`) REFERENCES `accommodation` (`id`);

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`fk_city`) REFERENCES `city` (`zip`);

--
-- Constraints for table `beach`
--
ALTER TABLE `beach`
  ADD CONSTRAINT `beach_ibfk_1` FOREIGN KEY (`fk_address`) REFERENCES `address` (`id`),
  ADD CONSTRAINT `beach_ibfk_2` FOREIGN KEY (`fk_desc`) REFERENCES `beach_desc` (`id`),
  ADD CONSTRAINT `beach_ibfk_4` FOREIGN KEY (`fk_loc`) REFERENCES `beach_loc` (`id`),
  ADD CONSTRAINT `beach_ibfk_5` FOREIGN KEY (`fk_name`) REFERENCES `beach_name` (`id`);

--
-- Constraints for table `beach_pics`
--
ALTER TABLE `beach_pics`
  ADD CONSTRAINT `beach_pics_ibfk_1` FOREIGN KEY (`fk_beach`) REFERENCES `beach` (`id`);

--
-- Constraints for table `beauty`
--
ALTER TABLE `beauty`
  ADD CONSTRAINT `beauty_ibfk_1` FOREIGN KEY (`fk_address`) REFERENCES `address` (`id`),
  ADD CONSTRAINT `beauty_ibfk_2` FOREIGN KEY (`fk_desc`) REFERENCES `beauty_desc` (`id`),
  ADD CONSTRAINT `beauty_ibfk_3` FOREIGN KEY (`fk_name`) REFERENCES `beauty_name` (`id`);

--
-- Constraints for table `beauty_hours`
--
ALTER TABLE `beauty_hours`
  ADD CONSTRAINT `beauty_hours_ibfk_1` FOREIGN KEY (`fk_beauty`) REFERENCES `beauty` (`id`);

--
-- Constraints for table `beauty_pics`
--
ALTER TABLE `beauty_pics`
  ADD CONSTRAINT `beauty_pics_ibfk_1` FOREIGN KEY (`fk_beauty`) REFERENCES `beauty` (`id`);

--
-- Constraints for table `beauty_reviews`
--
ALTER TABLE `beauty_reviews`
  ADD CONSTRAINT `beauty_reviews_ibfk_1` FOREIGN KEY (`fk_beauty`) REFERENCES `beauty` (`id`);

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`fk_address`) REFERENCES `address` (`id`),
  ADD CONSTRAINT `medicine_ibfk_2` FOREIGN KEY (`fk_desc`) REFERENCES `medicine_desc` (`id`),
  ADD CONSTRAINT `medicine_ibfk_3` FOREIGN KEY (`fk_name`) REFERENCES `medicine_name` (`id`);

--
-- Constraints for table `medicine_hours`
--
ALTER TABLE `medicine_hours`
  ADD CONSTRAINT `medicine_hours_ibfk_1` FOREIGN KEY (`fk_medicine`) REFERENCES `medicine` (`id`);

--
-- Constraints for table `medicine_pics`
--
ALTER TABLE `medicine_pics`
  ADD CONSTRAINT `medicine_pics_ibfk_1` FOREIGN KEY (`fk_medicine`) REFERENCES `medicine` (`id`);

--
-- Constraints for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `restaurant_ibfk_1` FOREIGN KEY (`fk_address`) REFERENCES `address` (`id`),
  ADD CONSTRAINT `restaurant_ibfk_2` FOREIGN KEY (`fk_desc`) REFERENCES `restaurant_desc` (`id`),
  ADD CONSTRAINT `restaurant_ibfk_3` FOREIGN KEY (`fk_name`) REFERENCES `restaurant_name` (`id`);

--
-- Constraints for table `restaurant_pics`
--
ALTER TABLE `restaurant_pics`
  ADD CONSTRAINT `restaurant_pics_ibfk_1` FOREIGN KEY (`fk_restaurant`) REFERENCES `restaurant` (`id`);

--
-- Constraints for table `shopping`
--
ALTER TABLE `shopping`
  ADD CONSTRAINT `shopping_ibfk_1` FOREIGN KEY (`fk_address`) REFERENCES `address` (`id`),
  ADD CONSTRAINT `shopping_ibfk_2` FOREIGN KEY (`fk_name`) REFERENCES `shopping_name` (`id`);

--
-- Constraints for table `shopping_hours`
--
ALTER TABLE `shopping_hours`
  ADD CONSTRAINT `shopping_hours_ibfk_1` FOREIGN KEY (`fk_shopping`) REFERENCES `shopping` (`id`);

--
-- Constraints for table `shopping_pics`
--
ALTER TABLE `shopping_pics`
  ADD CONSTRAINT `shopping_pics_ibfk_1` FOREIGN KEY (`fk_shopping`) REFERENCES `shopping` (`id`);

--
-- Constraints for table `transport`
--
ALTER TABLE `transport`
  ADD CONSTRAINT `transport_ibfk_1` FOREIGN KEY (`fk_address`) REFERENCES `address` (`id`),
  ADD CONSTRAINT `transport_ibfk_2` FOREIGN KEY (`fk_desc`) REFERENCES `transport_desc` (`id`),
  ADD CONSTRAINT `transport_ibfk_3` FOREIGN KEY (`fk_name`) REFERENCES `transport_name` (`id`);

--
-- Constraints for table `transport_pics`
--
ALTER TABLE `transport_pics`
  ADD CONSTRAINT `transport_pics_ibfk_1` FOREIGN KEY (`fk_transport`) REFERENCES `transport` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
