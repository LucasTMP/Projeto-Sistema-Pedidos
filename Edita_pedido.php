<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="br" lang="br">

<head>

  <?php include ("includes/head.php"); ?>  
   <?php include "bancodedados.php";
  
  consultasessao('3');?>

</head>

<body>

<?php include "includes/header_menu_pedido_alter_confirma.php"; ?>

<style>
    .tipo-item:first-child {
        margin-top: 0;
    }

    .itens-pedido {
        width: 80%;
        margin-top: 50px;
        margin-left: 10%;
    }

    html{
        font-family: Rockwell;
    }

    .inputs input[type="text"] {
        width: 15px;
        text-align: center;
        padding: 5px;
        font-size: 12pt;
    }

    .inputs {
        display: flex;
        align-items: center;
    }

    .inputs div.add, .inputs div.sub {
        outline: none;
        border-radius: 50%;
        vertical-align: middle;
        text-align: center;
        color: #fff;
        border: none;
        width: 20px;
        cursor: pointer;
        margin: 5px;
    }

    .inputs div[class="add"] {
        background-color: #00ff80;
    }
    .inputs div[class="sub"] {
        background-color: #ff0000;
    }

    .titulo-linhas {
        margin: 0 !important;
        font-weight: bolder;
        font-size: 20pt;
        border: 1px solid #000;
        background-color: #FAA613;
        box-shadow: 5px 5px 15px -5px inset #000;
        border-bottom: 2px solid #000 !important;
        justify-content: center !important;
    }
    .linha {
        padding: 5px;
        margin-top: 5px;
        margin: 0 7%;
        border-bottom: 1px solid #000;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .linha:last-child {
        border: none;
    }

    .tipo-item, .dados-pedido {
        margin-top: 15px;
        border: 1px solid #000;
        background-color: #FAA613;
        box-shadow: 0px 0px 10px -1px inset #000;
        border-bottom: 2px solid #000;
    }

    /* The container */
    .container {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    }

    /* Hide the browser's default checkbox */
    .container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
    display: block;
    height: 25px;
    width: 25px;
    background-color: #eee;
    margin-right: 29px;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input ~ .checkmark {
    background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container input:checked ~ .checkmark {
    background-color: #F4D06F;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
    content: "";
    position: absolute;
    display: none;
    }

    /* Show the checkmark when checked */
    .container input:checked ~ .checkmark:after {
    display: block;
    }

    .container {
    transition: transform 5s;
    }

    .container input:checked ~ .checkmark {
    transform: rotate(-360deg);
    transition: transform 0.5s;
    }

    .container input:checked ~ .checkmark {
    transform: rotate(-360deg);
    }

    /* Style the checkmark/indicator */
    .container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid #000;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    }

    textarea#in_observacoes {
        width: 80%;
        height: 100px;
        margin-left: 10%;
        margin-top: 20px;
        margin-bottom: 20px;
        resize: none;
    }

    .col-custom {
        overflow: auto;
        padding-top: 21px;
    }

    .col-custom::-webkit-scrollbar {
        display: none;
    }

    .linha-dados {
        border: 0;
    }

    .inputs-form, .btn-falso {
        width: 100%;
    }

    .inputs-form-buttons, .btn-falso {
        display: flex;
        justify-content: space-around;
        width: 100%;
        padding-bottom: 20px;
    }

    .inputs-form input, .btn-falso {
        width: 98%;
        padding: 5px;
    }

    .inputs-form-buttons input[type="button"], .inputs-form-buttons input[type="reset"], .btn-falso {
        width: 30%;
        border: none;
        padding: 10px;
        color: #000;
        cursor: pointer;
    }

    .inputs-form-buttons input[type="button"], .btn-falso {
        background-color: #00ff80;
    }

    .btn-falso {
        color: #000;
        font-size: 14px !important;
        font-weight: 400 !important;
        margin: 0 !important;
        line-height: initial !important;
    }

    .inputs-form-buttons input[type="reset"] {
        background-color: #ff0000;
    }

    .valor-final-lanche {
        border: none;
        background-color: transparent;
        width: 40px !important;
        text-align: center;
    }

    .busca-lanche {
        width: 70%;
    }

    .input-buscar {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        margin: 20px 0;
    }

    .btn-buscar {
        padding: 10px 25px;
        width: auto;
    }

    .subtitulo-linhas {
        margin: 10px 20px;
    }

</style>


