<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = 'eniac';
$banco = 'test';


//canexao a o banco de dados mysql
$mysqli = new mysqli($servidor,$usuario,$senha,$banco);

//caso tenha algo errado, exibir uma mensagem de erro
if (mysqli_connect_errno())  trigger_error(mysqli_connect_errno());


?>