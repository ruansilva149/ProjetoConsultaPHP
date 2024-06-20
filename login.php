<?php
require_once "Dao.php";
require_once "header.php"; 
require_once "navBarLogin.php"; 

session_start();

$dao = new Dao();

// Verifica se o formulário foi enviado
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($dao->validarCredenciais($email, $senha)) {
        $_SESSION['loggedin'] = true;
        header('Location: homeLogin.php');
        exit;
    } else {
        $erroLogin = "Credenciais inválidas. Por favor, tente novamente.";
    }
}
?>

<div class="container mt-5">
    <form class="px-4 py-3" method="POST" action="testLogin.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Endereço de e-mail</label>
            <input type="email" placeholder="email@example.com" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text">Nunca compartilharemos seu email com ninguém.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" placeholder="Senha" name="senha" id="exampleInputPassword1" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Entrar</button>
    </form>

    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="cadastro.php">Novo por aqui? Registre-se</a>
</div>

<?php require_once "footer.php"; ?>
