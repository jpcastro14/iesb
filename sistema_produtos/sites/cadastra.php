<?php

include("conecta.php");

$nome=$_POST["nome"];
$codigo=$_POST["codigo"];
$descricao=$_POST["descricao"];
$valor_compra=$_POST["valor_compra"];
$valor_venda=$_POST["valor_venda"];
$categoria=$_POST["categoria"];

mysqli_query($con, "insert into produtos (nome, codigo, descricao, valor_compra, valor_venda, categoria_id)
 values('$nome','$codigo','$descricao','$valor_compra','$valor_venda','$categoria')");



?>