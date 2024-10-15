<?php
    include("../db/database.php");
    $SQL = "SELECT * FROM atendimento";
    $registro = mysqli_query($conexao, $SQL);
    $qtdRegistro = mysqli_num_rows($registro);
    if($qtdRegistro == 0){
        echo "Nenhum registro encontrado";
        return;
    }
    echo "<table>";
    echo "  <tr>";
    echo "      <td>Código</td>";
    echo "      <td>Data do Atendimento</td>";
    echo "      <td>Cliente</td>";
    echo "      <td>Vendedor</td>";
    echo "      <td>Usuário de Cadastro</td>";
    echo "      <td>Produto/Servi&ccedil;o</td>";
    echo "      <td>Assunto</td>";
    echo "      <td>Descri&ccedil;&atilde;o</td>";
    echo "      <td>Solu&ccedil;&atilde;o</td>";
    echo "      <td>Status</td>";
    echo "  </tr>";
    while($linha = mysqli_fetch_array($registro)){
        echo "<tr>";
        echo "<td>" . $linha['id'] . "</td>";
        echo "<td>" . $linha['dt_atendimento'] . "</td>";
        echo "<td>" . $linha['cliente_id'] . "</td>";
        echo "<td>" . $linha['vendedor_id'] . "</td>";
        echo "<td>" . $linha['usuario_id'] . "</td>";
        echo "<td>" . $linha['produto_servico'] . "</td>";
        echo "<td>" . $linha['assunto'] . "</td>";
        echo "<td>" . $linha['descricao'] . "</td>";
        echo "<td>" . $linha['solucao'] . "</td>";
        echo "<td>" . $linha['status_atendimento'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    print_r($linha);
?>