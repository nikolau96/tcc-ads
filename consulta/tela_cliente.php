<html>
    <head>
        <title>Sistema de Gerenciamento de Clientes</title>
        <link rel="icon" type="image/png" sizes="16x16" href="../favicon.png">
    </head>
    <body>
        <header>
            <img src="../favicon.png" alt="Logo do Sistema">
            <div id="linha"></div>
        </header>
        <div>
            <h3>Consulta de Cliente</h3>
        </div>
        <div>
            <form action="/consulta/busca_cliente.php">
                <h4>Pesquisar Cliente</h4>
                <!--<h4>Pesquisar por:</h4>
                <label for="nome">
                    <h4>Nome</h4>
                    <input type="text" id="nome" name="nome">
                </label>-->
                <input type="submit" value="Pesquisar">
            </form>
        </div>
        <div>
            <button type="button"><a href="../home/tela_home.php">Voltar</a></button>
            <button type="button"><a href="../alterar/tela_altera_cliente.php">Alterar Cadastro</a></button>
        </div>
    </body>
</html>
<?php
    include("../login/verifica_login.php");
?>