<?php 



include "../bancodedados.php";

$login = $_POST["login_login"];
$senha = $_POST["login_senha"];

$executa =" select * from funcionarios where login='$login' and senha='$senha' ";


$query = executasql($executa);


while ($dados=detalhasql($query)) {
	$nome=$dados->NOME;
    $login=$dados->LOGIN;
    $senha=$dados->SENHA;
    $tipo=$dados->TIPO;
}


if (!empty($nome)) {
	echo "login efetuado com sucesso!";
        session_start();
        	$_SESSION[ "nome" ] = $nome;
            $_SESSION[ "login" ] = $login;
            $_SESSION[ "senha" ] = $senha;
            $_SESSION[ "tipo" ] = $tipo;
            if($tipo == 2){
                header("Location:../colaborador/menu.php");
            }elseif ($tipo==1) {
                header("Location:../administracao/menu.php");
            }elseif($tipo==3){
                header("Location:../colaborador/pedidos.php");
            }
}else{
    
    echo "<fieldset><br><br><center>";
    echo "<h2>Email ou Senha digitado errado</h2>";
    echo "<br><br><a href='/home.php'>Voltar</a>"; 
    echo "<br><br></center></fieldset>"; 
}

?>
