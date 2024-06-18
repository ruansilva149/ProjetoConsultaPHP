create database consultadb;
use consultadb;

CREATE TABLE usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    email VARCHAR(25) UNIQUE not null,
    cpf VARCHAR (14) UNIQUE not null,
    celular varchar (15) not null,
    data_nasc date null,
	sexo ENUM('M', 'F', 'Outro') not null,
    senha VARCHAR(20)not null
);

drop table usuario;

CREATE TABLE consulta (
	id_consulta int primary key auto_increment,
    nome_consulta varchar(50) not null,
    email_consulta varchar(25) not null,
    celular_consulta varchar(11) not null,
    data_hora DATETIME not null,
    especialidade ENUM('Clínico Geral', 'Dermatologista', 'Psicológo', 'Dentista', 'Urologista') not null
);

select * from usuario;
INSERT INTO usuario (nome, email, cpf, celular, data_nasc, sexo, senha) 
VALUES ('Teste', 'teste@example.com', '123.456.789-00', '(11) 91234-5678', '1990-01-01', 'M', 'senha1234');
SELECT id_usuario FROM usuario WHERE email = 'teste@example.com' AND senha = 'senha1234';
