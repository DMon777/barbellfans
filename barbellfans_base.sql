-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 15 2017 г., 00:06
-- Версия сервера: 5.5.48
-- Версия PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `barbellfans_base`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `header` varchar(55) NOT NULL,
  `category` int(11) NOT NULL,
  `small_article` text NOT NULL,
  `full_article` text NOT NULL,
  `quantity_views` int(11) unsigned NOT NULL DEFAULT '0',
  `publication_date` int(11) unsigned NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `keywords`, `description`, `header`, `category`, `small_article`, `full_article`, `quantity_views`, `publication_date`, `image`) VALUES
(2, 'title |Как накачать пресс 1', 'как накачать пресс', 'как накачать пресс', 'Как накачать пресс 1', 5, '  вводная статья про пресс вводная статья про пресс вводная статья про пресс вводная статья про пресс вводная статья про пресс вводная статья про пресс вводная статья про пресс вводная статья про пресс  ', '<p>Gjполная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс</p>\r\n', 70, 1468867443, 'press.jpg'),
(3, 'title |Как накачать бицепс', 'Как накачать бицепс', 'Как накачать бицепс', 'Как накачать бицепс', 5, 'Вводная статья о том как накачать бицепс Вводная статья о том как накачать бицепс Вводная статья о том как накачать бицепс Вводная статья о том как накачать бицепс Вводная статья о том как накачать бицепс Вводная статья о том как накачать бицепс Вводная статья о том как накачать бицепс Вводная статья о том как накачать бицепс ', 'Полная статья о том как накачать бицепс Полная статья о том как накачать бицепс Полная статья о том как накачать бицепс Полная статья о том как накачать бицепс Полная статья о том как накачать бицепс Полная статья о том как накачать бицепсПолная статья о том как накачать бицепс Полная статья о том как накачать бицепсПолная статья о том как накачать бицепсПолная статья о том как накачать бицепсПолная статья о том как накачать бицепсПолная статья о том как накачать бицепсПолная статья о том как накачать бицепсПолная статья о том как накачать бицепс м Полная статья о том как накачать бицепс', 64, 1468867443, 'biceps.jpg'),
(4, 'title |Жим лежа', 'Жим лежа', 'Жим лежа', 'Жим лежа', 3, '    Вводаня статья о жиме лежа Вводаня статья о жиме лежа Вводаня статья о жиме лежа Вводаня статья о жиме лежа Вводаня статья о жиме лежа Вводаня статья о жиме лежам  Вводаня статья о жиме лежа Вводаня статья о жиме лежаВводаня статья о жиме лежа Вводаня статья о жиме лежа Вводаня статья о жиме лежаВводаня статья о жиме лежа    ', '<p>Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежаПолная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежаПолная статья о жиме лежаПолная статья о жиме лежа Полная статья о жиме лежаПолная статья о жиме лежа</p>\r\n', 11, 1468867443, 'bench_press.jpg'),
(5, 'title |Статья о подтягиваниях', 'Статья о подтягиваниях', 'Статья о подтягиваниях', ' 	Статья о подтягиваниях', 3, 'Вводная статья о подтягиваниях Вводная статья о подтягиваниях Вводная статья о подтягиваниях Вводная статья о подтягиваниях Вводная статья о подтягиваниях Вводная статья о подтягиваниях Вводная статья о подтягиваниях ', 'Полная статья о подтягиваниях олная статья о подтягиваниях  олная статья о подтягиваниях м м олная статья о подтягиваниях олная статья о подтягиваниях олная статья о подтягиваниях олная статья о подтягиванияхолная статья о подтягиванияхолная статья о подтягиваниях олная статья о подтягиваниях олная статья о подтягиваниях олная статья о подтягиваниях', 7, 1468867443, 'pullups_back.jpg'),
(6, 'title |Отжимания на брусьях', 'Отжимания на брусьях', 'Отжимания на брусьях', 'Отжимания на брусьях', 3, ' Вводная статья о отжиманиях на брусьях Вводная статья о отжиманиях на брусьях Вводная статья о отжиманиях на брусьях  Вводная статья о отжиманиях на брусьях Вводная статья о отжиманиях на брусьях  м м м Вводная статья о отжиманиях на брусьях м Вводная статья о отжиманиях на брусьяхВводная статья о отжиманиях на брусьях', 'Полная статья о отжиманиях на брусьях Полная статья о отжиманиях на брусьях Полная статья о отжиманиях на брусьях Полная статья о отжиманиях на брусьях Полная статья о отжиманиях на брусьях Полная статья о отжиманиях на брусьях Полная статья о отжиманиях на брусьях Полная статья о отжиманиях на брусьях Полная статья о отжиманиях на брусьях Полная статья о отжиманиях на брусьях', 4, 1468867443, 'brusiya1.jpeg'),
(7, 'title |Жима стоя', 'Жима стоя', 'Жима стоя', 'Жима стоя', 3, 'Вводная статя о жииме стоя Вводная статя о жииме стоя Вводная статя о жииме стоя Вводная статя о жииме стоя Вводная статя о жииме стоя Вводная статя о жииме стоя Вводная статя о жииме стоя', 'Полная статя о жииме стоя Полная статя о жииме стоя Полная статя о жииме стоя Полная статя о жииме стоя Полная статя о жииме стоя Полная статя о жииме стоя Полная статя о жииме стоя Полная статя о жииме стояПолная статя о жииме стоя Полная статя о жииме стояПолная статя о жииме стояПолная статя о жииме стояПолная статя о жииме стоя Полная статя о жииме стоя Полная статя о жииме стояПолная статя о жииме стоя Полная статя о жииме стоя Полная статя о жииме стоя', 7, 1468867443, 'Zhim_stoja.jpg'),
(8, 'title |Жим лежа узким хватом', 'Жим лежа узким хватом', 'Жим лежа узким хватом', 'Жим лежа узким хватом', 3, 'Вводная статья о жиме лежа узким хватомм Вводная статья о жиме лежа узким хватомм Вводная статья о жиме лежа узким хватомм Вводная статья о жиме лежа узким хватомм Вводная статья о жиме лежа узким хватомм Вводная статья о жиме лежа узким хватомм Вводная статья о жиме лежа узким хватомм', 'Полная статья о жиме лежа узким хватомм Полная статья о жиме лежа узким хватомм Полная статья о жиме лежа узким хватомм Полная статья о жиме лежа узким хватомм Полная статья о жиме лежа узким хватоммПолная статья о жиме лежа узким хватоммПолная статья о жиме лежа узким хватомм Полная статья о жиме лежа узким хватомм Полная статья о жиме лежа узким хватоммПолная статья о жиме лежа узким хватоммПолная статья о жиме лежа узким хватоммПолная статья о жиме лежа узким хватомм', 1, 1468867443, 'jim_uzkim.jpg'),
(9, 'title |Жим лежа на наклонной скамье', 'Жим лежа на наклонной скамье', 'Жим лежа на наклонной скамье', 'Жим лежа на наклонной скамье', 3, 'Вводная статья о жиме лежа на наклонной скамье Вводная статья о жиме лежа на наклонной скамье Вводная статья о жиме лежа на наклонной скамье Вводная статья о жиме лежа на наклонной скамье Вводная статья о жиме лежа на наклонной скамье', 'Полная статья о жиме лежа на наклонной скамье Полная статья о жиме лежа на наклонной скамье Полная статья о жиме лежа на наклонной скамьеПолная статья о жиме лежа на наклонной скамьеПолная статья о жиме лежа на наклонной скамьеПолная статья о жиме лежа на наклонной скамье Полная статья о жиме лежа на наклонной скамьемПолная статья о жиме лежа на наклонной скамьеПолная статья о жиме лежа на наклонной скамье Полная статья о жиме лежа на наклонной скамье', 9, 1468867443, 'program05.jpg'),
(10, 'title |Жим гантелей лежа', 'Жим гантелей лежа', 'Жим гантелей лежа', 'Жим гантелей лежа', 3, 'Ввожная статья о жиме гантелей лежа Ввожная статья о жиме гантелей лежа Ввожная статья о жиме гантелей лежа Ввожная статья о жиме гантелей лежаВвожная статья о жиме гантелей лежа', 'Полная статья о жиме гантелей лежа Полная статья о жиме гантелей лежа Полная статья о жиме гантелей лежаПолная статья о жиме гантелей лежа м Полная статья о жиме гантелей лежаПолная статья о жиме гантелей лежа мПолная статья о жиме гантелей лежа Полная статья о жиме гантелей лежа Полная статья о жиме гантелей лежа Полная статья о жиме гантелей лежаПолная статья о жиме гантелей лежа', 17, 1468867443, 'jim_ganteleyjpg.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `articles_tags`
--

CREATE TABLE IF NOT EXISTS `articles_tags` (
  `articles_tags_id` int(11) unsigned NOT NULL,
  `article_id` int(11) unsigned NOT NULL,
  `tag_id` int(11) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles_tags`
--

INSERT INTO `articles_tags` (`articles_tags_id`, `article_id`, `tag_id`) VALUES
(18, 2, 1),
(3, 3, 3),
(52, 4, 8),
(6, 5, 3),
(7, 6, 8),
(8, 7, 6),
(9, 7, 8),
(10, 8, 4),
(11, 8, 8),
(12, 9, 4),
(13, 9, 6),
(14, 9, 8),
(15, 10, 4),
(16, 10, 6),
(17, 10, 8),
(51, 4, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `categories_subscribe`
--

CREATE TABLE IF NOT EXISTS `categories_subscribe` (
  `id` int(11) unsigned NOT NULL,
  `subscriber_id` int(11) unsigned NOT NULL,
  `category_id` int(11) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories_subscribe`
--

INSERT INTO `categories_subscribe` (`id`, `subscriber_id`, `category_id`) VALUES
(53, 2, 9),
(52, 2, 8),
(23, 8, 4),
(22, 8, 3),
(21, 7, 6),
(18, 6, 9),
(17, 6, 8),
(24, 8, 5),
(25, 8, 6),
(26, 8, 8),
(27, 8, 9),
(28, 8, 10),
(29, 8, 12),
(30, 8, 13),
(31, 8, 14),
(32, 8, 15),
(33, 8, 16),
(46, 10, 9),
(47, 11, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) unsigned NOT NULL,
  `article_id` int(11) unsigned NOT NULL,
  `parent_id` int(11) unsigned NOT NULL,
  `text_comment` text NOT NULL,
  `user_login` varchar(55) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `date` int(12) unsigned NOT NULL,
  `email` varchar(55) NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`comment_id`, `article_id`, `parent_id`, `text_comment`, `user_login`, `user_id`, `date`, `email`, `avatar`) VALUES
(2, 2, 0, 'test commments', 'valik', 0, 1468867443, 'valisf@slfj.ru', 'default_avatar.jpg'),
(3, 2, 0, 'test2', 'Dimon', 0, 1468867443, 'bessalov88@mail.ru', '669091WIN_20161006_160339.JPG'),
(7, 2, 0, 'dg', 'dgdg', 0, 1468867443, 'dg@sfsfs.dg', 'default_avatar.jpg'),
(11, 3, 0, 'привет', 'дима', 0, 1473861706, 'bwerew@sljf.eu', 'default_avatar.jpg'),
(49, 3, 37, 'gdfg', 'Гость', 0, 1476210639, 'ghyys@dfgd.re', 'default_avatar.jpg'),
(50, 9, 0, 'шварц реально крут', 'Administrator', 1, 1479936558, 'bessalov88@mail.ru', '669091WIN_20161006_160339.JPG'),
(61, 3, 40, 'тестирую ответный мэйл!!!!!!', 'Гость', 0, 1484427554, 'testanswer@mail.ru', 'default_avatar.jpg'),
(30, 3, 0, 'просто коммент', 'Гость', 0, 1473867855, 'bksfsa@amol.ru', 'default_avatar.jpg'),
(31, 3, 30, 'ответ на просто коммент', 'Гость', 0, 1473867874, 'tester@mail.ru', 'default_avatar.jpg'),
(32, 3, 31, 'приветЁЁЁ', 'Dimon', 0, 1473867922, 'bessalov88@mail.ru', '669091WIN_20161006_160339.JPG'),
(33, 3, 0, 'привет всем!!!!', 'Dimon', 0, 1473867943, 'bessalov88@mail.ru', '669091WIN_20161006_160339.JPG'),
(34, 3, 32, 'привет димон ты крутой программист!!!', 'Гость', 0, 1473868027, 'testmail@mail.ru', 'default_avatar.jpg'),
(35, 3, 34, 'спасибо , я знаю!!!', 'Dimon', 0, 1473868076, 'bessalov88@mail.ru', '669091WIN_20161006_160339.JPG'),
(37, 3, 0, 'with id', 'tolik', 4, 1474029997, 'tolik@mail.ru', 'Mister_krabs.png'),
(38, 3, 37, 'не зарегестрирован', 'Гость', 0, 1474030198, 'sanon@boxe.ru', 'default_avatar.jpg'),
(40, 3, 38, 'привет', 'tolik', 4, 1474313482, 'tolik@mail.ru', 'Mister_krabs.png'),
(43, 4, 0, 'жму дохуя!!!', 'Administrator', 1, 1474475804, 'bessalov88@mail.ru', '669091WIN_20161006_160339.JPG');

-- --------------------------------------------------------

--
-- Структура таблицы `likers`
--

CREATE TABLE IF NOT EXISTS `likers` (
  `like_id` int(11) unsigned NOT NULL,
  `article_id` int(11) unsigned NOT NULL,
  `user_login` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `likers`
--

INSERT INTO `likers` (`like_id`, `article_id`, `user_login`) VALUES
(9, 9, 'Dimon'),
(3, 3, 'tolik'),
(4, 4, 'tolik'),
(10, 10, 'valera'),
(9, 9, 'valera'),
(8, 8, 'valera');

-- --------------------------------------------------------

--
-- Структура таблицы `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `like_id` int(11) unsigned NOT NULL,
  `article_id` int(11) unsigned NOT NULL,
  `count_likes` int(11) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `likes`
--

INSERT INTO `likes` (`like_id`, `article_id`, `count_likes`) VALUES
(2, 2, 0),
(3, 3, 1),
(4, 4, 1),
(5, 5, 0),
(6, 6, 0),
(7, 7, 0),
(8, 8, 1),
(9, 9, 2),
(10, 10, 1),
(28, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) unsigned NOT NULL,
  `title` varchar(55) NOT NULL,
  `category_name` varchar(55) NOT NULL,
  `href` varchar(55) NOT NULL,
  `parent_id` int(11) unsigned NOT NULL DEFAULT '0',
  `sorting` int(11) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `title`, `category_name`, `href`, `parent_id`, `sorting`) VALUES
(1, 'Главная', '', 'index', 0, 0),
(2, 'Тренировки', '', '', 0, 1),
(3, 'Упражнения', 'exercises', 'categories/id/exercises', 2, 2),
(4, 'Натуральный тренинг', 'natural_training', 'categories/id/natural_training', 2, 3),
(5, 'Системы тренировок', 'training_system', 'categories/id/training_system', 2, 4),
(6, 'Для девушек', 'for_girls', 'categories/id/for_girls', 2, 5),
(7, 'Питание', '', '', 0, 6),
(8, 'Диеты', 'diets', 'categories/id/diets', 7, 9),
(9, 'Дабавки', 'supplements', 'categories/id/supplements', 7, 7),
(10, 'Для похудения', 'weight_loss', 'categories/id/weight_loss', 7, 8),
(11, 'Разное', '', '', 0, 11),
(12, 'Биографии спортсменов', 'biography', 'categories/id/biography', 11, 14),
(13, 'Мотивация', 'motivation', 'categories/id/motivation', 11, 12),
(14, 'Психология', 'psychology', 'categories/id/psychology', 11, 16),
(15, 'Новости', 'news', 'categories/id/news', 11, 13),
(16, 'Калькулятор повторений', 'rep_calculator', 'rep_calculator', 11, 15);

-- --------------------------------------------------------

--
-- Структура таблицы `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `email` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `activate` int(1) unsigned NOT NULL DEFAULT '0',
  `code` int(11) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subscribers`
--

INSERT INTO `subscribers` (`id`, `user_id`, `email`, `name`, `activate`, `code`) VALUES
(2, 1, 'bessalov88@mail.ru', 'Dimon', 1, 0),
(7, 4, 'tolik@mail.ru', 'tolik', 1, 0),
(6, 0, 'subscriber@maill.ru', 'tester', 1, 0),
(8, 0, 'tolik@yandex.ru', 'tolik', 1, 0),
(10, 0, 'dgdgdgd@sfs.we', 'dfgdgdg', 1, 0),
(11, 0, 'valera@slfjsfl.ru', 'valera', 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) unsigned NOT NULL,
  `title` varchar(55) NOT NULL,
  `href` varchar(55) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `title`, `href`) VALUES
(1, 'пресс', 'core'),
(2, 'приседания', 'squats'),
(3, 'бицепс', 'biceps'),
(4, 'жим лежа', 'bench_press'),
(5, 'протеин', 'protein'),
(6, 'плечи', 'sholders'),
(7, 'кардио', 'cardio'),
(8, 'трицепс', 'triceps');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `login` varchar(55) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(55) NOT NULL,
  `avatar` varchar(55) NOT NULL DEFAULT 'default_avatar.jpg',
  `role` varchar(20) NOT NULL DEFAULT 'User'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `avatar`, `role`) VALUES
(1, 'Administrator', '$2y$10$g4wBg4YlkbuvbcTZLmZxNO7KzZoz3sRS/UeIChEuR0.6w1HSmW.b2', 'bessalov88@mail.ru', '669091WIN_20161006_160339.JPG', 'Administrator'),
(2, 'dvvdd', '$2y$10$7siIBUnnIngUmlBmh2iTfubNrLyyjzjfgnDyWBgM.JKSREwsdc1cW', 'bessalov88@mail.rudf', 'default_avatar.jpg', 'User'),
(3, 'Valera', '$2y$10$3pWliYlUf6tJVLSdOuZM3uJxeecdfznUAT/sqXLwcC6OJqGaOPweq', 'valera@mail.ru', 'default_avatar.jpg', 'User'),
(4, 'tolik', '$2y$10$E6tVaHvAlyPHj307e/nsZuycz0bZA3fdr/mhL8k1tEfnSMmRdMkOy', 'tolik@mail.ru', 'Mister_krabs.png', 'User'),
(5, 'Brulia', '$2y$10$Hlad/xOmVDseZKM9W995xuvS03Dj20mh5hDx0j..91Qs2WvC5wX22', 'brulia@mail.ru', 'Blondie_Fesser.jpg', 'User');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD FULLTEXT KEY `title` (`title`);
ALTER TABLE `articles`
  ADD FULLTEXT KEY `full_article` (`full_article`);
ALTER TABLE `articles`
  ADD FULLTEXT KEY `title_2` (`title`);
ALTER TABLE `articles`
  ADD FULLTEXT KEY `full_article_2` (`full_article`);
ALTER TABLE `articles`
  ADD FULLTEXT KEY `title_3` (`title`,`small_article`,`full_article`);
ALTER TABLE `articles`
  ADD FULLTEXT KEY `title_4` (`title`);
ALTER TABLE `articles`
  ADD FULLTEXT KEY `small_article` (`small_article`);
ALTER TABLE `articles`
  ADD FULLTEXT KEY `full_article_3` (`full_article`);
ALTER TABLE `articles`
  ADD FULLTEXT KEY `title_5` (`title`);
ALTER TABLE `articles`
  ADD FULLTEXT KEY `full_article_4` (`full_article`);
ALTER TABLE `articles`
  ADD FULLTEXT KEY `small_article_2` (`small_article`);
ALTER TABLE `articles`
  ADD FULLTEXT KEY `title_6` (`title`,`small_article`,`full_article`);
ALTER TABLE `articles`
  ADD FULLTEXT KEY `title_7` (`title`,`small_article`,`full_article`);
ALTER TABLE `articles`
  ADD FULLTEXT KEY `title_8` (`title`,`full_article`);
ALTER TABLE `articles`
  ADD FULLTEXT KEY `header` (`header`);
ALTER TABLE `articles`
  ADD FULLTEXT KEY `header_2` (`header`);
ALTER TABLE `articles`
  ADD FULLTEXT KEY `full_article_5` (`full_article`);
ALTER TABLE `articles`
  ADD FULLTEXT KEY `header_3` (`header`);
ALTER TABLE `articles`
  ADD FULLTEXT KEY `header_4` (`header`,`full_article`);

--
-- Индексы таблицы `articles_tags`
--
ALTER TABLE `articles_tags`
  ADD PRIMARY KEY (`articles_tags_id`);

--
-- Индексы таблицы `categories_subscribe`
--
ALTER TABLE `categories_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Индексы таблицы `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD FULLTEXT KEY `href` (`href`);

--
-- Индексы таблицы `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT для таблицы `articles_tags`
--
ALTER TABLE `articles_tags`
  MODIFY `articles_tags_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT для таблицы `categories_subscribe`
--
ALTER TABLE `categories_subscribe`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT для таблицы `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT для таблицы `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
