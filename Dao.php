<?php

class Dao{

// //private $dsn = "mysql:host=192.168.8.10;dbname=grupo09php";
// private $username = "grupophp09";
// private $password = "php09";
// private $pdo;//

private $dsn = "mysql:host=localhost;dbname=consultadb";
private $username = "root";
private $password = "";
private $pdo;

public function __construct(){
    $this->pdo = new PDO($this->dsn, $this->username, $this->password);

}

// public function insertUsuario($nome, $email, $cpf, $senha, $data_nasc, $sexo){
//     try{
//         $stmt = $this->pdo->query("insert into usuario values ('$nome', '$email', '$cpf', '$senha', '$data_nasc', '$sexo')");
//     } catch (PDOException $ex){
//         echo "<pre>";
//         echo $this->pdo->errorInfo()[2];

//     }    
// }

public function insertCadastro($nome, $email, $cpf, $celular, $data_nasc, $sexo ,$senha){
    try{
        $stmt = $this->pdo->query("insert into usuario values (null, '$nome', '$email', '$cpf', '$celular',  '$data_nasc', '$sexo', '$senha')");
    } catch (PDOException $ex){
        echo "<pre>";
        echo $this->pdo->errorInfo()[2];

    }    
}

public function listar(){
    $stmt = $this->pdo->query("Select * from table consulta");
while ($aluno = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $aluno['usuario'] . " - " . $aluno['senha'] . "<br>";
}
}

public function insertConsulta ($nome, $email, $celular, $datahora, $especialidade){
    try{
        $stmt = $this->pdo->query("insert into consulta values (null,'$nome', '$email', '$celular', '$datahora', '$especialidade')");
        return $stmt;
    } 
    catch (PDOException $ex){
        echo "<pre>";
        echo $this->pdo->errorInfo()[2];

    }    
}
}

// Função para validar as credenciais do usuário
function validarCredenciais($email, $senha) {
    // Conexão com o banco de dados - substitua com suas credenciais de conexão
    $dsn = 'mysql:host=localhost;dbname=seu_banco_de_dados';
    $username = 'seu_usuario';
    $password = 'sua_senha';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Preparar a consulta SQL para verificar as credenciais
        $stmt = $pdo->prepare('SELECT id FROM usuarios WHERE email = :email AND senha = :senha');
        $stmt->execute(array(
            ':email' => $email,
            ':senha' => md5($senha) // Exemplo de senha criptografada, ajuste conforme sua lógica de criptografia
        ));

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            // Se encontrar o usuário com as credenciais válidas
            return true;
        } else {
            // Se não encontrar o usuário ou as credenciais não forem válidas
            return false;
        }
    } catch (PDOException $e) {
        // Tratar erros de conexão ou consultas aqui
        echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
        return false;
    }
}

?>