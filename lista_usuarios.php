<?php

require_once "Dao.php";
$dao = new Dao();

$dao->insertLogin("aluno1",
"senha_aluno");
$dao->listar();
?>