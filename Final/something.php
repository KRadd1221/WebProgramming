SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `n02704859_db` ;
CREATE SCHEMA IF NOT EXISTS `n02704859_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `n02704859_db` ;

-- -----------------------------------------------------
-- Table `n02704859_db`.`Keywords`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `n02704859_db`.`Keywords` ;

CREATE TABLE IF NOT EXISTS `n02704859_db`.`Keywords` (
  `id` INT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updates_at` TIMESTAMP NOT NULL,
  `Parent_id` INT NOT NULL,
  `Name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Keywords_Keywords1_idx` (`Parent_id` ASC),
  CONSTRAINT `fk_Keywords_Keywords1`
    FOREIGN KEY (`Parent_id`)
    REFERENCES `n02704859_db`.`Keywords` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `n02704859_db`.`User`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `n02704859_db`.`User` ;

CREATE TABLE IF NOT EXISTS `n02704859_db`.`User` (
  `id` INT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  `FirstName` VARCHAR(45) NOT NULL,
  `LastName` VARCHAR(45) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  `UsertType` INT NOT NULL,
  `Keywords_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Users_Keywords1_idx` (`Keywords_id` ASC),
  CONSTRAINT `fk_Users_Keywords1`
    FOREIGN KEY (`Keywords_id`)
    REFERENCES `n02704859_db`.`Keywords` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `n02704859_db`.`Orders`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `n02704859_db`.`Orders` ;

CREATE TABLE IF NOT EXISTS `n02704859_db`.`Orders` (
  `id` INT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updates_at` TIMESTAMP NOT NULL,
  `Users_id` INT NOT NULL,
  `OrderNumber` VARCHAR(45) NOT NULL,
  INDEX `fk_Orders_Users_idx` (`Users_id` ASC),
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Orders_Users`
    FOREIGN KEY (`Users_id`)
    REFERENCES `n02704859_db`.`User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `n02704859_db`.`Suppliers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `n02704859_db`.`Suppliers` ;

CREATE TABLE IF NOT EXISTS `n02704859_db`.`Suppliers` (
  `id` INT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updates_at` TIMESTAMP NOT NULL,
  `Name` VARCHAR(45) NOT NULL,
  `Products_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Suppliers_Products1_idx` (`Products_id` ASC),
  CONSTRAINT `fk_Suppliers_Products1`
    FOREIGN KEY (`Products_id`)
    REFERENCES `n02704859_db`.`Products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `n02704859_db`.`Product_Categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `n02704859_db`.`Product_Categories` ;

CREATE TABLE IF NOT EXISTS `n02704859_db`.`Product_Categories` (
  `id` INT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updates_at` TIMESTAMP NOT NULL,
  `Name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `n02704859_db`.`Product_id`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `n02704859_db`.`Product_id` ;

CREATE TABLE IF NOT EXISTS `n02704859_db`.`Product_id` (
  `id` INT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updates_at` TIMESTAMP NOT NULL,
  `id_number` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `n02704859_db`.`Inventory`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `n02704859_db`.`Inventory` ;

CREATE TABLE IF NOT EXISTS `n02704859_db`.`Inventory` (
  `id` INT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updates_at` TIMESTAMP NOT NULL,
  `In_Stock` VARCHAR(45) NOT NULL,
  `Out_of_Stock` VARCHAR(45) NOT NULL,
  `Coming_Soon` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `n02704859_db`.`Product_Keywords`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `n02704859_db`.`Product_Keywords` ;

CREATE TABLE IF NOT EXISTS `n02704859_db`.`Product_Keywords` (
  `id` INT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updates_at` TIMESTAMP NOT NULL,
  `Keywords_id` INT NOT NULL,
  `Name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Product_Keywords_Keywords1_idx` (`Keywords_id` ASC),
  CONSTRAINT `fk_Product_Keywords_Keywords1`
    FOREIGN KEY (`Keywords_id`)
    REFERENCES `n02704859_db`.`Keywords` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `n02704859_db`.`Products`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `n02704859_db`.`Products` ;

CREATE TABLE IF NOT EXISTS `n02704859_db`.`Products` (
  `id` INT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updates_at` TIMESTAMP NOT NULL,
  `Suppliers_id` INT NOT NULL,
  `Product_Categories_id` INT NOT NULL,
  `Name` VARCHAR(45) NOT NULL,
  `Price` VARCHAR(45) NOT NULL,
  `Description` VARCHAR(500) NOT NULL,
  `Product_id_id` INT NOT NULL,
  `Inventory_id` INT NOT NULL,
  `Product_Keywords_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Products_Suppliers1_idx` (`Suppliers_id` ASC),
  INDEX `fk_Products_Product_Categories1_idx` (`Product_Categories_id` ASC),
  INDEX `fk_Products_Product_id1_idx` (`Product_id_id` ASC),
  INDEX `fk_Products_Inventory1_idx` (`Inventory_id` ASC),
  INDEX `fk_Products_Product_Keywords1_idx` (`Product_Keywords_id` ASC),
  CONSTRAINT `fk_Products_Suppliers1`
    FOREIGN KEY (`Suppliers_id`)
    REFERENCES `n02704859_db`.`Suppliers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Products_Product_Categories1`
    FOREIGN KEY (`Product_Categories_id`)
    REFERENCES `n02704859_db`.`Product_Categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Products_Product_id1`
    FOREIGN KEY (`Product_id_id`)
    REFERENCES `n02704859_db`.`Product_id` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Products_Inventory1`
    FOREIGN KEY (`Inventory_id`)
    REFERENCES `n02704859_db`.`Inventory` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Products_Product_Keywords1`
    FOREIGN KEY (`Product_Keywords_id`)
    REFERENCES `n02704859_db`.`Product_Keywords` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `n02704859_db`.`Order_Items`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `n02704859_db`.`Order_Items` ;

CREATE TABLE IF NOT EXISTS `n02704859_db`.`Order_Items` (
  `id` INT NOT NULL,
  `Products_id` INT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updates_at` TIMESTAMP NOT NULL,
  `Orders_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Order_Items_Products1_idx` (`Products_id` ASC),
  INDEX `fk_Order_Items_Orders1_idx` (`Orders_id` ASC),
  CONSTRAINT `fk_Order_Items_Products1`
    FOREIGN KEY (`Products_id`)
    REFERENCES `n02704859_db`.`Products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Order_Items_Orders1`
    FOREIGN KEY (`Orders_id`)
    REFERENCES `n02704859_db`.`Orders` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `n02704859_db`.`ContactMethods`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `n02704859_db`.`ContactMethods` ;

CREATE TABLE IF NOT EXISTS `n02704859_db`.`ContactMethods` (
  `id` INT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updates_at` TIMESTAMP NOT NULL,
  `Keywords_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_ContactMethods_Keywords1_idx` (`Keywords_id` ASC),
  CONSTRAINT `fk_ContactMethods_Keywords1`
    FOREIGN KEY (`Keywords_id`)
    REFERENCES `n02704859_db`.`Keywords` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `n02704859_db`.`Addresses`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `n02704859_db`.`Addresses` ;

CREATE TABLE IF NOT EXISTS `n02704859_db`.`Addresses` (
  `id` INT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updates_at` TIMESTAMP NOT NULL,
  `Keywords_id` INT NOT NULL,
  `ContactMethods_id` INT NOT NULL,
  `Users_id` INT NOT NULL,
  `Country` VARCHAR(45) NOT NULL,
  `State` VARCHAR(45) NOT NULL,
  `City` VARCHAR(45) NOT NULL,
  `Zipcode` VARCHAR(45) NOT NULL,
  `Street` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Addresses_Keywords1_idx` (`Keywords_id` ASC),
  INDEX `fk_Addresses_ContactMethods1_idx` (`ContactMethods_id` ASC),
  INDEX `fk_Addresses_Users1_idx` (`Users_id` ASC),
  CONSTRAINT `fk_Addresses_Keywords1`
    FOREIGN KEY (`Keywords_id`)
    REFERENCES `n02704859_db`.`Keywords` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Addresses_ContactMethods1`
    FOREIGN KEY (`ContactMethods_id`)
    REFERENCES `n02704859_db`.`ContactMethods` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Addresses_Users1`
    FOREIGN KEY (`Users_id`)
    REFERENCES `n02704859_db`.`User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `n02704859_db`.`Users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `n02704859_db`.`Users` ;

CREATE TABLE IF NOT EXISTS `n02704859_db`.`Users` (
  `id Int` INT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id Int`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `n02704859_db`.`Wishlists`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `n02704859_db`.`Wishlists` ;

CREATE TABLE IF NOT EXISTS `n02704859_db`.`Wishlists` (
  `id` INT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updates_at` TIMESTAMP NOT NULL,
  `Products_id` INT NOT NULL,
  `Users_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Wishlists_Products1_idx` (`Products_id` ASC),
  INDEX `fk_Wishlists_Users1_idx` (`Users_id` ASC),
  CONSTRAINT `fk_Wishlists_Products1`
    FOREIGN KEY (`Products_id`)
    REFERENCES `n02704859_db`.`Products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Wishlists_Users1`
    FOREIGN KEY (`Users_id`)
    REFERENCES `n02704859_db`.`User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `n02704859_db`.`Emails`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `n02704859_db`.`Emails` ;

CREATE TABLE IF NOT EXISTS `n02704859_db`.`Emails` (
  `id` INT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  `Users_id` INT NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Emails_Users1_idx` (`Users_id` ASC),
  CONSTRAINT `fk_Emails_Users1`
    FOREIGN KEY (`Users_id`)
    REFERENCES `n02704859_db`.`User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `n02704859_db`.`Feedback`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `n02704859_db`.`Feedback` ;

CREATE TABLE IF NOT EXISTS `n02704859_db`.`Feedback` (
  `id` INT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  `Users_id Int` INT NOT NULL,
  `Product_id_id` INT NOT NULL,
  `Description` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Feedback_Users1_idx` (`Users_id Int` ASC),
  INDEX `fk_Feedback_Product_id1_idx` (`Product_id_id` ASC),
  CONSTRAINT `fk_Feedback_Users1`
    FOREIGN KEY (`Users_id Int`)
    REFERENCES `n02704859_db`.`User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Feedback_Product_id1`
    FOREIGN KEY (`Product_id_id`)
    REFERENCES `n02704859_db`.`Product_id` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `n02704859_db`.`Employees`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `n02704859_db`.`Employees` ;

CREATE TABLE IF NOT EXISTS `n02704859_db`.`Employees` (
  `id` INT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  `Users_id` INT NOT NULL,
  INDEX `fk_Employees_Users1_idx` (`Users_id` ASC),
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Employees_Users1`
    FOREIGN KEY (`Users_id`)
    REFERENCES `n02704859_db`.`User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `n02704859_db`.`Administrators`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `n02704859_db`.`Administrators` ;

CREATE TABLE IF NOT EXISTS `n02704859_db`.`Administrators` (
  `id` INT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  `Users_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Administrators_Users1_idx` (`Users_id` ASC),
  CONSTRAINT `fk_Administrators_Users1`
    FOREIGN KEY (`Users_id`)
    REFERENCES `n02704859_db`.`User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `n02704859_db`.`Suggested_Products`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `n02704859_db`.`Suggested_Products` ;

CREATE TABLE IF NOT EXISTS `n02704859_db`.`Suggested_Products` (
  `id` INT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  `Keywords_id` INT NOT NULL,
  `Product_Categories_id` INT NOT NULL,
  `Product_id_id` INT NOT NULL,
  `Product_Keywords_id` INT NOT NULL,
  `Products_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Suggested_Products_Keywords1_idx` (`Keywords_id` ASC),
  INDEX `fk_Suggested_Products_Product_Categories1_idx` (`Product_Categories_id` ASC),
  INDEX `fk_Suggested_Products_Product_id1_idx` (`Product_id_id` ASC),
  INDEX `fk_Suggested_Products_Product_Keywords1_idx` (`Product_Keywords_id` ASC),
  INDEX `fk_Suggested_Products_Products1_idx` (`Products_id` ASC),
  CONSTRAINT `fk_Suggested_Products_Keywords1`
    FOREIGN KEY (`Keywords_id`)
    REFERENCES `n02704859_db`.`Keywords` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Suggested_Products_Product_Categories1`
    FOREIGN KEY (`Product_Categories_id`)
    REFERENCES `n02704859_db`.`Product_Categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Suggested_Products_Product_id1`
    FOREIGN KEY (`Product_id_id`)
    REFERENCES `n02704859_db`.`Product_id` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Suggested_Products_Product_Keywords1`
    FOREIGN KEY (`Product_Keywords_id`)
    REFERENCES `n02704859_db`.`Product_Keywords` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Suggested_Products_Products1`
    FOREIGN KEY (`Products_id`)
    REFERENCES `n02704859_db`.`Products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
