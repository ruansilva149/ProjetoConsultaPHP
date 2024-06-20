<?php

class Dao
{
    private $pdo;

    // // Configurações de conexão

    private $dsn = "mysql:host=localhost;dbname=grupo09php";
    private $username = "grupophp09";
    private $password = "php09";

    // private $dsn = "mysql:host=localhost;dbname=consultadb";
    // private $username = "root";
    // private $password = "";


    public function __construct()
    {
        try {
            $this->pdo = new PDO($this->dsn, $this->username, $this->password);     
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// Configurando para lançar exceções em caso de erros
        } catch (PDOException $ex) {
            echo "Erro ao conectar ao banco de dados: " . $ex->getMessage();
            die();
        }
    }

    public function validarCredenciais($email, $senha)
    {
        try {
            $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
            $stmt = $this->pdo->query($sql);

            if ($stmt->rowCount() == 1) {
                    $_SESSION['email'] = $email;
                    $_SESSION['senha'] = $senha;
                    header('Location: homeLogin.php');
                    return true;
                } else {
                    unset($_SESSION['email']);
                    unset($_SESSION['senha']);
                    header('Location: login.php?erro=credenciais_invalidas');
                    return false;
                }

        } catch (PDOException $ex) {
            echo 'Erro ao validar credenciais: ' . $ex->getMessage();
            return false;
        }
    }

    public function insertCadastro($nome, $email, $cpf, $celular, $data_nasc,$sexo, $senha)
    {
        try {
            $sql = "INSERT INTO usuario (nome, email, cpf, celular, data_nasc, sexo, senha) VALUES ('$nome', '$email', '$cpf', '$celular', '$data_nasc', '$sexo','$senha')";
            $stmt = $this->pdo->query($sql);
            return $stmt;
        } catch (PDOException $ex) {
            echo "Erro ao inserir cadastro: " . $ex->getMessage();
        }
    }

    public function insertConsulta($nome, $email, $celular, $datahora, $especialidade)
    {
        try {
            $sql = "INSERT INTO consulta (nome_consulta, email_consulta, celular_consulta, data_hora, especialidade) VALUES ('$nome', '$email', '$celular', '$datahora', '$especialidade')";
            $stmt = $this->pdo->query($sql);
            return $stmt;
        } catch (PDOException $ex) {
            echo "Erro ao inserir consulta: " . $ex->getMessage();
        }
    }


        // public function listarConsultas()
    // {
    //     try {
    //         $sql = "SELECT * FROM consulta WHERE usuario_id = :usuario_id";
    //         $stmt = $this->pdo->prepare($sql);
    //         $stmt->execute([':usuario_id' => $usuario_id]);
    //         return $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     } catch (PDOException $ex) {
    //         echo "Erro ao listar consultas: " . $ex->getMessage();
    //         return [];
    //     }
    // }

}
