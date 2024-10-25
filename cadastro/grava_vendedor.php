<?php
    $nome = trim($_POST['nome']);
    $cpf = trim($_POST['cpf']);
    $sexo = trim($_POST['sexo']);
    $dt_nascimento = date('dd/mm/yyyy', strtotime($_POST['dtNascimento']));
    $telefone = trim($_POST['telefone']);
    $celular = trim($_POST['celular']);
    $email = trim($_POST['email']);
    $conselho = trim($_POST['conselho']);
    $nr_conselho = trim($_POST['numConselho']);
    if(($nome == "") || ($cpf == "") || ($dt_nascimento == "") || ($celular == "") || $email == ""){
        echo "<p>Erro ao cadastrar o vendedor!</p>";
        return;
    }
    require_once("../db/database.php");
    include("../functions/verificar.php");
    $existe = verificaVendedor($nome, $cpf);
    if($existe == true){
        echo "<p>Erro: Esse vendedor j&aacute existe no sistema!</p>";
    }
    $SQL = "INSERT INTO vendedor (nome, cpf, sexo, dt_nascimento, telefone, celular, email, conselho, nr_conselho) VALUES ('$nome', '$cpf', '$sexo', '$dt_nascimento', '$telefone', '$celular', '$email', '$conselho', '$nr_conselho')";
    echo "$SQL";
    $stmt = $conexao->prepare($SQL);
    if($stmt->execute() == true){
        echo "<p>Vendedor cadastrado com sucesso</p>";
        echo "<button><a href='../home/tela_home.php'>Voltar</a></button>";
    }else{
        echo "<p>Erro ao cadastrar o vendedor" . $stmt->errorInfo() . "</p>";
    }
    unset($conexao);
?>