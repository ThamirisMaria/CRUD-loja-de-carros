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
                <h3 class="light">Estoque de carros</h3>
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
                            $sql = "SELECT * FROM estoque";
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
                            <td><a href="editar.php?id=<?php echo $dados['id']; ?>" 
                            class="btn-floating orange waves-effect waves-light"><i
                            class="material-icons">edit</i></a></td>

                            <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red waves-effect waves-light modal-trigger"><i
                            class="material-icons">delete</i></a></td>

                            <!-- Modal Structure -->
                            <div id="modal<?php echo $dados['id']; ?>" class="modal fixed footer">
                                <div class="modal-content">
                                <h4>Você realmente deseja excluir este carro?</h4>
                                <p> <?php echo $dados['descricao'] ?> - <?php echo $dados['mod_fab'] ?> - <?php echo $dados['cor'] ?> - <?php echo $dados['placa'] ?> </p>
                                </div>
                                <div class="modal-footer">
                                <form action="php_action/delete.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                    <a href="" class="modal-close btn green waves-effect waves-green">Cancelar</a>
                                    <button type="submit" name="btn-excluir" class="btn red">Sim, excluir</button>
                                </form>
                                </div>
                            </div>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
//Footer
include_once 'includes/footer.php';
?>