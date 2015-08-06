-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 06 2015 г., 21:09
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bal`
--

CREATE TABLE IF NOT EXISTS `bal` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `sum` decimal(7,2) NOT NULL,
  `change_sum` decimal(7,2) NOT NULL,
  `name_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_id` (`name_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=136 ;

--
-- Дамп данных таблицы `bal`
--

INSERT INTO `bal` (`id`, `sum`, `change_sum`, `name_id`) VALUES
(63, '99999.99', '14.00', 37),
(120, '46.00', '14.00', 72),
(135, '395.81', '14.00', 96);

-- --------------------------------------------------------

--
-- Структура таблицы `change_sum`
--

CREATE TABLE IF NOT EXISTS `change_sum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_change` datetime NOT NULL,
  `plus` decimal(7,2) NOT NULL,
  `sum_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Дамп данных таблицы `change_sum`
--

INSERT INTO `change_sum` (`id`, `date_change`, `plus`, `sum_id`) VALUES
(18, '2015-08-05 19:14:11', '12.11', 135),
(19, '2015-08-05 19:14:11', '12.11', 135),
(20, '2015-08-05 19:14:18', '12.11', 135),
(21, '2015-08-05 19:14:18', '12.11', 135),
(22, '2015-08-05 19:14:23', '12.11', 135),
(23, '2015-08-05 19:14:23', '12.11', 135),
(24, '2015-08-05 19:14:26', '12.11', 135),
(25, '2015-08-05 19:14:26', '12.11', 135),
(26, '2015-08-05 19:14:52', '12.11', 135),
(27, '2015-08-05 19:14:52', '12.11', 135),
(28, '2015-08-05 19:15:03', '12.11', 135),
(29, '2015-08-05 19:17:00', '12.11', 135);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=97 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `date`) VALUES
(37, 'dsadas', 'dasdas', '754754', '0000-00-00'),
(72, 'alex', 'aa@mail.ru', '213-22-14', '2015-08-05'),
(96, 'as', 'ss@mail.ru', '', '2015-08-05');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
