<?php
    $dt_atendimento = trim($_POST['dtAtendimento']);
    $cliente = trim($_POST['cliente']);
    $vendedor = trim($_POST['vendedor']);
    $usuario = trim($_POST['usuario']);
    $produto = trim($_POST['produto']);
    $assunto = trim($_POST['assunto']);
    $descricao = trim($_POST['descricao']);
    $solucao = trim($_POST['solucao']);
    if(($dt_atendimento == "") || ($cliente == "") || ($vendedor == "") || ($usuario == "") || $produto == "" || $assunto == "" || $descricao == ""){
        echo "Erro ao cadastrar o atendimento!";
        return;
    }
    require_once("../db/database.php");
    $SQL = "INSERT INTO `atendimento` (`dt_atendimento`, `cliente_id`, `vendedor_id`, `usuario_id`, `produto_servico`, `assunto`, `descricao`, `solucao`) VALUES ($dt_atendimento, $cliente, $vendedor, $usuario, $produto, $assunto, $descricao, $solucao)";
    $stmt = $conexao->prepare($SQL);
    if($stmt->execute() == true){
        echo "Atendimento cadastrado com sucesso";
    }else{
        echo "Erro ao cadastrar o atendimento" . $stmt->errorInfo();
    }
    unset($conexao);
?>