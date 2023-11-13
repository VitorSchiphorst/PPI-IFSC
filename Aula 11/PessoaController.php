<?php

include_once "Pessoa.php";
include_once "PessoaDAO.php";

class PessoaController {
        
        public function __construct() {

        }

        public function cadastrarPessoa($nome, $email, $senha) {
            $pessoa = new Pessoa();
            $pessoaDAO = new PessoaDAO();
            $pessoa-> setAll($nome, $email, $senha);

            return $pessoaDAO-> insert($pessoa);
        }

        public function listarPessoas() {
            $pessoaDAO = new PessoaDAO();
            $pessoa = $pessoaDAO-> selectAll();
            
            return $pessoa;
        }

        public function editarPessoa($id) {

        }

        public function excluirPessoa($id) {

        }

        public function getPessoa($id) {

        }

        public function autenticarPessoa($email, $senha) {

        }
    }
?>