<html>
    <head>
        <title>Sistema de Gerenciamento de Clientes</title>
    </head>
    <body>
        <?php
            $altera_atendimento = "";
            $altera_produto = "";
            $altera_assunto = "";
            $altera_descricao = "";
            $altera_solucao = "";
        ?>
        <h3>Altera&ccedil;&atilde;o Atendimento</h3>
        <br>
        <form action="/alterar/altera_atendimento.php" method="post">
            <label for="dtAtendimento">
                <h4>Data de Atendimento</h4>
                <input type="text" id="dtAtendimento" name="dtAtendimento" value="<?=$altera_atendimento?>">
            </label>
            <br>
            <label for="produto">
                <h4>Produto/Servi&ccedil;o</h4>
                <input type="text" id="produto" name="produto" value="<?=$altera_produto?>">
            </label>
            <br>
            <label for="assunto">
                <h4>Assunto</h4><br>
                <input type="text" id="assunto" name="assunto" value="<?=$altera_assunto?>">
            </label>
            <br>
            <label for="descricao">
                <h4>Descri&ccedil;&atilde;o</h4><br>
                <input type="text" id="descricao" name="descricao" value="<?=$altera_descricao?>">
            </label>
            <br>
            <label for="solucao">
                <h4>Solu&ccedil;&atilde;o</h4>
                <input type="text" id="solucao" name="solucao" value="<?=$altera_solucao?>">
            </label>
            <br><br>
            <input type="reset" value="Cancelar">
            <input type="submit" value="Gravar">
    </body>
</html>
<?php
    include("../login/verifica_login.php");
?>