<?php
    
    if(isset($_GET["login"]) && isset($_GET["senha"])) {
        $login = $_GET["login"];
        $senha = $_GET["senha"];

        if($login == "admin" && $senha == "1234") {
            session_start();
            $_SESSION["cod_usr"] = "admin";
            header("Location:home.php");
        }

    } else {
        echo "Informe Login e senha";
    }
?>