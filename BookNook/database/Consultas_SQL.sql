-- CREACIÓN DE LA BASE DE DATOS

CREATE DATABASE IF NOT EXISTS bdlibros;
USE bdlibros;

-- CREACIÓN DE TABLAS Y SUS RELACIONES

CREATE TABLE usuarios (
	username VARCHAR(12) PRIMARY KEY,
	email VARCHAR(255) NOT NULL,
	contraseña VARCHAR(32) NOT NULL,
	direccion VARCHAR(200) NOT NULL,
	telefono VARCHAR(200) NOT NULL);
	
CREATE TABLE libros (
	isbn VARCHAR(100) PRIMARY KEY,
	nombre VARCHAR(100) NOT NULL,
	genero VARCHAR(45) NOT NULL,
	num_pags INT NOT NULL,
	idioma VARCHAR(45) NOT NULL,
	fecha_publicacion VARCHAR(100) NOT NULL,
	precio DECIMAL NOT NULL,
	vendido BOOL DEFAULT(0) NOT NULL,
	username_vendedor VARCHAR(12) NOT NULL,
	username_comprador VARCHAR(12) NULL,
	FOREIGN KEY(username_vendedor) REFERENCES usuarios(username),
	FOREIGN KEY(username_comprador) REFERENCES usuarios(username) ON DELETE SET NULL);

-- ELIMINACIÓN DE BASE DE DATOS

DROP DATABASE IF EXISTS bdlibros;

-- AGREGAR USUARIO (cambiar telefono a VARCHAR)

INSERT INTO usuarios (username, email, contraseña, direccion, telefono) VALUES ('David', 'dhervas456@gmail.com', '1234', 'Avda. Alicante', '93049029');
INSERT INTO usuarios (username, email, contraseña, direccion, telefono) VALUES ('Jaime', 'jaime@gmail.com', '1234', 'Avda. Alicante', '63049229');


-- PONER LIBRO A LA VENTA

INSERT INTO libros (isbn, nombre, genero, num_pags, idioma, fecha_publicacion, precio, username_vendedor) 
VALUES('9781234567897', 'El problema de los tres cuerpos', 'Ciencia Ficción', 333, 'Castellano',
'2011-04-02', 15.99, 'David');

INSERT INTO libros (isbn, nombre, genero, num_pags, idioma, fecha_publicacion, precio, username_vendedor) VALUES 
('9788419521200', 'El Halcon de Esparta', 'novela histórica', '496', 'castellano', '2023-03-02', '8.99', 'david');
 
-- ACTUALIZAR LIBRO

UPDATE libros SET precio=23 WHERE isbn='9788413147628';

-- COMPRAR LIBRO

UPDATE libros SET vendido=1, username_comprador = 'david' WHERE isbn='6721254572817';

-- ELIMINAR LIBRO

DELETE FROM libros WHERE isbn='9788413147628' AND username_vendedor='david';

-- MOSTRAR LIBROS A LA VENTA

SELECT isbn,nombre,precio FROM libros WHERE vendido=0;