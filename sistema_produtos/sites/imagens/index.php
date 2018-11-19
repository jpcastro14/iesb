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

    <div id="container_formulario" class="container">
        <h1 class="h">INFORME OS DADOS DO PROBLEMA</h1>
        <br>
        <form method="post" action="cadastra.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="secao">Seção</label>
                    <select name="secao" type="text" class="form-control" id="secao">
        
                        <?php
                        $result_secao = "SELECT * FROM secao";
                        $resultado_secao = mysqli_query($con, $result_secao);
                        while($row_secao = mysqli_fetch_assoc($resultado_secao)){ ?>
                         <option ><?php echo $row_secao['nome']; ?>
                        </option> <?php
             
                    }
                        ?>
        <option selected>Selecione</option>    
        </select>
                </div>


                <div class="form-group col-md-3">
                    <label for="nome">Nome</label>
                    <input name="nome" type="text" class="form-control" id="nome" placeholder="Primeiro e último" maxlength="20">
                </div>
                <div class="form-group col-md-3">
                    <label for="matricula">Matrícula</label>
                    <input name="matricula" type="text" class="form-control" id="matricula" placeholder="xxxxxx" maxlength="6">
                </div>
            </div>




            <div class="form-row">
                <div class="form-group col-md-3">

                    <label for="area_prob">Área do problema</label>
                    <select name="area_prob" type="text" class="form-control" id="area_prob">
                    <option>Selecione</option>
          
                        <?php
                        $result_area = "SELECT * FROM area";
                        $resultado_area = mysqli_query($con, $result_area);
                        while($row_area = mysqli_fetch_assoc($resultado_area)){ ?>
                         <option value="<?php echo $row_area['id'];?>"><?php echo $row_area['nome']; ?>
                        </option> <?php
             
                    }
                        ?>
      
            
      </select>
                </div>
                <div class="form-group col-md-9">
                    <label for="descricao">Descrição do problema</label>
                    <textarea name="descricao" class="form-control" id="descricao"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-warning" id="btncad">Criar Chamado</button>
        </form>
    </div>
    <br>
    <br>
    <hr>
    <!--Fim do formulario ------------------------------------------------------->
    <div class="container" id="container_creditos">
        <p id="creditos">Desenvolvido por João Pedro Castro</p>
    </div>
</body>

</html>