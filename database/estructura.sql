-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.0.51b-community-nt-log - MySQL Community Edition (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla mydb.chat
CREATE TABLE IF NOT EXISTS `chat` (
  `idchat` int(11) NOT NULL auto_increment,
  `mensaje` text,
  `idticket` int(11) NOT NULL,
  `fecha` datetime default NULL,
  `timestap` timestamp NULL default NULL,
  `nombre` varchar(300) default NULL,
  PRIMARY KEY  (`idchat`),
  KEY `fk_chat_ticket1_idx` (`idticket`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mydb.comentarios
CREATE TABLE IF NOT EXISTS `comentarios` (
  `idcomentarios` int(11) NOT NULL auto_increment,
  `idposts` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `comentario` varchar(500) default NULL,
  `estado` bit(1) default NULL,
  PRIMARY KEY  (`idcomentarios`),
  KEY `fk_comentarios_posts1_idx` (`idposts`),
  KEY `fk_comentarios_Usuario1_idx` (`idUsuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mydb.echo_system
CREATE TABLE IF NOT EXISTS `echo_system` (
  `idecho_system` int(11) NOT NULL auto_increment,
  `mensaje` varchar(400) default NULL,
  PRIMARY KEY  (`idecho_system`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mydb.estado_ticket
CREATE TABLE IF NOT EXISTS `estado_ticket` (
  `idestado_ticket` int(11) NOT NULL auto_increment,
  `nombre` varchar(100) default NULL,
  PRIMARY KEY  (`idestado_ticket`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mydb.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `idposts` int(11) NOT NULL auto_increment,
  `idUsuario` int(11) NOT NULL,
  `titulo` varchar(500) default NULL,
  `contenido` text,
  `destacado` bit(1) default NULL,
  `like` int(11) default NULL,
  `fecha` datetime default NULL,
  `estado` bit(1) default NULL,
  PRIMARY KEY  (`idposts`),
  KEY `fk_posts_Usuario1_idx` (`idUsuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mydb.role
CREATE TABLE IF NOT EXISTS `role` (
  `idrole` int(11) NOT NULL,
  `nombre` varchar(45) default NULL,
  PRIMARY KEY  (`idrole`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mydb.sistemas
CREATE TABLE IF NOT EXISTS `sistemas` (
  `idsistemas` int(11) NOT NULL auto_increment,
  `url` varchar(300) default NULL,
  `nombre` varchar(200) default NULL,
  `estado` bit(1) default NULL,
  PRIMARY KEY  (`idsistemas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mydb.ticket
CREATE TABLE IF NOT EXISTS `ticket` (
  `idticket` int(11) NOT NULL auto_increment,
  `idsistemas` int(11) NOT NULL,
  `nombre` varchar(200) default NULL,
  `mensaje` varchar(500) default NULL,
  `fecha` datetime default NULL,
  `ip` varchar(45) default NULL,
  `idUsuario_support` int(11) NOT NULL,
  `tiempo` int(11) default NULL,
  `tiempo_inicio` datetime default NULL,
  `tiempo_fin` datetime default NULL,
  `puntos` int(11) default NULL,
  `comentario` varchar(500) NOT NULL,
  `observacion` varchar(500) NOT NULL,
  `idestado_ticket` int(11) NOT NULL,
  PRIMARY KEY  (`idticket`),
  KEY `fk_ticket_sistemas1_idx` (`idsistemas`),
  KEY `fk_ticket_Usuario1_idx` (`idUsuario_support`),
  KEY `fk_ticket_estado_ticket1_idx` (`idestado_ticket`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mydb.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(200) default NULL,
  `usuario` varchar(100) default NULL,
  `password` varchar(200) default NULL,
  `email` varchar(100) default NULL,
  `estado` bit(1) default NULL,
  `idrole` int(11) NOT NULL,
  `idsistemas` int(11) NOT NULL,
  `active` bit(1) default NULL,
  `last_activity` datetime default NULL,
  PRIMARY KEY  (`idUsuario`),
  KEY `fk_Usuario_role_idx` (`idrole`),
  KEY `fk_Usuario_sistemas1_idx` (`idsistemas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
