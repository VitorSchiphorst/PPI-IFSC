<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styleCadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <form action="rota.php" method="post" class="cadastroBox">
        <label for="InputCadastro" class="labelInput">Cadastro</label>
        <input type="text" name="nome" placeholder="Nome" class="inputCadastro">
        <input type="email" name="email" placeholder="Email" class="inputCadastro">
        <input type="password" name="senha" placeholder="Senha" class="inputCadastro">
        <input type="date" name="nascimento" class="inputCadastro">
        <input type="text" name="telefone" placeholder="Telefone" class="inputCadastro">
        <input type="text" name="op" value="cadastrar" hidden>
        <a href="index.php" class="linkLogin">Fazer Login</a>
        <button type="submit" value="Cadastrar" class="btnCadastro">Cadastrar</button>
    </form>
</body>

</html>