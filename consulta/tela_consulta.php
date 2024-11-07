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
            <h3>Consulta</h3>
        </div>
        <div>
            <div>
                <label class="subtitle">O que deseja consultar?</label>
            </div>
            <div>
                <a href="/consulta/tela_vendedor.php">Vendedor</a>
                <a href="/consulta/tela_atendimento.php">Atendimento</a>
                <a href="/consulta/tela_cliente.php">Cliente</a>
            </div>
        </div>
        <div>
            <button type="button"><a href="../home/tela_home.php">Voltar</a></button>
        </div>
    </body>
</html>
<?php
    include("../login/verifica_login.php");
?>