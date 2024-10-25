<html>
    <head>
        <title>Sistema de Gerenciamento de Clientes</title>
    </head>
    <body>
        <h3>Alterar Senha</h3>
        <br>
        <form action="/user/mudar_senha.php" method="post">
            <label for="senhaAntiga">
                <h4>Senha antiga</h4>
                <input type="password" id="senhaAntiga" name="senhaAntiga">
            </label>
            <label for="senhaNova">
                <h4>Nova Senha</h4>
                <input type="password" id="senhaNova" name="senhaNova">
            </label>
            <label for="confirmaSenha">
                <h4>Confirmar senha</h4>
                <input type="password" id="confirmaSenha" name="confirmaSenha">
            </label>
            <a href="../home/tela_home.php"><input type="reset" value="Voltar"></a>
            <input type="submit" value="Gravar">
        </form>
    </body>
</html>
<?php
    include("../login/verifica_login.php");
?>