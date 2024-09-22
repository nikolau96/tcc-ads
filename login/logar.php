<?php
    session_start();
    include('../db/database.php');
    if(empty($_POST['login']) || empty($_POST['senha'])){
        header('Location: ../index.php');
        exit();
    }
    $usuario = $_POST['login'];
    $senha = $_POST['senha'];
    $SQL = "SELECT * FROM `sgc`.`usuario` WHERE login = '{$usuario}' AND senha = '{$senha}'";
    $stmt = $conexao->prepare($SQL);
    $retorno = $stmt->execute();
    if($retorno == 1){
        $_SESSION['login'] = $usuario;
        header('Location: ../home/tela_home.php');
        exit();
    }
?>