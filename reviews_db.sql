-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 06, 2021 at 09:00 AM
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
-- Database: `reviews_db`
--
CREATE DATABASE IF NOT EXISTS `reviews_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `reviews_db`;

-- --------------------------------------------------------

--
-- Table structure for table `organisations`
--

CREATE TABLE `organisations` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Название организации',
  `address` varchar(150) NOT NULL COMMENT 'Адрес организации',
  `phone` varchar(13) NOT NULL COMMENT 'Телефонный номер организации',
  `social_networks` text COMMENT 'Cсылка на страницу организации в соц. сетях',
  `working_hours` varchar(45) NOT NULL COMMENT 'Часы работы',
  `unp` varchar(9) NOT NULL COMMENT 'Учетный номер плательщика',
  `legal_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Юридическое название организации',
  `description` text COMMENT 'Дополнительная информация'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `organisations`
--

INSERT INTO `organisations` (`id`, `name`, `address`, `phone`, `social_networks`, `working_hours`, `unp`, `legal_name`, `description`) VALUES
(2, 'Магазин комбикорма Фермер', 'Витебск, Пионерская, 1А, (Рядом со Смоленским рынком)', '+375293222233', 'https://vk.com/fermer', 'Пн.-Пт.:08:00-21:00', '391804987', 'ИП Ляшко В. П.', 'Магазин комбикорма «Фермер» в Витебске создан для удобства приобретения комбикорма, зерна в розницу и оптом с доставкой по городу, а также в продаже семена, грунты, удобрения в широком ассортименте.\r\n\r\nМы осуществляем розничную и оптовую продажу:\r\n- комбикормов для всех видов с/х животных и птиц\r\n- зерна\r\n- круп\r\n- отрубей\r\n- кормовых добавок\r\n- семян овощей и цветов (около 1000 видов)\r\n- грунтов, удобрений, средств обработки растений.\r\n\r\nПриходите и убедитесь сами! Все, что нужно для ваших питомцев, у нас есть!'),
(5, 'ОАО \"Веста\"', 'Республика Беларусь 210001 г. Витебск, ул. Комсомольская, 15', '+375212665354', 'https://www.vesta-retail.by/', 'Пн.-Вс.:08:00-21:00', '300200651', 'Открытое акционерное общество \"Веста\"', 'ОАО «Веста» - одна из ведущих компаний розничной торговли продовольственными и промышленными товарами в г. Витебске и в Республике Беларусь. Компания динамично развивается и сегодня насчитывает 81 магазин, 1 ресторан, 4 кафе, 2 отдела кулинарии, 13 цехов по производству кулинарной продукции, 8 кондитерских цехов, 14 цехов по производству мясных полуфабрикатов.'),
(29, 'Test org 1', 'test address', '+375291231234', 'https://www.google.com/test/test', 'Пн.-Пт.:08:00-21:00', '123456789', 'test name', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod id felis vel scelerisque. Sed nibh diam, faucibus in ex et, ultricies egestas diam. Etiam non leo ullamcorper, ultrices elit sit amet, egestas nisl. Nulla risus mauris, vehicula non nulla ut, scelerisque finibus est. Suspendisse tincidunt justo ex, at sollicitudin leo fermentum malesuada.'),
(31, 'Test org 2', 'test address', '+375291231234', 'https://www.google.com/test/test', 'Пн.-Вс.:08:00-18:00', '123456789', 'test name', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod id felis vel scelerisque. Sed nibh diam, faucibus in ex et, ultricies egestas diam. Etiam non leo ullamcorper, ultrices elit sit amet, egestas nisl. Nulla risus mauris, vehicula non nulla ut, scelerisque finibus est. Suspendisse tincidunt justo ex, at sollicitudin leo fermentum malesuada.'),
(33, 'Test org 3', 'test address', '+375291231234', 'https://www.google.com/test/test', 'Пн.-Вс.:08:00-21:00', '123456789', 'test name', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod id felis vel scelerisque. Sed nibh diam, faucibus in ex et, ultricies egestas diam. Etiam non leo ullamcorper, ultrices elit sit amet, egestas nisl. Nulla risus mauris, vehicula non nulla ut, scelerisque finibus est. Suspendisse tincidunt justo ex, at sollicitudin leo fermentum malesuada.'),
(34, 'Test org 4', 'test address', '+375291231234', 'https://www.google.com/test/', 'Пн.-Вс.:08:00-21:00', '123456789', 'test name', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod id felis vel scelerisque. Sed nibh diam, faucibus in ex et, ultricies egestas diam. Etiam non leo ullamcorper, ultrices elit sit amet, egestas nisl. Nulla risus mauris, vehicula non nulla ut, scelerisque finibus est. Suspendisse tincidunt justo ex, at sollicitudin leo fermentum malesuada.');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL COMMENT 'Заголовок отзыва',
  `review` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Отзыв',
  `date` timestamp NOT NULL COMMENT 'Дата добавления отзыва',
  `organisations_id` int UNSIGNED NOT NULL COMMENT 'Название организации',
  `users_id` int UNSIGNED NOT NULL COMMENT 'Имя пользователя'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `title`, `review`, `date`, `organisations_id`, `users_id`) VALUES
(4, 'Магазин', 'Отличный магазин, всем рекомендую!', '2021-08-03 16:02:06', 5, 8),
(26, 'Test review title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod id felis vel scelerisque.', '2021-08-21 00:05:50', 29, 11),
(32, 'Отличный магазин', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod id felis vel scelerisque.', '2021-09-05 08:42:45', 2, 8),
(33, 'Отзыв о магазине комбикорма Фермер', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod id felis vel scelerisque.', '2021-09-05 08:44:16', 2, 8),
(34, 'Test review title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod id felis vel scelerisque.', '2021-09-05 08:45:42', 2, 11),
(35, 'Test review title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod id felis vel scelerisque.', '2021-09-05 08:49:13', 5, 8),
(36, 'Test review title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod id felis vel scelerisque.', '2021-09-05 08:49:31', 5, 11),
(37, 'Test review title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod id felis vel scelerisque.', '2021-09-05 09:00:03', 29, 8),
(38, 'Test review title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod id felis vel scelerisque.', '2021-09-05 09:00:15', 29, 8),
(39, 'Test review title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod id felis vel scelerisque.', '2021-09-05 09:00:54', 31, 11),
(40, 'Test review title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod id felis vel scelerisque.', '2021-09-05 09:01:11', 31, 8),
(41, 'Test review title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod id felis vel scelerisque.', '2021-09-05 09:01:48', 31, 8),
(42, 'Test review title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod id felis vel scelerisque.', '2021-09-05 09:02:16', 33, 8),
(43, 'Test review title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod id felis vel scelerisque.', '2021-09-05 09:02:43', 33, 8),
(44, 'Test review title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod id felis vel scelerisque.', '2021-09-05 09:03:03', 33, 11),
(45, 'Test review title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod id felis vel scelerisque.', '2021-09-05 09:05:05', 34, 8),
(46, 'Test review title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod id felis vel scelerisque.', '2021-09-05 09:06:28', 34, 11),
(47, 'Test review title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod id felis vel scelerisque.', '2021-09-05 09:06:41', 34, 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL COMMENT 'Логин',
  `name` varchar(100) NOT NULL COMMENT 'Имя',
  `pass` varchar(32) NOT NULL COMMENT 'Пароль',
  `user_groups_id` int UNSIGNED NOT NULL COMMENT 'Группа'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `name`, `pass`, `user_groups_id`) VALUES
(5, 'admin', 'Sergey', 'be7ddc51846940aa341150d58578ba7b', 1),
(8, 'antip123', 'Anton Antipov', 'be7ddc51846940aa341150d58578ba7b', 2),
(11, 'test1234', 'test test', 'be7ddc51846940aa341150d58578ba7b', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL COMMENT 'Название',
  `code` varchar(20) DEFAULT NULL COMMENT 'Группа'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `name`, `code`) VALUES
(1, 'Администраторы', 'admin'),
(2, 'Пользователи', 'user'),
(3, 'Гости', 'guest');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organisations`
--
ALTER TABLE `organisations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reviews_organisations_idx` (`organisations_id`),
  ADD KEY `fk_reviews_users1_idx` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users_user_groups1_idx` (`user_groups_id`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organisations`
--
ALTER TABLE `organisations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_reviews_organisations` FOREIGN KEY (`organisations_id`) REFERENCES `organisations` (`id`),
  ADD CONSTRAINT `fk_reviews_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_user_groups1` FOREIGN KEY (`user_groups_id`) REFERENCES `user_groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
