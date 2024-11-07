<html>
    <head>
        <title>Sistema de Gerenciamento de Clientes</title>
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon.png">
        <link rel="stylesheet" type="text/css" href="/css/style-index.css">
    </head>
    <body>
        <div id="formLogin">
            <div id="logo-index">
                <img src="/logo/SGC_logo_nova.png">
            </div>
            <div id="form-index">
                <div class="input-field">
                    <form action="login/logar.php" method="POST">
                        <label for="login" class="label">Login</label>
                        <div class="input">
                            <input type="text" id="login" name="login">
                        </div>
                        <label for="password" class="label">Senha</label>
                        <div class="input">
                            <input type="password" id="senha" name="senha">
                        </div>
                        <div id="btnLogin">
                            <input type="submit" value="Entrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="dev">
            <p>Desenvolvido por Nickolas Markus da Silva Costa</p>
            <img id="github" src="/assets/github_11376339.png" alt="Logo Github"><a href="https://github.com/nikolau96" target="_blank">Github</a> | <img id="linkedin" src="/assets/linkedin_3536505.png" alt="Logo Linkedin"><a href="https://www.linkedin.com/in/nickolas09" target="_blank">Linkedin</a>
        </div>
        <div id="copyright">
            <p>Todos os direitos reservados&#169;</p>
        </div>
    </body>
</html>
<?php
    if(isset($_SESSION['nao_autenticado'])){
        echo "<p>Login ou senha inv&aacute;lido</p>";
    }
    unset($_SESSION['nao_autenticado']);
?>