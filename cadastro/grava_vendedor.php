<?php
    $nome = trim($_POST['nome']);
    $cpf = trim($_POST['cpf']);
    $sexo = trim($_POST['sexo']);
    $dt_nascimento = trim($_POST['dtNascimento']);
    $telefone = trim($_POST['telefone']);
    $celular = trim($_POST['celular']);
    $email = trim($_POST['email']);
    $conselho = trim($_POST['conselho']);
    $nr_conselho = trim($_POST['numConselho']);
    if(($nome == "") || ($cpf == "") || ($dt_nascimento == "") || ($celular == "") || $email == ""){
        echo "Erro ao cadastrar o vendedor!";
        return;
    }
    require_once("../db/database.php");
    $SQL = "INSERT INTO vendedor VALUES ($nome, $cpf, $dt_nascimento, $telefone, $celular, $email, $conselho, $nr_conselho)";
    $stmt = $conexao->prepare($SQL);
    if($stmt->execute() == true){
        echo "Vendedor cadastrado com sucesso";
    }else{
        echo "Erro ao cadastrar o vendedor" . $stmt->errorInfo();
    }
    unset($conexao);
?>