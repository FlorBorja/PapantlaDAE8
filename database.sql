Create database PuppyRescue;

use PuppyRescue;

CREATE TABLE `puppyrescue`.`usuario` ( 
`idUs` INT NOT NULL AUTO_INCREMENT , 
`nomUs` VARCHAR(25) NOT NULL , 
`passUs` VARCHAR(8) NOT NULL , 
PRIMARY KEY (`idUs`)) 
ENGINE = InnoDB;

CREATE TABLE `puppyrescue`. ( 
`idCan` INT NOT NULL AUTO_INCREMENT , 
`calleCan` VARCHAR(50) NOT NULL ,
`colCan` VARCHAR(50) NOT NULL , 
`rasCan` VARCHAR(100) NOT NULL , 
`condCan` VARCHAR(100) NOT NULL , 
PRIMARY KEY (`idCan`)) 
ENGINE = InnoDB;