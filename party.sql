-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2015 年 06 月 10 日 18:59
-- 伺服器版本: 5.6.20
-- PHP 版本： 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `party`
--

-- --------------------------------------------------------

--
-- 資料表結構 `abouts`
--

CREATE TABLE IF NOT EXISTS `abouts` (
`id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 資料表結構 `background`
--

CREATE TABLE IF NOT EXISTS `background` (
`id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 資料表的匯出資料 `background`
--

INSERT INTO `background` (`id`, `path`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- 資料表結構 `companys`
--

CREATE TABLE IF NOT EXISTS `companys` (
`id` int(11) NOT NULL,
  `content` text NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 資料表的匯出資料 `companys`
--

INSERT INTO `companys` (`id`, `content`, `title`) VALUES
(1, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>ＸＤＤ</p>\r\n</body>\r\n</html>', '公司簡介');

-- --------------------------------------------------------

--
-- 資料表結構 `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 資料表的匯出資料 `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `content`) VALUES
(1, '聯絡我們', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>WoW</p>\r\n</body>\r\n</html>');

-- --------------------------------------------------------

--
-- 資料表結構 `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
`id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 資料表的匯出資料 `footer`
--

INSERT INTO `footer` (`id`, `content`) VALUES
(1, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Amamain</p>\r\n<p>asd</p>\r\n</body>\r\n</html>');

-- --------------------------------------------------------

--
-- 資料表結構 `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
`id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 資料表的匯出資料 `logo`
--

INSERT INTO `logo` (`id`, `path`) VALUES
(1, 'uploads/03b6a47f949f450e3438f5754249a007.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `page_image`
--

CREATE TABLE IF NOT EXISTS `page_image` (
`img_id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 資料表的匯出資料 `page_image`
--

INSERT INTO `page_image` (`img_id`, `path`, `sub_id`) VALUES
(1, 'uploads/87efcd9696f8526639a90aefc356c918.jpg', 5);

-- --------------------------------------------------------

--
-- 資料表結構 `qandas`
--

CREATE TABLE IF NOT EXISTS `qandas` (
`id` int(11) NOT NULL,
  `content` text NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 資料表的匯出資料 `qandas`
--

INSERT INTO `qandas` (`id`, `content`, `title`) VALUES
(1, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>test</p>\r\n<p>&nbsp;</p>\r\n</body>\r\n</html>', '問與答');

-- --------------------------------------------------------

--
-- 資料表結構 `sub_page`
--

CREATE TABLE IF NOT EXISTS `sub_page` (
`sub_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 資料表的匯出資料 `sub_page`
--

INSERT INTO `sub_page` (`sub_id`, `page_id`, `title`, `path`) VALUES
(3, 2, 'testadasd', 'uploads/072dc464a5d91014fe9f0b318193e51b.jpg'),
(6, 3, '', 'uploads/0a2e862fcdb4d26598868548aa77d593.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
`id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 資料表的匯出資料 `uploads`
--

INSERT INTO `uploads` (`id`, `path`) VALUES
(1, 'http://localhost/party/uploads/fa7d51494d91081ee871e0873339a9c7.jpeg'),
(2, 'http://localhost/party/uploads/ec93a026eb5ddf9ed5c7f8b99b73c093.jpeg'),
(3, 'http://localhost/party/uploads/aed8a47196493f8d285488625f3eae87.jpeg'),
(4, 'http://localhost/party/uploads/7436fb59b1d35a98a0be7b95a20f0bac.jpeg'),
(5, 'http://localhost/party/uploads/561d335c037b1ae3c5ddc75d7cc1a88b.jpeg'),
(6, 'http://localhost/party/uploads/98af6ea68b7d0b7695894bf4e2e402e8.jpeg'),
(7, 'http://localhost/party/uploads/1f3ab0009fc9e90fe8cbad892ec74f8c.jpeg'),
(8, 'http://localhost/party/uploads/ec10dbe8c491ff2ddace29c789ed7c82.jpeg'),
(9, 'http://localhost/party/uploads/108bcd4c6dd4c4350d8cdb58d35cb8ff.jpeg'),
(10, 'http://localhost/party/uploads/0a14207e3067dcc7db8925101dda86f0.jpg'),
(11, 'http://localhost/party/uploads/572c88f809341b2537bccb1dd03f05c7.jpg'),
(12, 'http://localhost/party/uploads/9b11129bf2f69a91410fd86121a458b7.jpg'),
(13, 'http://localhost/party/uploads/37704ac82acfb4da573302dea5463b48.docx');

-- --------------------------------------------------------

--
-- 資料表結構 `welcome_picture`
--

CREATE TABLE IF NOT EXISTS `welcome_picture` (
`id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 資料表的匯出資料 `welcome_picture`
--

INSERT INTO `welcome_picture` (`id`, `path`) VALUES
(1, 'uploads/db2a3b5b557599987d068180102fa113.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `welcome_slide`
--

CREATE TABLE IF NOT EXISTS `welcome_slide` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 資料表的匯出資料 `welcome_slide`
--

INSERT INTO `welcome_slide` (`id`, `title`, `path`, `url`) VALUES
(1, '公司簡介', 'uploads/c6a85e6c46d90d1113c2ed94c37281b3.jpg', ''),
(2, '派對懶人包', 'uploads/5c5654267dbebd1bdc9b0e65e83dc8a3.jpg', ''),
(3, '婚禮佈置', 'uploads/61b891fd56787ce8bfb9d7105ed1aabf.jpg', ''),
(4, '精緻美食', 'uploads/d3b00d7e2da32b14bef5a4efbdb7a6ac.jpg', ''),
(5, '各式活動規劃', 'uploads/3e6d268b50e2b90e724c8e3289ead5fe.jpg', ''),
(6, 'Q & A', 'uploads/a33fbce67fbe761dfb847882b9f91067.jpg', ''),
(7, '聯絡我們', 'uploads/46a1b3947d561d0a9a6893d1e49bf380.jpg', '');

-- --------------------------------------------------------

--
-- 資料表結構 `welcome_text`
--

CREATE TABLE IF NOT EXISTS `welcome_text` (
`id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 資料表的匯出資料 `welcome_text`
--

INSERT INTO `welcome_text` (`id`, `content`) VALUES
(1, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style="font-size: 84pt; font-family: ''comic sans ms'', sans-serif;">sdfsdsa</span></p>\r\n</body>\r\n</html>');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `abouts`
--
ALTER TABLE `abouts`
 ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `background`
--
ALTER TABLE `background`
 ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `companys`
--
ALTER TABLE `companys`
 ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `contacts`
--
ALTER TABLE `contacts`
 ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `footer`
--
ALTER TABLE `footer`
 ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `logo`
--
ALTER TABLE `logo`
 ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `page_image`
--
ALTER TABLE `page_image`
 ADD PRIMARY KEY (`img_id`);

--
-- 資料表索引 `qandas`
--
ALTER TABLE `qandas`
 ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `sub_page`
--
ALTER TABLE `sub_page`
 ADD PRIMARY KEY (`sub_id`);

--
-- 資料表索引 `uploads`
--
ALTER TABLE `uploads`
 ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `welcome_picture`
--
ALTER TABLE `welcome_picture`
 ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `welcome_slide`
--
ALTER TABLE `welcome_slide`
 ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `welcome_text`
--
ALTER TABLE `welcome_text`
 ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `abouts`
--
ALTER TABLE `abouts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `background`
--
ALTER TABLE `background`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `companys`
--
ALTER TABLE `companys`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `contacts`
--
ALTER TABLE `contacts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `footer`
--
ALTER TABLE `footer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `logo`
--
ALTER TABLE `logo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `page_image`
--
ALTER TABLE `page_image`
MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `qandas`
--
ALTER TABLE `qandas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `sub_page`
--
ALTER TABLE `sub_page`
MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- 使用資料表 AUTO_INCREMENT `uploads`
--
ALTER TABLE `uploads`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- 使用資料表 AUTO_INCREMENT `welcome_picture`
--
ALTER TABLE `welcome_picture`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `welcome_slide`
--
ALTER TABLE `welcome_slide`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- 使用資料表 AUTO_INCREMENT `welcome_text`
--
ALTER TABLE `welcome_text`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
