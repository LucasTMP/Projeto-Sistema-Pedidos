<?php 

include "bancodedados.php";

$executa =" select * from clientes";

$query = executasql($executa);

?>

<h1>Tarefas Pendentes</h1>
<table border="1">
  <tr>
   <th>Data</th>
   <th width="100">Tarefa</th>
   <th >Alterar</th>
   <th>Excluir</th>
   <th>Concluir</th>
  </tr>

<?php

while ($dados=detalhasql($query)) {
  $cod = $dados->CODIGO;
  echo "<tr> <td>".$dados->NOME  ."</td>";
  echo "<td>" .$dados->REDUZIDO ."</td>";
  echo "<td><a href='editar.php?codigo=$cod' ><img src='editar.jpg' width='10%'
 > </a></td>";
  echo "<td><a href='excluir.php?codigo=$cod' ><img src='excluir.jpg' width='10%'
 > </a></td>";
  echo "<td><a href='concluitarefa.php?codigo=$cod' ><img src='completo.png' width='10%'
 > </a></td>";

}

ibase_free_result($query);

echo"<form action='cadastro.html'>";
  echo  "</table>";
  echo  "<input type='submit' value='Pagina inicial' />";
echo"</form>";
 ?>

 


