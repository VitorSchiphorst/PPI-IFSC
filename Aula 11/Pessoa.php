<?php
    class Pessoa {
        public $id;
        public $nome;
        public $email;
        public $senha;

        public function setAll($nome, $email, $senha) {
            $this-> nome = $nome;
            $this-> email = $email;
            $this-> senha = $senha;
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

        
    }
?>