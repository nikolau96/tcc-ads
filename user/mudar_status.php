<?php
    include("../db/database.php");
    $user = trim($_POST['user']);
    $status = trim($_POST['status']);
    if($user == "" || $status == ""){
        echo "<p>Erro: dados n&atilde;o informados</p>";
        return;
    }
    $select = "SELECT `status` FROM usuario WHERE nome = '{$user}'";
    $registro = mysqli_query($conexao, $select);
    $qtdRegistro = mysqli_num_rows($registro);
    if($qtdRegistro > 1){
        echo "<p>Erro</p>";
        return;
    }
    $SQL = "UPDATE usuario SET `status` = '{$status}' WHERE nome = '{$user}'";
    $stmt = $conexao->prepare($SQL);
    $retorno = $stmt->execute();
    if($retorno == true){
        echo "<p>Status alterado com sucesso</p>";
        echo "<button><a href='../home/tela_home.php'>Voltar</a></button>";
    }else{
        echo "<p>Erro ao alterar a senha " . $stmt->errorInfo() . "</p>";
        return;
    }
    unset($conexao);
?>