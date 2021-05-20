<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="br" lang="br">

<head>

  <?php include "../includes/head.php";   ?>
   <?php include "../bancodedados.php";
  
  consultasessao('3');?>



</head>

<body>

  <?php include "../includes/header_pedidos.php"; ?>


	  <table id="Consultas">
	  	<tr id='Tabela_cabecalho'style="line-height: 30px">
	  		<td style="width: 5%">Numero</td>
	  		<td style="width: 10%">Cpf</td>
	  		<td style="width: 20%">Nome</td>
	  		<td style="width: 5%">Mesas</td>
	  		<td style="width: 35%">Itens</td>
	  		<td style="width: 10%">Precos</td>
	  		<td style="width: 15%">Status</td>
	  	</tr>

		<?php
			$executa =" select * from pedidos where upper (STATUS)<>'CONCLUIDO' order by NUMERO";


			$query = executasql($executa);


			while ($dados=detalhasql($query)) {

				  echo "<tr class ='Tabela_detalhe'> <td style='text-align: center'>".$dados->NUMERO  ."</td>";
				  echo "<td style='text-align: center'>".$dados->CPF  ."</td>";
				  echo "<td style='text-align: center'>".$dados->NOME  ."</td>";
				  echo "<td style='text-align: center'>" .$dados->MESA ."</td>";
				  echo "<td style='text-align: center overflow-wrap: normal'>  " .$dados->ITENS  ."</td>";
				  echo "<td style='text-align: center' >R$ " .$dados->PRECO ."</td>"; 
				  echo "<td style='text-align: center ' >". $dados->STATUS."<br/><br/>
				  <a href='/Edita_pedido.php?numero=$dados->NUMERO' ><img src='/imgs/editar.png' width='15%'></a> 
				  <a href='/bancodedados.php?funcao=entregapedido&numero=$dados->NUMERO' ><img src='/imgs/checkmark-png-16.png' width='15%'></a> 
				  <a href='/bancodedados.php?funcao=concluipedido&numero=$dados->NUMERO' ><img src='/imgs/pagamento.png' width='20%'></a>
				  </td></tr>";

			}

		?>
	  </table>

</body>
</html>