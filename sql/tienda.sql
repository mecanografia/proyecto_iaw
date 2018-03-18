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
  FOREIGN KEY (codigo_fabricante) REFERENCES fabricante(codigo)
);

INSERT INTO usuario VALUES (1, 'usuario@usuario.es', 'f8032d5cae3de20fcec887f395ec9a6a', 'Usuario');
INSERT INTO fabricante VALUES (1, 'HP');
INSERT INTO fabricante VALUES (2, 'LG');
INSERT INTO fabricante VALUES (3, 'LOGITECH');
INSERT INTO fabricante VALUES (4, 'APPLE');
INSERT INTO fabricante VALUES (5, 'MSI');
INSERT INTO producto(nombre, precio, codigo_fabricante, imagen, descripcion) 
VALUES('HP PAVILION dv6-1125es', '729.95', 1, '../images/1.jpg','HP PAVILION dv6-1125es PC portatil que fue el primero que me salio en google');

INSERT INTO producto(nombre, precio, codigo_fabricante, imagen, descripcion) 
VALUES('BARRA DE SONIDO LG SH2', '99', 2, '../images/2.jpg','BARRA DE SONIDO LG SH2 de 300W que ruge de vicio!!');

INSERT INTO producto(nombre, precio, codigo_fabricante, imagen, descripcion) 
VALUES('RATON LOGITECH INALAMBRICO M185', '12.99', 3, '../images/3.jpg','RATON LOGITECH INALAMBRICO M185 el mismo raton que tengo yo');

INSERT INTO producto(nombre, precio, codigo_fabricante, imagen, descripcion) 
VALUES('MACBOOK AIR', '869', 4, '../images/4.jpg','MACBOOK AIR el unico portatil de Apple que conozco');

INSERT INTO producto(nombre, precio, codigo_fabricante, imagen, descripcion) 
VALUES('IMPRESORA HP DESKJET F2480', '49.90','1', '../images/5.png','IMPRESORA HP DESKJET F2480 la misma que tengo en mi casa y que no imprime nada en casi 1 decada');

INSERT INTO producto(nombre, precio, codigo_fabricante, imagen, descripcion) 
VALUES('TARJETA GRAFICA NVIDIA GTX 1050', '459.80',5, '../images/6.jpg','TARJETA GRAFICA NVIDIA GTX 1050 una buena grafica');

