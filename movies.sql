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
  `movie_id` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `imdb rating` float NOT NULL,
  `description` text NOT NULL,
  `genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `movies` (`movie_id`, `image`, `title`, `imdb rating`, `description`, `genre`) VALUES
(1, 'assets/posters/20th century girl.jpg', '20th Century Girl', 7.3, 'In 1999, a teen with a heart of gold begins keeping close tabs on a popular classmate as a favor to her smitten best friend', 
    'foreign'),
(2, 'assets/posters/avatar 2.jpeg', 'Avatar: The Way of Water', 8.5, 'Jake Sully lives with his newfound family formed on the planet of Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Navi race to protect their planet.', 
    'action' ),
(3, 'assets/posters/barbarian.jpg', 'Barbarian', 7.2, 'A woman staying at an Airbnb discovers that the house she has rented is not what it seems.', 
    'horror'),
(4, 'assets/posters/black adam.jpg', 'Black Adam', 7.1, 'Nearly 5,000 years after he was bestowed with the almighty powers of the Egyptian gods - and imprisoned just as quickly - Black Adam is freed from his earthly tomb, ready to unleash his unique form of justice on the modern world.', 
    'action'),
(5, 'assets/posters/decision to leave.jpg', 'Decision to Leave', 7.3, 'A detective investigating a death in the mountains meets the mysterious wife in the course of his dogged sleuthing.', 
    'foreign'),
(6, 'assets/posters/knock at the cabin.jpg', 'Knock at the Cabin', 5.6, 'While vacationing, a girl and her parents are taken hostage by armed strangers who demand that the family make a choice to avert the apocalypse.', 
    'horror'),
(7, 'assets/posters/lyle lyle crocodile.jpg', 'Lyle, Lyle, Crocodile', 6.4, 'Feature film based on the children book about a crocodile that lives in New York City.', 
    'animation' ),
(8, 'assets/posters/smile.jpg', 'Smile', 6.9, 'After witnessing a bizarre, traumatic incident involving a patient, Dr. Rose Cotter starts experiencing frightening occurrences that she cannot explain. Rose must confront her troubling past in order to survive and escape her horrifying new reality.', 
    'horror'),
(9, 'assets/posters/the gools.jpg', 'The Gools', 6.0, 'After learning to protect a truce among a community of animals, three young goats embark on an adventurous journey to keep a ceasefire intact throughout their society.', 
    'animation'),
(10, 'assets/posters/the woman king.jpg', 'The Woman King', 6.8, 'A historical epic inspired by true events that took place in The Kingdom of Dahomey, one of the most powerful states of Africa in the 18th and 19th centuries.', 
    'action'),
(11, 'assets/posters/wendell and wild.jpg', 'Wendell and Wild', 6.7, 'Two scheming demon brothers, Wendell and Wild, enlist the aid of 13-year-old Kat Elliot to summon them to the Land of the Living.', 
    'animation' );

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
