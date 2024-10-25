<html>
    <head>
        <title>Sistema de Gerenciamento de Clientes</title>
    </head>
    <body>
        <h3>Alterar Status</h3>
        <br>
        <form action="/user/mudar_status.php" method="post">
            <label for="user">
                <h4>Digite o usu&aacute;rio</h4>
                <input type="text" id="user" name="user">
            </label>
            <label for="status">
                <h4>Digite o status</h4>
                <input type="text" id="status" name="status">
            </label>
            <a href="../home/tela_home.php"><input type="reset" value="Voltar"></a>
            <input type="submit" value="Gravar">
        </form>
    </body>
</html>
<?php
    include("../login/verifica_login.php");
?>