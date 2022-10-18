DROP TABLE IF EXISTS `#__jcmvc`;

CREATE TABLE `#__jcmvc` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`title` varchar(60)    NOT NULL DEFAULT 'Untitled',
	`greeting` VARCHAR(25) NOT NULL,
	`published` tinyint(4) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`)
)
	ENGINE =InnoDB
	AUTO_INCREMENT =0
	DEFAULT CHARSET=utf8mb4
	DEFAULT COLLATE=utf8mb4_unicode_ci;

INSERT INTO `#__jcmvc` (`greeting`) VALUES
('greeting value 1'),
('greeting value 2');
