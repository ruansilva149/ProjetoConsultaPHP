Objetivo é fazer um site como um template voltado para instituições da área da saúde, tendo como principal função a administração das consultas marcadas e que irão ser marcadas.

Funcionalidades:
- login: usuário e senha/ cadastro funcional
- home: Conteudo, 
- marcar consulta
- agendar consulta
- histoŕico de consultas
--------------------------
  Se der tempo
   Escolher hospital
   Área de atuação da consulta
  ----------------------------
-- Tabela Usuários
CREATE TABLE usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    email VARCHAR(25) UNIQUE not null,
    cpf int (11) UNIQUE not null,
    celular int (11) not null,
    data_nascimento DATE not null,
    sexo ENUM('M', 'F', 'Outro' not null),
    senha VARCHAR(20)not null,
);

CREATE TABLE consulta (
    nome_consulta varchar(50) not null,
    email_consulta varchar(25) not null,
    celular_consulta varchar(11) not null,
    data_hora DATETIME not null,
    especialidade ENUM('Clínico Geral', 'Dermatologista', 'Psicológo', 'Dentista', 'Urologista') not null
);


