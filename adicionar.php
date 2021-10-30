<?php
//Header
include_once 'includes/header.php';
?>
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <div class="row center">
        <div class="col s12">
            <h3 class="light">Adicionar carro</h3>
        </div>
        <form action="php_action/create.php" method="post">
            <div class="input-field col s12 m6">
                <input type="text" name="marca" id="marca">
                <label for="marca">Marca</label>
            </div>
            <div class="input-field col s12 m6">
                <input type="text" name="modelo" id="modelo">
                <label for="modelo">Modelo</label>
            </div>
            <div class="input-field col s12 m8">
                <input type="text" name="descricao" id="descricao">
                <label for="descricao">Descrição</label>
            </div>
            <div class="input-field col s12 m4">
                <input type="text" name="mod_fab" id="mod_fab">
                <label for="mod_fab">Ano</label>
            </div>
            <div class="input-field col s12 m6">
                <input type="text" name="cor" id="cor">
                <label for="cor">Cor</label>
            </div>
            <div class="input-field col s12 m6">
                <input type="text" name="placa" id="placa">
                <label for="placa">Placa</label>
            </div>
            <div class="input-field col s12 m12">
                <input type="text" name="valor" id="valor">
                <label for="valor">Valor (R$)</label>
            </div>
            <button type="submit" name="btn-adicionar" class="btn ciano">Adicionar</button>
        </form>
      </div>
      <br><br>

    </div>
</div>
<?php
//Footer
include_once 'includes/footer.php';
?>