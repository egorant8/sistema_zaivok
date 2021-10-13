-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 23 2021 г., 15:50
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `zaivki`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'test', 'test'),
(2, '12', '12');

-- --------------------------------------------------------

--
-- Структура таблицы `zaivki`
--

CREATE TABLE `zaivki` (
  `id` int(11) NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trouble` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hidd` int(11) NOT NULL,
  `data` date NOT NULL,
  `metka` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `zaivki`
--

INSERT INTO `zaivki` (`id`, `login`, `trouble`, `hidd`, `data`, `metka`) VALUES
(9, 'test', 'Установить принтер, 326 кабинет', 1, '2021-07-22', 1),
(10, 'test', 'Сделать ролик про ковид', 1, '2021-07-22', 0),
(12, 'test', 'Сделать вывод дат когда была подана заявка', 1, '2021-07-22', 0),
(17, 'test', ' Сделать ПО для выгрузки базы и передачи её на открытую сеть', 0, '2021-07-22', 1),
(18, 'test', 'Кассы перенесены на пятницу(23.07.2021)', 0, '2021-07-22', 1),
(19, 'test', 'Подзадачи для заявок', 0, '2021-07-22', 0),
(20, 'test', '438 принтер', 0, '2021-07-22', 0),
(21, 'test', 'Отправить ответы на ковид по новой электронке', 0, '2021-07-23', 1),
(23, 'test', 'Оставлять комментарии к задачам(Только для админов)', 0, '2021-07-23', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zaivki`
--
ALTER TABLE `zaivki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `zaivki`
--
ALTER TABLE `zaivki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
