USE iaw_db;
CREATE TABLE clientes (
codigo integer primary key,
nombre varchar(32),
apellidos varchar(32),
direccion varchar(64),
fechaNacimiento date
);