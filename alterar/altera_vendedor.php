<?php
    $altera_nome = filter_var($_POST['nome'], FILTER_VALIDATE_INT);
    $altera_sexo = filter_var($_POST['sexo'], FILTER_VALIDATE_INT);
    $altera_nascimento = filter_var($_POST['dtNascimento'], FILTER_VALIDATE_INT);
    $altera_telefone = filter_var($_POST['telefone'], FILTER_VALIDATE_INT);
    $altera_celular = filter_var($_POST['celular'], FILTER_VALIDATE_INT);
    $altera_email = filter_var($_POST['email'], FILTER_VALIDATE_INT);
    $altera_conselho = filter_var($_POST['conselho'], FILTER_VALIDATE_INT);
    $altera_nconselho = filter_var($_POST['numConselho'], FILTER_VALIDATE_INT);
    require_once("../db/database.php");
    $SQL = "UPDATE vendedor SET nome = '{$altera_nome}', sexo = '{$altera_sexo}', dt_nascimento = '{$altera_nascimento}', telefone = '{$altera_telefone}', celular = '{$altera_celular}', email = '{$altera_email}', conselho = '{$altera_conselho}', nr_conselho = '{$altera_nconselho}'";
    $stmt = $conexao->prepare($SQL);
    if($stmt->execute()){
        echo "<p>Cadastro alterado com sucesso</p>";
        echo "<button><a href='../home/tela_home.php'>Voltar</a></button>";
    }else{
        echo "<p>Erro ao alterar o cadastro</p>";
    }
    unset($conexao);
?>