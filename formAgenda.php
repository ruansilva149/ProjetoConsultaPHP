<?php
  require_once "header.php";
?>

<?php
      require_once "navBarLogout.php";
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
      <input type="number" name="telefone" class="form-control" placeholder="Digite seu telefone" aria-label="Telefone" aria-describedby="basic-addon1">
    </div>
  </nav>


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
