CREATE TABLE cliente (
    id_cliente int primary key auto_increment,
    nome varchar(100),
    senha varchar(50)
);

insert into cliente(nome, senha) values ('teste', '1234');