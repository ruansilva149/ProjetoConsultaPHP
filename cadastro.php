<?php

require_once "header.php";
require_once "navBarLogin.php";
?>

  <form class="px-4 py-3" method="POST" action="acao.php">
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label">Nome Completo</label>
      <input type="text" class="form-control" name="nome" id="exampleDropdownFormEmail1" placeholder="Digite aqui seu nome completo">
    </div>

    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label">E-mail</label>
      <input type="email" class="form-control" name="email" id="exampleDropdownFormEmail1" required placeholder="Insira seu e-mail">
    </div>

    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label">CPF</label>
      <input type="date" class="form-control" name="cpf" id="exampleDropdownFormEmail1" required placeholder="Informe seu CPF">
    </div>
    <script>
    var phoneInput = document.getElementByName('celular');
        Inputmask("(99) 99999-9999").mask(phoneInput);
        </script>
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label">Celular</label>
      <input type="tel" class="form-control" name="celular" required id="exampleDropdownFormEmail1" placeholder="(__) _____-____">
    </div>

    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label">Telefone</label>
      <input type="number" class="form-control" name="telefone" required id="exampleDropdownFormEmail1" placeholder="(__) _____-____">
    </div>


    <div class="mb-3">
      <label for="exampleDropdownFormPassword1" class="form-label">Senha</label>
      <input type="password" required class="form-control" name="senha" id="exampleDropdownFormPassword1" placeholder="Digite sua senha">
    </div>

    <div class="mb-3">
      <label for="exampleDropdownFormPassword1" class="form-label">Confirmar a senha</label>
      <input type="password" required class="form-control" name="confirmsenha" id="exampleDropdownFormPassword1" placeholder="Confirme sua senha">
    </div>

    <div class="mb-3">
      <label for="exampleDropdownFormPassword1" class="form-label">Informe seu sexo</label>
      <input list="sexo" name="sexo" class="form-control" placeholder="Sexo" aria-describedby="basic-addon1">

      <datalist id="sexoid">
        <option value="Masculino">
        <option value="Feminino">
        <option value="Outro">
      </datalist>
    </div>

    </div>
    <button type="submit" class="btn btn-success">Registrar</button>
  </form>


<?php

require_once "footer.php";

?>