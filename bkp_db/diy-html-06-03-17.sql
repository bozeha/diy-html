-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2017 at 01:22 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

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
(27, 'charger', 'שנאי  12v/5v', 'שנאי  12v/5v', 'images/accessories/charger.png'),
(29, 'dispenser cup', 'כוס חד פעמית', 'כוס חד פעמית סטנדרטית', 'images/accessories/cup.png'),
(30, 'mark pen', 'עט סימון ', 'עט או טוש סימון מומלץ לא מחיק , טוש סימון לדיסקים ', 'images/accessories/pen.png'),
(31, 'capacitor', 'קבל', 'קבל ', 'images/accessories/capacitor.png'),
(35, 'magnet', 'מגנט', 'מגנט קטן ', 'images/accessories/small_magnet.png'),
(36, 'electric wire', 'חוט חשמל', 'חוט חשמל', 'images/accessories/electric_wire.png'),
(37, 'aa battery', 'סוללות 1.5v AA', 'סוללות 1.5v AA', 'images/accessories/aa_battery.png');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=164 ;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`id`, `subject`, `user`, `guide_key`, `guide_title`, `guide_title_en`, `guide_subtitle`, `guide_accessories_array`, `guide_text_array`, `guide_images_array`, `guide_videos_array`, `guide_textarea_array`, `type_of_steps_array`) VALUES
(132, '1', '1', 'cup_dispenser', 'מדריך ליצירת מתקן לכוסות חד פעמיות', 'cup dispenser', 'סרטון המראה בצורה פשוטה איך יוצרים מתקן כוסות חד&#39;פ שימושי לבית אול לכל מקום ', '[["1,5,21,29"]]', '[]', '["images/guides/cup_dispenser/cup_dispenser_0.jpg","images/guides/cup_dispenser/cup_dispenser_0.jpg"]', '["40umwfGijYU?autoplay=0&loop=0&controls=1&rel=0"]', 'W10=', '["youtube"]'),
(138, '6', '1', 'install_kodi_17', 'התקנת קודי 17 למחשב פלוס התקנת עברית ותוסף fusion', 'install kodi 17', 'התקנת קודי גירסא 17 הסברים צעד אחר צעד, והתקנה של התוסף fusion המוסיף את ההרחבות הטובות ביותר', '[[""]]', '["נפעיל את הקובץ שירד, בהודעה שתקפוץ לחצו yes","לחצו Next","לחצו I Agree","לחצו Next","לחצו install","תסמנו את הריבוע ב v ואז לחצו על finish","כשקודי יעלה תקפוץ הודעת אבטחה של וינדוס יש לאשר אותה Allow access","נתחיל בלהגדיר שפה , יש ללחוץ על הגלגל שיניים למעלה ","כעת יש לבחור Interface settings","בצד שמאל נבחר Skin ובצד ימין נבחר Fonts","בחלון שיפתח נבחר Arial based","כעת נבחר בצד שמאל Regional ומבצד ימין נבחר Language","בחלון שיפתח יופיע רשימת שפות, יש לסמן Hebrew","כעת נגדיר את שפת המקלדת, בצד שמאל נבחר איזורי ומצד ימין נבחר מערכי מקלדת","בחלון שנפתח נסמן בנוסף לאנגלית את Hebrew QWERTY","כעת שהעברית מותקנת נתחיל בהתקנת ההרחבות, קודם נחזור אחורה למסך הראשי על ידי לחיצה ב backspace ונבחר שוב בגלגל שיניים למעלה ","כעת נבחר מנהל קבצים","יש ללחוץ פעמיים על הוספת מקור","בחלון שנפתח נלחץ על <ללא> פעמיים ","בחלון שנפתח נוסיף את הלינק  http://fusion.tvaddons.ag/ ונלחץ על אישור","כעת יש ללחוץ על הרובריקה הריקה ונכתוב את שם התוסף fusion ואז נלחץ על אישור","כעת נחזור למסך הראשי ונבחר בהרחבות ","בשלב זה נבחר בקופסא בצד השמאלי למעלה ","נבחר התקנה מקובץ zip","תקפוץ לנו הודעה של אבטחה נבחר בהגדרות ","נלחץ על מקורות לא ידועים ונפעיל אותו ","תקפוץ לנו מיד הודעה ונבחר כן ","כעת נחזור צעד אחד אחורה עי backspace ונגיע שוב להתקנה מקובץ zip נבחר שוב באפשרות זו","יפתח חלון ונבחר בהרחבה שיצרנו fusion","יפתחו שלוש אפשרויות נבחר ב kodi-repos","נבחר ב english ","מהרשימה שתפתח נבחר ב repsitory.xbmchub-1.0.7.zip","כעת נבחר התקנה ממאגר הרחבות","נבחר TVADDONS.AG add-on Repository","נבחר הרחבת תוכנות","נבחר indigo","ואז נבחר התקנת הרחבה ","נחזור לדף הראשי עי backgspace ונבחר בהרחבות בצד ימין מתחת להרחבות וידאו נבחר ב indigo","נבחר config Wizard","בחלון שיפתח נבחר install","כשתסתיים ההתקנה יקפוץ חלון נלחץ אישור וקודי יסגר ","נפעיל את קודי שוב נעמוד על הרחבות ונראה את רשימת ההרחבות ","מזל טוב ... עכשו רק נותר לבחור סרט או סדרה ולהתחיל לצפות ... "]', '["images/guides/install_kodi_17/install_kodi_17_0.jpg","images/guides/install_kodi_17/install_kodi_17_1.png","images/guides/install_kodi_17/install_kodi_17_2.png","images/guides/install_kodi_17/install_kodi_17_3.png","images/guides/install_kodi_17/install_kodi_17_4.png","images/guides/install_kodi_17/install_kodi_17_5.png","images/guides/install_kodi_17/install_kodi_17_6.png","images/guides/install_kodi_17/install_kodi_17_7.png","images/guides/install_kodi_17/install_kodi_17_8.png","images/guides/install_kodi_17/install_kodi_17_9.png","images/guides/install_kodi_17/install_kodi_17_10.png","images/guides/install_kodi_17/install_kodi_17_11.png","images/guides/install_kodi_17/install_kodi_17_12.png","images/guides/install_kodi_17/install_kodi_17_13.png","images/guides/install_kodi_17/install_kodi_17_14.png","images/guides/install_kodi_17/install_kodi_17_15.png","images/guides/install_kodi_17/install_kodi_17_16.png","images/guides/install_kodi_17/install_kodi_17_17.png","images/guides/install_kodi_17/install_kodi_17_18.png","images/guides/install_kodi_17/install_kodi_17_19.png","images/guides/install_kodi_17/install_kodi_17_20.png","images/guides/install_kodi_17/install_kodi_17_21.png","images/guides/install_kodi_17/install_kodi_17_22.png","images/guides/install_kodi_17/install_kodi_17_23.png","images/guides/install_kodi_17/install_kodi_17_24.png","images/guides/install_kodi_17/install_kodi_17_25.png","images/guides/install_kodi_17/install_kodi_17_26.png","images/guides/install_kodi_17/install_kodi_17_27.png","images/guides/install_kodi_17/install_kodi_17_28.png","images/guides/install_kodi_17/install_kodi_17_29.png","images/guides/install_kodi_17/install_kodi_17_30.png","images/guides/install_kodi_17/install_kodi_17_31.png","images/guides/install_kodi_17/install_kodi_17_32.png","images/guides/install_kodi_17/install_kodi_17_33.png","images/guides/install_kodi_17/install_kodi_17_34.png","images/guides/install_kodi_17/install_kodi_17_35.png","images/guides/install_kodi_17/install_kodi_17_36.png","images/guides/install_kodi_17/install_kodi_17_37.png","images/guides/install_kodi_17/install_kodi_17_38.png","images/guides/install_kodi_17/install_kodi_17_39.png","images/guides/install_kodi_17/install_kodi_17_40.png","images/guides/install_kodi_17/install_kodi_17_41.png","images/guides/install_kodi_17/install_kodi_17_42.png","images/guides/install_kodi_17/install_kodi_17_43.jpg"]', '[""]', 'WyI8cD5cdTA1ZTBcdTA1ZWFcdTA1ZDdcdTA1ZDlcdTA1ZGMgXHUwNWQxXHUwNWQ0XHUwNWQ1XHUwNWU4XHUwNWQzXHUwNWVhIFx1MDVlN1x1MDVkNVx1MDVkM1x1MDVkOSBcdTA1ZDJcdTA1ZDlcdTA1ZThcdTA1ZTFcdTA1ZDAgMTcgXHUwNWRjXHUwNWQ1XHUwNWUwXHUwNWQ5XHUwNWQzXHUwNWQ1XHUwNWUxJm5ic3A7PFwvcD5cclxuXHJcbjxwPlx1MDVkY1x1MDVkNFx1MDVkNVx1MDVlOFx1MDVkM1x1MDVkNCBcdTA1ZGNcdTA1ZDdcdTA1ZTUgPGEgaHJlZj1cImh0dHA6XC9cL21pcnJvcnMua29kaS50dlwvcmVsZWFzZXNcL3dpbjMyXC9rb2RpLTE3LjAtS3J5cHRvbi5leGVcIj5cdTA1ZGJcdTA1ZDBcdTA1ZGYmbmJzcDs8XC9hPjxcL3A+XHJcblxyXG48cD4mbmJzcDs8XC9wPlxyXG4iXQ==', '["textarea","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img"]'),
(137, '3', '1', 'electronic_products', 'תיקון כמעט כל מוצר אלקטרוני בקלות', 'electronic products', 'ניתן לתקן כמעט כל מוצר אלקטרוני בקלות ולחסוך מאות ואלפי שקלים ... ', '[["18,15,31"]]', '["בתור התחלה הסביר בקצרה מה זה קבל, זה רכיב אלקטרוני האוגר אנרגיה בדומה במעט לסוללה. אבל כל זה לא רלונטי, אלו מספר דוגמאות ותמונות של קבלים שנראים קצת שונה,","אז מה זה רלונטי אלינו .... , אז ככה כמעט כל מוצר אלקטרוני בבית מכיל קבלים מסוגים שונים והקטע המענין שחשוב לנו זה ש 90% המהוצרים שמתקלקים בבית כמו מסכי מחשב, טלויזיות ממירים ראוטרים וכו .. מפסיקים לעבוד ויוצרים תקלות מסוגים שונם רק בגלל קבל אחד או שניים שנשרפו. ניתן די בקלות לזהות קבל שרוף . 1. נפוח 2. מפוצץ 3.נזילה","על מנת להחליף את הקבל המקולקל צריך ידע בסיסי בהלחמה, את הקבל ניתן לקנות מחנות אלקטרוניקה / להזמין מאיי ביי / או מה שאני עושה לחפש במוצרי חשמל ישנים שאין בהם צורך. על מנת לדעת איזה סוג קבל צריך יש להסתכל על שני פרמטרים, הראשון זה מתח העבודה לדוגמה 25V כמו שמופיע בתמונה , ופרמטר שני זה הקיבולת המסומן ב uF במקרה של התמונה זה 4700uF ","אחרי שהשגנו את הקבל הנחוץ יש להלחים אותו במקום הקבל השרוף שנמצא על המוצר האלקטרוני שאנו רוצים לתקן .. חשבו לשים לב להלחים אותו כמו הקבל הישן הצד השלילי והחיובי במקום הנכון . ניתן לזהות את הצד השלילי עפ הסימון של קווים בצד של הקבל כמו שמפיע בתמונה","מקווה שעבד וחסכתי לכם כסף ....."]', '["images/guides/electronic_products/electronic_products_0.jpg","images/guides/electronic_products/electronic_products_1.jpg","images/guides/electronic_products/electronic_products_2.jpg","images/guides/electronic_products/electronic_products_3.gif","images/guides/electronic_products/electronic_products_4.gif","images/guides/electronic_products/electronic_products_5.jpg"]', 'null', 'W10=', '["text_and_img","text_and_img","text_and_img","text_and_img","text_and_img"]'),
(139, '2', '1', 'tt', 'TTTTTT', 'TT', 'TTTTTTT', '[[""]]', '["AAAAAAAAAAA"]', '["images/guides/tt/tt_0.jpg","images/guides/tt/tt_1.jpg"]', '["","","",""]', 'WyI8cD5BU0RGIEFTRCBGQVNERiBBU0RGIEFTREYgQVNEPFwvcD5cclxuXHJcbjxwPiZuYnNwOzxcL3A+XHJcbiJd', '["textarea","text_and_img","youtube","youtube","youtube","youtube"]'),
(163, '3', '1', 'cool_stuff_with_battery_and_magnet', 'דברים מגניבים לעשות עם סוללה ומגנט', 'COOL STUFF WITH BATTERY AND MAGNET', 'דברים מגניבים לעשות עם סוללה ומגנט שקל מאוד לעשות, כמו סליל מסתובב או לב מסתובב', '[["35,37"]]', '[]', '["images/guides/cool_stuff_with_battery_and_magnet/cool_stuff_with_battery_and_magnet_0.jpg"]', '["iG0pzGcy4xU?autoplay=0&loop=0&controls=1&rel=0","VhaYLnjkf1E?autoplay=0&loop=0&controls=1&rel=0"]', 'W10=', '["youtube","youtube"]');

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
