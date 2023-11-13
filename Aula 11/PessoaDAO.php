<?php

    include_once "Pessoa.php";
    include_once "Database.php";

    class PessoaDAO {
        
        public function __construct() {

        }

        // insert, update, selectAll, selectID
        public function selectAll() {
            $db = new Database();
            $conn = $db -> getConnection();
            $sql = "SELECT * FROM usuarios";
            $stmt = $conn -> prepare($sql);
            $stmt -> execute();
            if($stmt -> rowCount() > 0) {
                $resultado = $stmt -> fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            } else {
                return [];
            }
        }
        
        public function insert(Pessoa $pessoa) {
            $db = new Database();
            $conn = $db-> getConnection();
            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha);";
            $stmt = $conn-> prepare($sql);

            $nome = $pessoa-> getNome();
            $email = $pessoa-> getEmail();
            $senha = $pessoa-> getSenha();
            
            $stmt-> bindParam(':nome', $nome);
            $stmt-> bindParam(':email', $email);
            $stmt-> bindParam(':senha', $senha);

            return $stmt->execute();
        }

        public function update(Pessoa $pessoa) {
            
        }

        public function delete(Pessoa $pessoa) {
            
        }
    }
?>