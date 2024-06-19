<?php
require_once "Dao.php"; 
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    
    if (validarCredenciais($email, $senha)) {
        $_SESSION['loggedin'] = true;
        header('Location: formAgenda.php');
        exit;
    } else {
        $erroLogin = "Credenciais inválidas. Por favor, tente novamente.";
    }
}
?>

<?php require_once "header.php"; ?>
<?php require_once "navBarLogin.php"; ?>

<form class="px-4 py-3" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Endereço de e-mail</label>
        <input type="email" placeholder="email@example.com" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Nunca compartilharemos seu email com ninguém.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Senha</label>
        <input type="password" class="form-control" placeholder="Senha" name="senha" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
    </div>
    <button type="submit" class="btn btn-primary">Entrar</button>
</form>

<?php
if (isset($erroLogin)) {
    echo '<div class="alert alert-danger mt-3" role="alert">' . $erroLogin . '</div>';
}
?>

<div class="dropdown-divider"></div>
<a class="dropdown-item" href="cadastro.php">Novo por aqui? Registre-se</a>
<a class="dropdown-item" href="#">Esqueceu a senha?</a>

<?php require_once "footer.php"; ?>