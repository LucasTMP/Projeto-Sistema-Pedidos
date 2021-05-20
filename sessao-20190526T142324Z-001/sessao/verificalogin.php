<?php 



include "abrir_banco.php";

$login = $_POST["txtlogin"];
$senha = $_POST["txtsenha"];

$executa =" select * from usuarios where login='$login' and senha='$senha' and situacao='ATIVO'";


$query = $mysqli->query($executa);

while ($dados=mysqli_fetch_object($query)) {
	$usuario1=$dados->login;
}

$query->free();

if (!empty($usuario1)) {
	echo "login efetuado com sucesso!";
        session_start();
        	$_SESSION[ "email" ] = $usuario1;
        	echo $_SESSION[ "email" ];
        header("Location: menu.php");
}else{
    echo "<fieldset><br><br><center>";
    echo "<h2>Email ou Senha digitado errado</h2>";
    echo "<br><br><a href='login.html'>Voltar</a>"; 
    echo "<br><br></center></fieldset>"; 
}

?>
