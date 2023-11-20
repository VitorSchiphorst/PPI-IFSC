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
            $sql = "INSERT INTO usuarios (nome, email, senha, nascimento, telefone) VALUES (:nome, :email, :senha, :nascimento, :telefone);";
            $stmt = $conn-> prepare($sql);

            $nome = $pessoa-> getNome();
            $email = $pessoa-> getEmail();
            $senha = $pessoa-> getSenha();
            $nascimento = $pessoa -> getNascimento();
            $telefone = $pessoa -> getTelefone();
            
            $stmt-> bindParam(':nome', $nome);
            $stmt-> bindParam(':email', $email);
            $stmt-> bindParam(':senha', $senha);
            $stmt-> bindParam(':nascimento', $nascimento);
            $stmt-> bindParam(':telefone', $telefone);

            return $stmt->execute();
        }

        public function update(Pessoa $pessoa) {
            $dao = new Database();
            $conn = $dao->getConnection();

            $sql = "UPDATE usr SET nome = :nome, email = :email, senha = :senha, nascimento = :nascimento, telefone = :telefone  WHERE id = :id";
            $stmt = $conn->prepare($sql);

            $id = $pessoa-> getID();
            $nome = $pessoa-> getNome();
            $email = $pessoa-> getEmail();
            $senha = $pessoa-> getSenha();
            $nascimento = $pessoa-> getNascimento();
            $telefone = $pessoa-> getTelefone();

            $stmt-> bindParam(':nome', $nome);
            $stmt-> bindParam(':email', $email);
            $stmt-> bindParam(':senha', $senha);
            $stmt-> bindParam(':nascimento', $nascimento);
            $stmt-> bindParam(':telefone', $telefone);
            $stmt-> bindParam(':id', $id);

            return $stmt->execute();
        }

        public function delete(Pessoa $pessoa) {
            $dao = new Database();
            $conn = $dao->getConnection();

            $sql = "DELETE FROM usr WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $id = $pessoa-> getID();
            
            $stmt-> bindParam(':id', $id);
            $stmt->execute();
        }

        public function selectID($id) {
            $dao = new Database();
            $conn = $dao->getConnection(); 

            $sql = "SELECT * FROM usr WHERE id = :id";
            $stmt = $conn->prepare($sql);

            $stmt-> bindParam(':id', $id);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
                return $resultado;
            }else{
                return [];
            }
        }

        public function logar($email, $senha) {
            $dao = new Database();
            $conn = $dao->getConnection(); 

            $sql = "SELECT * FROM usr WHERE email = :email, senha = :senha";
            $stmt = $conn->prepare($sql);

            $stmt-> bindParam(':email', $email);            
            $stmt-> bindParam(':senha', $senha);
            $stmt->execute();
        }
    }
?>