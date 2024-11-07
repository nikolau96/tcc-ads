<html>
    <head>
        <title>Sistema de Gerenciamento de Clientes</title>
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon.png">
    </head>
    <body>
        <div>
            <img src="/logo/SGC_logo_nova.png">
        </div>
        <div id="formLogin">
            <form action="login/logar.php" method="POST">
                <div class="input">
                    <input type="text" id="login" name="login">
                </div>
                <div class="input">
                    <input type="password" id="senha" name="senha">
                </div>
                <div id="btnLogin">
                    <input type="submit" value="Entrar">
                </div>
            </form>
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