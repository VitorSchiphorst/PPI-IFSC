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
            $dao = new Database();
            $conn = $dao->getConnection();

            $sql = 'UPDATE usr SET nome = :nome, email = :email, senha = :senha WHERE id = :id';
            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':nome', $pessoa->getNome());
            $stmt->bindValue(':email', $pessoa->getEmail());
            $stmt->bindValue(':senha', $pessoa->getSenha());
            $stmt->bindValue(':id', $pessoa->getId());
            return $stmt->execute();
        }

        public function delete(Pessoa $pessoa) {
            $dao = new Database();
            $conn = $dao->getConnection();

            $sql = "DELETE FROM usr WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        }

        public function selectID($id) {
            $dao = new Database();
            $conn = $dao->getConnection(); 

            $sql = "SELECT * FROM usr WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
                return $resultado;
            }else{
                return [];
            }
        }
    }
?>