-- MySQL Script generated by MySQL Workbench
-- Tue Jun  9 15:35:18 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema domingo
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema domingo
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `domingo` DEFAULT CHARACTER SET latin1 ;
USE `domingo` ;

-- -----------------------------------------------------
-- Table `domingo`.`clasificacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domingo`.`clasificacion` (
  `idClasificacion` INT(11) NOT NULL,
  `Clasificacion` VARCHAR(10) NOT NULL,
  `idPelicula` INT(11) NOT NULL,
  `Nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idClasificacion`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `domingo`.`cuenta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domingo`.`cuenta` (
  `correo` VARCHAR(20) NOT NULL,
  `tarjeta` BIGINT(20) NOT NULL,
  `fechaEx` DATE NOT NULL,
  `contrasenia` VARCHAR(10) NULL DEFAULT NULL,
  `idCuenta` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(20) NOT NULL,
  `apellido` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idCuenta`))
ENGINE = InnoDB
AUTO_INCREMENT = 12
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `domingo`.`pelicula`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domingo`.`pelicula` (
  `idPelicula` INT(11) NOT NULL AUTO_INCREMENT,
  `Titulo` VARCHAR(20) NOT NULL,
  `Imagen` VARCHAR(20) NOT NULL,
  `Duracion` VARCHAR(10) NOT NULL,
  `Clasificacion` VARCHAR(10) NOT NULL,
  `Sinopsis` VARCHAR(50) NOT NULL,
  `idClasificacion` INT(11) NOT NULL,
  PRIMARY KEY (`idPelicula`),
  INDEX `fk_pelicula_contenido1_idx` (`idClasificacion` ASC) ,
  CONSTRAINT `fk_pelicula_contenido1`
    FOREIGN KEY (`idClasificacion`)
    REFERENCES `domingo`.`clasificacion` (`idClasificacion`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `domingo`.`perfil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domingo`.`perfil` (
  `idPerfil` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(20) NOT NULL,
  `idioma` VARCHAR(20) NOT NULL,
  `foto` VARCHAR(30) NOT NULL,
  `idCuenta` INT(11) NOT NULL,
  `idClasificacion` INT(11) NOT NULL,
  PRIMARY KEY (`idPerfil`),
  INDEX `fk_perfil_cuenta_idx` (`idCuenta` ASC) ,
  INDEX `fk_perfil_contenido1_idx` (`idClasificacion` ASC),
  CONSTRAINT `fk_perfil_contenido1`
    FOREIGN KEY (`idClasificacion`)
    REFERENCES `domingo`.`clasificacion` (`idClasificacion`),
  CONSTRAINT `fk_perfil_cuenta`
    FOREIGN KEY (`idCuenta`)
    REFERENCES `domingo`.`cuenta` (`idCuenta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `domingo`.`serie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domingo`.`serie` (
  `idSerie` INT(11) NOT NULL AUTO_INCREMENT,
  `Titulo` VARCHAR(45) NOT NULL,
  `Imagen` VARCHAR(45) NOT NULL,
  `idClasificacion` INT(11) NOT NULL,
  `Temporada` INT(11) NOT NULL,
  `Capitulo` INT(11) NOT NULL,
  `Clasificacion` VARCHAR(10) NOT NULL,
  `sinopsis` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idSerie`),
  INDEX `fk_serie_contenido1_idx` (`idClasificacion` ASC) ,
  CONSTRAINT `fk_serie_contenido1`
    FOREIGN KEY (`idClasificacion`)
    REFERENCES `domingo`.`clasificacion` (`idClasificacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