<div class="conteudo">
    <form name="dadosCliente" method="post" action="/bancodedados.php?funcao=altpedido">
    	<input type="text" name="numero" hidden>
        <div class="col1 col-custom">
            <div class="lanches-primuz tipo-item">
                    <div class="linha titulo-linhas" id="linha-titulo-carnes">
                        <span>Observacao</span>
                    </div>
                    <div class="linha" >         
                        
                            
                            <input type="textarea" name="Observacao"   style="    width: -webkit-fill-available;  ">
                            
                        
                    </div>
                    
                </div>
        </div>
        <br />
        <div class="col2">
            <div class="itens-pedido">
                <div class="tipo-item">
                    <div class="linha titulo-linhas">
                        <span>Dados do Pedido</span>
                    </div>
                    <div class="linha linha-dados" id="linha1">
                        <div class="inputs-form">
                            <label for="nomeLanche">Mesa:</label>
                            <br/>
                            <input id="mesa" type="text" name="mesa" required>
                        </div>
                    </div>
                    <div class="linha linha-dados" id="linha2">
                        <div class="inputs-form">
                            <label for="nomeCliente">Nome do Cliente:</label>
                            <br/>
                            <input id="nomeCliente" type="text" name="nomeCliente" required>
                        </div>
                    </div>
                    <div class="linha linha-dados" id="linha3">
                        <div class="inputs-form">
                            <label for="cpfCliente">CPF do Cliente:</label>
                            <br/>
                            <input id="cpfCliente" type="text" name="cpfCliente" oninput="maskCPF()" required>
                        </div>
                    </div>
                    <div class="linha linha-dados" id="linha3">
                        <div class="inputs-form valor-final" style="display: flex; justify-content: center;padding: 10px 0;">                            
                            <span>Pre&ccedil;o Total: R$&nbsp;<input onChange="add0()" class="valor-final-lanche" type="text" name="valorFinalLanche" id="valorFinalLanche" value="0.00" readonly></span>
                        </div>
                    </div>
                    <div class="linha linha-dados" id="linha4">
                        <div class="inputs-form-buttons">
                            <a onclick="validarDados()" class="btn-falso" >Enviar Pedido</a>
                            <!-- <input type="button" value="Adicionar" onclick="validarDados()"> -->
                            <input type="reset" value="Cancelar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
	var descricaodiogo = [];
	var idcampocustom =[];             
    function x(campo, acao,valordiogo) {
        /* Faz um "for" para por os itens do cliente seguindo o meu exemplo */
        m_itens = {
            /*
            'variavel pedido' : 'variavel valor' , <-- não esquece de adicionar a vírgula
            */
            "combo1PrimuzBurger" : "25.90",
            "combo2PrimuzBacon" : "26.90",
            "combo3PrimuzDoubleCheddarBacon" : "32.90",
            "primuzBacon" : "19.90",
            "primuzBurger" : "18.90",
            "primuzCheese" : "17.90",
            "primuzDiamond" : "29.90",
            "primuzDoubleCheddarBacon" : "28.90",
            "primuzDuke" : "20.90",
            "primuzOnions" : "22.90",
            "primuzSalada" : "18.90",
            "primuzStuffedCheese" : "25.90",

            "asinhaTulipaMeioKg" : "17.90",
            "asinhaTulipa1Kg" : "31.90",
            "filezinhoSassamiMeioKg" : "17.90",
            "filezinhoSassami1Kg" : "31.90",
            "frangoPassarinhoMeioKg" : "17.90",
            "frangoPassarinho1Kg" : "31.90",
            "porcaoFritas" : "5.00",
            "batataRustica" : "16.00",

            "cocaCola350ml" : "5.00",
            "cocaCola600ml" : "7.50",
            "cocaZero350ml" : "5.00",
            "fantaLaranja350ml" : "5.00",
            "fantaLaranja600ml" : "7.50",
            "fantaUva350ml" : "5.00",
            "fantaUva600ml" : "7.50",
            "guaranaAntartica350ml" : "5.00",
            "itubainaLata" : "5.00",
            "spriteLata" : "5.00",

            "budweirserLongNeck" : "8.50",
            "eisenbahnLongNeck" : "8.50",
            "heinekenLongNeck" : "8.50",
            "stellaArtoisLongNeck" : "8.50",

            "aguaMineral" : "5.00",
        };


        var id_item = campo.substring(3);
        var v = m_itens[id_item];
        var descricaocustom ;
        
        var v_antigo = document.getElementById('valorFinalLanche').value;
        //alert(descricaocustom);

        var valor1 = 0;
        var campoNome = 'in_' + campo.substring(3);
        valor = eval(document.getElementById(campoNome).value);
        if (acao === 1) {
            valor1 = valor + 1;
            if (valor1 > 9) {
                valor1 = 9;
            } else {
            	if(valordiogo==undefined){
                	var vf = eval(v_antigo) + eval(v);
                	if(descricaodiogo.indexOf(id_item) < 0){                		
                		descricaodiogo.push(id_item);
                		idcampocustom.push(id_item);               	
                	}
            	}else{
            		descricaocustom= document.getElementById('obs_'+id_item).value;
            		var vf = eval(v_antigo) + eval(valordiogo);

            		if(descricaodiogo.indexOf(descricaocustom) <0){            			
                		descricaodiogo.push(descricaocustom);
                		idcampocustom.push(id_item);  
                	}
            	}
            }
        } else {
            valor1 = valor - 1;
            if (valor1 < 0) { 
                valor1 = 0;
            } else {
                if(valordiogo == undefined){
                	var vf = eval(v_antigo) - eval(v);
            	}else{
            		var vf = eval(v_antigo) - eval(valordiogo);
            	} 
            	if (valor1==0) {
            		if(valordiogo == undefined){                		
                		descricaodiogo.splice(id_item,1);  
                		idcampocustom.splice(id_item,1);         	
                	}else{
                		descricaocustom= document.getElementById('obs_'+id_item).value;            			
                		descricaodiogo.splice(descricaocustom,1); 
                		idcampocustom.splice(id_item,1);              	
                	}

            	}      
            }
        }
    
        document.getElementById(campoNome).value = valor1;
        document.getElementById('valorFinalLanche').value = vf.toFixed(2);
        //document.getElementById('valorFinal').value = vf.toFixed(2);
    }

    function validarCPF() {
        var ccpf, cpfsoma, cpfresto;
        soma = 0;
        ccpf = document.getElementById('cpfCliente').value;
        ccpf = ccpf.replace(/[^\d]/g, '');
        
        if ((ccpf == "") || (ccpf.length == 0) || (ccpf.length > 11) || (ccpf == "00000000000") || (ccpf == "11111111111") || (ccpf == "22222222222") || (ccpf == "33333333333") || (ccpf == "44444444444") || (ccpf == "55555555555") || (ccpf == "66666666666") || (ccpf == "77777777777") || (ccpf == "88888888888") || (ccpf == "99999999999")) {
            return false
        } else {
            //valida 1 digito
            cpfsoma = 0;
            for (i = 0; i < 9; i++) {
                cpfsoma += parseInt(ccpf.charAt(i)) * (10 - i);
                cpfresto = 11 - (cpfsoma % 11);
            }
            if (cpfresto == 10 || cpfresto == 11) {
                cpfresto = 0;
            }

            if (cpfresto != parseInt(ccpf.charAt(9))) {
                return false;
            }

            //valida 2 digito
            cpfsoma = 0;
            for (i = 0; i < 10; i++) {
                cpfsoma += parseInt(ccpf.charAt(i)) * (11 - i);
                cpfresto = 11 - (cpfsoma % 11);
            }
            if (cpfresto == 10 || cpfresto == 11) {
                cpfresto = 0;
            }
            if (cpfresto != parseInt(ccpf.charAt(10))) {
                return false;
            }
        }
        return true;        
    }

    function apenasNumeros() {
        var num = document.getElementById('cpfCliente').value;
        num = num.replace(/[\D]/g, '');
        document.getElementById('cpfCliente').value = num;
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

    function validarDados() {


    	if(document.dadosCliente.mesa.value==''){
    		alert("erro");
    	}else{

    		

        document.dadosCliente.submit();
    	}

    }

    function Buscalanches(cpf){
    	window.location="/cadastro_pedido.php?cpfCliente="+cpf;
    }



</script>
  <?php
  	if (isset($_GET["numero"])) {
		$numero=$_GET["numero"];

  		$executa = "select * from pedidos where NUMERO='".$numero."';";
  		$query = executasql($executa);
  		$dados=detalhasql($query);

  		 echo "<script> document.dadosCliente.Observacao.value=".'"'.$dados ->ITENS.'"'.";</script>";
	     echo "<script> document.dadosCliente.mesa.value=".'"'.$dados ->MESA.'"'.";</script>";
	     echo "<script> document.dadosCliente.cpfCliente.value=".'"'.$dados ->CPF.'"'.";</script>";
	     echo "<script> document.dadosCliente.nomeCliente.value=".'"'.$dados ->NOME.'"'.";</script>";
	     echo "<script> document.dadosCliente.numero.value=".'"'.$dados ->NUMERO.'"'.";</script>";

	    }

  ?>

</body>
</html>
