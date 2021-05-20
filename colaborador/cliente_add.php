<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="br" lang="br">

<head>
    <?php include "../bancodedados.php";
  
  consultasessao('2');?>

  <?php include "../includes/head.php"; ?>
  <script type="text/javascript">
    function verificar(){

    var CPF = document.frm_login.cli_cpf.value;
    var nome = document.frm_login.cli_nome.value;

    if(CPF==''){
     alert("Digite o CPF");
     return false;
    }
    if(nome==''){
     alert("Digite o Nome Completo");
     return false;
    }
    document.frm_login.action="/bancodedados.php?funcao=cadcli";
   document.frm_login.submit();

  }

      function maskCPF() {

        var num = document.getElementById('cpfCliente').value;
        num = num.replace(/[^\d]/g, '')

        if (num.length > 0) {

            if (num.length > 3) {
                num = [num.slice(0, 3), ".", num.slice(3)].join('');
            }
            if (num.length > 7) {
                num = [num.slice(0, 7), ".", num.slice(7)].join('');
            }
            if (num.length > 11) {
                num = [num.slice(0, 11), "-", num.slice(11)].join('');
            }
            if (num.length > 14) {
                num = num.substring(0, 14);
            }

        }
        document.getElementById('cpfCliente').value = num;
    }
  </script>

</head>

<body>

  <?php include "../includes/header_colaborador.php"; ?>

  <div class="cadastro_cliente">
    <img id="img_login" style="margin-bottom: 2%; margin-left: 20px;" src="../imgs/man.png" alt="Uma Pessoa" title="Um novo cliente"/>
    <form action="" method="post" name="frm_login">
      <label>CPF:</label><br />
      <input class="input_cadastro_cliente" style="margin-bottom: 12px;" size="50" type="text" id="cpfCliente" type="text" name="cli_cpf" oninput="maskCPF()" placeholder="  Ex:111.111.111.11" required>
      <br />
      <label>Nome Completo:</label><br />
      <input style="margin-bottom: 12px;" class="input_cadastro_cliente" size="50" type="text" name="cli_nome" placeholder="  Ex. Jailson Mendes" maxlength="30"/>
      <br />
      <label>Tel/Cel:</label><br />
      <input class="input_cadastro_cliente" style="margin-bottom: 12px;" size="50" type="text" name="cli_tel" placeholder="  Ex. (11) 95884-2563" maxlength="15" />
      <br />
      <label>E-mail:</label><br />
      <input class="input_cadastro_cliente" style="margin-bottom: 12px;" size="50" type="email" name="cli_email" placeholder="  Ex. cliente@dominio.com" maxlength="60"/>
      <br />
      <a onclick="verificar()" class="btn btn-green"> Registrar </a>
      <input class="btn2 btn-red" type="reset" value="Limpar"/>
    </form>
  </div>

</body>
</html>
