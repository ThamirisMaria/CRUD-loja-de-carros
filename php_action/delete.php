<?php
//Sessão
session_start();

//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-excluir'])):
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM estoque WHERE id = '$id'"; 

    if (mysqli_query($connect, $sql)):
        header('Location: ../consultar.php?sucesso');
    else:
        header('Location: ../consultar.php?erro');
    endif;
endif;
?>