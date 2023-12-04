<?php

include_once "Pessoa.php";
include_once "PessoaDAO.php";

class PessoaController {
        
        public function __construct() {

        }

        public function cadastrarUsuario($nome, $email, $senha, $nascimento, $telefone) {
            $pessoa = new Pessoa();
            $pessoaDAO = new PessoaDAO();
            $pessoa-> setAllNoID($nome, $email, $senha, $nascimento, $telefone);

            return $pessoaDAO-> insert($pessoa);
        }

        public function listarUsuario() {
            $pessoaDAO = new PessoaDAO();
            $pessoa = $pessoaDAO-> selectAll();
            
            return $pessoa;
        }

        public function editarUsuario($id, $nome, $email, $senha, $nascimento, $telefone) {
            $pessoa = new Pessoa();
            $pessoa-> setAll($id, $nome, $email, $senha, $nascimento, $telefone);
            $pessoaDAO = new PessoaDAO();
            $pessoaDAO-> update($pessoa);
        }

        public function excluirUsuario($id) {
            $pessoaDAO = new PessoaDAO();
            $pessoaDAO-> delete($id);
        }

        public function loginUsuario($email, $senha) {
            $pessoaDAO = new PessoaDAO();
            return $pessoaDAO-> logar($email, $senha);
        }
    }
?>