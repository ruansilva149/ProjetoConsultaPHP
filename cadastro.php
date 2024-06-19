<?php

require_once "header.php";
require_once "navBarLogin.php";

// Inicia a sessão caso ainda não foi iniciada
session_start();

// Verifica se a variável de sessão que indica o login está definida
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Se não estiver logado, redireciona para a página de login ou outra página de sua escolha
    header('Location: login.php');
    exit;
}

?>


<form class="px-4 py-3" method="POST" action="acao.php" onsubmit="return validarFormulario()">
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
    <input type="text" class="form-control" name="cpf" id="cpf" required placeholder="Informe seu CPF" data-mask="000.000.000-00">
  </div>

  <div class="mb-3">
    <label for="cel" class="form-label">Celular</label>
    <input type="tel" class="form-control" name="celular" required id="cel" placeholder="(__) _____-____" data-mask="(00) 00000-0000">
  </div>

  <div class="mb-3">
    <label for="data_nasc" class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control" name="data_nasc" required id="data_nasc" placeholder="Insira sua data de nascimento">
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

<?php

require_once "footer.php";

?>