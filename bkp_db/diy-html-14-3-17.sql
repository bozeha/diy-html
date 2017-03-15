-- phpMyAdmin SQL Dump
-- version 2.8.0.1
-- http://www.phpmyadmin.net
-- 
-- Host: custsql-ipg64.eigbox.net
-- Generation Time: Mar 14, 2017 at 05:09 PM
-- Server version: 5.6.32
-- PHP Version: 4.4.9
-- 
-- Database: `diyhtml`
-- 
CREATE DATABASE `diyhtml` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `diyhtml`;

-- --------------------------------------------------------

-- 
-- Table structure for table `accessories`
-- 

CREATE TABLE `accessories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `access_key` text NOT NULL,
  `access_name` text NOT NULL,
  `access_disc` text NOT NULL,
  `access_img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

-- 
-- Dumping data for table `accessories`
-- 

INSERT INTO `accessories` VALUES (1, 'chinese_knife', 'סכין יפני', 'סכין יפנין לחיתוך', 'images/accessories/chinese_knife.png');
INSERT INTO `accessories` VALUES (2, 'driller', 'מקדחה', 'מקדחה חשמלית', 'images/accessories/driller.png');
INSERT INTO `accessories` VALUES (3, 'glue', 'דבק מגע', 'דבק מגע, דבק עץ', 'images/accessories/glue.png');
INSERT INTO `accessories` VALUES (4, 'hot_glue_gun', 'אקדח דבק חם', 'אקדח דבק חם', 'images/accessories/gun_glue.png');
INSERT INTO `accessories` VALUES (5, 'scissors', 'מיספרים', 'מיספרי חיתוך', 'images/accessories/scissors.png');
INSERT INTO `accessories` VALUES (6, 'screws', 'ברגים', 'ברגים ', 'images/accessories/screws.png');
INSERT INTO `accessories` VALUES (19, 'saw', 'מסור גקסון', 'מסור גקסון', 'images/accessories/saw.png');
INSERT INTO `accessories` VALUES (18, 'solder', 'בדיל', 'בדיל להלחמה', 'images/accessories/soldering_wire.png');
INSERT INTO `accessories` VALUES (20, 'empty paper roll', 'גליל נייר ריק', 'גליל נייר ריק - גליל נייר נקיון ', 'images/accessories/paper_roll.png');
INSERT INTO `accessories` VALUES (15, 'solder', 'מלחם', 'מלחם להלחמת בדיל', 'images/accessories/solder.png');
INSERT INTO `accessories` VALUES (21, 'buttol', 'בקבוק ליטר וחצי ריק', 'בקבוק ליטר וחצי ריק', 'images/accessories/bottle.png');
INSERT INTO `accessories` VALUES (22, 'staple gun', 'אקדח סיכות', 'אקדח סיכות עם סיכות', 'images/accessories/staple_gun.png');
INSERT INTO `accessories` VALUES (23, 'aluminum paper', 'נייר אלומיניום', 'נייר אלומיניום', 'images/accessories/aluminum_paper.png');
INSERT INTO `accessories` VALUES (24, 'matches', 'גפרורים', 'גפרורים', 'images/accessories/matches.png');
INSERT INTO `accessories` VALUES (25, 'color_spray', 'ספריי צבע', 'ספריי צבע', 'images/accessories/color_spray.png');
INSERT INTO `accessories` VALUES (26, '3 sec glue', 'דבק 3 שניות', 'דבק 3 שניות', 'images/accessories/3sec.png');
INSERT INTO `accessories` VALUES (27, 'charger', 'שנאי  12v/5v', 'שנאי  12v/5v', 'images/accessories/charger.png');
INSERT INTO `accessories` VALUES (29, 'dispenser cup', 'כוס חד פעמית', 'כוס חד פעמית סטנדרטית', 'images/accessories/cup.png');
INSERT INTO `accessories` VALUES (30, 'mark pen', 'עט סימון ', 'עט או טוש סימון מומלץ לא מחיק , טוש סימון לדיסקים ', 'images/accessories/pen.png');
INSERT INTO `accessories` VALUES (31, 'capacitor', 'קבל', 'קבל ', 'images/accessories/capacitor.png');
INSERT INTO `accessories` VALUES (35, 'magnet', 'מגנט', 'מגנט קטן ', 'images/accessories/small_magnet.png');
INSERT INTO `accessories` VALUES (36, 'electric wire', 'חוט חשמל', 'חוט חשמל', 'images/accessories/electric_wire.png');
INSERT INTO `accessories` VALUES (37, 'aa battery', 'סוללות 1.5v AA', 'סוללות 1.5v AA', 'images/accessories/aa_battery.png');
INSERT INTO `accessories` VALUES (38, 'Tweezers', 'פינצטה', 'פינצטה ', 'images/accessories/922-00073pk10-102513.jpg');
INSERT INTO `accessories` VALUES (39, 'silicone glue', 'דבק סילקיון', 'דבק סיליקון', 'images/accessories/20161201094410MCQUJMKSWXDAC_full.jpg');
INSERT INTO `accessories` VALUES (40, 'wood', 'קרשי עץ', 'קרשי עץ', 'images/accessories/jpg.jpg');
INSERT INTO `accessories` VALUES (41, 'nylon fabric', 'יריעה נגד עשבים שוטים', 'יריעה נגד עשבים שוטים', 'images/accessories/331.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `guides`
-- 

CREATE TABLE `guides` (
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
) ENGINE=MyISAM AUTO_INCREMENT=172 DEFAULT CHARSET=utf8 AUTO_INCREMENT=172 ;

-- 
-- Dumping data for table `guides`
-- 

INSERT INTO `guides` VALUES (132, '1', '1', 'cup_dispenser', 'מדריך ליצירת מתקן לכוסות חד פעמיות', 'cup dispenser', 'סרטון המראה בצורה פשוטה איך יוצרים מתקן כוסות חד&#39;פ שימושי לבית אול לכל מקום ', '[["1,5,21,29"]]', '[]', '["images/guides/cup_dispenser/cup_dispenser_0.jpg","images/guides/cup_dispenser/cup_dispenser_0.jpg"]', '["40umwfGijYU?autoplay=0&loop=0&controls=1&rel=0"]', 'W10=', '["youtube"]');
INSERT INTO `guides` VALUES (138, '6', '1', 'install_kodi_17', 'התקנת קודי 17 למחשב פלוס התקנת עברית ותוסף fusion', 'install kodi 17', 'התקנת קודי גירסא 17 הסברים צעד אחר צעד, והתקנה של התוסף fusion המוסיף את ההרחבות הטובות ביותר', '[[""]]', '["נפעיל את הקובץ שירד, בהודעה שתקפוץ לחצו yes","לחצו Next","לחצו I Agree","לחצו Next","לחצו install","תסמנו את הריבוע ב v ואז לחצו על finish","כשקודי יעלה תקפוץ הודעת אבטחה של וינדוס יש לאשר אותה Allow access","נתחיל בלהגדיר שפה , יש ללחוץ על הגלגל שיניים למעלה ","כעת יש לבחור Interface settings","בצד שמאל נבחר Skin ובצד ימין נבחר Fonts","בחלון שיפתח נבחר Arial based","כעת נבחר בצד שמאל Regional ומבצד ימין נבחר Language","בחלון שיפתח יופיע רשימת שפות, יש לסמן Hebrew","כעת נגדיר את שפת המקלדת, בצד שמאל נבחר איזורי ומצד ימין נבחר מערכי מקלדת","בחלון שנפתח נסמן בנוסף לאנגלית את Hebrew QWERTY","כעת שהעברית מותקנת נתחיל בהתקנת ההרחבות, קודם נחזור אחורה למסך הראשי על ידי לחיצה ב backspace ונבחר שוב בגלגל שיניים למעלה ","כעת נבחר מנהל קבצים","יש ללחוץ פעמיים על הוספת מקור","בחלון שנפתח נלחץ על <ללא> פעמיים ","בחלון שנפתח נוסיף את הלינק  http://fusion.tvaddons.ag/ ונלחץ על אישור","כעת יש ללחוץ על הרובריקה הריקה ונכתוב את שם התוסף fusion ואז נלחץ על אישור","כעת נחזור למסך הראשי ונבחר בהרחבות ","בשלב זה נבחר בקופסא בצד השמאלי למעלה ","נבחר התקנה מקובץ zip","תקפוץ לנו הודעה של אבטחה נבחר בהגדרות ","נלחץ על מקורות לא ידועים ונפעיל אותו ","תקפוץ לנו מיד הודעה ונבחר כן ","כעת נחזור צעד אחד אחורה עי backspace ונגיע שוב להתקנה מקובץ zip נבחר שוב באפשרות זו","יפתח חלון ונבחר בהרחבה שיצרנו fusion","יפתחו שלוש אפשרויות נבחר ב kodi-repos","נבחר ב english ","מהרשימה שתפתח נבחר ב repsitory.xbmchub-1.0.7.zip","כעת נבחר התקנה ממאגר הרחבות","נבחר TVADDONS.AG add-on Repository","נבחר הרחבת תוכנות","נבחר indigo","ואז נבחר התקנת הרחבה ","נחזור לדף הראשי עי backgspace ונבחר בהרחבות בצד ימין מתחת להרחבות וידאו נבחר ב indigo","נבחר config Wizard","בחלון שיפתח נבחר install","כשתסתיים ההתקנה יקפוץ חלון נלחץ אישור וקודי יסגר ","נפעיל את קודי שוב נעמוד על הרחבות ונראה את רשימת ההרחבות ","מזל טוב ... עכשו רק נותר לבחור סרט או סדרה ולהתחיל לצפות ... "]', '["images/guides/install_kodi_17/install_kodi_17_0.jpg","images/guides/install_kodi_17/install_kodi_17_1.png","images/guides/install_kodi_17/install_kodi_17_2.png","images/guides/install_kodi_17/install_kodi_17_3.png","images/guides/install_kodi_17/install_kodi_17_4.png","images/guides/install_kodi_17/install_kodi_17_5.png","images/guides/install_kodi_17/install_kodi_17_6.png","images/guides/install_kodi_17/install_kodi_17_7.png","images/guides/install_kodi_17/install_kodi_17_8.png","images/guides/install_kodi_17/install_kodi_17_9.png","images/guides/install_kodi_17/install_kodi_17_10.png","images/guides/install_kodi_17/install_kodi_17_11.png","images/guides/install_kodi_17/install_kodi_17_12.png","images/guides/install_kodi_17/install_kodi_17_13.png","images/guides/install_kodi_17/install_kodi_17_14.png","images/guides/install_kodi_17/install_kodi_17_15.png","images/guides/install_kodi_17/install_kodi_17_16.png","images/guides/install_kodi_17/install_kodi_17_17.png","images/guides/install_kodi_17/install_kodi_17_18.png","images/guides/install_kodi_17/install_kodi_17_19.png","images/guides/install_kodi_17/install_kodi_17_20.png","images/guides/install_kodi_17/install_kodi_17_21.png","images/guides/install_kodi_17/install_kodi_17_22.png","images/guides/install_kodi_17/install_kodi_17_23.png","images/guides/install_kodi_17/install_kodi_17_24.png","images/guides/install_kodi_17/install_kodi_17_25.png","images/guides/install_kodi_17/install_kodi_17_26.png","images/guides/install_kodi_17/install_kodi_17_27.png","images/guides/install_kodi_17/install_kodi_17_28.png","images/guides/install_kodi_17/install_kodi_17_29.png","images/guides/install_kodi_17/install_kodi_17_30.png","images/guides/install_kodi_17/install_kodi_17_31.png","images/guides/install_kodi_17/install_kodi_17_32.png","images/guides/install_kodi_17/install_kodi_17_33.png","images/guides/install_kodi_17/install_kodi_17_34.png","images/guides/install_kodi_17/install_kodi_17_35.png","images/guides/install_kodi_17/install_kodi_17_36.png","images/guides/install_kodi_17/install_kodi_17_37.png","images/guides/install_kodi_17/install_kodi_17_38.png","images/guides/install_kodi_17/install_kodi_17_39.png","images/guides/install_kodi_17/install_kodi_17_40.png","images/guides/install_kodi_17/install_kodi_17_41.png","images/guides/install_kodi_17/install_kodi_17_42.png","images/guides/install_kodi_17/install_kodi_17_43.jpg"]', '[""]', 'WyI8cD5cdTA1ZTBcdTA1ZWFcdTA1ZDdcdTA1ZDlcdTA1ZGMgXHUwNWQxXHUwNWQ0XHUwNWQ1XHUwNWU4XHUwNWQzXHUwNWVhIFx1MDVlN1x1MDVkNVx1MDVkM1x1MDVkOSBcdTA1ZDJcdTA1ZDlcdTA1ZThcdTA1ZTFcdTA1ZDAgMTcgXHUwNWRjXHUwNWQ1XHUwNWUwXHUwNWQ5XHUwNWQzXHUwNWQ1XHUwNWUxJm5ic3A7PFwvcD5cclxuXHJcbjxwPlx1MDVkY1x1MDVkNFx1MDVkNVx1MDVlOFx1MDVkM1x1MDVkNCBcdTA1ZGNcdTA1ZDdcdTA1ZTUgPGEgaHJlZj1cImh0dHA6XC9cL21pcnJvcnMua29kaS50dlwvcmVsZWFzZXNcL3dpbjMyXC9rb2RpLTE3LjAtS3J5cHRvbi5leGVcIj5cdTA1ZGJcdTA1ZDBcdTA1ZGYmbmJzcDs8XC9hPjxcL3A+XHJcblxyXG48cD4mbmJzcDs8XC9wPlxyXG4iXQ==', '["textarea","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img"]');
INSERT INTO `guides` VALUES (137, '3', '1', 'electronic_products', 'תיקון כמעט כל מוצר אלקטרוני בקלות', 'electronic products', 'ניתן לתקן כמעט כל מוצר אלקטרוני בקלות ולחסוך מאות ואלפי שקלים ... ', '[["18,15,31"]]', '["בתור התחלה הסביר בקצרה מה זה קבל, זה רכיב אלקטרוני האוגר אנרגיה בדומה במעט לסוללה. אבל כל זה לא רלונטי, אלו מספר דוגמאות ותמונות של קבלים שנראים קצת שונה,","אז מה זה רלונטי אלינו .... , אז ככה כמעט כל מוצר אלקטרוני בבית מכיל קבלים מסוגים שונים והקטע המענין שחשוב לנו זה ש 90% המהוצרים שמתקלקים בבית כמו מסכי מחשב, טלויזיות ממירים ראוטרים וכו .. מפסיקים לעבוד ויוצרים תקלות מסוגים שונם רק בגלל קבל אחד או שניים שנשרפו. ניתן די בקלות לזהות קבל שרוף . 1. נפוח 2. מפוצץ 3.נזילה","על מנת להחליף את הקבל המקולקל צריך ידע בסיסי בהלחמה, את הקבל ניתן לקנות מחנות אלקטרוניקה / להזמין מאיי ביי / או מה שאני עושה לחפש במוצרי חשמל ישנים שאין בהם צורך. על מנת לדעת איזה סוג קבל צריך יש להסתכל על שני פרמטרים, הראשון זה מתח העבודה לדוגמה 25V כמו שמופיע בתמונה , ופרמטר שני זה הקיבולת המסומן ב uF במקרה של התמונה זה 4700uF ","אחרי שהשגנו את הקבל הנחוץ יש להלחים אותו במקום הקבל השרוף שנמצא על המוצר האלקטרוני שאנו רוצים לתקן .. חשבו לשים לב להלחים אותו כמו הקבל הישן הצד השלילי והחיובי במקום הנכון . ניתן לזהות את הצד השלילי עפ הסימון של קווים בצד של הקבל כמו שמפיע בתמונה","מקווה שעבד וחסכתי לכם כסף ....."]', '["images/guides/electronic_products/electronic_products_0.jpg","images/guides/electronic_products/electronic_products_1.jpg","images/guides/electronic_products/electronic_products_2.jpg","images/guides/electronic_products/electronic_products_3.gif","images/guides/electronic_products/electronic_products_4.gif","images/guides/electronic_products/electronic_products_5.jpg"]', 'null', 'W10=', '["text_and_img","text_and_img","text_and_img","text_and_img","text_and_img"]');
INSERT INTO `guides` VALUES (163, '3', '1', 'cool_stuff_with_battery_and_magnet', 'דברים מגניבים לעשות עם סוללה ומגנט', 'COOL STUFF WITH BATTERY AND MAGNET', 'דברים מגניבים לעשות עם סוללה ומגנט שקל מאוד לעשות, כמו סליל מסתובב או לב מסתובב', '[["35,37"]]', '[]', '["images/guides/cool_stuff_with_battery_and_magnet/cool_stuff_with_battery_and_magnet_0.jpg"]', '["iG0pzGcy4xU?autoplay=0&loop=0&controls=1&rel=0","VhaYLnjkf1E?autoplay=0&loop=0&controls=1&rel=0"]', 'W10=', '["youtube","youtube"]');
INSERT INTO `guides` VALUES (169, '7', '1', 'car_keyboard', 'תיקון מקשים של קודן', 'car keyboard', 'תיקון מקשי סיליקון של קודן ברכב ', '[["3,5,23"]]', '["נפתח בזהירות את הקודן ונשלוף את המקשים ","ברגע שנהפוך את המקשים נוכל לראות נקודות שחורות","ניגזור רצועות קטנות של נייר כסף&#44; ניתן לראות בעיגול האדום ","ניקח עם קיסם או עם מברג קטן קצת דבק &#44; אני ממליץ דבק סיליקון אבל אפשר גם דבק מגע &#44; ונתחיל למרוח על העיגולים השחורים של הכפתור הבעיתי ובניהם . מומלץ שכבה דקה אבל לא לפספס אף נקודה","כעת ניקח עם הפינצטה את הרצועה של הנייר כסף ונדביק בעדינות ","כך צריכה ליראות התוצאה הסופית אחרי ההדבקה &#44; ולחזור על הפעולה על כל אחד מהכפתורים הבעיתיים ","ניתן לדבק להתיבש עפ הצורך .. ממליץ לפחות שעה &#44; ואז להחזיר את המקשים לקודן . מקווה שחסכתי לכם ...."]', '["images/guides/car_keyboard/car_keyboard_0.jpg","images/guides/car_keyboard/car_keyboard_1.jpg","images/guides/car_keyboard/car_keyboard_2.jpg","images/guides/car_keyboard/car_keyboard_3.jpg","images/guides/car_keyboard/car_keyboard_4.jpg","images/guides/car_keyboard/car_keyboard_5.jpg","images/guides/car_keyboard/car_keyboard_6.jpg","images/guides/car_keyboard/car_keyboard_7.jpg"]', '[""]', 'WyI8cD5cdTA1ZDBcdTA1ZGQgXHUwNWQwXHUwNWQ3XHUwNWQzIFx1MDVkMFx1MDVkNSBcdTA1ZDlcdTA1ZDVcdTA1ZWFcdTA1ZTggXHUwNWRlXHUwNWQ0XHUwNWRlXHUwNWU3XHUwNWU5XHUwNWQ5XHUwNWRkIFx1MDVlOVx1MDVkY1x1MDVkYlx1MDVkZCBcdTA1ZDFcdTA1ZTdcdTA1ZDVcdTA1ZDNcdTA1ZGYgXHUwNWQ0XHUwNWVhXHUwNWU3XHUwNWRjXHUwNWU3XHUwNWRjXHUwNWQ1IC4uLiAoXHUwNWRiXHUwNWU5XHUwNWQwXHUwNWVhXHUwNWRkIFx1MDVkY1x1MDVkNVx1MDVkN1x1MDVlNlx1MDVkOVx1MDVkZCBcdTA1ZTJcdTA1ZGMgXHUwNWRlXHUwNWU3XHUwNWU5IFx1MDVkNVx1MDVkY1x1MDVkMCBcdTA1ZTBcdTA1ZTlcdTA1ZGVcdTA1ZTIgXHUwNWQ0XHUwNWQxXHUwNWQ5XHUwNWU0LCBcdTA1ZThcdTA1ZTcgXHUwNWQwXHUwNWQ3XHUwNWU4XHUwNWQ5IFx1MDVkYlx1MDVkZVx1MDVkNCBcdTA1ZGNcdTA1ZDdcdTA1ZDlcdTA1ZTZcdTA1ZDVcdTA1ZWEgXHUwNWQ0XHUwNWRiXHUwNWU0XHUwNWVhXHUwNWQ1XHUwNWU4IFx1MDVkZVx1MDVkMlx1MDVkOVx1MDVkMS4pPFwvcD5cclxuXHJcbjxwPlx1MDVkMFx1MDVkNlx1MDVkOSBcdTA1ZDRcdTA1ZGJcdTA1ZTRcdTA1ZWFcdTA1ZDVcdTA1ZThcdTA1ZDlcdTA1ZGQgXHUwNWQxXHUwNWU3XHUwNWQ1XHUwNWQzXHUwNWRmIFx1MDVkNFx1MDVlYVx1MDVlN1x1MDVkY1x1MDVlN1x1MDVkY1x1MDVkNSAuLi4gXHUwNWUyXHUwNWRiXHUwNWU5XHUwNWQ1IFx1MDVkY1x1MDVlN1x1MDVlMFx1MDVkNVx1MDVlYSBcdTA1ZGJcdTA1ZTRcdTA1ZWFcdTA1ZDVcdTA1ZThcdTA1ZDkgXHUwNWUxXHUwNWQ5XHUwNWRjXHUwNWQ5XHUwNWU3XHUwNWQ1XHUwNWRmIFx1MDVlMlx1MDVkNVx1MDVkY1x1MDVkNCA1MCBcdTA1ZTlcdTA1ZDcgLi4uIFx1MDVkY1x1MDVkOSBcdTA1ZDZcdTA1ZDQgXHUwNWUwXHUwNWU4XHUwNWQwXHUwNWQ0IFx1MDVkOVx1MDVkNVx1MDVlYVx1MDVlOCBcdTA1ZGVcdTA1ZDNcdTA1ZDk8XC9wPlxyXG5cclxuPHA+XHUwNWQxXHUwNWU3XHUwNWRjXHUwNWQ1XHUwNWVhIFx1MDVlMFx1MDVkOVx1MDVlYVx1MDVkZiBcdTA1ZGNcdTA1ZWFcdTA1ZTdcdTA1ZGYgXHUwNWQwXHUwNWVhIFx1MDVkNlx1MDVkNCBcdTA1ZDBcdTA1ZDYgXHUwNWQxXHUwNWQ1XHUwNWQwXHUwNWQ1IFx1MDVlMFx1MDVlYVx1MDVkN1x1MDVkOVx1MDVkYy48XC9wPlxyXG5cclxuPHA+Jm5ic3A7PFwvcD5cclxuXHJcbjxwPiZuYnNwOzxcL3A+XHJcbiJd', '["textarea","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img"]');
INSERT INTO `guides` VALUES (167, '6', '1', 'install_kodi_17_with_abeksis', 'התקנת קודי 17 למחשב פלוס התקנת אבקסיס', 'install kodi 17 with abeksis', 'התקנת קודי גירסא 17 פלוס אבקסיס - הסברים צעד אחר צעד, אבקסיס מתקין את כל מה שצריך , שפה כתוביות ערוצים live ועוד .. ', '[[""]]', '["נפעיל את הקובץ שירד, בהודעה שתקפוץ לחצו yes","לחצו Next","לחצו I Agree","לחצו Next","לחצו install","תסמנו את הריבוע ב v ואז לחצו על finish","כשקודי יעלה תקפוץ הודעת אבטחה של וינדוס יש לאשר אותה Allow access","נבחר באיקון של הגלגל שיניים בצד שמאל למעלה","כעת נבחר ב File manager","נלחץ על Add source","בחלון שנפתח נלחץ על <None>","כעת נזין את הכתובת http://repo.abeksis.com ונלחץ על ok","נלחץ על הרובריקה ->המלבן למטה  ","כעת נזין את השם abeksis ונלחץ ok","נחזור למסך הראשי חזרה אחרוה ניתן על ידי Backspace במקלדת , ונבחר Add-ons","כעת נבחר בארגז בצד שמאל למעלה ","נלחץ על Install from zip file","בחלון שיקפוץ בנחר ב settings","כעת נבחר ב Unknown sources ","בחלון שיקפוץ נבחר ב Yes","וכעת נחזור אחורה עי כפתור  Backspace במקלדת ונלחץ שוב על Install from zip file ","בחלון שיפתח נבחר ב abeksis","וכעת נבחר ב repository.abeksis.zip","כעת נבחר ב Install from repository","נבחר Abeksis repsitory","כעת נבחר ב Program add-ons","כעת יש לבחור ב Abeksis wizard","ואז כמובן נלחץ על Install","נחזור ארבעה שלבים אחורה עד שנגיע למסך של Add-ons ושם נעמוד על Program add-ons","ואז נקליק על האופציה בצד ימין Abeksis wizard","בחלון שנפתח נקליק על Wizard for kodi 17 General","ברגע שתסתים ההתקנה יקפוץ חלון שיבקש לכבות את הקודי שההגדרות החדשות יכנסו לתוקף וכמובן נאשר זאת עי לחיצה על ok","נפעיל מחדש את kodi ומזל טוב קיבלתם קודי מוכן לפעולה ",""]', '["images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_0.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_1.png","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_2.png","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_3.png","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_4.png","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_5.png","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_6.png","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_7.png","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_8.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_9.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_10.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_11.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_12.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_13.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_14.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_15.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_16.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_17.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_18.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_19.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_20.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_21.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_22.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_23.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_24.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_25.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_26.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_27.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_28.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_29.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_30.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_31.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_32.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_33.jpg","images/guides/install_kodi_17_with_abeksis/install_kodi_17_with_abeksis_34.jpg"]', '[""]', 'WyI8cD5cdTA1ZDBcdTA1ZWEgXHUwNWU3XHUwNWQ1XHUwNWQzXHUwNWQ5IDE3IFx1MDVlMFx1MDVkOVx1MDVlYVx1MDVkZiBcdTA1ZGNcdTA1ZDRcdTA1ZDVcdTA1ZThcdTA1ZDlcdTA1ZDMgXHUwNWRlXHUwNWQ0XHUwNWRjXHUwNWQ5XHUwNWUwXHUwNWU3IFx1MDVkNFx1MDVkMVx1MDVkMCA6IDxhIGhyZWY9XCJodHRwOlwvXC9taXJyb3JzLmtvZGkudHZcL3JlbGVhc2VzXC93aW4zMlwva29kaS0xNy4wLUtyeXB0b24uZXhlXCI+XHUwNWRjXHUwNWQ3XHUwNWU1IFx1MDVkYlx1MDVkMFx1MDVkZiZuYnNwOzxcL2E+PFwvcD5cclxuXHJcbjxwPlx1MDVkNVx1MDVkNlx1MDVkNCBcdTA1ZThcdTA1ZTcgXHUwNWRlXHUwNWQ0IFx1MDVlOVx1MDVlNlx1MDVlOFx1MDVkOVx1MDVkYSAuLi4mbmJzcDs8XC9wPlxyXG5cclxuPHA+XHUwNWUyXHUwNWRiXHUwNWU5XHUwNWQ1IFx1MDVlMlx1MDVlN1x1MDVkMVx1MDVkNSBcdTA1ZTZcdTA1ZTJcdTA1ZDMgXHUwNWQwXHUwNWQ3XHUwNWU4IFx1MDVlNlx1MDVlMlx1MDVkMyZuYnNwOzxcL3A+XHJcbiJd', '["textarea","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img","text_and_img"]');

-- --------------------------------------------------------

-- 
-- Table structure for table `subjects`
-- 

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key_name` text NOT NULL,
  `img` text NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `subjects`
-- 

INSERT INTO `subjects` VALUES (1, 'Kitchen', 'images/subjects/kitchen.jpg', 'מטבח', 'צור בעצמך מוצרים למטבח');
INSERT INTO `subjects` VALUES (2, 'garden', 'images/subjects/garden.jpg', 'גינה', 'צור בעמצך לגינה');
INSERT INTO `subjects` VALUES (3, 'electric', 'images/subjects/electric.jpg', 'מוצרים אלקטרונים', 'עשה ותקן בעצמך מוצרים אלקטרונים בבית');
INSERT INTO `subjects` VALUES (6, 'kodi', 'images/subjects/kodi.jpg', 'קודי', 'מדריכים וכלים להתקנת קודי');
INSERT INTO `subjects` VALUES (7, 'car_and_car_accessories', 'images/subjects/gallery-1447710787-pmx0610142a.jpg', 'עשה זאת בעמצך לרכב', 'עשה בעצמך לרכב , תיקון תקלות מכניות ואלקטרוניות ');

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `nickname` text NOT NULL,
  `password` text NOT NULL,
  `type` text NOT NULL,
  `email` text NOT NULL,
  `country` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` VALUES (1, 'boaz', 'h', 'boze', '123', 'admin', 'bozeha@gmail.com', 'israel');
