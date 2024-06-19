<?php
  require_once "header.php";
  require_once "navBarLogout.php";

// Inicia a sessão (se ainda não estiver iniciada)
session_start();

// Verifica se a variável de sessão que indica o login está definida
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Se não estiver logado, redireciona para a página de login ou outra página de sua escolha
    header('Location: login.php');
    exit;
}

?>

<?php //inicio formulario>
?>
<form method="post" action="acao.php">
  <h2>Agendar Consulta</h2>
  <nav class="navbar bg-body-tertiary">
    <div class="input-group">
      <span class="input-group-text" id="basic-addon1"></span>
      <input type="text" name="nome" class="form-control" placeholder="Digite seu nome completo" aria-label="Nome" aria-describedby="basic-addon1">
    </div>
  </nav>

  <nav class="navbar bg-body-tertiary">
    <div class="input-group">
      <span class="input-group-text" id="basic-addon1"></span>
      <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail" aria-label="E-mail" aria-describedby="basic-addon1">
    </div>
  </nav>

  <nav class="navbar bg-body-tertiary">
    <div class="input-group">
      <span class="input-group-text" id="basic-addon1"></span>
      <input type="number" name="celular" class="form-control" placeholder="Digite seu celular" aria-label="Celular" aria-describedby="basic-addon1">
    </div>
  </nav>

  <nav class="navbar bg-body-tertiary">
    <div class="input-group">
      <span class="input-group-text" id="basic-addon1"></span>
      <input type="datetime-local" name="datahora" class="form-control" aria-label="datahora" placeholder="Escolha data e hora da sua consulta" aria-describedby="basic-addon1">
    </div>
  </nav>

  <nav class="navbar bg-body-tertiary">
    <div class="input-group">
      <span class="input-group-text" id="basic-addon1"></span>

      <input type="text" list="especialidadedl" id="especialidade" 
 name="especialidade" class="form-control" placeholder="Especialidade" aria-describedby="basic-addon1">

      <datalist id="especialidadedl">
        <option value="Clínico Geral">
        <option value="Dermatologista">
        <option value="Psicológo">
        <option value="Dentista">
        <option value="Urologista">
      </datalist>
    </div>
  </nav>

<script>
document.getElementById('especialidade').addEventListener('input', function() {
    var input = this.value;
    var options = document.getElementById('especialidadedl').getElementsByTagName('option');
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

  <nav class="bg-body-tertiary">
    <div class="enviar">
      <span class="input-group-text" id="basic-addon1"></span>
      <input type="submit" value="Agendar Consulta" class="form-control bg-dark border-bottom border-body" data-bs-theme="dark" aria-describedby="basic-addon1">
    </div>
  </nav>
</form>
<?php //fim formulario>
?>



<?php
  require_once "footer.php";
?>
