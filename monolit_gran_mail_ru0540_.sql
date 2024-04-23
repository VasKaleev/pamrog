-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 23 2024 г., 12:18
-- Версия сервера: 10.6.16-MariaDB-0ubuntu0.22.04.1
-- Версия PHP: 8.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `monolit_gran_mail_ru0540_`
--

-- --------------------------------------------------------

--
-- Структура таблицы `otzkom`
--

CREATE TABLE `otzkom` (
  `id` int(11) NOT NULL,
  `fio` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tel` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `comment` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `datazv` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci COMMENT='Таблица отзывов и комментариев из страницы отзывы';

--
-- Дамп данных таблицы `otzkom`
--

INSERT INTO `otzkom` (`id`, `fio`, `tel`, `comment`, `datazv`) VALUES
(1, 'Иванов А.Н.', '+375297653454', 'Работы по установке памятника и ограды выполнены качественно и в срок! Рекомендую заказывать памятники и ограды у этих ребят. ', '2024-04-22 11:29:19');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pasw` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `user`, `pasw`) VALUES
(1, '9071e0ca7e4964a5cc69201ba2743650', '95abc3527f89e48f04af8fbfb72f525d﻿');

-- --------------------------------------------------------

--
-- Структура таблицы `zayav`
--

CREATE TABLE `zayav` (
  `id` int(11) NOT NULL,
  `fio` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tel` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `comment` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `datazv` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Дамп данных таблицы `zayav`
--

INSERT INTO `zayav` (`id`, `fio`, `tel`, `comment`, `datazv`) VALUES
(0, 'Петров', '+375293202086', 'Тест!', '2024-04-22 11:30:01');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `otzkom`
--
ALTER TABLE `otzkom`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `otzkom`
--
ALTER TABLE `otzkom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
