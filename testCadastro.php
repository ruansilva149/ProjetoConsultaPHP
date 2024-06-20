<?php
require_once "header.php";
require_once "Dao.php";

$dao = new Dao();

session_start();


// Esse eu verifico se todos os campos foram enviados
    if (isset($_POST['nome'], $_POST['email'], $_POST['cpf'], $_POST['celular'], $_POST['data_nasc'], $_POST['sexo'], $_POST['senha'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $celular = $_POST['celular'];
        $data_nasc = $_POST['data_nasc'];
        $sexo = $_POST['sexo'];
        $senha = $_POST['senha'];

        // acessando o método se inserção de dados no banco
        if ($dao->insertCadastro($nome, $email, $cpf, $celular, $data_nasc, $sexo, $senha)) {
            $_SESSION['success_message'] = "Cadastro realizado com sucesso.";
        } else {
            $_SESSION['error_message'] = "Erro ao cadastrar usuário. Por favor, ajuste os dados e tente novamente.";
        }
    } else {
        $_SESSION['error_message'] = "Por favor, preencha todos os campos do formulário de cadastro.";
    }


?>

<?php require_once "header.php"; ?>
<?php require_once "navBarLogin.php"; ?>

<div class="container">
    <h1 class="my-4">Cadastro realizado com sucesso!</h1>

</div>

<?php require_once "footer.php"; ?>