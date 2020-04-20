-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "category" -------------------------------------
CREATE TABLE `category`( 
	`id` Int NOT NULL,
	`name` Text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`parent_id` Int NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------


-- Dump data of "category" ---------------------------------
INSERT INTO `category`(`id`,`name`,`parent_id`) VALUES 
( '1', 'Компьютеры и периферия', '0' ),
( '2', 'Комплектующие для ПК', '0' ),
( '3', 'Смартфоны и смарт-часы', '0' ),
( '4', 'Телевизоры и медиа', '0' ),
( '5', 'Игры и приставки', '0' ),
( '6', 'Аудиотехника', '0' ),
( '7', 'Фото-видеоаппаратура', '0' ),
( '8', 'Офисная техника и мебель', '0' ),
( '9', 'Компьютерные системы', '1' ),
( '10', 'Периферия', '1' ),
( '11', 'Программное обеспечение и аксессуары', '1' ),
( '12', 'Системные блоки', '9' ),
( '13', 'Моноблоки', '9' ),
( '14', 'Неттопы и компьютеры-флешки', '9' ),
( '15', 'Платформы', '9' ),
( '16', 'Игровые компьютеры', '12' ),
( '17', 'Компьютеры для офиса', '12' ),
( '18', 'Компьютеры для бизнеса', '12' ),
( '19', 'Сенсорные моноблоки', '13' ),
( '20', 'Моноблоки с IPS экраном', '13' ),
( '21', 'Моноблоки с VA экраном', '13' ),
( '22', 'Моноблоки с TN экраном', '13' ),
( '23', 'Основные комплектующие', '2' ),
( '24', 'Хранение данных и охлаждение', '2' );
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


