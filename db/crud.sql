create database crud;
use crud;

create table pessoa (
id int(10) not null auto_increment primary key,
nome varchar(65) not null,
cpf varchar(11) not null
); 

create table contato (
id_contato int(10) not null auto_increment primary key,
tipo boolean not null,
descricao varchar(200) not null,
id_pessoa int(10) not null
); 
