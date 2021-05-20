<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="br" lang="br">

<head>

  <?php include "../includes/head.php";   ?>
  <?php include "../bancodedados.php";
  
  consultasessao('2');?>

</head>

<body>

  <?php include "../includes/header_menu.php"; ?>

<div class="conteudo">

  <div class="col1">

    <a href="cliente_add.php" style="color: #004080" >
    <img  style="margin-top:18%;" width="80px" height="80px" src="../imgs/pessoaadd.png" />
    <br />
    <font style="  margin-left: 40%" >Novo Cliente</font></a>
    <br />

    <a href="../cadastro_pedido.php" style="color: #006600" >
      <img  width="80px" height="80px" src="../imgs/addpedido.png" />
    <br />
    <font style="  margin-left: 38%" >Realiza Pedido</font></a>
  </div>
  <br />

  <div class="col2">
    <a href="../cadastro_lanche.php" style="color: #b34700" >
      <img width="80px" height="80px" src="../imgs/hambadd.png" /><br />
    <font style="  margin-left: 40%">Novo lanche</font></a>
    <br />

    <a href="../altera_lanche.php" style="color: #b34700" >
      <img width="80px" height="80px" src="../imgs/hambeditado.png" /><br />
    <font style="  margin-left: 39.5%" >Edita Lanche</font></a>
    <br />

    <a href="../exclui_lanche.php" style="color: #b34700" >
      <img width="80px" height="80px" src="../imgs/hambexcluir.png" /><br />
    <font style="  margin-left: 39%">Exclui Lanche</font></a>

  </div>

</div>

</body>
</html>
