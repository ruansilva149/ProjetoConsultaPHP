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
    <h1 class="my-4">Agendamento de Consultas</h1>
    <?php
    // Exibe mensagens de sucesso ou erro, se existirem
    if (isset($_SESSION['success_message'])) {
        echo '<div class="alert alert-success" role="alert">' . $_SESSION['success_message'] . '</div>';
        unset($_SESSION['success_message']); // Limpa a mensagem de sucesso da sessão
    } elseif (isset($_SESSION['error_message'])) {
        echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error_message'] . '</div>';
        unset($_SESSION['error_message']); // Limpa a mensagem de erro da sessão
    }
    ?>
</div>

<?php
require_once 'footer.php';
?>