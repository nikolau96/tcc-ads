<?php
    $altera_nome = filter_var($_POST['nome'], FILTER_VALIDATE_INT);
    $altera_rg = filter_var($_POST['rg'], FILTER_VALIDATE_INT);
    $altera_sexo = filter_var($_POST['sexo'], FILTER_VALIDATE_INT);
    $altera_nascimento = filter_var($_POST['dtNascimento'], FILTER_VALIDATE_INT);
    $altera_cep = filter_var($_POST['cep'], FILTER_VALIDATE_INT);
    $altera_logradouro = filter_var($_POST['logradouro'], FILTER_VALIDATE_INT);
    $altera_endereco = filter_var($_POST['endNum'], FILTER_VALIDATE_INT);
    $altera_complemento = filter_var($_POST['complemento'], FILTER_VALIDATE_INT);
    $altera_bairro = filter_var($_POST['bairro'], FILTER_VALIDATE_INT);
    $altera_cidade = filter_var($_POST['cidade'], FILTER_VALIDATE_INT);
    $altera_uf = filter_var($_POST['uf'], FILTER_VALIDATE_INT);
    $altera_telefone = filter_var($_POST['telefone'], FILTER_VALIDATE_INT);
    $altera_celular = filter_var($_POST['celular'], FILTER_VALIDATE_INT);
    $altera_email = filter_var($_POST['email'], FILTER_VALIDATE_INT);
    require_once("../db/database.php");
    $SQL = "UPDATE cliente SET nome = '{$altera_nome}', rg = '{$altera_rg}', sexo = '{$altera_sexo}', dt_nascimento = '{$altera_nascimento}', cep = '{$altera_cep}', logradouro = '{$altera_logradouro}', end_num = '{$altera_endereco}', complemento = '{$altera_complemento}', bairro = '{$altera_bairro}', cidade = '{$altera_cidade}', uf = '{$altera_uf}', telefone = '{$altera_telefone}', celular = '{$altera_celular}', email = '{$altera_email}'";
    $stmt = $conexao->prepare($SQL);
    if($stmt->execute()){
        echo "<p>Cadastro alterado com sucesso</p>";
        echo "<button><a href='../home/tela_home.php'>Voltar</a></button>";
    }else{
        echo "<p>Erro ao alterar o cadastro</p>";
    }
    unset($conexao);
?>