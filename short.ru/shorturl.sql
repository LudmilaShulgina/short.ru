-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 14 2020 г., 10:33
-- Версия сервера: 10.3.22-MariaDB-log
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shorturl`
--

-- --------------------------------------------------------

--
-- Структура таблицы `link`
--

CREATE TABLE `link` (
  `link_id` int(11) NOT NULL,
  `link_url` text NOT NULL,
  `hash` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `link`
--

INSERT INTO `link` (`link_id`, `link_url`, `hash`) VALUES
(87, 'https://miro.medium.com/max/4096/1*fyQoQZpqXSYgIRKKiYrfww.jpeg', '815245598'),
(89, 'https://yandex.ru/news/story/Na_kanale_Rossiya_nachinaetsya_pokaz_seriala_Zulejkha_otkryvaet_glaza--70679bf87ad4341c6f5097f65165cf40?lr=2', '938547336'),
(90, 'https://avatars.mds.yandex.net/get-pdb/1642751/5afc107d-fa01-4de1-b861-551727109293/s1200', '529453815'),
(91, 'https://avatars.mds.yandex.net/get-pdb/28866/a1dc2fe6-a83c-4b0e-8d95-8b157657c97e/s1200', '36632111');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`link_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `link`
--
ALTER TABLE `link`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
