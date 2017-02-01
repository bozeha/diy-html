-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2017 at 08:05 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diy-html`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE IF NOT EXISTS `accessories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `access_key` text NOT NULL,
  `access_name` text NOT NULL,
  `access_disc` text NOT NULL,
  `access_img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `access_key`, `access_name`, `access_disc`, `access_img`) VALUES
(1, 'chinese_knife', 'סכין יפני', 'סכין יפנין לחיתוך', 'images/accessories/chinese_knife.png'),
(2, 'driller', 'מקדחה', 'מקדחה חשמלית', 'images/accessories/driller.png'),
(3, 'glue', 'דבק מגע', 'דבק מגע, דבק עץ', 'images/accessories/glue.png'),
(4, 'hot_glue_gun', 'אקדח דבק חם', 'אקדח דבק חם', 'images/accessories/gun_glue.png'),
(5, 'scissors', 'מיספרים', 'מיספרי חיתוך', 'images/accessories/scissors.png'),
(6, 'screws', 'ברגים', 'ברגים ', 'images/accessories/screws.png'),
(19, 'saw', 'מסור גקסון', 'מסור גקסון', 'images/accessories/saw.png'),
(18, 'solder', 'בדיל', 'בדיל להלחמה', 'images/accessories/soldering_wire.png'),
(20, 'empty paper roll', 'גליל נייר ריק', 'גליל נייר ריק - גליל נייר נקיון ', 'images/accessories/paper_roll.png'),
(15, 'solder', 'מלחם', 'מלחם להלחמת בדיל', 'images/accessories/solder.png'),
(21, 'buttol', 'בקבוק ליטר וחצי ריק', 'בקבוק ליטר וחצי ריק', 'images/accessories/bottle.png'),
(22, 'staple gun', 'אקדח סיכות', 'אקדח סיכות עם סיכות', 'images/accessories/staple_gun.png'),
(23, 'aluminum paper', 'נייר אלומיניום', 'נייר אלומיניום', 'images/accessories/aluminum_paper.png'),
(24, 'matches', 'גפרורים', 'גפרורים', 'images/accessories/matches.png'),
(25, 'color_spray', 'ספריי צבע', 'ספריי צבע', 'images/accessories/color_spray.png'),
(26, '3 sec glue', 'דבק 3 שניות', 'דבק 3 שניות', 'images/accessories/3sec.png'),
(27, 'charger', 'שנאי  12v/5v', 'שנאי  12v/5v', 'images/accessories/charger.png');

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE IF NOT EXISTS `guides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` text NOT NULL,
  `user` text NOT NULL,
  `guide_key` text NOT NULL,
  `guide_title` text NOT NULL,
  `guide_title_en` text NOT NULL,
  `guide_subtitle` text NOT NULL,
  `guide_accessories_array` text NOT NULL,
  `guide_text_array` text NOT NULL,
  `guide_images_array` text NOT NULL,
  `guide_videos_array` text NOT NULL,
  `guide_textarea_array` text NOT NULL,
  `type_of_steps_array` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=132 ;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`id`, `subject`, `user`, `guide_key`, `guide_title`, `guide_title_en`, `guide_subtitle`, `guide_accessories_array`, `guide_text_array`, `guide_images_array`, `guide_videos_array`, `guide_textarea_array`, `type_of_steps_array`) VALUES
(126, '1', '1', 'youtube_222_', 'סרטון יו טיוב עם סטפ אחד ', 'youtube 222 ', 'בלב לבלבלב לבל', '[["1,3"]]', '["שלב ראשון בלב בלב בלבה "]', '["images/guides/youtube_222_/youtube_222__0.jpg","images/guides/youtube_222_/youtube_222__1.jpg"]', '[["cugBUROdXXQ?autoplay=1?loop=0?controls=0?&rel=1"]]', 'W10=', '["text_and_img","youtube"]'),
(127, '1', '1', 'youtube_', 'שלושה שלבים ', 'youtube ', 'שלושה שליבים בלישבלי שלי לי שלי ש', '[["20,15"]]', '["שלב שני תמונה וטקס"]', '["images/guides/youtube_/youtube__0.png","images/guides/youtube_/youtube__1.jpg"]', '[["cugBUROdXXQ?autoplay=1?loop=0?controls=0?&rel=1"]]', 'WyI8cD4mbmJzcDs8XC9wPlxyXG5cclxuPHA+PHU+PHNwYW4gc3R5bGU9XCJjb2xvcjojZjFjNDBmXCI+PHNwYW4gc3R5bGU9XCJmb250LXNpemU6MThweFwiPlx1MDVkYlx1MDVkNVx1MDVlYVx1MDVkMVx1MDVlOFx1MDVlYSBcdTA1ZDFcdTA1ZGNcdTA1ZDQgXHUwNWQxXHUwNWRjXHUwNWQ0IFx1MDVkMVx1MDVkY1x1MDVkNCZuYnNwOzxcL3NwYW4+PFwvc3Bhbj48XC91PjxcL3A+XHJcblxyXG48cD4mbmJzcDs8XC9wPlxyXG5cclxuPHA+PHNwYW4gc3R5bGU9XCJjb2xvcjojMmVjYzcxXCI+XHUwNWU3XHUwNWQ4XHUwNWUyIFx1MDVkOFx1MDVlN1x1MDVlMVx1MDVkOCBcdTA1ZTZcdTA1ZDFcdTA1ZTJcdTA1ZDVcdTA1ZTBcdTA1ZDkgXHUwNWQxPFwvc3Bhbj5cdTA1ZGNcdTA1ZDQgXHUwNWQxXHUwNWRjXHUwNWQ0IDxzcGFuIHN0eWxlPVwiY29sb3I6IzJlY2M3MVwiPlx1MDVkMVx1MDVkY1x1MDVkNCBcdTA1ZDFcdTA1ZGNcdTA1ZDQ8XC9zcGFuPjxcL3A+XHJcblxyXG48cD4mbmJzcDs8XC9wPlxyXG5cclxuPHA+PHNwYW4gc3R5bGU9XCJjb2xvcjojMmVjYzcxXCI+Jm5ic3A7PFwvc3Bhbj48XC9wPlxyXG4iXQ==', '["youtube","text_and_img","textarea"]'),
(130, '1', '1', '234234234234', '324324234', '234234234234', '234324324', '[["20,15"]]', '[]', '["images/guides/234234234234/234234234234_0.jpg"]', '["cugBUROdXXQ?autoplay=1&loop=1&controls=0&rel=0"]', 'W10=', '["youtube"]'),
(131, '1', '1', '3_youtube_', 'מדריך 3 סרטוני וידיאו ', '3 youtube ', 'בלשה שבלשדגה שדגל שדגכ ', '[[""]]', '["קטע טקסט ותמונה בלה בלה בלה בלה "]', '["images/guides/3_youtube_/3_youtube__0.png","images/guides/3_youtube_/3_youtube__1.png"]', '["1thpW1Z93ek?autoplay=1&loop=1&controls=0&rel=0","7ElNrveQBVI?autoplay=0&loop=0&controls=1&rel=0","XcP463KV8PQ?autoplay=0&loop=0&controls=0&rel=1"]', 'W10=', '["youtube","youtube","youtube","text_and_img"]');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key_name` text NOT NULL,
  `img` text NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `key_name`, `img`, `title`, `sub_title`) VALUES
(1, 'Kitchen', 'images/subjects/kitchen.jpg', 'מטבח', 'צור בעצמך מוצרים למטבח'),
(2, 'garden', 'images/subjects/garden.jpg', 'גינה', 'צור בעמצך לגינה'),
(3, 'electric', 'images/subjects/electric.jpg', 'מוצרים אלקטרונים', 'עשה ותקן בעצמך מוצרים אלקטרונים בבית'),
(6, 'kodi', 'images/subjects/kodi.jpg', 'קודי', 'מדריכים וכלים להתקנת קודי');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `nickname` text NOT NULL,
  `password` text NOT NULL,
  `type` text NOT NULL,
  `email` text NOT NULL,
  `country` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `nickname`, `password`, `type`, `email`, `country`) VALUES
(1, 'boaz', 'h', 'boze', '123', 'admin', 'bozeha@gmail.com', 'israel');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
