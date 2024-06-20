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

    public function insertCadastro($nome, $email, $cpf, $celular, $data_nasc, $sexo, $senha)
    {
        try {
            $sql = "INSERT INTO usuario (nome, email, cpf, celular, data_nasc, sexo, senha) 
                    VALUES (:nome, :email, :cpf, :celular, :data_nasc, :sexo, :senha)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':nome' => $nome,
                ':email' => $email,
                ':cpf' => $cpf,
                ':celular' => $celular,
                ':data_nasc' => $data_nasc,
                ':sexo' => $sexo,
                ':senha' => $senha
            ]);
        } catch (PDOException $ex) {
            echo "Erro ao inserir cadastro: " . $ex->getMessage();
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

    public function insertConsulta($nome, $email, $celular, $datahora, $especialidade)
    {
        try {
            $sql = "INSERT INTO consulta (nome, email, celular, datahora, especialidade) 
                    VALUES (:nome, :email, :celular, :datahora, :especialidade)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':nome' => $nome,
                ':email' => $email,
                ':celular' => $celular,
                ':datahora' => $datahora,
                ':especialidade' => $especialidade
            ]);
        } catch (PDOException $ex) {
            echo "Erro ao inserir consulta: " . $ex->getMessage();
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

            if ($row) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo 'Erro ao validar credenciais: ' . $e->getMessage();
            return false;
        }
    }
}

?>
