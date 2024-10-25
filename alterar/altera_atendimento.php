<?php
    $altera_atendimento = filter_var($_POST['dtAtendimento'], FILTER_VALIDATE_INT);
    $altera_produto = filter_var($_POST['produto'], FILTER_VALIDATE_INT);
    $altera_assunto = filter_var($_POST['assunto'], FILTER_VALIDATE_INT);
    $altera_descricao = filter_var($_POST['descricao'], FILTER_VALIDATE_INT);
    $altera_solucao = filter_var($_POST['solucao'], FILTER_VALIDATE_INT);
    require_once("../db/database.php");
    $SQL = "UPDATE atendimento SET dt_atendimento = '{$altera_atendimento}', produto_servico = '{$altera_produto}', assunto = '{$altera_assunto}', descricao = '{$altera_descricao}', solucao = '{$altera_solucao}'";
    $stmt = $conexao->prepare($SQL);
    if($stmt->execute()){
        echo "<p>Cadastro alterado com sucesso</p>";
    }else{
        echo "<p>Erro ao alterar o cadastro</p>";
    }
    unset($conexao);
?>