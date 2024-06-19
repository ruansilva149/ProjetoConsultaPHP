<?php

class Dao {
    private $dsn = "mysql:host=192.168.8.10;dbname=grupo09php";
    private $username = "grupophp09";
    private $password = "php09";
    private $pdo; // Objeto PDO

    public function __construct() {
        try {
            $this->pdo = new PDO($this->dsn, $this->username, $this->password);

        } catch (PDOException $e) {

            echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
            die(); 
        }
    }
// private $dsn = "mysql:host=localhost;dbname=consultadb";
// private $username = "root";
// private $password = "";
// private $pdo;


public function insertCadastro($nome, $email, $cpf, $celular, $data_nasc, $sexo ,$senha){
    try{
        $stmt = $this->pdo->query("insert into usuario values (null, '$nome', '$email', '$cpf', '$celular',  '$data_nasc', '$sexo', '$senha')");
    } catch (PDOException $ex){
        echo "<pre>";
        echo $this->pdo->errorInfo()[2];

    }    
}

public function listarConsultas($usuario_id) {
    $sql = "SELECT * FROM consulta WHERE usuario_id = :usuario_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([':usuario_id' => $usuario_id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


public function insertConsulta ($nome, $email, $celular, $datahora, $especialidade){
    try{
        $stmt = $this->pdo->query("insert into consulta values (null, null,'$nome', '$email', '$celular', '$datahora', '$especialidade')");
        return $stmt;
    } 
    catch (PDOException $ex){
        echo "<pre>";
        echo $this->pdo->errorInfo()[2];

    }    
}
}

function validarCredenciais($email, $senha) {
    $dsn = 'mysql:host=localhost;dbname=consultadb';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Preparar a consulta SQL para verificar as credenciais
        $stmt = $pdo->prepare('SELECT id_usuario FROM usuario WHERE email = :email AND senha = :senha');
        $stmt->execute(array(
            ':email' => $email,
            ':senha' => $senha // Sem criptografia
        ));

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
        echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
        return false;
    }
}

?>