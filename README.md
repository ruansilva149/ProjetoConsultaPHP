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
    email VARCHAR(25) UNIQUE,
    cpf int (11) UNIQUE,
    senha VARCHAR(20),
    data_nascimento DATE,
    sexo ENUM('M', 'F', 'Outro')
);

CREATE TABLE consulta (
    id_consulta INT PRIMARY KEY AUTO_INCREMENT,
    data_hora DATETIME,
    observacoes TEXT,
    fk_usuario int,
    FOREIGN KEY (fk_usuario) REFERENCES usuario(id_usuario)
   
);


