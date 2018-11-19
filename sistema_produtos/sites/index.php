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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
    
    <link rel="icon" href="imagens/engrenagens.png">
    <title>Cadastro de Produtos</title>

   <!--  <script>
        
        $(document).ready(function($){
          
          $("#matricula").mask("99.999-*");});
      </script>

      <script type="text/javascript">
        function validar(){
         
         var nome = meuform.nome.value;
         var secao = meuform.secao.value;
         var descricao = meuform.descricao.value;
         var matricula = meuform.matricula.value;
         var area_prob = meuform.area_prob.value;
         
         
         if (nome == "") {
            alert("Campo NOME obrigatório");
            meuform.nome.focus();
            return false;
        }

        if (secao == "") {
            alert("Campo SEÇÃO obrigatório");
            meuform.secao.focus();
            return false;
        }
        if (descricao == "") {
            alert("Campo DESCRIÇÃO obrigatório");
            meuform.descricao.focus();
            return false;
        }
        if (matricula == "") {
            alert("Campo MATRICULA obrigatório");
            meuform.matricula.focus();
            return false;
        }
        if (area_prob == ""){
            alert("Campo AREA DO PROBLEMA obrigatório ");
            meuform.area_prob.focus();
            return false;
        }
        

    }
</script> -->

</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        
        <p id="titulo_geral">Cadastro de produtos</p>
    </nav>

    
    <br>
    <br>
    <br>

    <div id="container_formulario" class="container">
        <h1 class="h">INFORME OS DADOS DO PRODUTO</h1>
        <br>
        <form method="post" action="cadastra.php" id="" name="">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input class="form-control" type="text" name="nome">
                </div>
                <div class="form-group col-md-3">
                    <label for="codigo">Código</label>
                    <input name="codigo" type="text" class="form-control" placeholder="Codigo Do Produto" maxlength="20">
                </div>
                <div class="form-group col-md-3">
                    <label for="valor_compra">Valor da Compra</label>
                    <input name="valor_compra" class="form-control" id="valor_compra">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="valor_venda">Valor da Venda</label>
                    <input class="form-control" type="text" name="valor_venda">
                </div>
                <div class="form-group col-md-9">
                    <label for="categoria">Categorias</label>
                    <input class="form-control" type="text" name="categoria">
                </div>
                
                <div class="form-group col-md-12">
                    <label for="descricao">Descrição</label>
                    <textarea   name="descricao" type="text" class="form-control" id="descricao" ></textarea>
                </div>

            </div>
            <br>
            <center><button type="submit" class="btn btn-warning" id="">Cadastrar</button></center>
            
        </form>
    </div>
    <br>
    <br>
    <hr>
    
    <div class="container" id="container_creditos">
        <p id="creditos">Desenvolvido por João Pedro Castro</p>
    </div>
</body>

</html>
