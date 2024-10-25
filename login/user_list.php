<html>
    <head>
        <title>Sistema de Gerenciamento de Clientes</title>
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
        ?>
    </body>
</html>
<?php
    include("../login/verifica_login.php");
?>