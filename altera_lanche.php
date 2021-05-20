<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="br" lang="br">

<head>

  <?php include ("includes/head.php"); ?>  
    <?php include "bancodedados.php";
  
  consultasessao('2');?>
  <?php
    if (isset($_GET["cpfCliente"])) {
        $CPF=$_GET["cpfCliente"];

        $executa = "select * from lanches where CPF='".$CPF."';";
        $query = executasql($executa);
        $query1 = executasql($executa);
        $dados1 = detalhasql($query1);
        if(!$dados1==''){
        $clientelanche = "select * from clientes where CPF='".$CPF."';";
        $querycliente = executasql($clientelanche);
        $infcliente = detalhasql($querycliente);
         echo "<script> document.dadosCliente.cpfCliente.value=".'"'.$infcliente ->CPF.'"'.";</script>";
         echo "<script> document.dadosCliente.nomeCliente.value=".'"'.$infcliente ->NOME.'"'.";</script>";
     }else{
        echo "<script> alert('Não encontrado lanche para esse CPF');</script>";
    }
  }

  ?>
</head>

<body>

<?php include ("includes/header_colaborador.php"); ?>

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
    <form name="dadosCliente" method="post" action="">
        <div class="col1 col-custom">
            <div class="itens-pedido">
                
                <div class="lanches-cliente tipo-item">
                    <div class="linha titulo-linhas" id="linha-titulo-carnes">
                        <span>Lanches do Cliente</span>
                    </div>
                    <div class="linha linha-dados" id="linha1">
                        <div class="inputs-form input-buscar">
                            <div class="busca-lanche">
                                <label for="buscarLanche">Buscar Cliente:</label>
                                <br/>
                                 <input id="cpfCliente" type="text" name="cpfCliente" oninput="maskCPF()" required>
                            </div>
                            <a onclick="Buscalanches(document.dadosCliente.cpfCliente.value)" class="btn-falso btn-buscar" >Encontrar</a>
                        </div>
                    </div>
                    <hr style="background-color: #111; height: 2px; border: none;">
                    <!-- Copiar essa div inteira no "for" para poder ficar certo o layout -->

                    
                    <?php 
                    global $query;
                    if ($query){
	                    while ($dados=detalhasql($query)) {
	                   
			               echo" <div class='linha' id='linha0'>";
		                   echo"     <label for=" .$dados ->NOME ."> ".$dados ->NOME." </label>";
		                   echo"     <div class='inputs'>";
		                   echo" <a href='/cadastro_lanche.php?cpf=$dados->CPF &nome=$dados->NOME' ><img src='/imgs/editar.png' width='15%'></a> ";
		                   
		                   echo"     </div>"; 
		                   echo"     </div>";

		                   

	                	}

	                }
                        ?>
                </div>
            </div>
        </div>
        <br />
        
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
    	var obsfinal = document.dadosCliente.Observacao.value;
    	document.dadosCliente.Observacao.value = 'Observacao: '+obsfinal;

    	if(document.dadosCliente.mesa.value==''){
    		alert("erro");
    	}else{

    		for (var i = 0; i <= descricaodiogo.length - 1; i++) {
    			var quantidadecustom = document.getElementById('in_'+idcampocustom[i]).value;
    			var obsfinal = document.dadosCliente.Observacao.value;
       			document.dadosCliente.Observacao.value= obsfinal+"</br> "+quantidadecustom+' '+descricaodiogo[i];
    			
    		}


        document.dadosCliente.submit();
    	}

    }

    function Buscalanches(cpf){
    	window.location="/altera_lanche.php?cpfCliente="+cpf;
    }



</script>
<?php

    if (isset($_GET["cpfCliente"])) {
        $CPF=$_GET["cpfCliente"];
        if(!$dados1==''){
        $querycliente = executasql($clientelanche);
        $infcliente = detalhasql($querycliente);
         echo "<script> document.dadosCliente.cpfCliente.value=".'"'.$infcliente ->CPF.'"'.";</script>";
         echo "<script> document.dadosCliente.nomeCliente.value=".'"'.$infcliente ->NOME.'"'.";</script>";
        }
    }

?>

</body>
</html>
