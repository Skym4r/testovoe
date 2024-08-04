-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Авг 04 2024 г., 14:38
-- Версия сервера: 5.7.24
-- Версия PHP: 8.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `leads`
--

-- --------------------------------------------------------

--
-- Структура таблицы `list_leads`
--

CREATE TABLE `list_leads` (
  `id` int(11) NOT NULL,
  `FIO` text NOT NULL,
  `EMAIL` text NOT NULL,
  `PHONE` text NOT NULL,
  `CITY` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `list_leads`
--

INSERT INTO `list_leads` (`id`, `FIO`, `EMAIL`, `PHONE`, `CITY`) VALUES
(5, 'Тестов Тестович Тестик', 'test@xn--tes-tdd.ru', '+7 (999) 999-9998', 'Тула'),
(6, 'Дмитрий Тестов Тест', 'dmitr@test.ru', '+7 (343) 534-3433', 'Санкт-Петербург'),
(7, 'Тестов Тестович Тестик2', 'test@tes.ru', '+7 (999) 999-9998', 'Москва'),
(8, 'Тестов Тестович Тестик', 'test@tes.ru', '+7 (999) 999-9998', 'Тула'),
(9, 'Тестов Тестович Тестик', 'test@tes.ru', '+7 (999) 999-9998', 'Санкт-Петербург'),
(10, 'Тестов Тестович Тестик', 'test@tes.ru', '+7 (999) 999-9998', 'Москва'),
(11, 'Тестов Тестович Тестик', 'test@tes.ru', '+7 (999) 999-9998', 'Тула'),
(12, 'Иван Иванов Иванович', 'Ivan@test.ru', '+7 (343) 534-3439', 'Москва'),
(17, 'Тест', 'test@xn--tes-tdd.ru', '+7 (999) 999-9998', 'Санкт-Петербург');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `list_leads`
--
ALTER TABLE `list_leads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `list_leads`
--
ALTER TABLE `list_leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
