<html>
    <head>
        <title>Sistema de Gerenciamento de Clientes</title>
    </head>
</html>
<?php
    include("../db/database.php");
    //$atendimento_filtro = filter_input(INPUT_POST, 'dtAtendimento');
    $SQL = "SELECT a.id, a.dt_atendimento, c.nome AS cliente_nome, v.nome AS vendedor_nome, u.login AS usuario_login, a.produto_servico, a.assunto, a.descricao, a.solucao, a.status_atendimento FROM atendimento a JOIN cliente c ON a.cliente_id = c.id JOIN vendedor v ON a.vendedor_id = v.id JOIN usuario u ON a.usuario_id = u.id;";
    $registro = mysqli_query($conexao, $SQL);
    $qtdRegistro = mysqli_num_rows($registro);
    if($qtdRegistro == 0){
        echo "<p>Nenhum registro encontrado</p>";
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
        $data_banco = $linha['dt_atendimento'];
        $data_tratamento = DateTime::createFromFormat('Y-m-d H:i:s', $data_banco);
        $data_tela = $data_tratamento ? $data_tratamento->format('d/m/Y') : 'Data Inválida';
        echo "<td>" . $data_tela . "</td>";
        echo "<td>" . $linha['cliente_nome'] . "</td>";
        echo "<td>" . $linha['vendedor_nome'] . "</td>";
        echo "<td>" . $linha['usuario_login'] . "</td>";
        echo "<td>" . $linha['produto_servico'] . "</td>";
        echo "<td>" . $linha['assunto'] . "</td>";
        echo "<td>" . $linha['descricao'] . "</td>";
        echo "<td>" . $linha['solucao'] . "</td>";
        echo "<td>" . $linha['status_atendimento'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    print_r($linha);
    echo "<button><a href='../home/tela_home.php'>Voltar</a></button>";
?>