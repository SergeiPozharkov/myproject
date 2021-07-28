-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 20, 2021 at 09:12 PM
-- Server version: 8.0.19
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `w1020`
--
CREATE DATABASE IF NOT EXISTS `w1020` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `w1020`;

-- --------------------------------------------------------

--
-- Table structure for table `gb`
--

CREATE TABLE `gb` (
  `id` int UNSIGNED NOT NULL COMMENT 'id',
  `message` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Сообщение',
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Имя'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `gb`
--

INSERT INTO `gb` (`id`, `message`, `name`) VALUES
(50, 'Привет!', 'Leo'),
(51, 'Привет!!!', 'Ольга'),
(52, 'Как дела?', 'Макс'),
(53, 'Всё хорошо.', 'Костя');

-- --------------------------------------------------------

--
-- Table structure for table `opros`
--

CREATE TABLE `opros` (
  `id` int NOT NULL COMMENT 'id',
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Имя',
  `meropriatie` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Мероприятие',
  `comment` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Комментарии',
  `phone` int NOT NULL COMMENT 'Телефон'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `opros`
--

INSERT INTO `opros` (`id`, `name`, `meropriatie`, `comment`, `phone`) VALUES
(1, '111', '111111111', '1111111111111111', 11111111),
(3, '2', '2', '2', 2),
(4, '2', 'День рождения', 'Круто', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL COMMENT '№',
  `login` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Логин',
  `pass` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Пароль',
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Имя',
  `user_groups_id` int NOT NULL COMMENT 'Группа'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `name`, `user_groups_id`) VALUES
(4, 'admin', '123', 'Иван Иванович', 1),
(5, 'user', '321', 'Анатолий Николаевич', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `code` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `name`, `code`) VALUES
(1, 'Администраторы', 'admin'),
(2, 'Пользователи', 'user'),
(3, 'Гости', 'guest');

-- --------------------------------------------------------

--
-- Table structure for table `ved`
--

CREATE TABLE `ved` (
  `id` int NOT NULL COMMENT '№',
  `fio` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL COMMENT 'ФИО',
  `zp` float DEFAULT NULL COMMENT 'Зарплата'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ved`
--

INSERT INTO `ved` (`id`, `fio`, `zp`) VALUES
(1, 'Viktor', 1500),
(57, 'Maxim', 12000000),
(59, 'Sergo', 324),
(60, 'Sonia', 8999),
(61, 'Zenon', 7800),
(62, 'Gerero', 300),
(65, 'Sten', 769),
(66, 'Aron', 970),
(72, '222', 250),
(555, 'Leo', 460),
(556, 'del', 250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gb`
--
ALTER TABLE `gb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opros`
--
ALTER TABLE `opros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `fk_users_user_groups_idx` (`user_groups_id`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ved`
--
ALTER TABLE `ved`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gb`
--
ALTER TABLE `gb`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `opros`
--
ALTER TABLE `opros`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ved`
--
ALTER TABLE `ved`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=559;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_user_groups` FOREIGN KEY (`user_groups_id`) REFERENCES `user_groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
