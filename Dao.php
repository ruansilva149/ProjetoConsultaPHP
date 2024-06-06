<?php

class Dao{

private $dsn = "mysql:host=192.168.8.10;dbname=grupo09php";
private $username = "grupophp09";
private $password = "php09";
private $pdo;

public function conectar(){
    $this->pdo = new PDO($this->dsn, $this->username, $this->password);

}

public function insertLogin($nome, $senha, $email, $cpf, $Data_nasc, $sexo){
    try{
        $stmt = $this->pdo->query("insert into usuario values ('$nome', '$email', '$cpf', '$senha', '$Data_nasc', '$sexo')");
    } catch (PDOException $ex){
        echo "<pre>";
        echo $this->pdo->errorInfo()[2];

    }    
}

public function listar(){
    $stmt = $this->pdo->query("SELECT * FROM usuario");
while ($aluno = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $aluno['usuario'] . " - " . $aluno['senha'] . "<br>";
}
}
}

?>