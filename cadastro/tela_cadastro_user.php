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
            <h3>Cadastro de Usu&aacute;rio</h3>
        </div>
        <div>
            <form action="/cadastro/grava_user.php" method="post">
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
                    <label for="status">
                        <h4>Status</h4><br>
                        <input type="text" id="status" name="status">
                    </label>
                </div>
                <div>
                    <label for="cargo">
                        <h4>Cargo</h4>
                        <input type="text" id="cargo" name="cargo">
                    </label>
                    <label for="setor">
                        <h4>Setor</h4>
                        <input type="text" id="setor" name="setor">
                    </label>
                    <label for="dtAdmissao">
                        <h4>Data de Admiss&atilde;o</h4><br>
                        <input type="date" id="dtAdmissao" name="dtAdmissao">
                    </label>
                </div>
                <div>
                    <label for="login">
                        <h4>Login</h4>
                        <input type="text" id="login" name="login">
                    </label>
                    <label for="senha">
                        <h4>Senha</h4>
                        <input type="text" id="senha" name="senha">
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