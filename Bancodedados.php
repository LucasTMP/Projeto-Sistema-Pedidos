<?php

// Variavel BD define qual banco de dados usar
// '1' para firebird
// '2' para mysql

$BD = '1';

//conexao com o banco de dados

if ($BD='1') {
	$servidor = 'localhost:D:/Sistema Impacto/Data/PROJETO.fdb';
	$usuario = 'SYSDBA';
	$senha = 'masterkey';
	$banco = 'belcol.fdb';
	if (!(  $conexao= ibase_connect($servidor, $usuario, $senha)))
		die('Erro ao conectar: ' .  ibase_errmsg());

	}elseif ($BD='2') {
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = 'eniac';
	$banco = 'test';
	$conexao = new mysqli($servidor,$usuario,$senha,$banco);

	if (mysqli_connect_errno())  trigger_error(mysqli_connect_errno());
		

}

function menuprincipal (){
	session_start();
	if ( is_Null ($_SESSION[ "login" ] ) ){
	  	header("Location:/home.php");
		die() ; 
	}else{
		if ($_SESSION["tipo"]==1) {
			header("Location:/administracao/menu.php");
		}
		if ($_SESSION["tipo"]==2) {
			header("Location:/colaborador/menu.php");
		}
		if ($_SESSION["tipo"]==3) {
			header("Location:/colaborador/pedidos.php");
			
		}
	}
}

function executasql ( $sql ){
	global $conexao;

	if ($BD='1') {
		$query = ibase_query ($conexao,$sql);
		return  $query;
 
	}elseif ($BD='2') {
		$query = $conexao->query($sql);
		return $query;
	}

}

function detalhasql($sql){
	global $conexao;

	if ($BD='1') {
		$query = ibase_fetch_object($sql);
		return $query;

	}elseif ($BD='2') {
		$query = mysqli_fetch_object($sql);
		return $query;
	}
}

function consultasessao ($tipo){
	session_start();
	if ( is_Null ($_SESSION[ "login" ]) or $_SESSION["tipo"]!=$tipo ){
		echo "<script> alert('Inicie sua sessão para acessar a pagina');</script>";
	  	menuprincipal();
		die() ; 
	} 
}

function deslogar(){
	session_start();
	session_destroy();
	consultasessao('');
}


