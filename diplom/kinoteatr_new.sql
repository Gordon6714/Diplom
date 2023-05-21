-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 21 2023 г., 20:11
-- Версия сервера: 5.7.33
-- Версия PHP: 7.4.21

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
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `adresa`
--

INSERT INTO `adresa` (`id`, `name`) VALUES
(1, 'Пр. Победы 78'),
(2, 'Суворова 97'),
(5, 'Г.Отечества 65');

-- --------------------------------------------------------

--
-- Структура таблицы `name_film`
--

CREATE TABLE `name_film` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `name_film`
--

INSERT INTO `name_film` (`id`, `name`) VALUES
(1, 'Форсаж 1\r\n'),
(2, 'Зверополис'),
(3, 'Вверх');

-- --------------------------------------------------------

--
-- Структура таблицы `opisaniefilma`
--

CREATE TABLE `opisaniefilma` (
  `id` int(11) NOT NULL,
  `id_filma` int(11) NOT NULL,
  `imgFilm` text COLLATE utf8_unicode_ci NOT NULL,
  `vipusk` int(11) NOT NULL,
  `premiera` date NOT NULL,
  `ganr` text COLLATE utf8_unicode_ci NOT NULL,
  `regiser` text COLLATE utf8_unicode_ci NOT NULL,
  `chenarist` text COLLATE utf8_unicode_ci NOT NULL,
  `roli` text COLLATE utf8_unicode_ci NOT NULL,
  `strana` text COLLATE utf8_unicode_ci NOT NULL,
  `filmTime` time NOT NULL,
  `ogranichenie` text COLLATE utf8_unicode_ci NOT NULL,
  `opisanie` text COLLATE utf8_unicode_ci NOT NULL,
  `treiler` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `opisaniefilma`
--

INSERT INTO `opisaniefilma` (`id`, `id_filma`, `imgFilm`, `vipusk`, `premiera`, `ganr`, `regiser`, `chenarist`, `roli`, `strana`, `filmTime`, `ogranichenie`, `opisanie`, `treiler`) VALUES
(1, 1, '../img/farsag1.jpeg', 2001, '2023-05-30', 'боевик, триллер, криминал', 'Роб Коэн', 'Эрик Бергквист, Дэвид Эйр, Кен Лай', 'Пол Уокер, Вин Дизель, Мишель Родригес', 'США, Германия', '01:46:00', '18+', 'Его зовут Брайан, и он — фанат турбин и нитроускорителей. Он пытается попасть в автобанду легендарного Доминика Торетто, чемпиона опасных и незаконных уличных гонок. Брайан также полицейский, и его задание — втереться в доверие к Торетто, подозреваемому в причастности к дерзким грабежам грузовиков, совершаемым прямо на ходу.', 'https://www.youtube.com/embed/8QyEruRwNeo'),
(2, 2, '../img/zveri.jpg', 2001, '2023-05-30', '1', '1', '1', '1', '1', '01:46:00', '25+', '1', '1'),
(3, 3, '../img/vverh.jpg', 2001, '2023-05-21', '1', '1', '1', '1', '1', '11:45:50', '131+', '1', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `raspisanie`
--

CREATE TABLE `raspisanie` (
  `id` int(11) NOT NULL,
  `id_filma` int(11) NOT NULL,
  `id_adressa` int(11) NOT NULL,
  `time` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `raspisanie`
--

INSERT INTO `raspisanie` (`id`, `id_filma`, `id_adressa`, `time`) VALUES
(1, 1, 2, '17:00'),
(2, 1, 1, '16:00'),
(3, 1, 5, '15:00'),
(4, 1, 1, '15:00'),
(5, 1, 2, '20:00'),
(6, 1, 5, '12:00'),
(7, 2, 1, '11:00'),
(8, 1, 1, '11:00'),
(9, 3, 5, '11:55'),
(10, 2, 2, '13:00'),
(11, 2, 5, '7:00');

-- --------------------------------------------------------

--
-- Структура таблицы `svedenia_mest`
--

CREATE TABLE `svedenia_mest` (
  `id` int(11) NOT NULL,
  `id_seansa` int(11) NOT NULL DEFAULT '0',
  `zanitoe_mesta` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `svedenia_mest`
--

INSERT INTO `svedenia_mest` (`id`, `id_seansa`, `zanitoe_mesta`) VALUES
(16, 6, 'A1'),
(17, 6, 'B3'),
(18, 6, 'A5'),
(19, 6, 'C6'),
(20, 6, 'A2'),
(21, 6, 'B2'),
(22, 6, 'A2'),
(23, 6, 'A2'),
(24, 6, 'C2'),
(25, 6, 'B2'),
(26, 6, 'B2'),
(27, 6, 'C2'),
(28, 6, 'C2'),
(29, 9, 'A1'),
(30, 9, 'A1'),
(31, 9, 'A2'),
(32, 9, 'A2'),
(33, 9, 'A6'),
(34, 9, 'B6'),
(35, 9, 'A6'),
(36, 9, 'C6'),
(37, 9, 'A6'),
(38, 9, 'B6'),
(39, 9, 'B6'),
(40, 9, 'C6'),
(41, 9, 'C6');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `adresa`
--
ALTER TABLE `adresa`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `name_film`
--
ALTER TABLE `name_film`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `opisaniefilma`
--
ALTER TABLE `opisaniefilma`
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
-- Индексы таблицы `svedenia_mest`
--
ALTER TABLE `svedenia_mest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_seansa` (`id_seansa`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `adresa`
--
ALTER TABLE `adresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `name_film`
--
ALTER TABLE `name_film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `opisaniefilma`
--
ALTER TABLE `opisaniefilma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `raspisanie`
--
ALTER TABLE `raspisanie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `svedenia_mest`
--
ALTER TABLE `svedenia_mest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `opisaniefilma`
--
ALTER TABLE `opisaniefilma`
  ADD CONSTRAINT `opisaniefilma_ibfk_1` FOREIGN KEY (`id_filma`) REFERENCES `name_film` (`id`);

--
-- Ограничения внешнего ключа таблицы `raspisanie`
--
ALTER TABLE `raspisanie`
  ADD CONSTRAINT `raspisanie_ibfk_1` FOREIGN KEY (`id_filma`) REFERENCES `name_film` (`id`),
  ADD CONSTRAINT `raspisanie_ibfk_2` FOREIGN KEY (`id_adressa`) REFERENCES `adresa` (`id`);

--
-- Ограничения внешнего ключа таблицы `svedenia_mest`
--
ALTER TABLE `svedenia_mest`
  ADD CONSTRAINT `svedenia_mest_ibfk_1` FOREIGN KEY (`id_seansa`) REFERENCES `raspisanie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
