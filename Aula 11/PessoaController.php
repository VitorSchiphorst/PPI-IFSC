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
            $pessoa = new Pessoa();
            $pessoa->setAll($id, $nome, $email, $senha);
            $pessoaDAO = new PessoaDAO();
            $pessoaDAO->update($pessoa);
        }

        public function excluirPessoa($id) {
            $pessoaDAO = new PessoaDAO();
            $pessoaDAO->delete($id);
        }

        public function getPessoa($id) {
            $pessoaDAO = new PessoaDAO();
            $pessoa = $pessoaDAO->search($id);
            return $pessoa;
        }

        public function autenticarPessoa($email, $senha) {
            $pessoaDAO = new PessoaDAO();
            $pessoa = $pessoaDAO->autenticar($email, $senha);
            return $pessoa;
        }
    }
?>