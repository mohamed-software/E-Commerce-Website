-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 09:01 PM
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
-- Database: `training_project 2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `req_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'mobile'),
(2, 'computer'),
(3, 'Clothes');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `massage` text NOT NULL,
  `city` text NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `phone`, `address`, `email`, `massage`, `city`, `view`) VALUES
(140, 'mohamed salah', '+18095333782', 'mansura', 'midos1908@gmail.com', 'mohamed salahdhddhd hd', 'Mansourad', 1),
(141, 'mohamed salah', '+18095333782', 'mansura', 'midos1908@gmail.com', 'hello', 'Mansourad', 1),
(142, 'mohamed salah', '+18095333782', 'mansura', 'midos1908@gmail.com', 'hello', 'Mansourad', 1),
(157, 'Craig Hull', '+1 (856) 708-2752', 'Vero doloribus molli', 'lehuta@mailinator.com', 'Exercitationem quia ', 'Possimus incididunt', 1),
(158, 'Craig Hull', '+1 (856) 708-2752', 'Vero doloribus molli', 'lehuta@mailinator.com', 'Exercitationem quia ', 'Possimus incididunt', 1),
(159, 'Ella Acevedo', '+1 (323) 536-6972', 'Magnam consequat Na', 'sykavigo@mailinator.com', 'Nisi fuga Aut possi', 'Aut doloribus est d', 1),
(160, 'Fulton Schmidt', '+1 (806) 622-3194', 'Vel non unde ut culp', 'qokozeqy@mailinator.com', 'Alias qui et repudia', 'Sit eu expedita dol', 1),
(161, 'Scarlett Flowers', '+1 (959) 894-9429', 'Dolorum officiis fac', 'pumoxu@mailinator.com', 'Aperiam nulla explic', 'Eu accusantium anim ', 1),
(162, 'Karyn Caldwell', '+1 (857) 798-4373', 'Magna nesciunt even', 'dexo@mailinator.com', 'Eveniet illo est se', 'Sapiente dolore volu', 1),
(163, 'Avye Webb', '+1 (203) 457-7186', 'Iste enim consequat', 'hyxym@mailinator.com', 'Neque neque non ut d', 'Quos pariatur Sequi', 1),
(164, 'Steven Acosta', '+1 (287) 294-5221', 'Sint qui voluptatem', 'fipil@mailinator.com', 'Quis ut rem quaerat ', 'Qui enim minim velit', 1),
(165, 'mohamed salah', '+18095333782', 'mansura', 'midos1908@gmail.com', 'mohamed salahdhddhd hd', 'Mansourad', 1),
(166, 'mohamed salah', '+18095333782', 'mansura', 'midos1908@gmail.com', 'mohamed salahdhddhd hd', 'Mansourad', 1),
(167, 'Stewart Rowe', '+1 (193) 947-4978', 'Lorem consequatur o', 'vovykabi@mailinator.com', 'Sit quasi commodo e', 'Mollit eos odit vol', 1),
(168, 'Gage Norman', '+1 (989) 537-8263', 'Obcaecati nisi quae ', 'valin@mailinator.com', 'Ratione culpa earum', 'Sit proident odit ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

CREATE TABLE `privileges` (
  `id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `privileges`
--

INSERT INTO `privileges` (`id`, `name`) VALUES
(1, 'user'),
(2, 'admin'),
(3, 'supervisor');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(25) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `cat_id`) VALUES
(2, 'samsuing', '5000', '3fcfa0307e48d4afd66ebf122ad66de4.jpg', 1),
(8, 'DELL', '10000', '33cb1be52f2aad78c616864dab750398.jpg', 2),
(18, 'DELL', '8000', '33cb1be52f2aad78c616864dab750398.jpg', 2),
(19, 'Jakt', '500', '93661d3cf191fd6317dae86b361537a8.jpg', 3),
(21, 'DELL', '8000', '33cb1be52f2aad78c616864dab750398.jpg', 2),
(22, 'oppo', '4000', '612409940f82b95a581bcd1aad158208.jpg', 1),
(23, 'lume@mailinator.com', 'fozotut@mailinator.com', '93661d3cf191fd6317dae86b361537a8.jpg', 1),
(24, 'DELL', '8000', '33cb1be52f2aad78c616864dab750398.jpg', 2),
(25, 'DELL', '8000', '33cb1be52f2aad78c616864dab750398.jpg', 2),
(26, 'DELL', '8000', '33cb1be52f2aad78c616864dab750398.jpg', 2),
(27, 'phone', '10000', '612409940f82b95a581bcd1aad158208.jpg', 1),
(28, 'clothes', '500', '93661d3cf191fd6317dae86b361537a8.jpg', 3),
(29, 'clothes', '20', 'e52c2a9a7c82f0492ad06b92bb3a1ce7.jpg', 3),
(30, 'clothes', '20', 'e52c2a9a7c82f0492ad06b92bb3a1ce7.jpg', 3),
(31, 'DELL', '8000', '33cb1be52f2aad78c616864dab750398.jpg', 2),
(32, 'DELL', '20000', 'H2f58860ceada42f0a5a52fd0b6f1684an.png_220x220.webp', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `priv` int(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `address`, `gender`, `priv`, `password`) VALUES
(1, 'mohamed', 'ahmed5@yahoo.com', 'mansura', 0, 2, '202cb962ac59075b964b07152d234b70'),
(3, 'amer', 'fghjhgfdfg@yahoo.com', 'mansura', 0, 1, '202cb962ac59075b964b07152d234b70'),
(20, 'mido', 'mohamed_salah@yahoo.com', 'mansura', 0, 2, '827ccb0eea8a706c4c34a16891f84e7b'),
(32, 'mohamed_salah', 'mido1118@yahoo.com', 'cairo', 0, 1, 'd41d8cd98f00b204e9800998ecf8427e'),
(55, 'el nazer', 'mohamed_salah@yahoo.com', 'mansuora', 0, 2, '202cb962ac59075b964b07152d234b70'),
(56, 'eman', 'eman111800@yahoo.com', 'mansura', 1, 1, '202cb962ac59075b964b07152d234b70'),
(62, 'hagar ', 'hager1112@yahoo.com', 'cairo', 1, 1, '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privileges`
--
ALTER TABLE `privileges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `priv` (`priv`),
  ADD KEY `priv_2` (`priv`),
  ADD KEY `priv_3` (`priv`),
  ADD KEY `priv_4` (`priv`),
  ADD KEY `priv_5` (`priv`),
  ADD KEY `priv_6` (`priv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `privileges`
--
ALTER TABLE `privileges`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`priv`) REFERENCES `privileges` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
