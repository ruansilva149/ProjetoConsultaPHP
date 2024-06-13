<?php

require_once "header.php";
require_once "Dao.php";

//if (isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $datahora = $_POST['datahora'];
    $especialidade = $_POST['especialidade'];

    $dao = new Dao();
    $dao->insertConsulta($nome, $email, $celular, $datahora, $especialidade);
//}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Recupera os dados do formulário
//     $email = $_POST["email"];
//     $senha = $_POST["senha"];
//     var_dump($email, $senha);
    
//     // Exibe os dados cadastrados
//     echo "<h2>Dados Recebidos:</h2>";
//     echo "<p class='text-danger'><strong>Email:</strong> $email</p>";
//     echo "<p><strong>Senha:</strong> $senha</p>";
// } else {
//     echo "<p>Nenhum dado enviado.</p>";
// }

require_once "footer.php";

?>
