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
            <h3>Cadastro de Cliente</h3>
        </div>
        <div>
            <form action="/cadastro/grava_cliente.php" method="post">
                <div>
                    <label for="nome">
                        <h4>Nome</h4>
                        <input type="text" id="nome" name="nome">
                    </label>
                    <label for="cpf">
                        <h4>CPF</h4>
                        <input type="text" id="cpf" name="cpf" size="11">
                    </label>
                    <label for="rg">
                        <h4>RG</h4>
                        <input type="text" id="rg" name="rg">
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
                    <label for="email">
                        <h4>Email</h4>
                        <input type="text" id="email" name="email">
                    </label>
                </div>
                <div>
                    <label for="cep">
                        <h4>CEP</h4>
                        <input type="text" id="cep" name="cep">
                    </label>
                    <label for="logradouro">
                        <h4>Logradouro</h4>
                        <input type="text" id="logradouro" name="logradouro">
                    </label>
                    <label for="endNum">
                        <h4>N&uacute;mero</h4>
                        <input type="text" id="endNum" name="endNum" size="4">
                    </label>
                    <label for="complemento">
                        <h4>Complemento</h4>
                        <input type="text" id="complemento" name="complemento">
                    </label>
                    <label for="bairro">
                        <h4>Bairro</h4>
                        <input type="text" id="bairro" name="bairro">
                    </label>
                    <label for="cidade">
                        <h4>Cidade</h4>
                        <input type="text" id="cidade" name="cidade">
                    </label>
                    <label for="uf">
                        <h4>UF</h4>
                        <input type="text" id="uf" name="uf" size="2">
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