<?php
include("conecta.php");
?>

<!DOCTYPE html>

<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="30;url=listagem.php" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="boot/dist/css/bootstrap.css">
    <script type="text/javascript" src="boot/dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="boot/js/src/modal.js"></script>
    <script type="text/jscript" src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="popper.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="icon" href="imagens/engrenagens.png">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Categoria 3</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        
        <p id="titulo_geral">Categoria 3</p>
    </nav>

    
    <br>
    <br>
    <br>
    
    <div id="container_cadastrado2">
        <table cellpadding="10px" class="table">
            <tr>
                <th class="td_div2">Nome</th>
                <th class="td_div2">Codigo</th>
                <th class="td_div2">Descricao</th>
                <th>valor da Compra</th>
                <th class="td_div2">Valor da Venda</th>
                <th class="td_div2">Categoria</th>
                <th >Ações</th>

            </tr>

            <!--        -->
            <?php

            include("conecta.php");
            $seleciona=mysqli_query($con, "select * from produtos where categoria_id = 3");
            while($campo=mysqli_fetch_array($seleciona)){?>
            <tr>
                <td>
                    <div class="td_div2" ><?=$campo["nome"]?></div>
                </td>
                <td>
                    <div class="td_div2"><?=$campo["codigo"]?></div>
                </td>
                <td>
                    <div class="td_div2"><?=$campo["descricao"]?></div>
                </td>
                <td>
                    <div class="div_table"><?=$campo["valor_compra"]?></div>
                </td>
                <td>
                    <div class="div_table"><?=$campo["valor_venda"]?></div>
                </td>
                <td>
                  <a href="categoria2.php">
                    <div class="div_table"><?=$campo["categoria_id"]?></div>
                    </a>
                </td>
                <td class="td_div2"><a href="#" onclick="verifica(<?=$campo["id"]?>)"><i class="fa fa-check" ></i></a></td>
          </tr>
  <?php }?>
</table>
</div>    
