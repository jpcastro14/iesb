<?php

include("conecta.php");
$recid=$_GET["idexc"];
mysqli_query($con, "delete from produtos where id=$recid");

header("location:listagem.php");

?>