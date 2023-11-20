<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    <link rel="stylesheet" href="CSS/styleListagem.css">
</head>

<body>
    <div class="cent">
        <a href="index.php" class="btnSair">Sair</a>
    </div>
    <table id="lista_usuarios" class="listagemBox">
        <thead>
            <tr>
                <th class="labelInput">Nome</th>
                <th class="labelInput">Email</th>
                <th class="labelInput">Senha</th>
                <th class="labelInput">Data de Nascimento</th>
                <th class="labelInput">Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once "PessoaController.php";

            $pessoaController = new PessoaController();
            $pessoas = $pessoaController->listarUsuario();

            foreach ($pessoas as $pessoa) {
                echo '<tr>';
                echo '<td><input type="text" name="nome" class="inputListagem" value=' . $pessoa['nome'] . '></td>';
                echo '<td><input type="text" name="email" class="inputListagem" value=' . $pessoa['email'] . '></td>';
                echo '<td><input type="text" name="senha" class="inputListagem" value=' . $pessoa['senha'] . '></td>';
                echo '<td><input type="date" name="senha" class="inputListagem" value=' . $pessoa['nascimento'] . '></td>';
                echo '<td><input type="text" name="senha" class="inputListagem" value=' . $pessoa['telefone'] . '></td>';

                echo '<td>
                    <form action="rota.php" method="post"> 
                        <input type="text" name="op" value="atualizar_usuario" hidden>
                        <input type="text" name="id" class="inputListagem" value="' . $pessoa['id'] . '" hidden>
                        <input type="text" name="nome" class="inputListagem" value="' . $pessoa['nome'] . '" hidden>
                        <input type="text" name="email" class="inputListagem" value="' . $pessoa['email'] . '" hidden>
                        <input type="text" name="senha" class="inputListagem" value="' . $pessoa['senha'] . '" hidden>
                        <input type="date" name="nascimento" class="inputListagem" value="' . $pessoa['nascimento'] . '" hidden>
                        <input type="text" name="telefone" class="inputListagem" value="' . $pessoa['telefone'] . '" hidden>
                        
                        <button type="submit" value="Salvar" class="btnSalvar">Salvar</button>
                    </form>
                </td>';


                echo '<td>
                    <form action="rota.php" method="post"> 
                        <input type="text" name="op" value="excluir_usuario" hidden>
                        <input type="text" name="id" value="' . $pessoa['id'] . '" hidden>
                        <button type="submit" value="Excluir" class="btnExcluir">Excluir</button>
                    </form>
                </td>';


                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>