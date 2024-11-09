<html>
    <head>
        <title>Sistema de Gerenciamento de Clientes</title>
        <link rel="icon" type="image/png" sizes="16x16" href="../favicon.png">
        <link rel="stylesheet" type="text/css" href="../css/style-home.css">
    </head>
    <body>
        <header class="cabecalho">
            <img src="../logo/SGC_logo_nova.png" alt="Logo do Sistema" class="imgsys">
            <div id="linha"></div>
        </header>
        <div id="menuLateral" class="menuLateral">
            <nav class="menu">
                <div id="icon">
                    <button id="btnClose" onclick="fechaMenu();"></button>
                    <img src="../logo/SGC_logo_nova.png" alt="Logo do Sistema">
                    <p>Ol&aacute;, Seja bem-vindo!</p>
                </div>
                <div class="lista-nav">
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
        <div id="tela-body" class="tela-body">
            <div></div>
            <div>
                <span style="font-size:30px; cursor:pointer;">
                    <button type="button" onclick="mostraMenu();">Menu</button>
                </span>
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