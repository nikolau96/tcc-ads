<?php
    include("../db/database.php");
    //$nome_filtro = filter_input(INPUT_POST, 'nome');
    $SQL = "SELECT * FROM vendedor WHERE 1=1";
    $registro = mysqli_query($conexao, $SQL);
    $qtdRegistro = mysqli_num_rows($registro);
    if($qtdRegistro == 0){
        echo "<p>Nenhum registro encontrado</p>";
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
        $data_banco = $linha['dt_nascimento'];
        $data_tratamento = DateTime::createFromFormat('Y-m-d', $data_banco);
        $data_tela = $data_tratamento ? $data_tratamento->format('d/m/Y') : 'Data Inválida';
        echo "<td>" . $data_tela . "</td>";
        echo "<td>" . $linha['telefone'] . "</td>";
        echo "<td>" . $linha['celular'] . "</td>";
        echo "<td>" . $linha['email'] . "</td>";
        echo "<td>" . $linha['conselho'] . "</td>";
        echo "<td>" . $linha['nr_conselho'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    print_r($linha);
    echo "<button><a href='../home/tela_home.php'>Voltar</a></button>";
?>