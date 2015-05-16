CREATE DATABASE foro;
USE foro;
CREATE TABLE IF NOT EXISTS `foro` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`autor` varchar(255) NOT NULL,
	`titulo` text NOT NULL,
	`mensaje` longtext NOT NULL,
	`fecha` int(11) NOT NULL DEFAULT '0',
	`respuestas` int(11) NOT NULL DEFAULT '0',
	`identificador` int(11) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
)