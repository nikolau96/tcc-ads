<html>
    <head>
        <title>Sistema de Gerenciamento de Clientes</title>
    </head>
    <body>
        <h3>Altera&ccedil;&atilde;o Cliente</h3>
        <br>
        <br>
        <form action="" method="post">
            <h4>Nome</h4><br>
            <input type="text" id="nome" name="nome">
            <br><br>
            <h4>RG</h4><br>
            <input type="text" id="rg" name="rg">
            <br><br>
            <h4>Sexo</h4><br>
            <input type="text" id="sexo" name="sexo">
            <br><br>
            <h4>Data de Nascimento</h4><br>
            <input type="text" id="dtNascimento" name="dtNascimento">
            <br><br>
            <h4>CEP</h4><br>
            <input type="text" id="cep" name="cep">
            <br><br>
            <h4>Logradouro</h4><br>
            <input type="text" id="logradouro" name="logradouro">
            <br><br>
            <h4>N&uacute;mero</h4><br>
            <input type="text" id="endNum" name="endNum" size="4">
            <br><br>
            <h4>Complemento</h4><br>
            <input type="text" id="complemento" name="complemento">
            <br><br>
            <h4>Bairro</h4><br>
            <input type="text" id="bairro" name="bairro">
            <br><br>
            <h4>Cidade</h4><br>
            <input type="text" id="cidade" name="cidade">
            <br><br>
            <h4>UF</h4><br>
            <input type="text" id="uf" name="uf" size="2">
            <br><br>
            <h4>Telefone</h4>
            <input type="text" id="telefone" name="telefone">
            <br><br>
            <h4>Celular</h4>
            <input type="text" id="celular" name="celular">
            <br><br>
            <h4>Email</h4>
            <input type="text" id="email" name="email">
            <br>
            <input type="reset" value="Cancelar">
            <input type="submit" value="Gravar">
        </form>
    </body>
</html>
<?php
    include("../login/verifica_login.php");
?>