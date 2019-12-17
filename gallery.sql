-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 17 2019 г., 14:42
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `feedback` text NOT NULL,
  `nickname` varchar(64) NOT NULL DEFAULT 'Аноним'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `feedback`, `nickname`) VALUES
(1, 'sdv', 'dgsd'),
(2, 'sdvdv', 'ewtr');

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE `photo` (
  `id` smallint(6) NOT NULL,
  `m_path` varchar(500) NOT NULL COMMENT 'путь к миникартинкам',
  `path` varchar(500) NOT NULL COMMENT 'путь к большим картинкам',
  `size` varchar(15) NOT NULL COMMENT 'размер фото',
  `title` varchar(50) NOT NULL COMMENT 'имя картинки',
  `view` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`id`, `m_path`, `path`, `size`, `title`, `view`) VALUES
(8, 'mimage/', 'image/', '', '4585.jpg', 2),
(9, 'mimage/', 'image/', '', '65985516.jpg', 4),
(10, 'mimage/', 'image/', '', '1d5fee016db81dea2c510be575038059.jpg', 2),
(11, 'mimage/', 'image/', '', '101622528.jpg', 2),
(12, 'mimage/', 'image/', '', '183844488.jpg', 0),
(13, 'mimage/', 'image/', '', 'bfoto_ru_4410.jpg', 0),
(14, 'mimage/', 'image/', '', 'bfoto_ru_4439.jpg', 0),
(15, 'mimage/', 'image/', '', 'bfoto_ru_4661.jpg', 0),
(16, 'mimage/', 'image/', '', 'f13.jpg', 0),
(17, 'mimage/', 'image/', '', 'img_JFCsMf.jpg', 0),
(18, 'mimage/', 'image/', '', 'Lagonaki.jpg', 2),
(19, 'mimage/', 'image/', '', 'les-berezy-oblaka-leto-sibir.jpg', 1),
(22, 'mimage/', 'image/', '', 'nature-desktop.jpg', 0),
(23, 'mimage/', 'image/', '', 'nature-desktop-wallpaper.jpg', 0),
(24, 'mimage/', 'image/', '', 'stock-photo-osen--autumn-8227.jpg', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `prod`
--

CREATE TABLE `prod` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `prod`
--

INSERT INTO `prod` (`id`, `name`, `price`, `description`, `image`) VALUES
(6, 'ТЕст', '20.00', 'Просто тест', '4585.jpg'),
(7, 'Еще тест', '25.00', '', '101622528.jpg'),
(8, 'И еще тест', '30.00', '', '183844488.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `photo`
--
ALTER TABLE `photo`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `prod`
--
ALTER TABLE `prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
