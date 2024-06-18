<?php

require_once "header.php";
require_once "Dao.php";



// Inicializar o objeto Dao
$dao = new Dao();

// Verificar se os dados do formulário de consulta foram enviados
if (isset($_POST['nome'], $_POST['email'], $_POST['celular'], $_POST['datahora'], $_POST['especialidade'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $datahora = $_POST['datahora'];
    $especialidade = $_POST['especialidade'];

    $dao->insertConsulta($nome, $email, $celular, $datahora, $especialidade);
    echo "Consulta inserida com sucesso.";
}

// Verificar se os dados do formulário de cadastro foram enviados
elseif (isset($_POST['nome'], $_POST['email'], $_POST['cpf'], $_POST['celular'], $_POST['data_nasc'], $_POST['sexo'], $_POST['senha'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $celular = $_POST['celular'];
    $data_nasc = $_POST['data_nasc'];
    $sexo = $_POST['sexo'];
    $senha = $_POST['senha'];
    $dao->insertCadastro($nome, $email, $cpf, $celular, $data_nasc, $sexo, $senha);
    echo "Cadastro inserido com sucesso.";
    
}

else {
    echo "Nenhum dado enviado ou dados incompletos.";
}

require_once "footer.php";

?>

