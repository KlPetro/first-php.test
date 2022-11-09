-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Лис 09 2022 р., 12:03
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
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `posts`
--

INSERT INTO `posts` (`id`, `twit`, `user_id`, `created`, `image`) VALUES
(1, ' ons using <a> should include the aria-disabled=\"true\" attribute to indicate the state of the element to assistive technologies.', '1', '2022-11-06 00:14:28', ''),
(2, 'Оператори порівняння виконують порівнювання заданих значень та повертають True (істина) або False (брехня).++', '9', '2022-11-06 00:14:28', ''),
(7, 'Оператори порівняння виконують порівнювання заданих значень та повертають True (істина) або False (брехня).++', '10', '2022-11-07 00:03:16', ''),
(12, 'Телеканал «ТЕТ-А-ТЕТ» (пізніше — «ТЕТ») був заснований 1998 року як один з перших приватних телеканалів в Україні. Почав сдва канали відтоді мають змогу вести цілодобове мовлення.  2001 року телеканал отримав статус регіонального, а 2003 року — загальнонаціонального.  24 квітня 2004 року «ТЕТ» змінив логотип та графічне мовлення. З того часу в етері представлені реаліті-шоу, ток-шоу, телесеріали, гумористичні програми, мультфільми, спортивні трансляції. На телеканалі відсутні політичні програми, новини. Покриття каналу охоплює 92,4 % території України[6].  З 2009 року «ТЕТ» входить до складу медіаконгломерату «1+1 Media».  У листопаді 2010 року генеральною продюсеркою телеканалу стала Ірина Костюк.', '3', '2022-11-07 09:09:46', ''),
(38, 'new photo', '3', '2022-11-08 22:06:44', ''),
(39, 'new photo2', '3', '2022-11-08 22:08:14', '8oQHC5RjxbPWrWTXFiM0k2kS2JeRI6kS6UdEypqVZY5gVAOUzMRfMWlzUgIHDvpp1667938094.png'),
(40, '234wer', '3', '2022-11-08 22:21:03', 's6Be58kCOeB9uSAXgw1uACrQ6UULKimQzSnE1olJnd1RXqx4EuE6whttWvvSq7AX1667938863.png'),
(42, 'Github', '1', '2022-11-09 11:11:29', 'QG0B0f8anBphAOO6pBQau9dKpJqbLJdis9FvkpQIgcWzjswefpTDdVC5PBC83cQH1667985089.png'),
(43, 'qwe', '3', '2022-11-09 11:27:23', '8hGoxO2hmzHLdlrbpsekDR8Z1p4QZyZ4jYMzkXNtzMEaeHrGFK6i6A2KqZMoz3li1667986043.png'),
(44, 'instagram', '13', '2022-11-09 11:40:03', 'QSqWYij5tgD7duKCUfI1z6VYqZXBuOHtlRsOJ7X2ISuPUwG4ALlWeN5gNAku82ha1667986803.png');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'Greg', 'greg@i.ua', '123456', 'admin'),
(3, 'Petro', 'q@q', '123', 'admin'),
(13, 'west22', 'we@w', '123', 'user'),
(14, '123', 'we@w', '123', 'user');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
