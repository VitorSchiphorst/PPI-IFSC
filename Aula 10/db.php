<?php
    function conectaDB() {
        $user = "root";
        $pass = "aluno";
        $host = "localhost";
        $db = "crud";
        
        $con = new PDO("mysql:host=$host;dbname$db",$user,$pass);
    }
?>