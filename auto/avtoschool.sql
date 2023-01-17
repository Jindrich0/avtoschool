-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 17 2023 г., 17:02
-- Версия сервера: 5.7.33
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `avtoschool`
--

-- --------------------------------------------------------

--
-- Структура таблицы `callback`
--

CREATE TABLE `callback` (
  `id` int(11) NOT NULL,
  `datetime` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `callback`
--

INSERT INTO `callback` (`id`, `datetime`, `name`, `phone`, `status`) VALUES
(1, '2023-01-17 15:38:11', 'yhtryrtyr', '5435345', 'Ожидает звонка');

-- --------------------------------------------------------

--
-- Структура таблицы `instructors`
--

CREATE TABLE `instructors` (
  `id` int(11) NOT NULL,
  `nameInstructor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondNameInsctructor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `drivingExperience` int(11) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `instructors`
--

INSERT INTO `instructors` (`id`, `nameInstructor`, `secondNameInsctructor`, `drivingExperience`, `age`) VALUES
(1, 'Василий', 'Иванович', 12, 36),
(2, 'Андрей', 'Петрович', 9, 29),
(3, 'Алексей', 'Васильевич', 7, 27),
(4, 'Максим', 'Александрович', 11, 30);

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `datetime` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `datetime`, `name`, `phone`, `email`, `text`, `status`) VALUES
(1, '2023-01-17 15:05:04', 'hthtrht', '5345345', 'htth@mail.ru', 'yrtyrtyryrtyr', 'Ожидает ответа');

-- --------------------------------------------------------

--
-- Структура таблицы `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `nameRate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptionRate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gearBox` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `priceRate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `rates`
--

INSERT INTO `rates` (`id`, `nameRate`, `descriptionRate`, `gearBox`, `priceRate`) VALUES
(1, 'Стандарт', 'Курс теории, Курс вождения, Сопровождение на экзамен ГИБДД', 'МКПП/АКПП', 26000),
(2, 'Комфорт', 'Курс теории + доступ к онлайн платформе, Курс вождения с ГСМ, Сопровождение на экзамен ГИБДД, Предоставление автомобиля на экзамен ГИБДД, В подарок: медкомиссия и комплект учебной литературы', 'МКПП/АКПП', 30000),
(3, 'Экспресс', 'Курс вождения с ГСМ - 14 занятий, Курс теории или доступ к онлайн платформе, Подготовка документов к сдаче экзамена в ГИБДД', 'МКПП/АКПП', 18000);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thirdName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstName`, `secondName`, `thirdName`, `email`, `password`) VALUES
(1, 'Анатолий', 'Ваткин', 'Васильевич', 'zazaza@mail.ru', '123'),
(2, 'Василий', 'Петров', 'Александрович', 'killua@mail.ru', 'password'),
(3, 'Даниил', 'Пушкин', 'Петрович', 'den2003@mail.ru', '345'),
(4, 'Анатолий', 'Ваткин', 'Васильевич', 'zazaza@mail.ru', '123'),
(5, 'Василий', 'Петров', 'Александрович', 'killua@mail.ru', 'password'),
(6, 'Даниил', 'Пушкин', 'Петрович', 'den2003@mail.ru', '345'),
(7, 'admin', 'admin', 'admin', 'admin@mail.ru', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `callback`
--
ALTER TABLE `callback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `callback`
--
ALTER TABLE `callback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
