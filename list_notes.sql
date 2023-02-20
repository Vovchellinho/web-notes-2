-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 20 2023 г., 06:21
-- Версия сервера: 8.0.31
-- Версия PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `notes`
--

-- --------------------------------------------------------

--
-- Структура таблицы `list_notes`
--

CREATE TABLE `list_notes` (
  `id_note` int NOT NULL,
  `text` varchar(140) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `visible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `list_notes`
--

INSERT INTO `list_notes` (`id_note`, `text`, `date`, `visible`) VALUES
(437, '1', '2023-02-19', 1),
(438, '2', '2023-02-19', 1),
(439, '3', '2023-02-19', 1),
(445, '4', '2023-02-20', 1),
(446, '5', '2023-02-20', 1),
(447, '6', '2023-02-20', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `list_notes`
--
ALTER TABLE `list_notes`
  ADD PRIMARY KEY (`id_note`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `list_notes`
--
ALTER TABLE `list_notes`
  MODIFY `id_note` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=448;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
