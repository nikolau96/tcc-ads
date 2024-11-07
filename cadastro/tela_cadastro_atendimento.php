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
        <div class="title">
            <h3>Cadastro de Atendimento</h3>
        </div>
        <div>
            <form action="/cadastro/grava_atendimento.php" method="post">
                <div>
                    <label for="dtAtendimento">
                        <h4>Data de Atendimento</h4>
                        <input type="date" id="dtAtendimento" name="dtAtendimento">
                    </label>
                    <label for="cliente">
                        <h4>Cliente</h4>
                        <input type="text" id="cliente" name="cliente">
                    </label>
                    <label for="vendedor">
                        <h4>Vendedor</h4>
                        <input type="text" id="vendedor" name="vendedor">
                    </label>
                    <label for="usuario">
                        <h4>Usuário que cadastrou</h4>
                        <input type="text" id="usuario" name="usuario">
                    </label>
                </div>
                <div>
                    <label for="produto">
                        <h4>Produto/Servi&ccedil;o</h4>
                        <input type="text" id="produto" name="produto">
                    </label>
                    <label for="assunto">
                        <h4>Assunto</h4>
                        <input type="text" id="assunto" name="assunto">
                    </label>
                </div>
                <div>
                    <label for="descricao">
                        <h4>Descri&ccedil;&atilde;o</h4>
                        <input type="text" id="descricao" name="descricao">
                    </label>
                </div>
                <div>
                    <label for="solucao">
                        <h4>Solu&ccedil;&atilde;o</h4>
                        <input type="text" id="solucao" name="solucao">
                    </label>
                </div>
                <div>
                    <input type="reset" value="Cancelar">
                    <input type="submit" value="Gravar">
                </div>
            </form>
        </div>
    </body>
</html>
<?php
    include("../login/verifica_login.php");
?>