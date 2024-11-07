<html>
    <head>
        <title>Sistema de Gerenciamento de Clientes</title>
        <link rel="icon" type="image/png" sizes="16x16" href="../favicon.png">
    </head>
    <body>
        <header>
            <img src="../logo/SGC_logo_nova.png" alt="Logo do Sistema">
            <div id="linha"></div>
        </header>
        <div>
            <h3>Alterar Status</h3>
        </div>
        <div>
            <form action="/user/mudar_status.php" method="post">
                <div>
                    <label for="user">
                        <h4>Digite o usu&aacute;rio</h4>
                        <input type="text" id="user" name="user">
                    </label>
                    <label for="status">
                        <h4>Digite o status</h4>
                        <input type="text" id="status" name="status">
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