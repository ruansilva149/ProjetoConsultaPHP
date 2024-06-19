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
drop table consulta;

CREATE TABLE consulta (
	id_consulta int primary key auto_increment,
    usuario_id int,
    nome_consulta varchar(50) not null,
    email_consulta varchar(25) not null,
    celular_consulta varchar(11) not null,
    data_hora DATETIME not null,
    especialidade ENUM('Clínico Geral', 'Dermatologista', 'Psicológo', 'Dentista', 'Urologista') not null,
    FOREIGN KEY (usuario_id) REFERENCES usuario(id_usuario)
);

select * from usuario;
select * from consulta;

INSERT INTO usuario (nome, email, cpf, celular, data_nasc, sexo, senha) 
VALUES ('Teste', 'teste@exemplo.com', '123.456.789-00', '(11) 91234-5678', '1990-01-01', 'M', 'senha1234');
SELECT id_usuario FROM usuario WHERE email = 'teste@exemplo.com' AND senha = 'senha1234';
