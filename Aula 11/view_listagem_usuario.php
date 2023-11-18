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
            echo '<tr>';
            echo '<td><input type="text" name="nome" value='" . htmlspecialchars($pessoa['nome']) . "'></td>';
            echo '<td><input type="text" name="email" value='" . htmlspecialchars($pessoa['email']) . "'></td>';
            echo '<td><input type="text" name="senha" value='" . htmlspecialchars($pessoa['senha']) . "'></td>';
            
            echo '<td>
                    <form action="rota.php" method="post"> 
                        <input type="text" name="op" value="atualizar_user" hidden>
                        <input type="text" name="id" value="' . $pessoa['id'] . '" hidden>
                        <input type="text" name="nome" value="' . $pessoa['namev'] . '" hidden>
                        <input type="text" name="email" value="' . $pessoa['email'] . '" hidden>
                        <input type="text" name="senha" value="' . $pessoa['pass'] . '" hidden>
                        
                        <input type="submit" value="Salvar">
                    </form>
                </td>';


                echo '<td>
                    <form action="rota.php" method="post"> 
                        <input type="text" name="op" value="excluir_user" hidden>
                        <input type="text" name="id" value="' . $pessoa['id'] . '" hidden>
                        <input type="submit" value="Excluir">
                    </form>
                </td>';

                
                echo "</tr>";
        }    
    ?>
    </tbody>
</table>