CREATE DATABASE teste;

CREATE TABLE `teste`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `idade` INT NOT NULL,
  `genero` CHAR(1) NOT NULL,
  PRIMARY KEY (`idusuario`));