<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="br" lang="br">

<head>

  <?php include "../includes/head.php";   ?>
   <?php include "../bancodedados.php";
  
  consultasessao('1');?>

  <script type="text/javascript">

  	
  	function confirmadelete(login){
  		var decisao = confirm("Deseja deletar o login: "+login);
  	 if(decisao){
	 	window.location="/bancodedados.php?funcao=delfunc&login="+login;

  	 }
  	}
  </script>


</head>

<body>

  <?php include "../includes/header_menu_adm_funcionario.php"; ?>


	  <table id="Consultas">
	  	<tr id='Tabela_cabecalho' style="line-height: 30px">
	  		<td style="width: 35%">Nome</td>
	  		<td style="width: 35%">LOGIN</td>
	  		<td style="width: 20%">Tipo</td>
	  		<td >Editar</td>
	  	</tr>

		<?php
			$executa =" select * from detalhefuncionario ";


			$query = executasql($executa);


			while ($dados=detalhasql($query)) {
				  $login='"'.$dados->LOGIN.'"';
				  echo "<tr class ='Tabela_detalhe'> <td>".$dados->NOME  ."</td>";
				  echo "<td style='text-align: center'>".$dados->LOGIN  ."</td>";
				  echo "<td style='text-align: center'>" .$dados->TIPO ."</td>";
				  echo "<td style='text-align: center ' ><a href='FUNCI_ADD.php?login=$dados->LOGIN'><img src='/imgs/editar.jpeg' width='30%'></a> 
				  <a onclick='confirmadelete($login)' ><img src='/imgs/delete.png' width='30%'> </a></td></tr>";

			}

		?>
	  </table>

</body>
</html>