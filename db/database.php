<?php
    $dbHost = "localhost";
    $dbPorta = "3306";
    $dbBanco = "sgc";
    $dbUsuario = "root";
    $dbSenha = "tiarute";

    $conexao = mysqli_connect($dbHost, $dbPorta, $dbBanco, $dbUsuario, $dbSenha);

    if(mysqli_connect_errno($conexao)){
        echo "Erro ao acessar o banco de dados";
        die();
    }
?>