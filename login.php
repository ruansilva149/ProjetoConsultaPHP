<?php

require_once "header.php"

?>

  <form class="px-4 py-3" method="POST" action="acao.php">
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" name="email" id="exampleDropdownFormEmail1" placeholder="email@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" name="senha" id="exampleDropdownFormPassword1" placeholder="Password">
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
          Lembrar-me
        </label>
      </div>
    </div>
<div class="text-center">
<button type="submit" class="btn btn-primary">Sign in</button>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="cadastro.php">Novo por aqui? Registre-se</a>
  <a class="dropdown-item" href="#">Forgot password?</a>
  </div>


<?php

require_once "footer.php";

?>