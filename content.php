<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-body">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Consultas Médicas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Médicos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Serviços</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pacientes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Agendar Consulta</a></li>
            <li><a class="dropdown-item" href="#">Histórico de Consultas</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Perfil</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>


<?php //inicio formulario>?>
<form method="post" action="">
<h2>Agendar Consulta</h2>
  <nav class="navbar bg-body-tertiary">
      <div class="input-group">
        <span class="input-group-text" id="basic-addon1"></span>
        <input type="text" class="form-control" placeholder="Digite seu nome completo" aria-label="Nome" aria-describedby="basic-addon1">
      </div>
  </nav>

  <nav class="navbar bg-body-tertiary">
      <div class="input-group">
        <span class="input-group-text" id="basic-addon1"></span>
        <input type="email" class="form-control" placeholder="Digite seu e-mail" aria-label="E-mail" aria-describedby="basic-addon1">
      </div>
  </nav>

  <nav class="navbar bg-body-tertiary">
      <div class="input-group">
        <span class="input-group-text" id="basic-addon1"></span>
        <input type="text" class="form-control" placeholder="Digite seu telefone" aria-label="Telefone" aria-describedby="basic-addon1">
      </div>
  </nav>


  <nav class="navbar bg-body-tertiary">
      <div class="input-group">
        <span class="input-group-text" id="basic-addon1"></span>
        <input type="submit" value="Agendar Consulta" class="form-control bg-dark border-bottom border-body" data-bs-theme="dark" aria-describedby="basic-addon1" >
      </div>
  </nav>
</form>
<?php //fim formulario>?>



