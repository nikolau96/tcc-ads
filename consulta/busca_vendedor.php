<?php
    include("../db/database.php");
    $SQL = "SELECT * FROM vendedor";
    $registro = mysqli_query($conexao, $SQL);
    $qtdRegistro = mysqli_num_rows($registro);
    if($qtdRegistro == 0){
        echo "Nenhum registro encontrado";
        return;
    }
    echo "<table>";
    echo "  <tr>";
    echo "      <td>Código</td>";
    echo "      <td>Nome</td>";
    echo "      <td>CPF</td>";
    echo "      <td>Sexo</td>";
    echo "      <td>Data de Nascimento</td>";
    echo "      <td>Telefone</td>";
    echo "      <td>Celular</td>";
    echo "      <td>Email</td>";
    echo "      <td>Conselho</td>";
    echo "      <td>N&uacute;mero do Conselho</td>";
    echo "  </tr>";
    while($linha = mysqli_fetch_array($registro)){
        echo "<tr>";
        echo "<td>" . $linha['id'] . "</td>";
        echo "<td>" . $linha['nome'] . "</td>";
        echo "<td>" . $linha['cpf'] . "</td>";
        echo "<td>" . $linha['sexo'] . "</td>";
        echo "<td>" . $linha['dt_nascimento'] . "</td>";
        echo "<td>" . $linha['telefone'] . "</td>";
        echo "<td>" . $linha['celular'] . "</td>";
        echo "<td>" . $linha['email'] . "</td>";
        echo "<td>" . $linha['conselho'] . "</td>";
        echo "<td>" . $linha['nr_conselho'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    print_r($linha);
?>