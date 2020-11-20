-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 20 2020 г., 12:39
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `waves3`
--

-- --------------------------------------------------------

--
-- Структура таблицы `payments`
--

CREATE TABLE `payments` (
  `id` int NOT NULL,
  `transaction_id` text NOT NULL,
  `wallet` text NOT NULL,
  `amount` int NOT NULL,
  `created` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `payments`
--

INSERT INTO `payments` (`id`, `transaction_id`, `wallet`, `amount`, `created`) VALUES
(41, 'CZvKA6f5QMjTS6Hfro9GvuCs7Rso4Rmt8rehzgvFt465', '3Myqjf1D44wR8Vko4Tr5CwSzRNo2Vg9S7u7', 1000000000, '\"52856-04-03 01:50:48\"'),
(42, 'BLqUT8amsn2Ln3Vx7bLYNNKsLfeyGthXRFpejE4SnWbF', '3Myqjf1D44wR8Vko4Tr5CwSzRNo2Vg9S7u7', 1000000000, '\"52856-03-26 06:34:14\"'),
(43, 'HdCSYMsMLgyPX4LLYpzLQGhDu9zNK23nxsbb2Zvxf9kc', '3Myqjf1D44wR8Vko4Tr5CwSzRNo2Vg9S7u7', 1000000000, '\"52856-03-18 13:13:16\"'),
(44, '5qaFY45wCJXMDG6M7zonQh1gPBb3TvwYFpi88Gi7dsfD', '3Myqjf1D44wR8Vko4Tr5CwSzRNo2Vg9S7u7', 1000000000, '\"52856-03-08 13:06:57\"'),
(45, '8EVaMs3XkzDy7DrVSXkxkfCBPbKeTKrytkMURZehtV63', '3Myqjf1D44wR8Vko4Tr5CwSzRNo2Vg9S7u7', 1000000000, '\"52856-02-26 08:47:35\"'),
(46, '9RKoMMEkxkUfEn3TrKR2EAG7XUHmjSNejdvy6Vig17t1', '3Myqjf1D44wR8Vko4Tr5CwSzRNo2Vg9S7u7', 1000000000, '\"52856-01-26 21:14:37\"'),
(47, 'HWyY7TshRzeN5tmf17ep7s5cp3UARgwnmPQREUfvuhCG', '3Myqjf1D44wR8Vko4Tr5CwSzRNo2Vg9S7u7', 1000000000, '\"52855-08-27 18:37:44\"'),
(48, '9RKoMMEkxkUfEn3TrKR2EAG7XUHmjSNejdvy6Vig17t1', '3Myqjf1D44wR8Vko4Tr5CwSzRNo2Vg9S7u7', 1000000000, '\"52856-01-26 21:14:37\"');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
