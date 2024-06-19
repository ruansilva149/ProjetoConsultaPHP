<?php
require_once 'header.php';
require_once 'Dao.php';
require_once 'navBarLogout.php';

session_start();
var_dump($_SESSION);
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Se não estiver logado, redireciona para a página de login ou outra página de sua escolha
    header('Location: login.php');
    exit;
}

// Verificar se as variáveis de sessão estão definidas e atribuí-las a variáveis locais
$nome = isset($_SESSION['nome']) ? $_SESSION['nome'] : '';
$usuario_id = isset($_SESSION['usuario_id']) ? $_SESSION['usuario_id'] : null;

$dao = new Dao();
?>
<div class="container">
    <h1 class="my-4">Consultas Marcadas</h1>
    <?php if ($nome): ?>
        <p>Bem-vindo, <?php echo htmlspecialchars($nome); ?></p>
    <?php endif; ?>
    
    <?php
    if ($usuario_id !== null) {
        $consultas = $dao->listarConsultas($usuario_id);

        if ($consultas && count($consultas) > 0) {
            echo '<table class="table table-striped mt-4">';
            echo '<thead><tr><th>ID</th><th>Data da Consulta</th><th>Nome</th><th>Email</th><th>Celular</th><th>Especialidade</th></tr></thead>';
            echo '<tbody>';
            foreach ($consultas as $consulta) {
                echo "<tr><td>{$consulta['id_consulta']}</td><td>{$consulta['data_hora']}</td><td>{$consulta['nome_consulta']}</td><td>{$consulta['email_consulta']}</td><td>{$consulta['celular_consulta']}</td><td>{$consulta['especialidade']}</td></tr>";
            }
            echo '</tbody></table>';
        } else {
            echo '<div class="alert alert-warning mt-4" role="alert">Nenhuma consulta encontrada.</div>';
        }
    } else {
        echo '<div class="alert alert-danger mt-4" role="alert">Erro ao obter o ID do usuário.</div>';
    }
    ?>
</div>

<?php
require_once 'footer.php';
?>