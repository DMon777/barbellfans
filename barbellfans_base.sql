-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 13 2016 г., 11:14
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
  `title` varchar(55) NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `category` int(11) NOT NULL,
  `small_article` text NOT NULL,
  `full_article` text NOT NULL,
  `quantity_views` int(11) unsigned NOT NULL DEFAULT '0',
  `publication_date` int(11) unsigned NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `keywords`, `description`, `category`, `small_article`, `full_article`, `quantity_views`, `publication_date`, `image`) VALUES
(1, 'Статья о приседаниях', 'приседания', 'приседания', 3, 'вводная статья про приседания вводная статья про приседания вводная статья про приседания вводная статья про приседания\r\nвводная статья про приседания ', ' полная статья про приседания полная статья про приседания полная статья про приседания полная статья про приседания полная статья про приседания полная статья про приседания полная статья про приседания полная статья про приседания полная статья про приседания полная статья про приседания полная статья про приседания полная статья про приседания полная статья про приседания полная статья про приседания полная статья про приседания', 40, 1468867443, 'squats.jpg'),
(2, 'Как накачать пресс', 'как накачать пресс', 'как накачать пресс', 5, ' вводная статья про пресс вводная статья про пресс вводная статья про пресс вводная статья про пресс вводная статья про пресс вводная статья про пресс вводная статья про пресс вводная статья про пресс ', 'полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс полная статья про пресс', 15, 1468867443, 'press.jpg'),
(3, 'Как накачать бицепс', 'Как накачать бицепс', 'Как накачать бицепс', 5, 'Вводная статья о том как накачать бицепс Вводная статья о том как накачать бицепс Вводная статья о том как накачать бицепс Вводная статья о том как накачать бицепс Вводная статья о том как накачать бицепс Вводная статья о том как накачать бицепс Вводная статья о том как накачать бицепс Вводная статья о том как накачать бицепс ', 'Полная статья о том как накачать бицепс Полная статья о том как накачать бицепс Полная статья о том как накачать бицепс Полная статья о том как накачать бицепс Полная статья о том как накачать бицепс Полная статья о том как накачать бицепсПолная статья о том как накачать бицепс Полная статья о том как накачать бицепсПолная статья о том как накачать бицепсПолная статья о том как накачать бицепсПолная статья о том как накачать бицепсПолная статья о том как накачать бицепсПолная статья о том как накачать бицепсПолная статья о том как накачать бицепс м Полная статья о том как накачать бицепс', 0, 1468867443, 'biceps.jpg'),
(4, 'Жим лежа', 'Жим лежа', 'Жим лежа', 3, 'Вводаня статья о жиме лежа Вводаня статья о жиме лежа Вводаня статья о жиме лежа Вводаня статья о жиме лежа Вводаня статья о жиме лежа Вводаня статья о жиме лежам  Вводаня статья о жиме лежа Вводаня статья о жиме лежаВводаня статья о жиме лежа Вводаня статья о жиме лежа Вводаня статья о жиме лежаВводаня статья о жиме лежа', 'Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежаПолная статья о жиме лежа  Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежа Полная статья о жиме лежаПолная статья о жиме лежаПолная статья о жиме лежа Полная статья о жиме лежаПолная статья о жиме лежа', 0, 1468867443, 'bench_press.jpg'),
(5, 'Статья о подтягиваниях', 'Статья о подтягиваниях', 'Статья о подтягиваниях', 3, 'Вводная статья о подтягиваниях Вводная статья о подтягиваниях Вводная статья о подтягиваниях Вводная статья о подтягиваниях Вводная статья о подтягиваниях Вводная статья о подтягиваниях Вводная статья о подтягиваниях ', 'Полная статья о подтягиваниях олная статья о подтягиваниях  олная статья о подтягиваниях м м олная статья о подтягиваниях олная статья о подтягиваниях олная статья о подтягиваниях олная статья о подтягиванияхолная статья о подтягиванияхолная статья о подтягиваниях олная статья о подтягиваниях олная статья о подтягиваниях олная статья о подтягиваниях', 0, 1468867443, 'pullups_back.jpg'),
(6, 'Отжимания на брусьях', 'Отжимания на брусьях', 'Отжимания на брусьях', 3, ' Вводная статья о отжиманиях на брусьях Вводная статья о отжиманиях на брусьях Вводная статья о отжиманиях на брусьях  Вводная статья о отжиманиях на брусьях Вводная статья о отжиманиях на брусьях  м м м Вводная статья о отжиманиях на брусьях м Вводная статья о отжиманиях на брусьяхВводная статья о отжиманиях на брусьях', 'Полная статья о отжиманиях на брусьях Полная статья о отжиманиях на брусьях Полная статья о отжиманиях на брусьях Полная статья о отжиманиях на брусьях Полная статья о отжиманиях на брусьях Полная статья о отжиманиях на брусьях Полная статья о отжиманиях на брусьях Полная статья о отжиманиях на брусьях Полная статья о отжиманиях на брусьях Полная статья о отжиманиях на брусьях', 0, 1468867443, 'brusiya1.jpeg'),
(7, 'Жима стоя', 'Жима стоя', 'Жима стоя', 3, 'Вводная статя о жииме стоя Вводная статя о жииме стоя Вводная статя о жииме стоя Вводная статя о жииме стоя Вводная статя о жииме стоя Вводная статя о жииме стоя Вводная статя о жииме стоя', 'Полная статя о жииме стоя Полная статя о жииме стоя Полная статя о жииме стоя Полная статя о жииме стоя Полная статя о жииме стоя Полная статя о жииме стоя Полная статя о жииме стоя Полная статя о жииме стояПолная статя о жииме стоя Полная статя о жииме стояПолная статя о жииме стояПолная статя о жииме стояПолная статя о жииме стоя Полная статя о жииме стоя Полная статя о жииме стояПолная статя о жииме стоя Полная статя о жииме стоя Полная статя о жииме стоя', 0, 1468867443, 'Zhim_stoja.jpg'),
(8, 'Жим лежа узким хватом', 'Жим лежа узким хватом', 'Жим лежа узким хватом', 3, 'Вводная статья о жиме лежа узким хватомм Вводная статья о жиме лежа узким хватомм Вводная статья о жиме лежа узким хватомм Вводная статья о жиме лежа узким хватомм Вводная статья о жиме лежа узким хватомм Вводная статья о жиме лежа узким хватомм Вводная статья о жиме лежа узким хватомм', 'Полная статья о жиме лежа узким хватомм Полная статья о жиме лежа узким хватомм Полная статья о жиме лежа узким хватомм Полная статья о жиме лежа узким хватомм Полная статья о жиме лежа узким хватоммПолная статья о жиме лежа узким хватоммПолная статья о жиме лежа узким хватомм Полная статья о жиме лежа узким хватомм Полная статья о жиме лежа узким хватоммПолная статья о жиме лежа узким хватоммПолная статья о жиме лежа узким хватоммПолная статья о жиме лежа узким хватомм', 0, 1468867443, 'jim_uzkim.jpg'),
(9, 'Жим лежа на наклонной скамье', 'Жим лежа на наклонной скамье', 'Жим лежа на наклонной скамье', 3, 'Вводная статья о жиме лежа на наклонной скамье Вводная статья о жиме лежа на наклонной скамье Вводная статья о жиме лежа на наклонной скамье Вводная статья о жиме лежа на наклонной скамье Вводная статья о жиме лежа на наклонной скамье', 'Полная статья о жиме лежа на наклонной скамье Полная статья о жиме лежа на наклонной скамье Полная статья о жиме лежа на наклонной скамьеПолная статья о жиме лежа на наклонной скамьеПолная статья о жиме лежа на наклонной скамьеПолная статья о жиме лежа на наклонной скамье Полная статья о жиме лежа на наклонной скамьемПолная статья о жиме лежа на наклонной скамьеПолная статья о жиме лежа на наклонной скамье Полная статья о жиме лежа на наклонной скамье', 0, 1468867443, 'program05.jpg'),
(10, 'Жим гантелей лежа', 'Жим гантелей лежа', 'Жим гантелей лежа', 3, 'Ввожная статья о жиме гантелей лежа Ввожная статья о жиме гантелей лежа Ввожная статья о жиме гантелей лежа Ввожная статья о жиме гантелей лежаВвожная статья о жиме гантелей лежа', 'Полная статья о жиме гантелей лежа Полная статья о жиме гантелей лежа Полная статья о жиме гантелей лежаПолная статья о жиме гантелей лежа м Полная статья о жиме гантелей лежаПолная статья о жиме гантелей лежа мПолная статья о жиме гантелей лежа Полная статья о жиме гантелей лежа Полная статья о жиме гантелей лежа Полная статья о жиме гантелей лежаПолная статья о жиме гантелей лежа', 0, 1468867443, 'jim_ganteleyjpg.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `articles_tags`
--

CREATE TABLE IF NOT EXISTS `articles_tags` (
  `articles_tags_id` int(11) unsigned NOT NULL,
  `article_id` int(11) unsigned NOT NULL,
  `tag_id` int(11) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles_tags`
--

INSERT INTO `articles_tags` (`articles_tags_id`, `article_id`, `tag_id`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 3, 3),
(4, 4, 4),
(5, 4, 8),
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
(17, 10, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) unsigned NOT NULL,
  `category_name` varchar(55) NOT NULL,
  `title_in_menu` varchar(55) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `title_in_menu`) VALUES
(1, 'exercises', 'Упражнения'),
(2, 'natural_training', 'Натуральный тренинг'),
(3, 'training_system', 'Системы тренировок'),
(4, 'for_girls', 'Для девушек'),
(5, 'diets', 'Диеты'),
(6, 'supplements', 'Добавки'),
(7, 'weight_loss', 'Для похудения'),
(8, 'biography', 'Биографии спортсменов'),
(9, 'motivation', 'Мотивация'),
(10, 'psychology', 'Психология'),
(11, 'news', 'Новости'),
(12, 'calculators', 'Калькуляторы');

-- --------------------------------------------------------

--
-- Структура таблицы `categories_subscribe`
--

CREATE TABLE IF NOT EXISTS `categories_subscribe` (
  `id` int(11) unsigned NOT NULL,
  `subscriber_id` int(11) unsigned NOT NULL,
  `category_id` int(11) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories_subscribe`
--

INSERT INTO `categories_subscribe` (`id`, `subscriber_id`, `category_id`) VALUES
(4, 2, 9),
(3, 2, 8);

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
  `email` varchar(55) NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`comment_id`, `article_id`, `parent_id`, `text_comment`, `user_login`, `email`, `avatar`) VALUES
(1, 1, 0, 'sdf', 'Dimon', 'bessalov88@mail.ru', 'default_avatar.jpg'),
(2, 2, 0, 'test commments', 'valik', 'valisf@slfj.ru', 'default_avatar.jpg'),
(3, 2, 0, 'test2', 'Dimon', 'bessalov88@mail.ru', 'default_avatar.jpg'),
(4, 1, 0, 'sdfsf', 'sfsfsf', 'asvava@sfs.ru', 'default_avatar.jpg'),
(5, 1, 0, 'sdf', 'sdf', 'sdfsf@asfs.ru', 'default_avatar.jpg');

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
(1, 1, 'Dimon');

-- --------------------------------------------------------

--
-- Структура таблицы `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `like_id` int(11) unsigned NOT NULL,
  `article_id` int(11) unsigned NOT NULL,
  `count_likes` int(11) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `likes`
--

INSERT INTO `likes` (`like_id`, `article_id`, `count_likes`) VALUES
(1, 1, 1),
(2, 2, 0),
(3, 3, 0),
(4, 4, 0),
(5, 5, 0),
(6, 6, 0),
(7, 7, 0),
(8, 8, 0),
(9, 9, 0),
(10, 10, 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `title`, `category_name`, `href`, `parent_id`, `sorting`) VALUES
(1, 'Главная', '', 'index', 0, 1),
(2, 'Тренировки', '', '', 0, 2),
(3, 'Упражнения', 'exercises', 'categories/id/exercises', 2, 1),
(4, 'Натуральный тренинг', 'natural_training', 'categories/id/natural_training', 2, 2),
(5, 'Системы тренировок', 'training_system', 'categories/id/training_system', 2, 3),
(6, 'Для девушек', 'for_girls', 'categories/id/for_girls', 2, 4),
(7, 'Питание', '', '', 0, 2),
(8, 'Диеты', 'diets', 'categories/id/diets', 7, 1),
(9, 'Дабавки', 'supplements', 'categories/id/supplements', 7, 2),
(10, 'Для похудения', 'weight_loss', 'categories/id/weight_loss', 7, 3),
(11, 'Разное', '', '', 0, 3),
(12, 'Биографии спортсменов', 'weight_loss', 'categories/id/biography', 11, 1),
(13, 'Мотивация', 'motivation', 'categories/id/motivation', 11, 2),
(14, 'Психология', 'psychology', 'categories/id/psychology', 11, 3),
(15, 'Новости', 'news', 'categories/id/news', 11, 4),
(16, 'Калькуляторы', 'calculators', 'categories/id/calculators', 11, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(11) unsigned NOT NULL,
  `email` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `activate` int(1) unsigned NOT NULL DEFAULT '0',
  `code` int(11) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `name`, `activate`, `code`) VALUES
(2, 'bessalov88@mail.ru', 'Dimon', 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) unsigned NOT NULL,
  `title` varchar(55) NOT NULL,
  `href` varchar(55) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `avatar`, `role`) VALUES
(1, 'Dimon', '$2y$10$g4wBg4YlkbuvbcTZLmZxNO7KzZoz3sRS/UeIChEuR0.6w1HSmW.b2', 'bessalov88@mail.ru', 'default_avatar.jpg', 'Administrator'),
(2, 'dvvdd', '$2y$10$7siIBUnnIngUmlBmh2iTfubNrLyyjzjfgnDyWBgM.JKSREwsdc1cW', 'bessalov88@mail.rudf', 'default_avatar.jpg', 'User');

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

--
-- Индексы таблицы `articles_tags`
--
ALTER TABLE `articles_tags`
  ADD PRIMARY KEY (`articles_tags_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `articles_tags`
--
ALTER TABLE `articles_tags`
  MODIFY `articles_tags_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `categories_subscribe`
--
ALTER TABLE `categories_subscribe`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
