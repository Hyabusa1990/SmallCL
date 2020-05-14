-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema SmallCL
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema SmallCL
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `SmallCL` DEFAULT CHARACTER SET utf8 ;
USE `SmallCL` ;

-- -----------------------------------------------------
-- Table `SmallCL`.`OType`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SmallCL`.`OType` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Title` VARCHAR(45) NOT NULL,
  `icon` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SmallCL`.`CType`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SmallCL`.`CType` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Title` VARCHAR(45) NOT NULL,
  `icon` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SmallCL`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SmallCL`.`User` (
  `UserName` VARCHAR(45) NOT NULL,
  `Name` VARCHAR(45) NOT NULL,
  `VName` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `PWCN` TEXT(255) NOT NULL,
  `type` INT NOT NULL DEFAULT 1,
  PRIMARY KEY (`UserName`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SmallCL`.`Object`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SmallCL`.`Object` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Title` VARCHAR(45) NOT NULL,
  `ID_OType` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_Object_OType_idx` (`ID_OType` ASC),
  CONSTRAINT `fk_Object_OType`
    FOREIGN KEY (`ID_OType`)
    REFERENCES `SmallCL`.`OType` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SmallCL`.`Template`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SmallCL`.`Template` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Title` VARCHAR(45) NOT NULL,
  `CTitle` VARCHAR(45) NOT NULL,
  `CText` LONGTEXT NOT NULL,
  `ID_Object` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_Template_Object1_idx` (`ID_Object` ASC),
  CONSTRAINT `fk_Template_Object1`
    FOREIGN KEY (`ID_Object`)
    REFERENCES `SmallCL`.`Object` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SmallCL`.`SCLChange`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SmallCL`.`SCLChange` (
  `ID` BIGINT(255) NOT NULL AUTO_INCREMENT,
  `timestamp` DATETIME(6) NOT NULL,
  `Title` VARCHAR(45) NOT NULL,
  `Text` LONGTEXT NOT NULL,
  `ID_User` VARCHAR(45) NOT NULL,
  `ID_Object` INT NOT NULL,
  `ID_CType` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_Change_User1_idx` (`ID_User` ASC),
  INDEX `fk_Change_Object1_idx` (`ID_Object` ASC),
  INDEX `fk_Change_CType1_idx` (`ID_CType` ASC),
  CONSTRAINT `fk_Change_User1`
    FOREIGN KEY (`ID_User`)
    REFERENCES `SmallCL`.`User` (`UserName`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Change_Object1`
    FOREIGN KEY (`ID_Object`)
    REFERENCES `SmallCL`.`Object` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Change_CType1`
    FOREIGN KEY (`ID_CType`)
    REFERENCES `SmallCL`.`CType` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Insert defaut Admin User admin / smallcl
-- -----------------------------------------------------
INSERT INTO `user`(`UserName`, `Name`, `VName`, `email`, `PWCN`, `type`) VALUES ("admin","SmallCL","Administrator","admin@cmallcl.local","$2y$10$wkydcPreNCjG/JF3UXcmB.hzGX5o15rlxZGMzjSZkmSOzbdugjZu2",1);
