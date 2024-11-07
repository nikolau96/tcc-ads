<html>
    <head>
        <title>Sistema de Gerenciamento de Clientes</title>
        <link rel="icon" type="image/png" sizes="16x16" href="../logo/SGC_logo_nova.png">
    </head>
    <body>
        <?php
            $altera_atendimento = "";
            $altera_produto = "";
            $altera_assunto = "";
            $altera_descricao = "";
            $altera_solucao = "";
        ?>
         <header>
            <img src="../favicon.png" alt="Logo do Sistema">
            <div id="linha"></div>
        </header>
        <div>
            <h3>Altera&ccedil;&atilde;o Atendimento</h3>
        </div>
        <div>
            <form action="/alterar/altera_atendimento.php" method="post">
                <div>
                    <label for="dtAtendimento">
                        <h4>Data de Atendimento</h4>
                        <input type="text" id="dtAtendimento" name="dtAtendimento" value="<?=$altera_atendimento?>">
                    </label>
                    <label for="produto">
                        <h4>Produto/Servi&ccedil;o</h4>
                        <input type="text" id="produto" name="produto" value="<?=$altera_produto?>">
                    </label>
                    <label for="assunto">
                        <h4>Assunto</h4>
                        <input type="text" id="assunto" name="assunto" value="<?=$altera_assunto?>">
                    </label>
                </div>
                <div>
                    <label for="descricao">
                        <h4>Descri&ccedil;&atilde;o</h4>
                        <input type="text" id="descricao" name="descricao" value="<?=$altera_descricao?>">
                    </label>
                    <br>
                    <label for="solucao">
                        <h4>Solu&ccedil;&atilde;o</h4>
                        <input type="text" id="solucao" name="solucao" value="<?=$altera_solucao?>">
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