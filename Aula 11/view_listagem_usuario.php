<table id="lista_usuarios">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
    <?php
        include_once "PessoaController.php";

        $pessoaController = new PessoaController();
        $pessoas = $pessoaController-> listarPessoas();

        foreach ($pessoas as $pessoa) {
            echo "<tr>";
            echo "<td><input type='text' name='nome' value='" . htmlspecialchars($pessoa['nome']) . "'></td>";
            echo "<td><input type='text' name='email' value='" . htmlspecialchars($pessoa['email']) . "'></td>";
            echo "<td><input type='text' name='senha' value='" . htmlspecialchars($pessoa['senha']) . "'></td>";
            echo "<td><a href='view_editar_user.php?id=" . $pessoa['id'] . "'>Editar</a></td>";
            echo "<td><a href='rota.php?op=excluir_user&id=" . $pessoa['id'] . "'>Excluir</a></td>";
            echo "</tr>";
        }    
    ?>
    </tbody>
</table>