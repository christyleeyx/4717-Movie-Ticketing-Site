-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 10:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

-- CREATE TABLE `customer` (
--   `user_ID` int(10) UNSIGNED NOT NULL,
--   `uname` varchar(50) NOT NULL,
--   `email` varchar(50) NOT NULL,
--   `phone` varchar(8) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- CREATE TABLE `movies` (
--   `movie_id` int(10) UNSIGNED NOT NULL,
--   `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `imdb rating` float NOT NULL,
--   `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
--   `genre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- CREATE TABLE `orders` (
--   `order_no` int(10) UNSIGNED NOT NULL,
--   `user_ID` int(10) UNSIGNED NOT NULL,
--   `uname` varchar(50) NOT NULL,
--   `phone` varchar(8) NOT NULL,
--   `show_ID` int(10) UNSIGNED NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- CREATE TABLE `shows` (
--   `show_ID` int(10) UNSIGNED NOT NULL,
--   `showdate` date NOT NULL,
--   `showtiming` varchar(8) NOT NULL,
--   `movie_id` int(10) UNSIGNED NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- CREATE TABLE `show_seat` (
--   `show_seat_ID` int(10) UNSIGNED NOT NULL,
--   `show_ID` int(10) UNSIGNED NOT NULL,
--   `seat` varchar(8) NOT NULL,
--   `order_no` int(10) UNSIGNED NOT NULL,
--   `seatstatus` int(10) UNSIGNED NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ALTER TABLE `customer`
--   ADD PRIMARY KEY (`user_ID`),
--   ADD UNIQUE KEY `phone` (`phone`);

-- ALTER TABLE `movies`
--   ADD PRIMARY KEY (`movie_id`);

-- ALTER TABLE `orders`
--   ADD PRIMARY KEY (`order_no`),
--   ADD UNIQUE KEY `phone` (`phone`),
--   ADD KEY `user_ID` (`user_ID`),
--   ADD KEY `show_ID` (`show_ID`);

-- ALTER TABLE `shows`
--   ADD PRIMARY KEY (`show_ID`),
--   ADD KEY `movie_id` (`movie_id`);

-- ALTER TABLE `show_seat`
--   ADD PRIMARY KEY (`show_seat_ID`),
--   ADD KEY `show_ID` (`show_ID`);

-- ALTER TABLE `movies`
--   MODIFY `movie_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

-- ALTER TABLE `customer`
--   MODIFY `user_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

-- ALTER TABLE `orders`
--   MODIFY `order_no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

-- ALTER TABLE `shows`
--   MODIFY `show_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

-- ALTER TABLE `show_seat`
--   MODIFY `show_seat_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

-- --
-- ALTER TABLE `orders`
--   ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `customer` (`user_ID`),
--   ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`show_ID`) REFERENCES `shows` (`show_ID`);

-- --
-- -- Constraints for table `shows`
-- --
-- ALTER TABLE `shows`
--   ADD CONSTRAINT `shows_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`);

-- --
-- -- Constraints for table `show_seat`
-- --
-- ALTER TABLE `show_seat`
--   ADD CONSTRAINT `show_seat_ibfk_1` FOREIGN KEY (`show_ID`) REFERENCES `shows` (`show_ID`);
-- COMMIT;

-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
-- /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- INSERT INTO `movies` (`movie_id`, `image`, `title`, `imdb rating`, `description`, `genre`) VALUES
-- (1, 'assets/posters/20th century girl.jpg', '20th Century Girl', 7.3, 'In 1999, a teen with a heart of gold begins keeping close tabs on a popular classmate as a favor to her smitten best friend', 
--     'foreign'),
-- (2, 'assets/posters/avatar 2.jpeg', 'Avatar: The Way of Water', 8.5, 'Jake Sully lives with his newfound family formed on the planet of Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Navi race to protect their planet.', 
--     'action' ),
-- (3, 'assets/posters/barbarian.jpg', 'Barbarian', 7.2, 'A woman staying at an Airbnb discovers that the house she has rented is not what it seems.', 
--     'horror'),
-- (4, 'assets/posters/black adam.jpg', 'Black Adam', 7.1, 'Nearly 5,000 years after he was bestowed with the almighty powers of the Egyptian gods - and imprisoned just as quickly - Black Adam is freed from his earthly tomb, ready to unleash his unique form of justice on the modern world.', 
--     'action'),
-- (5, 'assets/posters/decision to leave.jpg', 'Decision to Leave', 7.3, 'A detective investigating a death in the mountains meets the mysterious wife in the course of his dogged sleuthing.', 
--     'foreign'),
-- (6, 'assets/posters/knock at the cabin.jpg', 'Knock at the Cabin', 5.6, 'While vacationing, a girl and her parents are taken hostage by armed strangers who demand that the family make a choice to avert the apocalypse.', 
--     'horror'),
-- (7, 'assets/posters/lyle lyle crocodile.jpg', 'Lyle, Lyle, Crocodile', 6.4, 'Feature film based on the children book about a crocodile that lives in New York City.', 
--     'animation' ),
-- (8, 'assets/posters/smile.jpg', 'Smile', 6.9, 'After witnessing a bizarre, traumatic incident involving a patient, Dr. Rose Cotter starts experiencing frightening occurrences that she cannot explain. Rose must confront her troubling past in order to survive and escape her horrifying new reality.', 
--     'horror'),
-- (9, 'assets/posters/the gools.jpg', 'The Gools', 6.0, 'After learning to protect a truce among a community of animals, three young goats embark on an adventurous journey to keep a ceasefire intact throughout their society.', 
--     'animation'),
-- (10, 'assets/posters/the woman king.jpg', 'The Woman King', 6.8, 'A historical epic inspired by true events that took place in The Kingdom of Dahomey, one of the most powerful states of Africa in the 18th and 19th centuries.', 
--     'action'),
-- (11, 'assets/posters/wendell and wild.jpg', 'Wendell and Wild', 6.7, 'Two scheming demon brothers, Wendell and Wild, enlist the aid of 13-year-old Kat Elliot to summon them to the Land of the Living.', 
--     'animation' );

-- INSERT INTO `customer` (`user_ID`, `uname`, `email`, `phone`) VALUES
-- (1, "qwerty", "qwerty@uiop.com", 87654321);

-- INSERT INTO `shows` (`show_ID`, `showdate`, `showtiming`, `movie_id`) VALUES
-- (1, "November 5, 2022", "1245", 1);

-- INSERT INTO `orders` (`order_no`, `user_ID`, `uname`, `phone`, `show_ID`) VALUES
-- (1, 1, "qwerty", 87654321, 1);

-- INSERT INTO `show_seat` (`show_seat_ID`, `show_ID`, `seat`, `order_no`, `seatstatus`) VALUES
-- (1, 1, "A1", 1, 1);


-- --
-- ALTER TABLE `movies`
--   ADD PRIMARY KEY (`id`);
-- --
-- ALTER TABLE `movies`
--   MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
-- COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
