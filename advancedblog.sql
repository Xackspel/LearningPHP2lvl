-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Бер 02 2019 р., 17:25
-- Версія сервера: 8.0.12
-- Версія PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `advancedblog`
--

-- --------------------------------------------------------

--
-- Структура таблиці `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `post_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `post_text` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `post_image` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `posts`
--

INSERT INTO `posts` (`post_id`, `post_name`, `post_description`, `post_text`, `author_id`, `post_image`) VALUES
(1, 'First step in learning PHP.', 'PHP is a programming language used to enhance websites built with HTML.', 'It is server-side code that can add a log-in screen, CAPTCHA code or survey to your website, redirect visitors to other pages or construct a calendar.\r\n\r\nThe Essentials for Learning PHP\r\nLearning a new language—programming or otherwise—can be a bit overwhelming. Many people don\'t know where to start and give up before they begin. Learning PHP is not as overwhelming as it might seem. Just take it one step at a time, and before you know it, you\'ll be off and running.\r\n\r\nBasic Knowledge\r\nBefore you start learning PHP you need a basic understanding of HTML. If you already have it, great. If not there are plenty of HTML articles and tutorials to help you. When you know both languages, you can switch between PHP and HTML right in the same document. You can even run PHP from an HTML file.\r\n\r\nTools\r\nWhen creating PHP pages, you can use the same software you use to create your HTML pages. Any plain text editor will do. You also need an FTP client to transfer files from your computer to your web host. If you already have an HTML website, you most likely already use an FTP program.', 1, ''),
(2, 'Second step in learning PHP.', 'A Roadmap for PHP Learning.', 'One of the really great things about PHP is it’s got a super-low barrier to entry, but a nice path towards gradual improvement as you get more experience and knowledge.\r\n\r\nUnfortunately, for a new developer it can be hard to know what that path is. If you lack the knowledge, terminology, and overall goal then it’s difficult to begin that journey.\r\n\r\nI’m not going to say for a second that you should always be building enterprise OOP systems in advanced frameworks… you can start really basic and then enhance.\r\n\r\nSo that is what I’m going to do. Start with some entry level code, and step through it a bit at a time. For the most part this is actually more or less my own career path. I hope to prevent people getting stuck in the same places I did.', 1, '');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
