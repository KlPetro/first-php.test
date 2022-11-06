-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Лис 06 2022 р., 09:07
-- Версія сервера: 10.4.25-MariaDB
-- Версія PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `blog_php`
--

-- --------------------------------------------------------

--
-- Структура таблиці `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `twit` text NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `posts`
--

INSERT INTO `posts` (`id`, `twit`, `user_id`, `created`) VALUES
(1, 'SELECT * FROM `users`\r\nSELECT * FROM `posts`\r\nTRUNCATE TABLE `blog_php`.`posts`\r\nSELECT * FROM `posts`\r\nSELECT * FROM `posts`', '1', '2022-11-06 00:14:28'),
(2, 'SELECT * FROM `users`\r\nSELECT * FROM `posts`\r\nTRUNCATE TABLE `blog_php`.`posts`\r\nSELECT * FROM `posts`\r\nSELECT * FROM `posts`SELECT * FROM `users`\r\nSELECT * FROM `posts`\r\nTRUNCATE TABLE `blog_php`.`posts`\r\nSELECT * FROM `posts`\r\nSELECT * FROM `posts`', '2', '2022-11-06 00:14:28');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'Greg', 'greg@i.ua', '123456', 'user'),
(2, 'qwe', 'qwer@i.ua', '12345', 'user'),
(3, 'q', 'q@q', '123', 'admin');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
