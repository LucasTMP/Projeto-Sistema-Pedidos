use test;

create table usuarios
(
   id int primary key auto_increment,
   login varchar(50),
   senha varchar(20),
   situacao varchar(20)
);

insert into usuarios (login, senha, situacao)
values ('lucio@teste','123456','ATIVO');

insert into usuarios (login, senha, situacao)
values ('nelson@teste','654321','INATIVO');

select * from usuarios;
