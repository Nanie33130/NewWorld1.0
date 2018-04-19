-- 
-- Base de données des utilisateurs de notre site
-- 
CREATE DATABASE IF NOT EXISTS usersNewWorld;

USE usersNewWorld;

DROP TABLE IF EXISTS `usersNW`;

CREATE TABLE IF NOT EXISTS `usersNW` (
  `idUser` bigint(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nomUser` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `admin` boolean DEFAULT false,
  `signup_date` int(10) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8;
