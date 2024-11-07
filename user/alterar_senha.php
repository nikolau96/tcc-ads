<html>
    <head>
        <title>Sistema de Gerenciamento de Clientes</title>
        <link rel="icon" type="image/png" sizes="16x16" href="../favicon.png">
    </head>
    <body>
        <header>
            <img src="../logo/SGC_logo_nova.png">
            <div id="linha"></div>
        </header>
        <div>
            <h3>Alterar Senha</h3>
        </div>
        <div>
            <form action="/user/mudar_senha.php" method="post">
                <div>    
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
                </div>
                <div>
                    <button><a href="../home/tela_home.php">Voltar</a></button>
                    <input type="submit" value="Gravar">
                </div>
            </form>
        </div>
    </body>
</html>
<?php
    include("../login/verifica_login.php");
?>