-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 12, 2022 at 05:38 PM
-- Server version: 8.0.29-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorials`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `movies` (
  `id` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `imdb rating` float NOT NULL,
  `description` text NOT NULL,
  `genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `movies` (`id`, `image`, `title`, `imdb rating`, `description`, `genre`) VALUES
(1, 'products/javascript.jpg', 'Learn JavaScript Quickly: A Complete Beginner’s Guide to Learning JavaScript', 15.99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'books'),
(2, 'products/node.jpg', 'Node.js: Novice to Ninja 1st Edition', 39.95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'books'),
(3, 'products/machine-learning.jpg', 'JavaScript from Beginner to Professional: Learn JavaScript quickly', 34.95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'books'),
(4, 'products/coding.jpg', 'Coding All-in-One For Dummies', 19.99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'books'),
(5, 'products/star-wars.jpg', 'Star Wars Squadrons', 39.99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'games'),
(6, 'products/tank.jpg', 'M4 Tank Brigade', 14.95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'games'),
(7, 'products/farcry.jpg', 'Far Cry Primal - PC Standard Edition', 34.95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'games'),
(8, 'products/batlefield.jpg', 'Battlefield 3 [Download]', 49.99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'games'),
(9, 'products/phone-1.jpg', 'SAMSUNG Galaxy S22 Ultra Cell Phone,', 1.136, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'phones'),
(10, 'products/phone-2.jpg', 'Apple iPhone 12 Pro, 512GB', 919.99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'phones'),
(11, 'products/phone-3.jpg', 'Moto G Power | 2021 | 3-Day battery', 160.95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'phones'),
(12, 'products/phone-4.jpg', 'Moto G7 Plus | Unlocked | Made for US by Motorola', 201, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'phones'),
(13, 'products/mic-1.jpg', 'Rode PodMic Cardioid Dynamic Broadcast Microphone', 99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'microphones'),
(14, 'products/mic-2.jpg', 'Audio-Technica AT2020 Cardioid', 99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'microphones'),
(15, 'products/mic-3.jpg', 'Elgato Wave:3 - Premium Studio Quality USB ', 149.95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'microphones'),
(16, 'products/mic-4.jpg', 'Razer Seiren X USB Streaming Microphone: Professional Grade', 59, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'microphones'),
(17, 'products/tablet-1.jpg', 'SAMSUNG SM-T290NZKAXAR, Galaxy Tab A 8.0 32 GB', 99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'tablets'),
(18, 'products/tablet-2.jpg', 'Lectrus Tablet+Customized Cover, Android 9.0', 119, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'tablets'),
(19, 'products/tablet-3.jpg', '10 Inch Tablet and Tablet Case Bundle, Android 9.0 Tablet 2GB RAM', 149.95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'tablets'),
(20, 'products/tablet-4.jpg', 'Lenovo IdeaTab A2109 9-Inch 16 GB Tablet', 199, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'tablets');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `movies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
