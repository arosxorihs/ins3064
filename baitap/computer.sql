USE `LoginReg`;

CREATE TABLE IF NOT EXISTS `table2` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `brand` VARCHAR(100) NOT NULL,
  `model` VARCHAR(100) NOT NULL,
  `processor` VARCHAR(100) NOT NULL,
  `ram_size` VARCHAR(50) NOT NULL,
  `storage_size` VARCHAR(50) NOT NULL,
  `price` INT(10) NOT NULL,
  `stock_quantity` INT(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
INSERT INTO `table2` (`brand`, `model`, `processor`, `ram_size`, `storage_size`, `price`, `stock_quantity`) VALUES
('Dell', 'Inspiron 15', 'Intel Core i5', '8GB', '512GB SSD', 650, 10),
('HP', 'Pavilion 14', 'Intel Core i7', '16GB', '1TB SSD', 950, 5),
('Apple', 'MacBook Air', 'Apple M1', '8GB', '256GB SSD', 999, 8),
('Lenovo', 'ThinkPad X1', 'Intel Core i7', '16GB', '512GB SSD', 1200, 3);
