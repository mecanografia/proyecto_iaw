DROP DATABASE IF EXISTS tienda;
CREATE DATABASE tienda CHARACTER SET utf8mb4;
USE tienda;

CREATE TABLE usuario (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(128) NOT NULL,
  nombre VARCHAR(128) NOT NULL
);

CREATE TABLE fabricante (
  codigo INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL
);

CREATE TABLE producto (
  codigo INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  precio DOUBLE NOT NULL,
  codigo_fabricante INT UNSIGNED NOT NULL,
  imagen varchar (256),
  descripcion varchar (512),
  link varchar(256),
  FOREIGN KEY (codigo_fabricante) REFERENCES fabricante(codigo)
);

INSERT INTO usuario VALUES (1, 'usuario@usuario.es', 'f8032d5cae3de20fcec887f395ec9a6a', 'Usuario');
INSERT INTO fabricante VALUES (1, 'HP');
INSERT INTO fabricante VALUES (2, 'LG');
INSERT INTO fabricante VALUES (3, 'LOGITECH');
INSERT INTO fabricante VALUES (4, 'APPLE');
INSERT INTO fabricante VALUES (5, 'MSI');
INSERT INTO producto(nombre, precio, codigo_fabricante, imagen, descripcion, link) 
VALUES('HP PAVILION', '729.95', 1, '../images/1.jpg','PC portatil HP Pavilion dv6-1125es', '../links/1.php');
INSERT INTO producto(nombre, precio, codigo_fabricante, imagen, descripcion, link) 
VALUES('BARRA DE SONIDO LG SH2', '99', 2, '../images/2.jpg','Barra de sonido LG SH2', '../links/2.php');
INSERT INTO producto(nombre, precio, codigo_fabricante, imagen, descripcion, link) 
VALUES('RATON LOGITECH INALAMBRICO', '12.99', 3, '../images/3.jpg','Raton optico inalambrico logitech M185', '../links/3.php');
INSERT INTO producto(nombre, precio, codigo_fabricante, imagen, descripcion, link) 
VALUES('MACBOOK AIR', '869', 4, '../images/4.jpg','PC portatil Macbook Air', '../links/4.php');
INSERT INTO producto(nombre, precio, codigo_fabricante, imagen, descripcion, link) 
VALUES('IMPRESORA HP DESKJET F2480', '49.90','1', '../images/5.png','Impresora HP Deskjet F2480', '../links/5.php');
INSERT INTO producto(nombre, precio, codigo_fabricante, imagen, descripcion, link) 
VALUES('GTX 1050', '459.80',5, '../images/6.jpg','Tarjeta grafica Nvidia GTX 1050', '../links/6.php');
