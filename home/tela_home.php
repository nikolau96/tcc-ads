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
        <div class="menuLateral">
            <nav>
                <div>
                    <button id="btnClose" onclick="fechaMenu();"></button>
                </div>
                <div id="icon">
                    <img src="../logo/SGC_logo_nova.png" alt="Logo do Sistema">
                    <p>Ol&aacute;, Seja bem-vindo!</p>
                </div>
                <div>
                    <ul>
                        <li><a href="../login/user_list.php">Lista de usu&aacute;rios</a></li>
                        <li><a href="../user/alterar_senha.php">Alterar senha</a></li>
                        <li><a href="../user/alterar_status.php">Alterar status</a></li>
                    </ul>
                </div>
                <div>
                    <a href="../login/logout.php">Sair</a>
                </div>
            </nav>
        </div>
        <div id="body">
            <div></div>
            <div>
                <button type="button" onclick="mostraMenu();">Menu</button>
            </div>
            <div>
                <div>
                    <a href="../cadastro/tela_cadastro_principal.php">Cadastro</a>
                </div>
                <div>
                    <a href="../consulta/tela_consulta.php">Consulta</a>
                </div>
            </div>
        </div>
    </body>
    <script src="../js/menu_lateral.js"></script>
</html>
<?php
    include('../login/verifica_login.php');
?>