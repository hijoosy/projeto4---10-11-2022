create database projeto4;

use projeto4;

create table cliente(
    idcliente int primary key auto_increment,
    nome varchar (40) not null,
     email varchar (40) not null,
     telefone varchar (14) not null,
    dtcadastro date
);
insert into cliente values(null, 'ana','ana@gmail.com', '4444-5555', '2022-11-10');

select * from cliente;
