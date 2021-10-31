<?php
//Conexão
include_once 'php_action/db_connect.php';

//Header
include_once 'includes/header.php';
?>

<div class="section no-pad-bot" id="index-banne">
    <div class="container">
        <br><br>
        <div class="row center">
            <div class="col s12">
                <h3 class="light">Relatório</h3>
                <form action="php_action/report.php" target="_blank" method="post">
                    <div class="col s6">
                        <label for="marca">Selecione a marca:</label>
                        <select name="marcaselecionada">
                            <option>TODAS AS MARCAS</option>
                            <?php
                                $sql = "SELECT DISTINCT marca FROM estoque";
                                $resultado = mysqli_query($connect, $sql);
                                while ($dados = mysqli_fetch_array($resultado)):
                                ?>
                                <option><?php echo $dados['marca']; ?></option>
                                <?php endwhile; ?>
                            ?>
                        </select> 
                    </div>
                    <div class="col s6">
                        <input type="submit" value="Selecionar" name="btn-relatorio" class="btn ciano">
                    </div>
                </form>
                <br><br>
            </div>
        </div>
    </div>
</div>
<br><br>
<?php
//Footer
include_once 'includes/footer.php';
?>