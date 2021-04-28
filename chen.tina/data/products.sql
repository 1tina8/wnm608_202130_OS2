-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2021 at 11:58 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tina_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `name` varchar(64) NOT NULL,
  `category` varchar(64) NOT NULL,
  `image_main` varchar(256) NOT NULL,
  `image_thumb` varchar(256) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `description` text NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `image_main`, `image_thumb`, `price`, `description`, `date_create`, `date_modify`) VALUES
(1, 'Heart of Pink', 'Roses', 'heart_pinkrose.jpeg', 'rsz_heart_pinkrose.jpg', 110.00, 'Heart branded box style full of pink mix roses.', '2021-04-20 22:15:36', '2021-04-20 22:15:36'),
(2, 'White Roses', 'Roses', 'whiterose.jpeg', 'rsz_whiterose.jpg', 95.00, 'Elegant all white arrangement with creamy 16 white Roses and greens in a glass vase.', '2021-04-20 22:20:45', '2021-04-20 22:20:45'),
(3, 'Sunrise Talk', 'Roses', 'yellowrose.jpeg', 'rsz_yellowrose.jpg', 69.00, 'Fill someone’s day with sunshine with our vibrant 24 yellow roses. These bright, cheerful blooms are a warm, thoughtful gift that will leave them beaming', '2021-04-20 22:22:38', '2021-04-20 22:22:38'),
(4, 'Lavender Medley', 'Roses', 'lavender.jpeg', 'rsz_lavender.jpg', 59.00, 'Charming bouquet is loosely gathered with a medley of lavender & white blooms', '2021-04-20 22:24:28', '2021-04-20 22:24:28'),
(5, 'All White', 'Roses', 'allwhite.jpeg', 'rsz_allwhite.jpg', 77.00, 'White flowers have a timeless elegance, which is captured in our luxurious all-white arrangement', '2021-04-20 22:26:26', '2021-04-20 22:26:26'),
(6, 'Spring Lilies', 'Lilies', 'spring_lilies.jpeg', 'rsz_spring_lilies.jpg', 43.00, 'Send a sweet sentiment bouquet to someone special with our delightful spring lilies', '2021-04-20 22:31:24', '2021-04-20 22:31:24'),
(7, 'Timeless Tulip', 'Tulips', 'timeless.jpeg', 'rsz_timeless.jpg', 128.00, '70 colorful tulips are an instant day-brightener. Whoever they’re for, whatever the reason, this cheerful bunch of spring blooms is the best kind of surprise.', '2021-04-20 22:33:20', '2021-04-20 22:33:20'),
(8, 'Pure Red', 'Tulips', 'pure_red.jpg', 'rsz_pure_red.jpg', 65.00, 'Elegant red tulips speak volumes! Beautifully hand-arranged with lush greenery inside our exclusive clear vase', '2021-04-20 22:40:38', '2021-04-20 22:40:38'),
(9, 'Peruvian Lilies', 'Lilies', 'peruvian_lilies.jpeg', 'rsz_peruvian_lilies.jpg', 79.00, '100 beautiful jewel-toned Peruvian lilies are a perfect surprise for someone precious to you.', '2021-04-20 22:40:38', '2021-04-20 22:40:38'),
(10, 'Red Love', 'Roses', 'red_love.jpeg', 'rsz_red_love.jpg', 192.00, '100 red roses bring love to your side', '2021-04-20 22:51:11', '2021-04-20 22:51:11'),
(11, 'Passionate Peaches', 'Mix', 'peaches.jpeg', 'rsz_peaches.jpg', 45.00, 'A soft and tender bouquet, perfect for expressing your gentle loving thoughts through delicate peach and light pink roses, carnations, alstroemeria', '2021-04-20 22:52:11', '2021-04-20 22:52:11'),
(12, 'Wild Rainbow', 'Roses', 'rainbow.jpeg', 'rsz_rainbow.jpg', 75.00, 'Wild 12 rainbow roses are an amazing gift that will blow them away on their special day.', '2021-04-20 22:55:16', '2021-04-20 22:55:16'),
(13, 'The Firecracker', 'Mix', 'firecracker.jpeg', 'rsz_firecracker.jpg', 70.00, 'Cool blue tones from thistle fit perfectly alongside bursts of orange roses and bright, golden Craspedia.', '2021-04-20 22:55:16', '2021-04-20 22:55:16');

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
