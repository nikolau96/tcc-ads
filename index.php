<html>
    <head>
        <title>Sistema de Gerenciamento de Clientes</title>
    </head>
    <body>
        <form action="login/logar.php" method="POST">
            <input type="text" id="login" name="login">
            <br>
            <input type="password" id="senha" name="senha">
            <br>
            <input type="submit" value="Entrar">
        </form>
    </body>
</html>
<?php
    if(isset($_SESSION['nao_autenticado'])){
        echo "<p>Login ou senha inv&aacute;lido</p>";
    }
    unset($_SESSION['nao_autenticado']);
?>