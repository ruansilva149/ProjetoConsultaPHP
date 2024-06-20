<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-body">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Nome da Clínica</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Médicos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Serviços</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pacientes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="formAgenda.php">Agendar Consulta</a></li>
            <li><a class="dropdown-item" href="consultas.php">Histórico de Consultas</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre</a>
        </li>
      </ul>
      <?php //menu?>
      <div class="dropdown">
  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
    Menu
  </button>
  <ul class="dropdown-menu bg-danger">
    <li><a class="dropdown-item" href="home.php?logout=1">Logout</a></li>
  </ul>
  </nav>