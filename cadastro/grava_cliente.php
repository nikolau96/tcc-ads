<?php
    $nome = trim($_POST['nome']);
    $cpf = trim($_POST['cpf']);
    $sexo = trim($_POST['sexo']);
    $cargo = trim($_POST['cargo']);
    $setor = trim($_POST['setor']);
    $dt_admissao = trim($_POST['dtAdmissao']);
    $status = trim($_POST['status']);
    $login = trim($_POST['login']);
    $senha = trim($_POST['senha']);
    if(($nome == "") || ($cpf == "") || ($cargo == "") || ($setor == "") || $status == "" || $login == "" || $senha == ""){
        echo "Erro ao cadastrar o vendedor!";
        return;
    }
    require_once("../db/database.php");
    $SQL = "INSERT INTO `usuario` (`nome`, `cpf`, `sexo`, `cargo`, `setor`, `dt_admissao`, `status`, `login`, `senha`) VALUES ($nome, $cpf, $sexo, $cargo, $setor, $dt_admissao, $status, $login, $senha)";
    $stmt = $conexao->prepare($SQL);
    if($stmt->execute() == true){
        echo "Vendedor cadastrado com sucesso";
    }else{
        echo "Erro ao cadastrar o vendedor" . $stmt->errorInfo();
    }
    unset($conexao);
?>