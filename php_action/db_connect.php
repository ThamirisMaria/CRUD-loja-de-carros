<?php
//Conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "loja_carros";

$connect = mysqli_connect($servername, $username, $password, $db_name);
//printf("Character set inicial: %s\n", mysqli_character_set_name ($connect));

mysqli_set_charset($connect, "utf8");
//printf("Character set final: %s\n", mysqli_character_set_name ($connect));

if(mysqli_connect_error()) :
    echo "Erro de conexão: ". mysqli_connect_error();
endif;
?>