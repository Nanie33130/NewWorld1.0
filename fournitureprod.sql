
/*SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";*/

CREATE DATABASE IF NOT EXISTS fourniturprod DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE fourniturprod;
 
 drop table if exists Recolte;
 Create table if not exists Recolte (
 	`idprod` int(10) not null auto_increment,
 	`lieuprod` char(50) not null,
 	`daterecolt` date not null DEFAULT '0000-00-00',
 	`datelimit` date not null DEFAULT '0000-00-00',
 	`bio` bool ,
 	/*`idlot` int(10) not null,*/
 	`ptretrait` enum('05130','05000-2','05000-5','05000-12','05110'),
 	`prixkg` float(5,3),
 	`quantite` float(5,3),
 	`unite` char(10) not null,
 	primary key (`idprod`))
 	engine=InnoDB;

 drop table if exists Produit;
 Create table if not exists Produit (
 	`idprod` int(10) not null,
 	`produit` char(15) not null,
 	`variete` char(30) not null,
 	foreign key (`idprod`))
 engine=InnoDB;