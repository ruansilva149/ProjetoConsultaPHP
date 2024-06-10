<?php

require_once "header.php";
require_once "navBarLogin.php";
?>

<form class="px-4 py-3" method="POST" action="acao.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Endereço de e-mail</label>
    <input type="email" placeholder="email@example.com" class="form-control" id="" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password" name="senha" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="cadastro.php">Novo por aqui? Registre-se</a>
  <a class="dropdown-item" href="#">Forgot password?</a>
  </div>
</div>

<?php

require_once "footer.php";

?>