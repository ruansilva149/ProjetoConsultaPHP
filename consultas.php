<!-- <?php

session_start();
require_once 'Dao.php';

if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) 
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');

}
require_once 'header.php'; 
require_once 'navBarLogout.php';
require_once 'Dao.php';

$usuario = $_SESSION['email'];

$dao = new Dao();
?>
<div class="container">
    <h1 class="my-4">Agendamento de Consultas</h1>
    <?php
    if (isset($_SESSION['success_message'])) {
        echo '<div class="alert alert-success" role="alert">' . $_SESSION['success_message'] . '</div>';
        unset($_SESSION['success_message']); 
    } elseif (isset($_SESSION['error_message'])) {
        echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error_message'] . '</div>';
        unset($_SESSION['error_message']); 
    }
    ?>
</div>

<?php
require_once 'footer.php';
?> -->