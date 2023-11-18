<?php
    include_once "Pessoa.php";
    include_once "PessoaController.php";

    if(!isset($_POST['op'])) {
        header('Location: index.php');
        exit();
    }

    $op = $_POST['op'];

    switch ($op) {
        case 'cadastrar_usuario':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $pessoaController = new PessoaController();
            $resultado = $pessoaController-> cadastrarPessoa($nome, $email, $senha);
            echo $resultado;
            break;
        
            case 'atualizar_user':
                if(!isset($_POST['nome']) || !isset($_POST['email']) || !isset($_POST['senha']) || !isset($_POST['id'])){
                    echo("Erro ao atualizar");
                    exit();
                }

                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $pessoaController = new PessoaController();
                $pessoaController-> editarPessoa($id ,$nome, $email, $senha);
     
             break;

            case 'excluir_user':
                if(!isset($_POST['id'])){
                    header('Location: index.php');
                    echo("Erro ao excluir");
                    exit();
                }
                
                $id = $_POST['id'];
                $pessoaController = new PessoaController();
                $pessoaController->excluirPessoa($id);
                break;
    
    }
?>