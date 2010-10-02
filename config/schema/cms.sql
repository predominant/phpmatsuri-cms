#Cms sql generated on: 2010-10-02 23:35:19 : 1286026519

DROP TABLE IF EXISTS `pages`;


CREATE TABLE `pages` (
	`id` varchar(36) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`user_id` varchar(36) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`title` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`body` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	`slug` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,	PRIMARY KEY  (`id`))	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

