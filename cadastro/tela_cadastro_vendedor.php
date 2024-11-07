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
            <h3>Cadastro de Vendedor</h3>
        </div>
        <div>
            <form action="/cadastro/grava_vendedor.php" method="post">
                <div>
                    <label for="nome">
                        <h4>Nome</h4>
                        <input type="text" id="nome" name="nome">
                    </label>
                    <label for="cpf">
                        <h4>CPF</h4>
                        <input type="text" id="cpf" name="cpf">
                    </label>
                    <label for="sexo">
                        <h4>Sexo</h4>
                        <input type="text" id="sexo" name="sexo">
                    </label>
                </div>
                <div>
                    <label for="dtNascimento">
                        <h4>Data de Nascimento</h4>
                        <input type="date" id="dtNascimento" name="dtNascimento">
                    </label>
                    <label for="telefone">
                        <h4>Telefone</h4>
                        <input type="text" id="telefone" name="telefone">
                    </label>
                    <label for="celular">
                        <h4>Celular</h4>
                        <input type="text" id="celular" name="celular">
                    </label>
                </div>
                <div>
                    <label for="email">
                        <h4>Email</h4>
                        <input type="text" id="email" name="email">
                    </label>
                    <label for="conselho">
                        <h4>Conselho</h4>
                        <input type="text" id="conselho" name="conselho">
                    </label>
                    <label for="numConselho">
                        <h4>N&uacute;mero</h4>
                        <input type="text" id="numConselho" name="numConselho">
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