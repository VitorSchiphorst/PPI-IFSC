<?php
    class Pessoa {
        public $id;
        public $nome;
        public $email;
        public $senha;
        public $nascimento;
        public $telefone;

        public function setAll($id, $nome, $email, $senha, $nascimento, $telefone) {
            $this-> id = $id;
            $this-> nome = $nome;
            $this-> email = $email;
            $this-> senha = $senha;
            $this-> nascimento = $nascimento;
            $this-> telefone = $telefone;
        }

        public function setAllNoID($nome, $email, $senha, $nascimento, $telefone) {
            $this-> nome = $nome;
            $this-> email = $email;
            $this-> senha = $senha;
            $this-> nascimento = $nascimento;
            $this-> telefone = $telefone;
        }

        public function getID() {
            return $this-> id;
        }

        public function getNome() {
            return $this-> nome;
        }

        public function getEmail() {
            return $this-> email;
        }

        public function getSenha() {
            return $this-> senha;
        }

        public function getNascimento() {
            return $this-> nascimento;
        }

        public function getTelefone() {
            return $this-> telefone;
        }

        
    }
?>