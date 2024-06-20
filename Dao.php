<?php

class Dao
{
    private $pdo;

    // // Configurações de conexão

    private $dsn = "mysql:host=localhost;dbname=grupo09php";
    private $username = "grupophp09";
    private $password = "php09";


    public function __construct()
    {
        try {
            $this->pdo = new PDO($this->dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
            die();
        }
    }

    public function insertCadastro($nome, $email, $cpf, $celular, $data_nasc, $sexo ,$senha){
        try{
            $stmt = $this->pdo->query("insert into usuario values (null, '$nome', '$email', '$cpf', '$celular',  '$data_nasc', '$sexo', '$senha')");
        } catch (PDOException $ex){
            echo "<pre>";
            echo $this->pdo->errorInfo()[2];
        }    
    }

    public function listarConsultas($usuario_id)
    {
        try {
            $sql = "SELECT * FROM consulta WHERE usuario_id = :usuario_id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':usuario_id' => $usuario_id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "Erro ao listar consultas: " . $ex->getMessage();
            return [];
        }
    }

public function insertConsulta ($nome, $email, $celular, $datahora, $especialidade){
    try{
        $stmt = $this->pdo->query("insert into consulta values (null,'$nome', '$email', '$celular', '$datahora', '$especialidade')");
        $stmt = $this->pdo->query("insert into consulta values (null, null,'$nome', '$email', '$celular', '$datahora', '$especialidade')");
        return $stmt;
    } 
    catch (PDOException $ex){
        echo "<pre>";
        echo $this->pdo->errorInfo()[2];
    }    
}

public function validarCredenciais($email, $senha)
{
    try {
        $sql = "SELECT id_usuario FROM usuario WHERE email = :email AND senha = :senha";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':email' => $email,
            ':senha' => $senha
        ]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Depuração: Verifique o resultado da consulta
        var_dump($row);

        if ($row) {
            // Se encontrar o usuário com as credenciais válidas
            return true;
        } else {
            // Se não encontrar o usuário ou as credenciais não forem válidas
            echo 'Credenciais inválidas.';
            return false;
        }
    } catch (PDOException $e) {
        // Tratar erros de conexão ou consultas aqui
        echo 'Erro ao validar credenciais: ' . $e->getMessage();
        return false;
    }
}
}
?>
