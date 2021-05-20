<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="br" lang="br">

<head>

  <?php include "../includes/head.php"; ?>
  <?php include "../bancodedados.php";
  
  consultasessao('1');?>
  

</head>

<body>

  <?php include "../includes/header_menu_adm.php"; ?>

<div class="conteudo">

  <div class="col1">

    <a href="" style="color: #008fb3" >
    <img  style="margin-top:30%;" width="80px" height="80px" src="../imgs/stats.png" />
    <br />
    <font style="  margin-left: 38%" >Gerar Análises</font></a>
    <br />

  </div>

  <div style="margin-top: 20px;" class="col2">
    <a href="funci_add.php" style="color: #004080" >
      <img width="80px" height="80px" src="../imgs/pessoaadd.png" /><br />
    <font style="  margin-left: 35%">Novo Funcionário</font></a>
    <br />

    <a href="consultafuncionario.php" style="color: #004080" >
      <img width="80px" height="80px" src="../imgs/pessoaedit.png" /><br />
    <font style="  margin-left: 35%" >Editar Funcionário</font></a>
    <br />



  </div>

</div>

</body>
</html>
