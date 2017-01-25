-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2017 at 10:17 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `access_key`, `access_name`, `access_disc`, `access_img`) VALUES
(1, 'chinese_knife', 'סכין יפני', 'סכין יפנין לחיתוך', 'images/accessories/chinese_knife.jpg'),
(2, 'driller', 'מקדחה', 'מקדחה חשמלית', 'images/accessories/driller.png'),
(3, 'glue', 'דבק מגע', 'דבק מגע, דבק עץ', 'images/accessories/glue.jpg'),
(4, 'hot_glue_gun', 'אקדח דבק חם', 'אקדח דבק חם', 'images/accessories/hot_glue_gun.png'),
(5, 'scissors', 'מיספרים', 'מיספרי חיתוך', 'images/accessories/scissors.png'),
(6, 'screws', 'ברגים', 'ברגים ', 'images/accessories/screws.png'),
(19, 'saw', 'מסור גקסון', 'מסור גקסון', 'images/accessories/saw.JPG'),
(18, 'solder', 'בדיל', 'בדיל להלחמה', 'images/accessories/f248737e-7d01-49a8-bcc9-eda546a5575d_400.jpg'),
(20, 'empty paper roll', 'גליל נייר ריק', 'גליל נייר ריק - גליל נייר נקיון ', 'images/accessories/one-piece-empty-toilet-roll-white-30030796.jpg'),
(15, 'solder', 'מלחם', 'מלחם להלחמת בדיל', 'images/accessories/solder.jpg');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`id`, `subject`, `user`, `guide_key`, `guide_title`, `guide_title_en`, `guide_subtitle`, `guide_accessories_array`, `guide_text_array`, `guide_images_array`, `guide_videos_array`) VALUES
(55, '1', '1', 'ddd', 'בדיקה בדיהק tests TEST', 'ddd', 'בלה בלה בלה ', '[[""]]', '["אאאאאאאאאאא אאאאאאאאאאאא","בבבבב בבבבבבבבבב"]', '["../images/guides/ddd/solder.jpg","../images/guides/ddd/scissors.png"]', '["0"]'),
(50, '1', '1', 'finel_gudie_la_bla_', 'נסיון למדריך ', 'FINEL GUDIE LA BLA ', 'תת כותרת', '[["2,3"]]', '["אאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאא"]', '["../images/guides/finel_gudie_la_bla_/glue.jpg"]', '["0"]'),
(51, '1', '1', 'finel_gudie_la_bla_', 'נסיון למדריך ', 'FINEL GUDIE LA BLA ', 'תת כותרת', '[["2,3"]]', '["אאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאאא"]', '["../images/guides/finel_gudie_la_bla_/glue.jpg"]', '["0"]'),
(52, '1', '1', 'dddd', 'גשדגכדגכ דגכ שדגכ ', 'dddd', ' דגכ שדגכ שדגכ שגדכ ', '[["3"]]', '["גגגגגגגגג גגגגגגגגגגגגגגגג"]', '["../images/guides/dddd/"]', '["0"]'),
(53, '1', '1', 'ddd', 'בדיקה בדיהק tests TEST', 'ddd', 'בלה בלה בלה ', '[[""]]', '["אאאאאאאאאאא אאאאאאאאאאאא","בבבבב בבבבבבבבבב"]', '["../images/guides/ddd/solder.jpg","../images/guides/ddd/scissors.png"]', '["0"]'),
(54, '1', '1', 'ddd', 'בדיקה בדיהק tests TEST', 'ddd', 'בלה בלה בלה ', '[[""]]', '["אאאאאאאאאאא אאאאאאאאאאאא","בבבבב בבבבבבבבבב"]', '["../images/guides/ddd/solder.jpg","../images/guides/ddd/scissors.png"]', '["0"]'),
(49, '1', '1', 'finel_gudie_la_bla_', 'נסיון למדריך ', 'FINEL GUDIE LA BLA ', 'תת כותרת', '[["2,3"]]', '["u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0"]', '["../images/guides/finel_gudie_la_bla_/glue.jpg"]', '["0"]'),
(48, '1', '1', 'finel_gudie_la_bla_', 'נסיון למדריך ', 'FINEL GUDIE LA BLA ', 'תת כותרת', '[["2,3"]]', '["u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0"]', '["../images/guides/finel_gudie_la_bla_/glue.jpg"]', '["0"]'),
(47, '1', '1', 'finel_gudie_la_bla_', 'נסיון למדריך ', 'FINEL GUDIE LA BLA ', 'תת כותרת', '[["2,3"]]', '["u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0"]', '["../images/guides/finel_gudie_la_bla_/glue.jpg"]', '["0"]'),
(46, '1', '1', 'finel_gudie_la_bla_', 'נסיון למדריך ', 'FINEL GUDIE LA BLA ', 'תת כותרת', '[["2,3"]]', '["u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0"]', '["../images/guides/finel_gudie_la_bla_/glue.jpg"]', '["0"]'),
(45, '1', '1', 'finel_gudie_la_bla_', 'נסיון למדריך ', 'FINEL GUDIE LA BLA ', 'תת כותרת', '[["2,3"]]', '["u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0"]', '["../images/guides/finel_gudie_la_bla_/glue.jpg"]', '["0"]'),
(44, '1', '1', 'finel_gudie_la_bla_', 'נסיון למדריך ', 'FINEL GUDIE LA BLA ', 'תת כותרת', '[["2,3"]]', '["u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0"]', '["../images/guides/finel_gudie_la_bla_/glue.jpg"]', '["0"]'),
(42, '1', '1', 'finel_gudie_la_bla_', 'נסיון למדריך ', 'FINEL GUDIE LA BLA ', 'בלה בלה בלה דגכ שדגכ שדגכ ', '[["1,2,3,4,20"]]', '["u05e9u05d3u05d2u05db u05e9u05d3u05d2u05db u05e9u05d3u05d2u05db u05e9u05d3u05d2u05db u05e9u05d3u05d2u05db u05e9u05d3u05d2u05db u05e9u05d3u05d2u05db u05e9u05d3u05d2u05db "]', '["../images/guides/finel_gudie_la_bla_/glue.jpg"]', '["0"]'),
(43, '1', '1', 'finel_gudie_la_bla_', 'נסיון למדריך ', 'FINEL GUDIE LA BLA ', 'תת כותרת', '[["2,3"]]', '["u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0u05d0"]', '["../images/guides/finel_gudie_la_bla_/glue.jpg"]', '["0"]');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `key_name`, `img`, `title`, `sub_title`) VALUES
(1, 'Kitchen', 'images/subjects/kitchen.jpg', 'מטבח', 'צור בעצמך מוצרים למטבח'),
(2, 'garden', 'images/subjects/garden.jpg', 'גינה', 'צור בעמצך לגינה'),
(3, 'electric', 'images/subjects/electric.jpg', 'מוצרים אלקטרונים', 'עשה ותקן בעצמך מוצרים אלקטרונים בבית');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `nickname` text NOT NULL,
  `email` text NOT NULL,
  `country` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `nickname`, `email`, `country`) VALUES
(1, 'boaz', 'h', 'boze', 'bozeha@gmail.com', 'israel'),
(2, 'limor', 'h', 'lim', 'lim@gmail.com', 'israel');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
