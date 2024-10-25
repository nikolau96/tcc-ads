<html>
    <head>
        <title>Sistema de Gerenciamento de Clientes</title>
    </head>
    <body>
        <h3>Cadastro de vendedor</h3>
        <form action="/cadastro/grava_vendedor.php" method="post">
            <label for="nome">
                <h4>Nome</h4>
                <input type="text" id="nome" name="nome">
            </label>
            <br>
            <label for="cpf">
                <h4>CPF</h4>
                <input type="text" id="cpf" name="cpf">
            </label>
            <br>
            <label for="sexo">
                <h4>Sexo</h4>
                <input type="text" id="sexo" name="sexo">
            </label>
            <br>
            <label for="dtNascimento">
                <h4>Data de Nascimento</h4>
                <input type="date" id="dtNascimento" name="dtNascimento">
            </label>
            <br>
            <label for="telefone">
                <h4>Telefone</h4>
                <input type="text" id="telefone" name="telefone">
            </label>
            <br>
            <label for="celular">
                <h4>Celular</h4><br>
                <input type="text" id="celular" name="celular">
            </label>
            <br>
            <label for="email">
                <h4>Email</h4><br>
                <input type="text" id="email" name="email">
            </label>
            <br>
            <label for="conselho">
                <h4>Conselho</h4>
                <input type="text" id="conselho" name="conselho">
            </label>
            <br>
            <label for="numConselho">
                <h4>N&uacute;mero</h4>
                <input type="text" id="numConselho" name="numConselho">
            </label>
            <br><br>
            <input type="reset" value="Cancelar">
            <input type="submit" value="Gravar">
        </form>
    </body>
</html>
<?php
    include("../login/verifica_login.php");
?>