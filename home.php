<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="br" lang="br">

<head>

  <?php include "includes/head.php"; ?>

   <script type="text/javascript">

  function verificar (){

  var data,tarefa,status;
  login= document.login.txtdata.value;
  senha= document.senha.txttarefa.value;

  if (login ==''){
  alert("Digite o login");
  return false;

}

  if (senha ==''){
  alert("Digite a senha");
  return false;

}
document.editar.submit();
}
</script>



</head>

<body>

  <?php include "includes/header_login.php"; ?>

  <div class="login">
    <img id="img_login" style="margin-bottom: 5%; margin-left: 20px;" src="imgs/olhoaberto.png" alt="duas pessoas e um escudo" title="Autenticação de usuario"/>
    <form action="../sessao/verificalogin.php" method="post" name="frm_login">
      <label>Login:</label><br />
      <input class="input_login" size="50" type="text" name="login_login" placeholder="  Ex. Marcos Diniz" required="required"/>
      <br />
      <br />
      <label>Senha:</label><br />
      <input onBlur="volta_img()" onfocus="muda_img()" class="input_login" style="margin-bottom: 20px;" size="50" type="password" name="login_senha" placeholder="  Ex. 2212!diniz" required="required"/>
      <br />
      <button onclick="verificar()" class="btn btn-green"> Entrar </button>
      <input class="btn2 btn-red" type="reset" value="Limpar"/>
    </form>
  </div>

<?php include "js/troca_img_login.js"; ?>

</body>
</html>
