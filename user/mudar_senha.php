<?php
    include("../db/database.php");
    include("../login/verifica_login.php");
    $login = $_SESSION["login"];
    $senha_old = trim($_POST['senhaAntiga']);
    $senha_new = trim($_POST['senhaNova']);
    $confirma_senha = trim($_POST['confirmaSenha']);
    if($senha_old == "" || $senha_new == "" || $confirma_senha == ""){
        echo "<p>Erro: senha não informada</p>";
        return;
    }
    if($senha_new != $confirma_senha){
        echo "<p>Erro: as senhas não correspondem</p>";
        return;
    }
    $select = "SELECT senha FROM usuario WHERE id = '{$login}' AND senha = '{$senha_old}'";
    $registro = mysqli_query($conexao, $select);
    $qtdRegistro = mysqli_num_rows($registro);
    if($qtdRegistro > 1){
        echo "<p>Erro</p>";
        return;
    }
    $SQL = "UPDATE usuario SET senha = '{$senha_new}' WHERE senha = '{$senha_old}'";
    $stmt = $conexao->prepare($SQL);
    $retorno = $stmt->execute();
    if($retorno == true){
        echo "<p>Senha alterada com sucesso</p>";
        echo "<button><a href='../home/tela_home.php'>Voltar</a></button>";
    }else{
        echo "<p>Erro ao alterar a senha " . $stmt->errorInfo() . "</p>";
        return;
    }
    unset($conexao);
?>