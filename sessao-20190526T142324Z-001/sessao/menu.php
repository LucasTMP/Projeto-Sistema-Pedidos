<?php 

session_start();
if ( is_Null ($_SESSION[ "email" ] ) ){
	echo "Crie uma sessão <br><br>" ;
die() ; 
}
else
  echo "Sessão criada com sucesso<br><br>" ;
echo "<a href=login.htm>Página de Login</a>" ;
 ?>