CREATE DATABASE crud_contatos;

create table contatos (
id int unsigned auto_increment primary key,
nome varchar(80) not null,
telefone varchar(20) default null,
email varchar(80) default null
);

-- Criação da Tabela Usuario

CREATE TABLE usuario( 
 usuario_id  INT(255) NOT NULL AUTO_INCREMENT, 
 nome  VARCHAR(80) NOT NULL, 
 email  VARCHAR(80) NOT NULL, 
 senha  VARCHAR(255) NOT NULL, 
 dt_criacao  DATE NOT NULL, 
 dt_update  DATE, 
 ativo  INT(2) NOT NULL, 
PRIMARY KEY ( usuario_id ));