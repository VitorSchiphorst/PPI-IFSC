<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/styleLogin.css">
</head>

<body>
<?php
if(isset($_GET['erroLogin'])){
    $erroLogin = $_GET['erroLogin'];
    echo "<script>alert('$erroLogin');</script>";
}
?>

    <form action="rota.php" method="post">
        <div class="loginBox">
            <label for="InputCadastro" class="labelInput">Login</label>
            <input type="email" name="email" placeholder="Email" class="inputLogin">
            <input type="password" name="senha" placeholder="Senha" class="inputLogin">
            <input type="text" name="op" value="login" hidden>
            <a href="view_cadastro_usuario.php" class="linkCadastro">Fazer Cadastro</a>
            <button type="submit" value="Login" class="btnLogin">Logar</button>
        </div>
    </form>
</body>

</html>