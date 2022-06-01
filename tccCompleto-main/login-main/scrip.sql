create database projeto_login;

use projeto_login;

create table usuario(
id_usuario int AUTO_INCREMENT primary key,
nome varchar (32),
telefone varchar(11),
email varchar(42),
senha varchar(30)

)