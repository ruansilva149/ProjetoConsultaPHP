<?php
require_once "header.php";
require_once "Dao.php";

$dao = new Dao();

session_start();

// Esse if verifica se o formulário de agendamento de consulta foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'agendar_consulta') {
    // Esse eu verifico se todos os campos foram enviados
    if (isset($_POST['nome'], $_POST['email'], $_POST['celular'], $_POST['datahora'], $_POST['especialidade'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $datahora = $_POST['datahora'];
        $especialidade = $_POST['especialidade'];

        // acessando o método se inserção de dados no banco
        if ($dao->insertConsulta($nome, $email, $celular, $datahora, $especialidade)) {
            $_SESSION['success_message'] = "Consulta marcada com sucesso.";
        } else {
            $_SESSION['error_message'] = "Erro ao agendar consulta. Por favor, ajuste os dados e tente novamente.";
        }
    } else {
        $_SESSION['error_message'] = "Por favor, preencha todos os campos do formulário de consulta.";
    }
}

// Esse if verifica se o formulário de agendamento de consulta foi enviado
elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'cadastrar_usuario') {
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
}

require_once "footer.php";
?>

<?php require_once "header.php"; ?>
<?php require_once "navBarLogout.php"; ?>

<div class="container">
    <h1 class="my-4">Agendamento de Consultas</h1>
    <?php
    // Exibe mensagens de sucesso ou erro, se existirem
    if (isset($_SESSION['success_message'])) {
        echo '<div class="alert alert-success" role="alert">' . $_SESSION['success_message'] . '</div>';
        unset($_SESSION['success_message']); // Limpa a mensagem de sucesso da sessão
    } elseif (isset($_SESSION['error_message'])) {
        echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error_message'] . '</div>';
        unset($_SESSION['error_message']); // Limpa a mensagem de erro da sessão
    }
    ?>
    <p>Conteúdo da página de agendamento de consultas.</p>
</div>

<?php require_once "footer.php"; ?>