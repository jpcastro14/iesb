<?php

include("conecta.php");

$secao=$_POST["secao"];
$nome=$_POST["nome"];
$matricula=$_POST["matricula"];
$area_prob=$_POST["area_prob"];
$descricao=$_POST["descricao"];

mysqli_query($con, "insert into chamado (secao, nome, matricula, area, descricao,criado)
                    values('$secao','$nome','$matricula','$area_prob','$descricao',NOW())");


header("location:cadastrado.html");

?>