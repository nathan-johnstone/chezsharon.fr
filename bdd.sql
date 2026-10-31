CREATE DATABASE IF NOT EXISTS shop CHARSET utf8mb4;
USE shop;

CREATE TABLE IF NOT EXISTS `role`(
	id_role INT PRIMARY KEY AUTO_INCREMENT,
	`name` VARCHAR(20) NOT NULL UNIQUE
)ENGINE=innoDB;

INSERT INTO `role`(`name`) VALUES ('Admin'),('User');

CREATE TABLE IF NOT EXISTS `user`(
	id_user INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL UNIQUE,
    `password` VARCHAR(100) NOT NULL,
	address VARCHAR(50),
    post_code VARCHAR(5),
    city VARCHAR(50),
    created_at DATETIME NOT NULL DEFAULT NOW(),
    role_id INT NOT NULL DEFAULT 2,
	CONSTRAINT fk_user_role FOREIGN KEY (role_id) REFERENCES `role`(id_role)
)ENGINE=innoDB;

INSERT INTO `user`(first_name, last_name, email, `password`, role_id) VALUES ('Nathan', 'Johnstone', 'nathan@bricarosa.fr', '$2y$10$cSbX3nSYSH74Dj.UsYME7uogNu/4c1WxcYM5vNfpSmOoOCO1qk5C6', 1); -- password = 1

CREATE TABLE IF NOT EXISTS category(
	id_category INT PRIMARY KEY AUTO_INCREMENT,
	`name` VARCHAR(100) UNIQUE NOT NULL
)ENGINE=innoDB;

INSERT INTO category(`name`) VALUES ('Vêtements'),('Cadeaux');

CREATE TABLE IF NOT EXISTS product(
	id_product INT PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(100) NOT NULL,
    `description` TEXT,
    price DECIMAL(5,2),
    discount_price DECIMAL(5,2),
    barcode INT,
    stock INT,
    image VARCHAR(255)
)ENGINE=innoDB;

CREATE TABLE banner(
   id_banner INT PRIMARY KEY AUTO_INCREMENT,
   `text` VARCHAR(255) NOT NULL,
   start_date DATETIME NOT NULL,
   end_date DATETIME,
)ENGINE=innoDB;

CREATE TABLE opening_hours(
   id_opening_hours INT PRIMARY KEY AUTO_INCREMENT,
   `day` VARCHAR(10) UNIQUE NOT NULL,
   am_start TIME,
   am_end TIME,
   am_is_closed BOOL NOT NULL DEFAULT true,
   pm_start VARCHAR(50),
   pm_end VARCHAR(50),
   pm_is_closed BOOL NOT NULL DEFAULT true,
   PRIMARY KEY(id_opening_hours)
)ENGINE=innoDB;

INSERT INTO opening_hours(`day`) VALUES ('Monday'),('Tuesday'),('Wedensday'),('Thursday'),('Friday'),('Saturday'),('Sunday');

CREATE TABLE IF NOT EXISTS wishlist(
id_user INT,
id_product INT,
PRIMARY KEY(id_user, id_product),
CONSTRAINT fk_to_wishlist_user FOREIGN KEY(id_user) REFERENCES `user`(user_id) ON DELETE CASCADE,
CONSTRAINT fk_to_wishlist_product FOREIGN KEY(id_product) REFERENCES product(product_id) ON DELETE CASCADE
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS product_category(
id_product INT,
id_category INT,
PRIMARY KEY(id_product, id_category),
CONSTRAINT fk_to_categorize_product FOREIGN KEY(id_product) REFERENCES product(product_id) ON DELETE CASCADE,
CONSTRAINT fk_to_categorize_category FOREIGN KEY(id_category) REFERENCES category(category_id) ON DELETE CASCADE
)ENGINE=innoDB;