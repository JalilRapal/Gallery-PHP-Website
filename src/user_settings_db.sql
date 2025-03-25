-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2025 at 03:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_settings_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_settings`
--

CREATE TABLE `user_settings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `font_style` varchar(100) DEFAULT NULL,
  `font_size` int(11) DEFAULT NULL,
  `text_alignment` enum('left','center','right') DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `picture_alignment` enum('left','center','right') DEFAULT NULL,
  `background_color` varchar(7) DEFAULT NULL,
  `caption` text DEFAULT NULL,
  `caption_alignment` enum('left','center','right') DEFAULT NULL,
  `text_color` varchar(7) DEFAULT NULL,
  `link_color` varchar(7) DEFAULT NULL,
  `nav_background_color` varchar(7) DEFAULT NULL,
  `nav_text_color` varchar(7) DEFAULT NULL,
  `button_background_color` varchar(7) DEFAULT NULL,
  `button_text_color` varchar(7) DEFAULT NULL,
  `container_background_color` varchar(7) DEFAULT NULL,
  `container_text_color` varchar(7) DEFAULT NULL,
  `header_font_size` int(11) DEFAULT NULL,
  `paragraph_font_size` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_settings`
--

INSERT INTO `user_settings` (`id`, `name`, `font_style`, `font_size`, `text_alignment`, `picture`, `picture_alignment`, `background_color`, `caption`, `caption_alignment`, `text_color`, `link_color`, `nav_background_color`, `nav_text_color`, `button_background_color`, `button_text_color`, `container_background_color`, `container_text_color`, `header_font_size`, `paragraph_font_size`, `created_at`) VALUES
(5, 'andree', 'Arial', 22, 'left', 'uploads/1742648462_5_1742377737.png', NULL, '#000000', 'adda', '', '#000000', '', '', '', '#000000', '#000000', '', '', 12, 12, '2025-03-22 13:01:02'),
(6, 'andree', 'Arial', 12, 'left', 'uploads/1742648756_Untitled design (84).jpg', NULL, '#000000', 'wqe', '', '#000000', '', '', '', '#000000', '#000000', '', '', 12, 2, '2025-03-22 13:05:56'),
(7, 'andree', 'Times New Roman', 123, 'center', 'uploads/1742649650_Untitled design (85).jpg', NULL, '#f81616', 'qwe', '', '#a14f4f', '', '', '', '#000000', '#000000', '', '', 12, 12, '2025-03-22 13:20:50'),
(8, '23', 'Arial', 12, 'center', 'uploads/1742650811_Untitled design (77).jpg', NULL, '#af0808', 'qqeqwe', '', '#d53434', '', '', '', '#000000', '#000000', '', '', 45, 45, '2025-03-22 13:40:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_settings`
--
ALTER TABLE `user_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_settings`
--
ALTER TABLE `user_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
