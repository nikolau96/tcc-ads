<html>
    <head>
        <title>Sistema de Gerenciamento de Clientes</title>
        <link rel="icon" type="image/png" sizes="16x16" href="../logo/SGC_logo_nova.png">
    </head>
    <body>
        <?php
            include("../db/database.php");
            $SQL = "SELECT * FROM usuario";
            $registro = mysqli_query($conexao, $SQL);
            $qtdRegistro = mysqli_num_rows($registro);
            echo "<table>";
            echo "  <tr>";
            echo "      <td>Nome</td>";
            echo "      <td>Login</td>";
            echo "      <td>Status</td>";
            echo "  </tr>";
            if($qtdRegistro == 0){
                echo "  <tr>";
                echo "      <td>Nenhum registro encontrado</td>";
                echo "  </tr>";
            }
            while($linha = mysqli_fetch_array($registro)){
                echo "  <tr>";
                echo "      <td>" . $linha['nome'] . "</td>";
                echo "      <td>" . $linha['login'] . "</td>";
                echo "      <td>" . $linha['status'] . "</td>";
                echo "  </tr>";
            }
            echo "</table>";
            print_r($linha);
            echo "<button><a href='../home/tela_home.php'>Voltar</a></button>";
        ?>
    </body>
</html>
<?php
    include("../login/verifica_login.php");
?>