if (isset($_GET["funcao"])) {
	$funcao=$_GET["funcao"];

	if ($funcao=='logoff') {
		echo "<script>alert('saindo');</script>";
		deslogar();
	}
	if ($funcao=='cadfunc') {
		$nome = $_POST["funci_nome"];
		$login = $_POST["funci_login"];
		$senha = $_POST["funci_senha"];
		$tipo = $_POST["funci_tipo"];

		$executa ="insert into funcionarios (NOME,LOGIN,SENHA,TIPO) ";
		$executa=$executa."values ('".$nome."','".$login."','".$senha."','".$tipo."');";
		if($query = executasql($executa)){
			header("Location:../confirmacoes/funci_add_ok.php");
		}else{
			header("Location:../administracao/funci_add.php?retorno=deuruim");
		}
	}
	if ($funcao=='altfunc') {
		$nome = $_POST["funci_nome"];
		$login = $_POST["funci_login"];
		$senha = $_POST["funci_senha"];
		$tipo = $_POST["funci_tipo"];

		$executa = "update funcionarios set NOME = '".$nome."',SENHA='".$senha."',TIPO='".$tipo."' ";
		$executa = $executa."where LOGIN='".$login."';";
		executasql($executa);
		header("Location:../confirmacoes/funci_alter_ok.php");
	}
	if ($funcao=='delfunc') {
		echo "teste";
		$login=$_GET["login"];
		$executa = "delete from funcionarios where LOGIN='".$login."';";
		executasql($executa);
		header("Location:../confirmacoes/funci_delete_ok.php");
	}
	if ($funcao=='menu') {
		menuprincipal();
	}
	if ($funcao=='cadcli') {
		$nome = $_POST["cli_nome"];
		$cpf = $_POST["cli_cpf"];
		$telefone = $_POST["cli_tel"];
		$email = $_POST["cli_email"];

		$executa ="update or insert into clientes (CPF,NOME,TELEFONE,EMAIL) ";
		$executa=$executa."values ('".$cpf."','".$nome."','".$telefone."','".$email."') MATCHING(CPF);";
			if($query = executasql($executa)){
				header("Location:../confirmacoes/cliente_add_ok.php");
			}else{
				echo $executa;
			}
	}
	if ($funcao=='cadlanche') {
		$tipo_pao = $_POST["tipo_pao"];
		$carne160g = $_POST["carne160g"];
		$carne180g = $_POST["carne180g"];
		$carne200g = $_POST["carne200g"];
		$carneBacon = $_POST["carneBacon"];
		$carneBaconEmpanado = $_POST["carneBaconEmpanado"];
		$alfaceAmericana = $_POST["alfaceAmericana"];
		$cebolaRoxa = $_POST["cebolaRoxa"];
		$cebolaCaramelizada = $_POST["cebolaCaramelizada"];
		$onions = $_POST["onions"];
		$tomate = $_POST["tomate"];
		$picles = $_POST["picles"];
		$molhoCasa = $_POST["molhoCasa"];
		$molhoBarbecue = $_POST["molhoBarbecue"];
		$molhoPrimuz = $_POST["molhoPrimuz"];
		$mussarela = $_POST["mussarela"];
		$cheddar = $_POST["cheddar"];
		$queijoCura = $_POST["queijoMeiaCura"];
		$observacoes = $_POST["observacoes"];
		$nomeLanche = $_POST["nomeLanche"];
		$nomeCliente = $_POST["nomeCliente"];
		$cpfCliente = $_POST["cpfCliente"];
		$valorlanche = $_POST["valorFinalLanche"];
		$tipocarne = $_POST["tipo_carne"];
		$observacoes = $_POST["observacoes"];

		$cliente= "select * from clientes where CPF='".$cpfCliente."';";
		$resutadocliente = executasql($cliente);
		if (!(detalhasql($resutadocliente))) {
			echo "passou aqui";
			$executa="insert into clientes(CPF,NOME) values ('".$cpfCliente."','".$nomeCliente."');";
			executasql($executa);
		}else{
			echo "nao deu certo";
		}



		$executa ="INSERT INTO LANCHES (NOME, CPF, TIPOPAO, TIPOCARNE, QTDCARNE, BACON, ALFACEAMERICANA, CEBOLAROXA, CEBOLACARAMELIZADA, TOMATE, PICLES, MUSSARELA, CHEDDAR, MOLHOCASA, MOLHOBBQ, QUEIJOCURA, MOLHOPRIMUZ, ONIONS, BACONEMPANADO, PRECO,PONTOCARNE,OBSERVACAO) ";
		$executa=$executa."values ('".$nomeLanche."','".$cpfCliente."','".$tipo_pao."',";
		if($carne160g>0){
			$executa=$executa."'Carne 160g',".$carne160g.",";
		}elseif ($carne180g>0) {
			$executa=$executa."'Carne 180g',".$carne180g.",";
		}else{
			$executa=$executa."'Carne 200g',".$carne200g.",";
		}



		$executa=$executa.$carneBacon.",".$alfaceAmericana.",".$cebolaRoxa.",".$cebolaCaramelizada.",".$tomate.",".$picles.",".$mussarela.",";
		$executa=$executa.$cheddar.",".$molhoCasa.",".$molhoBarbecue.",".$queijoCura.",".$molhoPrimuz.",".$onions.",".$carneBaconEmpanado.",";
		$executa=$executa.$valorlanche.",'".$tipocarne."','".$observacoes."');";
		echo "</br>".$executa;


		if($query = executasql($executa)){
			header("Location:../confirmacoes/lanche_add_ok.php");
		}else{
			header("Location:../cadastro_lanche.php?retorno=deuruim");
		}	
	}
	if ($funcao=='altlanche') {
		$tipo_pao = $_POST["tipo_pao"];
		$carne160g = $_POST["carne160g"];
		$carne180g = $_POST["carne180g"];
		$carne200g = $_POST["carne200g"];
		$carneBacon = $_POST["carneBacon"];
		$carneBaconEmpanado = $_POST["carneBaconEmpanado"];
		$alfaceAmericana = $_POST["alfaceAmericana"];
		$cebolaRoxa = $_POST["cebolaRoxa"];
		$cebolaCaramelizada = $_POST["cebolaCaramelizada"];
		$onions = $_POST["onions"];
		$tomate = $_POST["tomate"];
		$picles = $_POST["picles"];
		$molhoCasa = $_POST["molhoCasa"];
		$molhoBarbecue = $_POST["molhoBarbecue"];
		$molhoPrimuz = $_POST["molhoPrimuz"];
		$mussarela = $_POST["mussarela"];
		$cheddar = $_POST["cheddar"];
		$queijoCura = $_POST["queijoCura"];
		$observacoes = $_POST["observacoes"];
		$nomeLanche = $_POST["nomeLanche"];
		$nomeCliente = $_POST["nomeCliente"];
		$cpfCliente = $_POST["cpfCliente"];
		$valorlanche = $_POST["valorFinalLanche"];
		$tipocarne = $_POST["tipo_carne"];
		$observacoes = $_POST["observacoes"];



		$executa ="update LANCHES set TIPOPAO='".$tipo_pao."',";
		$executa = $executa . "BACON =".$carneBacon.",";
		$executa = $executa . "ALFACEAMERICANA =".$alfaceAmericana.",";
		$executa = $executa . "CEBOLAROXA =".$cebolaRoxa.",";
		$executa = $executa . "CEBOLACARAMELIZADA =".$cebolaCaramelizada.",";
		$executa = $executa . "TOMATE =".$tomate.",";
		$executa = $executa . "PICLES =".$picles.",";
		$executa = $executa . "MUSSARELA =".$mussarela.",";
		$executa = $executa . "CHEDDAR =".$cheddar.",";
		$executa = $executa . "MOLHOCASA =".$molhoCasa.",";
		$executa = $executa . "MOLHOBBQ =".$molhoBarbecue.",";
		$executa = $executa . "QUEIJOCURA =".$queijoCura.",";
		$executa = $executa . "MOLHOPRIMUZ =".$molhoPrimuz.",";
		$executa = $executa . "ONIONS =".$onions.",";
		$executa = $executa . "BACONEMPANADO =".$carneBaconEmpanado.",";
		$executa = $executa . "PRECO =".$valorlanche.",";
		$executa = $executa . "PONTOCARNE ='".$tipocarne."',";
		$executa = $executa . "OBSERVACAO ='".$observacoes."',";
		if($carne160g>0){
			$executa=$executa."TIPOCARNE ='Carne 160g' , QTDCARNE=".$carne160g." ";
		}elseif ($carne180g>0) {
			$executa=$executa."TIPOCARNE ='Carne 180g' , QTDCARNE=".$carne180g." ";
		}else{
			$executa=$executa."TIPOCARNE ='Carne 2000g' , QTDCARNE=".$carne200g." ";
		}

		$executa= $executa." where CPF='".$cpfCliente."'and NOME='".$nomeLanche."';";
		echo $executa;

		
				if($query = executasql($executa)){
					header("Location:../confirmacoes/lanche_alter_ok.php");
				}else{
					header("Location:../cadastro_lanche.php?retorno=deuruim");
				}	
				
	}
	if($funcao=='cadpedido'){
		$nome = $_POST["nomeCliente"];
		$cpf = $_POST["cpfCliente"];
		$mesa = $_POST["mesa"];
		$observacao = $_POST["Observacao"];
		$valor = $_POST["valorFinalLanche"];

		$executa="insert into pedidos (CPF,MESA,PRECO,STATUS,ITENS,NOME) values ('".$cpf."','".$mesa."','".$valor."','Pedido Realizado','".$observacao."','".$nome."');";
		$query=executasql($executa);
		menuprincipal();
	}
	if ($funcao=='entregapedido') {
		$numero = $_GET["numero"];
		$executa = "update pedidos set STATUS='Pedido entregue' where NUMERO=".$numero.";";
		$query=executasql($executa);
		menuprincipal();
	}
	if ($funcao=='concluipedido') {
		$numero = $_GET["numero"];
		$executa = "update pedidos set STATUS='CONCLUIDO' where NUMERO=".$numero.";";
		$query=executasql($executa);
		menuprincipal();
	}
	if($funcao=='altpedido'){
		$nome = $_POST["nomeCliente"];
		$cpf = $_POST["cpfCliente"];
		$mesa = $_POST["mesa"];
		$observacao = $_POST["Observacao"];
		$numero = $_POST["numero"];		

		$executa="update pedidos set CPF='".$cpf."', NOME='".$nome."', MESA='".$mesa."', ITENS='".$observacao."' where numero='".$numero."';";
		$query=executasql($executa);
		menuprincipal();
	}
	if ($funcao=='dellanche') {
		$nome=$_GET["nome"];
		$cpf=$_GET["cpf"];
		$executa = "delete from lanches where CPF='".$cpf."' and NOME='".$nome."';";
		$query=executasql($executa);
	
		header("Location:../confirmacoes/lanche_delete_ok.php");
	}



}


?>
