<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="br" lang="br">

<head>

  <?php include "../includes/head.php"; ?>
    <?php include "../bancodedados.php";
  
  consultasessao('1');?>


   <script type="text/javascript">


  function verificar(){

  var login= document.frm_login.funci_login.value;
  var senha= document.frm_login.funci_senha.value;
  var csenha= document.frm_login.funci_confirmar_senha.value;
  var nome= document.frm_login.funci_nome.value;



  if (login ==''){
  alert("Digite o login");
  return false;

}

  if (senha ==''){
  alert("Digite a senha");
  return false;

}
  if (csenha ==''){
  alert("Digite a confirmacao da senha");
  return false;

}
  if (senha != csenha){
  alert("as senhas nao conferem");
  return false;

}
  if (nome ==''){
  alert("Digite o nome");
    return false;

}
document.frm_login.submit();
}
</script>

</head>

<body>

  <?php include "../includes/header_menu_adm_crud.php"; ?>

  <div class="cadastro_funci">
    <br />
    <img id="img_login" style="margin-bottom: 2%; margin-left: 20px;" src="../imgs/man.png" alt="Uma Pessoa" title="Um novo colaborador"/>
    <form action="/bancodedados.php?funcao=cadfunc" method="post" name="frm_login">
      <label>Nome:</label><br />
      <input class="input_cadastro_funci" style="margin-bottom: 12px;" size="50" type="text" name="funci_nome" placeholder="  Ex. José Queiroz" maxlength="30"/>
      <br />
      <label>Login:</label><br />
      <input class="input_cadastro_funci" style="margin-bottom: 12px;" size="50" type="text" name="funci_login" placeholder="  Ex. José Queiroz" maxlength="30"/>
      <br />
      <label>Senha:</label><br />
      <input style="margin-bottom: 12px;" class="input_cadastro_funci" size="50" type="password" name="funci_senha" placeholder=" Ex. 123a@b458" maxlength="30"/>
      <br />
      <label>Confirmar Senha:</label><br />
      <input class="input_cadastro_funci" style="margin-bottom: 12px;" size="50" type="password" name="funci_confirmar_senha" placeholder=" Ex. 123a@b458" maxlength="30"/>
      <br />
      <label>Tipo:</label>
      <select id="select_bonito" class="input_cadastro_funci_tipo" style="min-width: 253px; text-indent: -26px;text-align-last: center;" name="funci_tipo">
      <option style="text-align:center;" value="2">Funcionário</option>
      <option value="3">Caixa</option>
      <option value="1">Administrador</option>
      </select>
      <br /><br />
      <a onclick="verificar()" class="btn btn-green"> Registrar </a>
      <input class="btn2 btn-red" type="reset" value="Limpar"/>


    </form>
  </br>

</br>
  </div>

  <?php
  if (isset($_GET["retorno"])) {
    echo "<script>alert('Funcionario ja cadastrado');</script>";
}
  if (isset($_GET["login"])) {
    $login=$_GET["login"];
    $executa =" select * from funcionarios where LOGIN='".$login."';";
    $query = executasql($executa);
    $funcionario=detalhasql($query);
     echo "<script> document.frm_login.funci_login.value=".'"'.$login.'"'.";</script>"; 
     echo "<script> document.frm_login.funci_nome.value=".'"'.$funcionario ->NOME.'"'.";</script>";
     echo "<script> document.frm_login.funci_senha.value=".'"'.$funcionario ->SENHA.'"'.";</script>";
     echo "<script> document.frm_login.funci_confirmar_senha.value=".'"'.$funcionario ->SENHA.'"'.";</script>";
     echo "<script> document.frm_login.funci_login.readOnly=true;</script>";
     echo '<script> document.frm_login.action="/bancodedados.php?funcao=altfunc";</script>';
  }
?>

</body>
</html>
