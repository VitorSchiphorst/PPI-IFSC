<?php
    include_once "Pessoa.php";
    include_once "PessoaController.php";

    $op = $_POST['op'];

    switch ($op) {
        case 'cadastrar_usuario':
            if(!isset($_POST['nome']) || !isset($_POST['email']) || !isset($_POST['senha']) || !isset($_POST['id']) || !isset($_POST['nascimento']) || !isset($_POST['telefone'])){
                echo("Erro ao Cadastrar");
                exit();
            }

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $nascimento = $_POST['nascimento'];
            $telefone = $_POST['telefone'];

            $pessoaController = new PessoaController();
            $resultado = $pessoaController-> cadastrarUsuario($nome, $email, $senha, $nascimento, $telefone);
            header("Location:index.php");
            break;
        
        case 'atualizar_usuario':
            if(!isset($_POST['nome']) || !isset($_POST['email']) || !isset($_POST['senha']) || !isset($_POST['id']) || !isset($_POST['nascimento']) || !isset($_POST['telefone'])){
                echo("Erro ao Atualizar");
                exit();
            }

            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $nascimento = $_POST['nascimento'];
            $telefone = $_POST['telefone'];

            $pessoaController = new PessoaController();
            $pessoaController-> editarUsuario($id ,$nome, $email, $senha, $nascimento, $telefone);
            break;

        case 'excluir_usuario':
            if(!isset($_POST['id'])){
                echo("Erro ao excluir");
                exit();
            }
                
            $id = $_POST['id'];

            $pessoaController = new PessoaController();
            $pessoaController->excluirUsuario($id);
            break;

        case 'login_usuario':
            if(!isset($_POST['email']) || !isset($_POST['senha'])){
                echo("Erro ao fazer Login");
                exit();
            }

            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $pessoaController = new PessoaController();
            $pessoaController->loginUsuario($email, $senha);
            break;
    
    }
?>