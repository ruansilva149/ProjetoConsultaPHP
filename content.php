<?php //navbar>?>
<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</nav>

<?php //inicio formulario>?>
<form method="post" action="">
  <nav class="navbar bg-body-tertiary">
      <div class="input-group">
        <span class="input-group-text" id="basic-addon1"></span>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
      </div>
  </nav>

  <nav class="navbar bg-body-tertiary">
      <div class="input-group">
        <span class="input-group-text" id="basic-addon1"></span>
        <input type="email" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon1">
      </div>
  </nav>

  <nav class="navbar bg-body-tertiary">
      <div class="input-group">
        <span class="input-group-text" id="basic-addon1"></span>
        <input type="text" class="form-control" placeholder="Telefone" aria-label="Telefone" aria-describedby="basic-addon1">
      </div>
  </nav>


  <nav class="navbar bg-body-tertiary">
      <div class="input-group">
        <span class="input-group-text" id="basic-addon1"></span>
        <input type="submit" value="Agendar Consulta" class="form-control" aria-describedby="basic-addon1">
      </div>
  </nav>
</form>
<?php //fim formulario>?>



