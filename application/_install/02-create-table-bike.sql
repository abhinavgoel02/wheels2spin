CREATE TABLE `wheels2spin`.`bike` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(5) NOT NULL,
  `owner` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
