<?php
 include("conecta.php");
?>

<!DOCTYPE html>

<html lang="">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="boot/dist/css/bootstrap.css">
    <script type="text/jscript" src="boot/dist/js/bootstrap.js"></script>
    <link rel="icon" href="imagens/engrenagens.png">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title>.: SUPORTE TCB :.</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <img id="engrenagem_azul" src="imagens/engrenagens1.png">
        <img id="engrenagem_laranja" src="imagens/engrenagens2.png">
        <p id="titulo_geral">Chamado de Suporte</p>
    </nav>

    <!-- Formulário de criação de chamado --------------------------------------->
    <br>
    <br>
    <br>
    
<div id="container_cadastrado2">
    <table cellpadding="10px" class="table">
        <tr>
            <th class="td_div2">Nome</th>
            <th class="td_div2">Seção</th>
            <th>Descrição</th>
            <th class="td_div2">Atender</th>
        </tr>
        
<!--        -->
        <?php
        
        include("conecta.php");
        $seleciona=mysqli_query($con, "select * from chamado order by id desc");
        while($campo=mysqli_fetch_array($seleciona)){?>
        <tr>
            <td>
                <div class="td_div2" ><?=$campo["nome"]?></div>
            </td>
            <td>
                <div class="td_div2"><?=$campo["secao"]?></div>
            </td>
            <td>
                <div class="div_table"><?=$campo["descricao"]?></div>
            </td>
            <td class="td_div2"><a href="atende.php?atendeid=<?=$campo["id"]?>"><i class="fa fa-check" ></i></a></td>
        </tr>
        
        <?php }?>
    </table>
</div>    
    