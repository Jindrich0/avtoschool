-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 23 2023 г., 23:04
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

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
(1, '2023-01-17 15:38:11', 'yhtryrtyr', '5435345', 'Ожидает звонка'),
(2, '2023-01-23 23:01:32', 'ytryrtyrtyrty', '645645645645', 'Ожидает звонка');

-- --------------------------------------------------------

--
-- Структура таблицы `instructors`
--

CREATE TABLE `instructors` (
  `id` int(11) NOT NULL,
  `instFIO` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `drivingExperience` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `instructors`
--

INSERT INTO `instructors` (`id`, `instFIO`, `drivingExperience`, `age`, `img`) VALUES
(1, 'Василий Петрович', 12, 36, 'img1.jpg'),
(2, 'Андрей Сергеевич', 9, 29, 'img2.jpg'),
(3, 'Алексей Потапович', 7, 27, 'img3.jpg'),
(4, 'Максим лох', 11, 30, 'img4.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `datetime` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `FIOuser` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `id_user`, `datetime`, `FIOuser`, `telephone`, `question`, `status`) VALUES
(1, NULL, '2023-01-17 15:05:04', 'hthtrht', '5345345', 'yrtyrtyryrtyr', 'Ответ: Да'),
(2, NULL, '22.01.2023 14:30:07', 'abobus', '5345345', 'kak sratb?', 'Ответ: Просто'),
(5, NULL, '22.01.2023 15:38:30', 'gfggtrg', '543543', 'gfhjghfgh', 'Ожидает ответа'),
(7, 2, '2023-01-23 22:11:37', NULL, NULL, 'gfdgfddddddddddddddddddddddddddddddddd', 'Ответ: da');

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
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_rate` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `id_user`, `id_rate`, `rating`, `text`, `date`) VALUES
(2, 2, 2, 4, 'нормельно пойдет под пиво ну так средненько конечно да ммм да', '21.01.2023');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `FIO` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `FIO`, `telephone`, `password`, `date`) VALUES
(1, 'Анатольев Анатолий Анатольевич', '+79123211531', 'anatolya', '01.01.2023'),
(2, 'Васильев Василий Васильевич', '+79234547878', 'password', '02.01.2023'),
(3, 'Данилов Данил Данилович', '+74568739021', '345', '03.01.2023'),
(7, 'Петров Петр Петрович', '+79654645666', 'pppetrov', '07.01.2023'),
(14, 'admin', 'admin', 'admin', '21.01.2023');

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
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
