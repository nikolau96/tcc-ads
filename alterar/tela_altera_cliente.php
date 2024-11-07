<html>
    <head>
        <title>Sistema de Gerenciamento de Clientes</title>
        <link rel="icon" type="image/png" sizes="16x16" href="../logo/SGC_logo_nova.png">
    </head>
    <body>
        <?php
            $altera_nome = "";
            $altera_rg = "";
            $altera_sexo = "";
            $altera_nascimento = "";
            $altera_cep = "";
            $altera_logradouro = "";
            $altera_endereco = "";
            $altera_complemento = "";
            $altera_bairro = "";
            $altera_cidade = "";
            $altera_uf = "";
            $altera_telefone = "";
            $altera_celular = "";
            $altera_email = "";
        ?>
        <header>
            <img src="../favicon.png" alt="Logo do Sistema">
            <div id="linha"></div>
        </header>
        <div>
            <h3>Altera&ccedil;&atilde;o Cliente</h3>
        </div>
        <div>
            <form action="/alterar/altera_cliente.php" method="post">
                <div>
                    <label for="nome">
                        <h4>Nome</h4>
                        <input type="text" id="nome" name="nome" value="<?=$altera_nome?>">
                    </label>
                    <label for="rg">
                        <h4>RG</h4>
                        <input type="text" id="rg" name="rg" value="<?=$altera_rg?>">
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
                <div>
                    <label for="cep">
                        <h4>CEP</h4>
                        <input type="text" id="cep" name="cep" value="<?=$altera_cep?>">
                    </label>
                    <label for="logradouro">
                        <h4>Logradouro</h4>
                        <input type="text" id="logradouro" name="logradouro" value="<?=$altera_logradouro?>">
                    </label>
                    <label for="endNum">
                        <h4>N&uacute;mero</h4>
                        <input type="text" id="endNum" name="endNum" value="<?=$altera_endereco?>">
                    </label>
                    <label for="complemento">
                        <h4>Complemento</h4>
                        <input type="text" id="complemento" name="complemento" value="<?=$altera_complemento?>">
                    </label>
                    <label for="bairro">
                        <h4>Bairro</h4>
                        <input type="text" id="bairro" name="bairro" value="<?=$altera_bairro?>">
                    </label>
                    <label for="cidade">
                        <h4>Cidade</h4>
                        <input type="text" id="cidade" name="cidade" value="<?=$altera_cidade?>">
                    </label>
                </div>
                <div>
                    <label for="uf">
                        <h4>UF</h4>
                        <input type="text" id="uf" name="uf" value="<?=$altera_uf?>">
                    </label>
                    <label for="telefone">
                        <h4>Telefone</h4>
                        <input type="text" id="telefone" name="telefone" value="<?=$altera_telefone?>">
                    </label>
                    <label for="celular">
                        <h4>Celular</h4>
                        <input type="text" id="celular" name="celular" value="<?=$altera_celular?>">
                    </label>
                    <label for="email">
                        <h4>Email</h4>
                        <input type="text" id="email" name="email" value="<?=$altera_email?>">
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