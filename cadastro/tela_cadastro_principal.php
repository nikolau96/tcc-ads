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
        <div class="title">
            <h3>Cadastro</h3>
        </div>
        <div>
            <div>
                <label class="subtitle">O que deseja cadastrar?</label>
            </div>
            <div>
                <a href="../cadastro/tela_cadastro_atendimento.php">Atendimento</a>
                <a href="../cadastro/tela_cadastro_cliente.php">Cliente</a>
                <a href="../cadastro/tela_cadastro_vendedor.php">Vendedor</a>
                <a href="../cadastro/tela_cadastro_user.php">Usu&aacute;rio</a>
            </div>
        </div>
        <div>
            <button type="button"><a href="../home/tela_home.php">Voltar</a></button>
        </div>
    </body>
</html>
<?php
    include('../login/verifica_login.php');
?>