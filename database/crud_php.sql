CREATE DATABASE IF NOT EXISTS crud_php;

USE crud_php;

CREATE TABLE usuarios(
      id int primary key AUTO_INCREMENT,
      dni int,
      nombre varchar(100),
      cargo varchar(100),
      telefono int,
      salario int
);