<?php
require_once "Dao.php"; 
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nome'], $_POST['email'], $_POST['cpf'], $_POST['celular'], $_POST['data_nasc'], $_POST['sexo'], $_POST['senha'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $celular = $_POST['celular'];
        $data_nasc = $_POST['data_nasc'];
        $sexo = $_POST['sexo'];
        $senha = $_POST['senha'];

        // Insere o cadastro no banco de dados
        if ($dao->insertCadastro($nome, $email, $cpf, $celular, $data_nasc, $sexo, $senha)) {
            // Define uma mensagem de sucesso na sessão
            $_SESSION['success_message'] = "Cadastro realizado com sucesso.";
            header('Location: login.php');
            exit;
        } else {
            // Se houver erro ao inserir cadastro, define uma mensagem de erro na sessão
            $_SESSION['error_message'] = "Erro ao cadastrar usuário. Por favor, ajuste os dados e tente novamente.";
        }
    } else {
        // Se algum campo estiver faltando, define uma mensagem de erro na sessão
        $_SESSION['error_message'] = "Por favor, preencha todos os campos do formulário de cadastro.";
    }
}
?>

<?php require_once "header.php"; ?>
<?php require_once "navBarLogin.php"; ?>

<div class="container mt-5">
    <form class="px-4 py-3" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" required name="nome" id="nome" placeholder="Digite aqui seu nome completo">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" required placeholder="Insira seu e-mail">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf" required placeholder="Informe seu CPF">
        </div>
        <div class="mb-3">
            <label for="cel" class="form-label">Celular</label>
            <input type="tel" class="form-control" name="celular" required id="cel" placeholder="(__) _____-____">
        </div>
        <div class="mb-3">
            <label for="data_nasc" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" name="data_nasc" required id="data_nasc">
        </div>
        <div class="mb-3">
            <label for="sexo" class="form-label">Informe seu sexo</label>
            <input list="sexoid" name="sexo" class="form-control" id="sexo" placeholder="Sexo">
            <datalist id="sexoid">
                <option value="M">
                <option value="F">
                <option value="Outro">
            </datalist>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" required class="form-control" name="senha" id="senha" placeholder="Digite sua senha">
        </div>
        <div class="mb-3">
            <label for="confirma_senha" class="form-label">Confirmar a senha</label>
            <input type="password" required class="form-control" name="confirm_senha" id="confirma_senha" placeholder="Confirme sua senha">
        </div>
        <p id="mensagem"></p>
        <button type="submit" class="btn btn-success">Registrar</button>
    </form>
</div>

<script>
  $(document).ready(function() {
    $('#cpf').mask('000.000.000-00');
    $('#cel').mask('(00) 00000-0000');
  });

  function validarFormulario() {
    var senha = document.getElementById("senha").value;
    var confirmacaoSenha = document.getElementById("confirma_senha").value;
    var mensagem = document.getElementById("mensagem");

    if (senha !== confirmacaoSenha) {
      mensagem.innerText = "As senhas não são iguais.";
      return false; 
    }

    if (senha.length < 8) {
      mensagem.innerText = "A senha deve ter pelo menos 8 caracteres.";
      return false; 
    }

    mensagem.innerText = "";
    return true; 
  }

  document.getElementById('sexo').addEventListener('input', function() {
    var input = this.value;
    var options = document.getElementById('sexoid').getElementsByTagName('option');
    var encontrado = false;
    
    for (var i = 0; i < options.length; i++) {
        if (input === options[i].value) {
            encontrado = true;
            break;
        }
    }
    
    if (!encontrado) {
        this.setCustomValidity('Por favor, escolha uma das opções da lista.');
    } else {
        this.setCustomValidity('');
    }
});
</script>

<?php require_once "footer.php"; ?>
