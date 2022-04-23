CREATE DATABASE `ph2103lm1` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

use ph2103lm1;

-- Bảng danh mục

CREATE TABLE IF NOT EXISTS categories (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL UNIQUE,
  status tinyint DEFAULT '1',
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  updated_at date
) ENGINE = InnoDB;

-- Bảng Sản phẩm 
CREATE TABLE IF NOT EXISTS products (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL UNIQUE,
  image VARCHAR(100) NOT NULL,
  price float NOT NULL,
  sale_price float NOT NULL,
  descriptions text NULL,
  status tinyint DEFAULT '1',
  category_id int NOT NULL,
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  updated_at date,
  FOREIGN KEY (category_id) REFERENCES categories (`id`)
) ENGINE = InnoDB;

-- Bảng khách hàng
CREATE TABLE IF NOT EXISTS accounts (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  phone VARCHAR(100) NOT NULL UNIQUE,
  address VARCHAR(255) NOT NULL,
  password VARCHAR(100) NOT NULL,
  status tinyint DEFAULT '1',
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  updated_at date
) ENGINE = InnoDB;

-- bảng quản trị

CREATE TABLE IF NOT EXISTS users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(100) NOT NULL,
  status tinyint DEFAULT '1',
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  updated_at date
) ENGINE = InnoDB;

-- bảng đơn hàng
CREATE TABLE IF NOT EXISTS orders (
  id INT PRIMARY KEY AUTO_INCREMENT,
  account_id int NOT NULL,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  address VARCHAR(100) NOT NULL,
  order_note VARCHAR(100) NOT NULL,
  payment_method VARCHAR(100) NULL,
  shipping_method VARCHAR(100) NULL,
  status tinyint DEFAULT '1',
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  updated_at date,
  FOREIGN KEY (account_id) REFERENCES accounts (`id`)
) ENGINE = InnoDB;

-- bảng chi tiết đơn hàng
CREATE TABLE IF NOT EXISTS order_details (
  product_id int NOT NULL,
  order_id int NOT NULL,
  quantity int NOT NULL,
  price float NOT NULL,
  PRIMARY KEY (product_id, order_id),
  FOREIGN KEY (product_id) REFERENCES products (`id`),
  FOREIGN KEY (order_id) REFERENCES orders (`id`)
) ENGINE = InnoDB;
use ph2103lm;
-- bảng tin tức
CREATE TABLE IF NOT EXISTS blogs (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL UNIQUE,
  image VARCHAR(100) NOT NULL,
  descriptions text NULL,
  status tinyint DEFAULT '1',
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  updated_at date
) ENGINE = InnoDB;
-- bảng banner

CREATE TABLE IF NOT EXISTS blogs (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL UNIQUE,
  image VARCHAR(100) NOT NULL,
  descriptions text NULL,
  status tinyint DEFAULT '1',
  prioty tinyint DEFAULT '0',
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  updated_at date
) ENGINE = InnoDB;

use ph2103lm;
INSERT INTO categories (name) VALUES 
('Áo nam'),
('Áo nữ'),
('Áo trẻ em')