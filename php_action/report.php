<?php
//Conexão
include_once 'db_connect.php';
?>

<!-- Header -->
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Car Today - Loja de Carros</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"> defer </script>
  <script src="../js/materialize.js"> defer </script>
  <script src="../js/init.js"> defer </script>
</head>

<div class="btn-large azul-escuro right"><a href="" onclick="window.print()">Imprimir</a></div>

<body>

    <div class="section no-pad-bot" id="index-banne">
        <div class="container">
            <br><br>
            <div class="row center">
            <img src="../assets/imagens/CAR TODAY - logo/CAR TODAY - logo 2/vector/default.svg" alt="" width="200px">
                <div class="col s12">
                    <h3 class="light">Relatório</h3>
                    
                    <?php
                    if(isset($_POST['btn-relatorio'])) :
                        $marcaselecionada = $_POST['marcaselecionada'];
                    endif;
                    ?>

                    <h4 class="light"><?php echo $marcaselecionada; ?></h4>

                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Descrição</th>
                                <th>Mod/Fab</th>
                                <th>Cor</th>
                                <th>Placa</th>
                                <th>Valor (R$)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                if(isset($_POST['btn-relatorio'])):
                                    if($marcaselecionada == "TODAS AS MARCAS") :
                                        $sql = "SELECT * FROM estoque ORDER BY marca, modelo, mod_fab";
                                    else :
                                        $sql = "SELECT * FROM estoque WHERE marca = '$marcaselecionada' ORDER BY marca, modelo, mod_fab";
                                    endif;
                                
                                    $resultado = mysqli_query($connect, $sql);
                                    while ($dados = mysqli_fetch_array($resultado)):
                            ?>
                                        <tr>
                                            <td><?php echo $dados['marca'] ?></td>
                                            <td><?php echo $dados['modelo'] ?></td>
                                            <td><?php echo $dados['descricao'] ?></td>
                                            <td><?php echo $dados['mod_fab'] ?></td>
                                            <td><?php echo $dados['cor'] ?></td>
                                            <td><?php echo $dados['placa'] ?></td>
                                            <td><?php echo $dados['valor'] ?></td>
                                        </tr>
                                    <?php endwhile;
                                endif;    
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>