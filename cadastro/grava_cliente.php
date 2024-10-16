<?php
    $nome = trim($_POST['nome']);
    $cpf = trim($_POST['cpf']);
    $rg = trim($_POST['rg']);
    $sexo = trim($_POST['sexo']);
    $dt_nascimento = trim($_POST['dtNascimento']);
    $cep = trim($_POST['cep']);
    $logradouro = trim($_POST['logradouro']);
    $nr_endereco = trim($_POST['endNum']);
    $complemento = trim($_POST['complemento']);
    $bairro = trim($_POST['bairro']);
    $cidade = trim($_POST['cidade']);
    $uf = trim($_POST['uf']);
    $telefone = trim($_POST['telefone']);
    $celular = trim($_POST['celular']);
    $email = trim($_POST['email']);
    if(($nome == "") || ($cpf == "") || ($dt_nascimento == "") || ($cep == "") || $logradouro == "" || $nr_endereco == "" || $bairro == "" || $cidade == "" || $uf == "" || $celular == "" || $email == ""){
        echo "Erro ao cadastrar o cliente!";
        return;
    }
    require_once("../db/database.php");
    $SQL = "INSERT INTO cliente (nome, cpf, rg, sexo, dt_nascimento, cep, logradouro, end_num, complemento, bairro, cidade, uf, telefone, celular, email) VALUES ('$nome', '$cpf', '$rg', '$sexo', '$dt_nascimento', '$cep', '$logradouro', '$nr_endereco', '$complemento', '$bairro', '$cidade', '$uf', '$telefone', '$celular', '$email')";
    $stmt = $conexao->prepare($SQL);
    if($stmt->execute() == true){
        echo "Cliente cadastrado com sucesso";
    }else{
        echo "Erro ao cadastrar o cliente" . $stmt->errorInfo();
    }
    unset($conexao);
?>