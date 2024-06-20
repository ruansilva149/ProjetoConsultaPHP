<?php
session_start();

require_once "Dao.php";
$dao = new Dao();

// Verifica se o formulário foi enviado
if (isset($_POST['submit']) &&!empty($_POST['email']) &&!empty($_POST['senha'])) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $dao->validarCredenciais($email, $senha);
}