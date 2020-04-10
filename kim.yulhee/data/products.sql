-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2020 at 07:47 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yulheell_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(512) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `email`, `url`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Brown Teddy Bear', '', 'http://coding.yulheekim.com/aau/wnm608/kim.yulhee/index.php', '7.00', 'stuffed animal', '2020-04-09 19:01:17', '2020-04-09 19:01:17', 'This is cute teddy bear. We bought this from IKEA. As you see, condition is really good and clean.', 'images/stuffed_animal_1_thumbnail.jpg', 'images/stuffed_animal_1.jpg'),
(2, 'Cute White Sheep', '', 'http://coding.yulheekim.com/aau/wnm608/kim.yulhee/index.php', '7.00', 'stuffed animal', '2020-04-09 19:04:15', '2020-04-09 19:04:15', 'This is little stuffed animal from Pottery barn kids. This is super famous for babies.', 'images/stuffed_animal_2_thumbnail.jpg', 'images/stuffed_animal_2.jpg'),
(3, 'My First Puppy', '', 'http://coding.yulheekim.com/aau/wnm608/kim.yulhee/index.php', '7.00', 'stuffed animal', '2020-04-09 19:26:34', '2020-04-09 19:26:34', 'Condition is good.', 'images/stuffed_animal_3_thumbnail.jpg', 'images/stuffed_animal_3.jpg'),
(4, 'Gray Small Rabbit', '', 'http://coding.yulheekim.com/aau/wnm608/kim.yulhee/index.php', '7.00', 'stuffed animal', '2020-04-09 19:29:46', '2020-04-09 19:29:46', 'We bought it from IKEA. This is cute rabbit.', 'images/stuffed_animal_4_thumbnail.jpg', 'images/stuffed_animal_4.jpg'),
(5, 'Kakao Friends Doggie', '', 'http://coding.yulheekim.com/aau/wnm608/kim.yulhee/index.php', '15.00', 'stuffed animal', '2020-04-09 19:30:41', '2020-04-09 19:30:41', 'This doll is from Kakao Friends. Condition is super good. We bought it recently, so it is little expensive compared to other dolls.', 'images/stuffed_animal_5_thumbnail.jpg', 'images/stuffed_animal_5.jpg'),
(6, 'My First Bear', '', 'http://coding.yulheekim.com/aau/wnm608/kim.yulhee/index.php', '3.00', 'stuffed animal', '2020-04-09 19:31:40', '2020-04-09 19:31:40', 'This is cute teddy bear. This doll has a little something on its face. Otherwise, it is clean,', 'images/stuffed_animal_6_thumbnail.jpg', 'images/stuffed_animal_6.jpg'),
(7, 'California Bear', '', 'http://coding.yulheekim.com/aau/wnm608/kim.yulhee/index.php', '7.00', 'stuffed animal', '2020-04-09 19:32:26', '2020-04-09 19:32:26', 'This is California bear. Condition is good.', 'images/stuffed_animal_7_thumbnail.jpg', 'images/stuffed_animal_7.jpg'),
(8, 'Minions', '', 'http://coding.yulheekim.com/aau/wnm608/kim.yulhee/index.php', '7.00', 'stuffed animal', '2020-04-09 19:33:14', '2020-04-09 19:33:14', 'Minions! We are selling in two bundles.', 'images/stuffed_animal_8_thumbnail.jpg', 'images/stuffed_animal_8.jpg'),
(9, 'Rainbow Puppy', '', 'http://coding.yulheekim.com/aau/wnm608/kim.yulhee/index.php', '13.00', 'stuffed animal', '2020-04-09 19:34:11', '2020-04-09 19:34:11', 'As you see, Rainbow Puppy has a lot of buttons on its body. The doll can sing, talk. Your baby definitely should like it.', 'images/stuffed_animal_9_thumbnail.jpg', 'images/stuffed_animal_9.jpg'),
(10, 'Mini Mouse', '', 'http://coding.yulheekim.com/aau/wnm608/kim.yulhee/index.php', '7.00', 'stuffed animal', '2020-04-09 19:35:11', '2020-04-09 19:35:11', 'This is real Mini Mouse, We bought it from Disney. Condition is really good. My daughter didn\'t use it.', 'images/stuffed_animal_10_thumbnail.jpg', 'images/stuffed_animal_10.jpg'),
(11, 'Mario & Friends', '', 'http://coding.yulheekim.com/aau/wnm608/kim.yulhee/index.php', '7.00', 'stuffed animal', '2020-04-09 19:35:53', '2020-04-09 19:35:53', 'Mario & Friends. We are selling in two bundles.', 'images/stuffed_animal_11_thumbnail.jpg', 'images/stuffed_animal_11.jpg'),
(12, 'Cute Doll', '', 'http://coding.yulheekim.com/aau/wnm608/kim.yulhee/index.php', '7.00', 'stuffed animal', '2020-04-09 19:36:40', '2020-04-09 19:36:40', 'This is cute doll. Look at the red hat. Isn\'t is so cute? ', 'images/stuffed_animal_12_thumbnail.jpg', 'images/stuffed_animal_12.jpg'),
(13, 'Jelly Cat Bunny', '', 'http://coding.yulheekim.com/aau/wnm608/kim.yulhee/index.php', '15.00', 'stuffed animal', '2020-04-09 19:37:23', '2020-04-09 19:37:23', 'This is super famous doll for parents and babies. Everyone likes it.', 'images/stuffed_animal_13_thumbnail.jpg', 'images/stuffed_animal_13.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
