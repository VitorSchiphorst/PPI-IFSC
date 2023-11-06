<?php
    include_once "db.php";

    if(conectaDB()) {
        echo "Conectado no Banco";
    } else {
        echo "Não Conectado";
    }
?>