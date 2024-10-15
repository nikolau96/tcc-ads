<html>
    <head>
        <title>Sistema de Gerenciamento de Clientes</title>
    </head>
    <body>
        <h3>Alterar Status de Usuário</h3>
        <br>
        <h4>Pesquisar usuário</h4>
        <br>
        <form method="post">
            <input type="text" id="user" name="user">
            <br>
            <input type="submit" value="Pesquisar">
        </form>
    </body>
</html>
<?php
    include("../db/database.php");
    $user_name = trim($_POST['user']);
    $SQL = "SELECT * FROM usuario WHERE nome = {$user_name}";
    $registro = mysqli_query($conexao, $SQL);
    $qtdRegistro = mysqli_num_rows($registro);
    if($qtdRegistro == 0){
        echo "<p>Nenhum registro encontrado</p>";
    }
    if($qtdRegistro > 1){
        echo "<p>Erro: H&aacute mais usu&aacute;rios cadastrados com esse nome</p>";
    }
    if($qtdRegistro == 1){
        $status;
        if($status == "Ativo"){
            echo "<p>Esse usu&aacute;rio est&aacute Ativo. Deseja inativar?";
            echo "<br>";
            echo "<button>N&aatilde;o</button>";
            echo "<button>Sim</button>";
        }
        if($status == "Inativo"){
            echo "<p>Esse usu&aacute;rio est&aacute Inativo. Deseja inativar?";
            echo "<br>";
            echo "<button>N&aatilde;o</button>";
            echo "<button>Sim</button>";
        }
    }
?>