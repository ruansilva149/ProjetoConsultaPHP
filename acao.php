<?php
require_once "header.php";
require_once "Dao.php";

$dao = new Dao();

session_start();
    // Esse eu verifico se todos os campos de consulta foram enviados
if (isset($_POST['nome'], $_POST['email'], $_POST['celular'], $_POST['datahora'], $_POST['especialidade'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $datahora = $_POST['datahora'];
    $especialidade = $_POST['especialidade'];

    $dao->insertConsulta($nome, $email, $celular, $datahora, $especialidade);

    } else {
    echo "Por favor, preencha todos os campos do formulário de cadastro.";
    }   


?>

<?php require_once "header.php"; ?>
<?php require_once "navBarLogout.php"; ?>

<div class="container">
    <h1 class="my-4">Consulta agendada com sucesso!</h1>

</div>

<?php require_once "footer.php"; ?>