<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="br" lang="br">

<head>

  <?php include ("includes/head.php"); ?>  

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

    .valor-final {
        padding: 20px 0;
        margin: 10px 0;
        border-bottom: 1px solid black;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

</style>

<?php
/*
die();
$executa = "";

$tipo_pao = $_POST["tipo_pao"];
$carne160g = $_POST["carne160g"];
$carne180g = $_POST["carne180g"];
$carne200g = $_POST["carne200g"];
$carneBacon = $_POST["carneBacon"];
$carneBaconEmpanado = $_POST["carneBaconEmpanado"];
$alfaceAmericana = $_POST["alfaceAmericana"];
$cebolaRoxa = $_POST["cebolaRoxa"];
$cebolaCaramelizada = $_POST["cebolaCaramelizada"];
$onions = $_POST["onions"];
$tomate = $_POST["tomate"];
$tomateSeco = $_POST["tomateSeco"];
$picles = $_POST["picles"];
$molhoCasa = $_POST["molhoCasa"];
$molhoBarbecue = $_POST["molhoBarbecue"];
$molhoPrimuz = $_POST["molhoPrimuz"];
$mussarela = $_POST["mussarela"];
$cheddar = $_POST["cheddar"];
$queijoMeiaCura = $_POST["queijoMeiaCura"];
$observacoes = $_POST["observacoes"];

$nomeLanche = $_POST["nomeLanche"];
$nomeCliente = $_POST["nomeCliente"];
$cpfCliente = $_POST["cpfCliente"];

$query = $mysqli->query($executa);
*/
?>
<div class="conteudo">
    <form name="dadosCliente" method="post" action="/bancodedados.php?funcao=cadlanche">
        <div class="col1 col-custom">
            <div class="itens-pedido">
                <div class="tipo-pao tipo-item">
                    <div class="linha titulo-linhas" id="linha-titulo-carnes">
                        <span>Tipo de P&atilde;o</span>
                    </div>
                    <div class="linha" id="linha1">
                        <label class="container">P&atilde;o Brioche
                            <input type="radio" name="tipo_pao" id="pao01">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="linha" id="linha1">
                        <label class="container">P&atilde;o Franc&ecirc;s
                            <input type="radio" name="tipo_pao" id="pao02">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="linha" id="linha1">
                        <label class="container">P&atilde;o Italiano
                            <input type="radio" name="tipo_pao" id="pao03">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="linha" id="linha1">
                        <label class="container">P&atilde;o Australiano
                            <input type="radio" name="tipo_pao" id="pao04">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="carnes tipo-item">
                    <div class="linha titulo-linhas" id="linha-titulo-carnes">
                        <span>Carnes</span>
                    </div>
                    <div class="linha" id="linha1">
                        <label for="carne160g">160 gramas</label>
                        <div class="inputs">
                            <div class="sub" id="bt_carne160g" onClick="x(this.id, 0)">-</div>
                            <input type="text" min="0" max="9" value="0" name="carne160g" id="in_carne160g" readonly>
                            <div class="add" id="bt_carne160g" onClick="x(this.id, 1)">+</div>
                        </div>
                    </div>
                    <div class="linha" id="linha2">
                        <label for="carne180g">180 gramas</label>
                        <div class="inputs">
                            <div class="sub" id="bt_carne180g" onClick="x(this.id, 0)">-</div>
                            <input type="text" min="0" max="9" value="0" name="carne180g" id="in_carne180g" readonly>
                            <div class="add" id="bt_carne180g" onClick="x(this.id, 1)">+</div>
                        </div>
                    </div>
                    <div class="linha" id="linha3">
                        <label for="carne200g">200 gramas</label>
                        <div class="inputs">
                            <div class="sub" id="bt_carne200g" onClick="x(this.id, 0)">-</div>
                            <input type="text" min="0" max="9" value="0" name="carne200g" id="in_carne200g" readonly>
                            <div class="add" id="bt_carne200g" onClick="x(this.id, 1)">+</div>
                        </div>
                    </div>
                    <div class="linha" id="linha4">
                        <label for="carneBacon">Bacon</label>
                        <div class="inputs">
                            <div class="sub" id="bt_carneBacon" onClick="x(this.id, 0)">-</div>
                            <input type="text" min="0" max="9" value="0" name="carneBacon" id="in_carneBacon" readonly>
                            <div class="add" id="bt_carneBacon" onClick="x(this.id, 1)">+</div>
                        </div>
                    </div>
                    <div class="linha" id="linha5">
                        <label for="carneBaconEmpanado">Bacon Empanado</label>
                        <div class="inputs">
                            <div class="sub" id="bt_carneBaconEmpanado" onClick="x(this.id, 0)">-</div>
                            <input type="text" min="0" max="9" value="0" name="carneBaconEmpanado" id="in_carneBaconEmpanado" readonly>
                            <div class="add" id="bt_carneBaconEmpanado" onClick="x(this.id, 1)">+</div>
                        </div>
                        

                    </div>
                </div>
                <div class="vegetais-legumes tipo-item">
                    <div class="linha titulo-linhas" id="linha-titulo-carnes">
                        <span>Vegetais e Legumes</span>
                    </div>
                    <div class="linha" id="linha1">
                        <label for="alfaceAmericana">Alface Americana</label>
                        <div class="inputs">
                            <div class="sub" id="bt_alfaceAmericana" onClick="x(this.id, 0)">-</div>
                            <input type="text" min="0" max="9" value="0" name="alfaceAmericana" id="in_alfaceAmericana" readonly>
                            <div class="add" id="bt_alfaceAmericana" onClick="x(this.id, 1)">+</div>
                        </div>
                    </div>
                    <div class="linha" id="linha2">
                        <label for="cebolaRoxa">Cebola Roxa</label>
                        <div class="inputs">
                            <div class="sub" id="bt_cebolaRoxa" onClick="x(this.id, 0)">-</div>
                            <input type="text" min="0" max="9" value="0" name="cebolaRoxa" id="in_cebolaRoxa" readonly>
                            <div class="add" id="bt_cebolaRoxa" onClick="x(this.id, 1)">+</div>
                        </div>
                    </div>
                    <div class="linha" id="linha3">
                        <label for="cebolaCaramelizada">Cebola Caramelizada</label>
                        <div class="inputs">
                            <div class="sub" id="bt_cebolaCaramelizada" onClick="x(this.id, 0)">-</div>
                            <input type="text" min="0" max="9" value="0" name="cebolaCaramelizada" id="in_cebolaCaramelizada" readonly>
                            <div class="add" id="bt_cebolaCaramelizada" onClick="x(this.id, 1)">+</div>
                        </div>
                    </div>
                    <div class="linha" id="linha4">
                        <label for="onions">Onions</label>
                        <div class="inputs">
                            <div class="sub" id="bt_onions" onClick="x(this.id, 0)">-</div>
                            <input type="text" min="0" max="9" value="0" name="onions" id="in_onions" readonly>
                            <div class="add" id="bt_onions" onClick="x(this.id, 1)">+</div>
                        </div>
                    </div>
                    <div class="linha" id="linha5">
                        <label for="tomate">Tomate</label>
                        <div class="inputs">
                            <div class="sub" id="bt_tomate" onClick="x(this.id, 0)">-</div>
                            <input type="text" min="0" max="9" value="0" name="tomate" id="in_tomate" readonly>
                            <div class="add" id="bt_tomate" onClick="x(this.id, 1)">+</div>
                        </div>
                    </div>
                    <div class="linha" id="linha6">
                        <label for="tomateSeco">Tomate Seco</label>
                        <div class="inputs">
                            <div class="sub" id="bt_tomateSeco" onClick="x(this.id, 0)">-</div>
                            <input type="text" min="0" max="9" value="0" name="tomateSeco" id="in_tomateSeco" readonly>
                            <div class="add" id="bt_tomateSeco" onClick="x(this.id, 1)">+</div>
                        </div>
                    </div>
                    <div class="linha" id="linha7">
                        <label for="picles">Picles</label>
                        <div class="inputs">
                            <div class="sub" id="bt_picles" onClick="x(this.id, 0)">-</div>
                            <input type="text" min="0" max="9" value="0" name="picles" id="in_picles" readonly>
                            <div class="add" id="bt_picles" onClick="x(this.id, 1)">+</div>
                        </div>
                    </div>
                </div>
                <div class="molhos tipo-item">
                    <div class="linha titulo-linhas" id="linha-titulo-carnes">
                        <span>Molhos</span>
                    </div>
                    <div class="linha" id="linha1">
                        <label for="molhoCasa">Molho da Casa</label>
                        <div class="inputs">
                            <div class="sub" id="bt_molhoCasa" onClick="x(this.id, 0)">-</div>
                            <input type="text" min="0" max="9" value="0" name="molhoCasa" id="in_molhoCasa" readonly>
                            <div class="add" id="bt_molhoCasa" onClick="x(this.id, 1)">+</div>
                        </div>
                    </div>
                    <div class="linha" id="linha2">
                        <label for="molhoBarbecue">Molho Barbecue</label>
                        <div class="inputs">
                            <div class="sub" id="bt_molhoBarbecue" onClick="x(this.id, 0)">-</div>
                            <input type="text" min="0" max="9" value="0" name="molhoBarbecue" id="in_molhoBarbecue" readonly>
                            <div class="add" id="bt_molhoBarbecue" onClick="x(this.id, 1)">+</div>
                        </div>
                    </div>
                    <div class="linha" id="linha3">
                        <label for="molhoPrimuz">Molho Primuz</label>
                        <div class="inputs">
                            <div class="sub" id="bt_molhoPrimuz" onClick="x(this.id, 0)">-</div>
                            <input type="text" min="0" max="9" value="0" name="molhoPrimuz" id="in_molhoPrimuz" readonly>
                            <div class="add" id="bt_molhoPrimuz" onClick="x(this.id, 1)">+</div>
                        </div>
                    </div>
                </div>
                <div class="queijos tipo-item">
                    <div class="linha titulo-linhas" id="linha-titulo-carnes">
                        <span>Queijos</span>
                    </div>
                    <div class="linha" id="linha1">
                        <label for="mussarela">Mussarela</label>
                        <div class="inputs">
                            <div class="sub" id="bt_mussarela" onClick="x(this.id, 0)">-</div>
                            <input type="text" min="0" max="9" value="0" name="mussarela" id="in_mussarela" readonly>
                            <div class="add" id="bt_mussarela" onClick="x(this.id, 1)">+</div>
                        </div>
                    </div>
                    <div class="linha" id="linha2">
                        <label for="cheddar">Cheddar</label>
                        <div class="inputs">
                            <div class="sub" id="bt_cheddar" onClick="x(this.id, 0)">-</div>
                            <input type="text" min="0" max="9" value="0" name="cheddar" id="in_cheddar" readonly>
                            <div class="add" id="bt_cheddar" onClick="x(this.id, 1)">+</div>
                        </div>
                    </div>
                    <div class="linha" id="linha3">
                        <label for="queijoMeiaCura">Queijo Cura</label>
                        <div class="inputs">
                            <div class="sub" id="bt_queijoMeiaCura" onClick="x(this.id, 0)">-</div>
                            <input type="text" min="0" max="9" value="0" name="queijoCura" id="in_queijoMeiaCura" readonly>
                            <div class="add" id="bt_queijoMeiaCura" onClick="x(this.id, 1)">+</div>
                        </div>
                    </div>
                </div>
                <div class="observacoes tipo-item">
                    <div class="linha titulo-linhas" id="linha-titulo-carnes">
                        <span>Observa&ccedil;&otilde;es</span>
                    </div>
                    <div class="inputs">
                        <textarea type="text" name="observacoes" id="in_observacoes"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="col2">
            <div class="itens-pedido">
                <div class="tipo-item">
                    <div class="linha titulo-linhas">
                        <span>Dados</span>
                    </div>
                    <div class="linha linha-dados" id="linha1">
                        <div class="inputs-form">
                            <label for="nomeLanche">Nome do Lanche:</label>
                            <br/>
                            <input id="nomeLanche" type="text" name="nomeLanche" required>
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
                        <div class="inputs-form valor-final">
                            <input type="hidden" name="valorFinalLanche" id="valorFinalLanche" value="0.00">
                            <span>Pre&ccedil;o Total: R$&nbsp;<span id="valorFinal" value="0">0.00</span></span>
                        </div>
                    </div>
                    <div class="linha linha-dados" id="linha4">
                        <div class="inputs-form-buttons">
                            <a onclick="validarDados()" class="btn-falso" >Adicionar</a>
                            <!-- <input type="button" value="Adicionar" onclick="validarDados()"> -->
                            <input type="reset" value="Limpar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    
    function x(campo, acao) {
        m_itens = {
            "carne160g" : "4.00",
            "carne180g" : "4.50",
            "carne200g" : "5.00",
            "carneBacon" : "3.00",
            "carneBaconEmpanado" : "4.00",
            "alfaceAmericana" : "2.00",
            "cebolaRoxa" : "2.00",
            "cebolaCaramelizada" : "2.00",
            "onions" : "2.00",
            "tomate" : "2.00",
            "tomateSeco" : "3.00",
            "picles" : "2.00",
            "molhoCasa" : "2.00",
            "molhoBarbecue" : "2.00",
            "molhoPrimuz" : "2.00",
            "mussarela" : "3.00",
            "cheddar" : "3.00",
            "queijoMeiaCura" : "3.00"
        };

        var id_item = campo.substring(3);
        var v = m_itens[id_item];
        var v_antigo = document.getElementById('valorFinalLanche').value;

        var valor1 = 0;
        var campoNome = 'in_' + campo.substring(3);
        valor = eval(document.getElementById(campoNome).value);
        if (acao === 1) {
            valor1 = valor + 1;
            if (valor1 > 9) {
                valor1 = 9;
            } else {
                var vf = eval(v_antigo) + eval(v);
            }
        } else {
            valor1 = valor - 1;
            if (valor1 < 0) {
                valor1 = 0;
            } else {
                var vf = eval(v_antigo) - eval(v);        
            }
        }
    
        document.getElementById(campoNome).value = valor1;
        document.getElementById('valorFinalLanche').value = vf.toFixed(2);
        document.getElementById('valorFinal').innerHTML = vf.toFixed(2);
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
        validarCPF();
        if (validarCPF() == false) {
            document.getElementById('cpfCliente').focus;
            alert("CPF Inválido.");
            return false;
        }
        document.dadosCliente.submit();
    }

</script>

</body>
</html>
