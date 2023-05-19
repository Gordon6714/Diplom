-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 19 2023 г., 22:45
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kinoteatr`
--

-- --------------------------------------------------------

--
-- Структура таблицы `adresa`
--

CREATE TABLE `adresa` (
  `id` int NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `adresa`
--

INSERT INTO `adresa` (`id`, `name`) VALUES
(1, 'Пр. Победы 78'),
(2, 'Суворова 97'),
(5, 'Г.Отечества 65');

-- --------------------------------------------------------

--
-- Структура таблицы `film1_mesta`
--

CREATE TABLE `film1_mesta` (
  `id` int NOT NULL,
  `mesto` text NOT NULL,
  `zanim` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `film1_mesta`
--

INSERT INTO `film1_mesta` (`id`, `mesto`, `zanim`) VALUES
(1, 'A1', ''),
(2, 'A2', ''),
(3, 'A3', 'disabled'),
(4, 'A4', ''),
(5, 'A5', ''),
(6, 'B1', ''),
(7, 'B2', ''),
(8, 'B3', ''),
(9, 'B4', ''),
(10, 'B5', ''),
(11, 'C1', ''),
(12, 'C2', ''),
(13, 'C3', ''),
(14, 'C4', ''),
(15, 'C5', '');

-- --------------------------------------------------------

--
-- Структура таблицы `name_film`
--

CREATE TABLE `name_film` (
  `id` int NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `name_film`
--

INSERT INTO `name_film` (`id`, `name`) VALUES
(1, 'Форсаж 1\r\n'),
(2, 'Зверополис');

-- --------------------------------------------------------

--
-- Структура таблицы `opisanieFilma`
--

CREATE TABLE `opisanieFilma` (
  `id` int NOT NULL,
  `id_filma` int NOT NULL,
  `imgFilm` text NOT NULL,
  `vipusk` int NOT NULL,
  `premiera` date NOT NULL,
  `ganr` text NOT NULL,
  `regiser` text NOT NULL,
  `chenarist` text NOT NULL,
  `roli` text NOT NULL,
  `strana` text NOT NULL,
  `filmTime` time NOT NULL,
  `ogranichenie` text NOT NULL,
  `opisanie` text NOT NULL,
  `treiler` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `opisanieFilma`
--

INSERT INTO `opisanieFilma` (`id`, `id_filma`, `imgFilm`, `vipusk`, `premiera`, `ganr`, `regiser`, `chenarist`, `roli`, `strana`, `filmTime`, `ogranichenie`, `opisanie`, `treiler`) VALUES
(1, 1, '../img/farsag1.jpeg', 2001, '2023-05-30', 'боевик, триллер, криминал', 'Роб Коэн', 'Эрик Бергквист, Дэвид Эйр, Кен Лай', 'Пол Уокер, Вин Дизель, Мишель Родригес', 'США, Германия', '01:46:00', '16+', 'Его зовут Брайан, и он — фанат турбин и нитроускорителей. Он пытается попасть в автобанду легендарного Доминика Торетто, чемпиона опасных и незаконных уличных гонок. Брайан также полицейский, и его задание — втереться в доверие к Торетто, подозреваемому в причастности к дерзким грабежам грузовиков, совершаемым прямо на ходу.', 'https://www.youtube.com/embed/8QyEruRwNeo'),
(2, 2, '', 2001, '2023-05-30', '1', '1', '1', '1', '1', '01:46:00', '1', '1', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `raspisanie`
--

CREATE TABLE `raspisanie` (
  `id` int NOT NULL,
  `id_filma` int NOT NULL,
  `id_adressa` int NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `raspisanie`
--

INSERT INTO `raspisanie` (`id`, `id_filma`, `id_adressa`, `time`) VALUES
(1, 1, 2, '00:00'),
(2, 1, 2, '00:00'),
(3, 1, 2, '00:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `adresa`
--
ALTER TABLE `adresa`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `film1_mesta`
--
ALTER TABLE `film1_mesta`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `name_film`
--
ALTER TABLE `name_film`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `opisanieFilma`
--
ALTER TABLE `opisanieFilma`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_filma` (`id_filma`);

--
-- Индексы таблицы `raspisanie`
--
ALTER TABLE `raspisanie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_filma` (`id_filma`,`id_adressa`),
  ADD KEY `id_adressa` (`id_adressa`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `adresa`
--
ALTER TABLE `adresa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `film1_mesta`
--
ALTER TABLE `film1_mesta`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `name_film`
--
ALTER TABLE `name_film`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `opisanieFilma`
--
ALTER TABLE `opisanieFilma`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `raspisanie`
--
ALTER TABLE `raspisanie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `opisanieFilma`
--
ALTER TABLE `opisanieFilma`
  ADD CONSTRAINT `opisaniefilma_ibfk_1` FOREIGN KEY (`id_filma`) REFERENCES `name_film` (`id`);

--
-- Ограничения внешнего ключа таблицы `raspisanie`
--
ALTER TABLE `raspisanie`
  ADD CONSTRAINT `raspisanie_ibfk_1` FOREIGN KEY (`id_filma`) REFERENCES `name_film` (`id`),
  ADD CONSTRAINT `raspisanie_ibfk_2` FOREIGN KEY (`id_adressa`) REFERENCES `adresa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
