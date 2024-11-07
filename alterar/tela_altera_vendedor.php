<html>
    <head>
        <title>Sistema de Gerenciamento de Clientes</title>
        <link rel="icon" type="image/png" sizes="16x16" href="../logo/SGC_logo_nova.png">
    </head>
    <body>
        <?php
            $altera_nome = "";
            $altera_sexo = "";
            $altera_nascimento = "";
            $altera_telefone = "";
            $altera_celular = "";
            $altera_email = "";
            $altera_conselho = "";
            $altera_nconselho = "";
        ?>
        <header>
            <img src="../favicon.png" alt="Logo do Sistema">
            <div id="linha"></div>
        </header>
        <div>
            <h3>Altera&ccedil;&atilde;o Vendedor</h3>
        </div>
        <div>
            <form action="/alterar/tela_altera_vendedor.php" method="post">
                <div>
                    <label for="nome">
                        <h4>Nome</h4>
                        <input type="text" id="nome" name="nome" value="<?=$altera_nome?>">
                    </label>
                    <label for="sexo">
                        <h4>Sexo</h4>
                        <input type="text" id="sexo" name="sexo" value="<?=$altera_sexo?>">
                    </label>
                    <label for="dtNascimento">
                        <h4>Data de Nascimento</h4>
                        <input type="text" id="dtNascimento" name="dtNascimento" value="<?=$altera_nascimento?>">
                    </label>
                </div>
                    <label for="telefone">
                        <h4>Telefone</h4>
                        <input type="text" id="telefone" name="telefone" value="<?=$altera_telefone?>">
                    </label>
                    <label for="celular">
                        <h4>Celular</h4><br>
                        <input type="text" id="celular" name="celular" value="<?=$altera_celular?>">
                    </label>
                    <label for="email">
                        <h4>Email</h4><br>
                        <input type="text" id="email" name="email" value="<?=$altera_email?>">
                    </label>
                </div>
                <div>
                    <label for="conselho">
                        <h4>Conselho</h4>
                        <input type="text" id="conselho" name="conselho" value="<?=$altera_conselho?>">
                    </label>
                    <label for="numConselho">
                        <h4>N&uacute;mero</h4>
                        <input type="text" id="numConselho" name="numConselho" value="<?=$altera_nconselho?>">
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