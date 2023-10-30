<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    class Pessoa {
        public $nome;

        public function __construct($n) {
            $this -> nome = $n;
        }

        public function alterarNome($n) {
            $this -> nome = $n;
        }

        public function getNome() {
            return $this -> nome .strlen($this->nome);
        }
    }

    $p1 = new Pessoa("Vitor");
    $p2 = new Pessoa("Godri");
    $p3 = new Pessoa("Rafael");
    
    echo "p1.nome = " . $p1 -> getNome() . " <br>".
        "p2.nome = " . $p2 -> getNome() . " <br>".
        "p3.nome = " . $p3 -> getNome() . " <br>";

    // Array em PHP
    $pessoas = array($p1, $p2, $p3);

    foreach ($pessoas as $pessoa) {
        echo "Nome: " .$pessoa -> getNome() . "<br>";
    }

    ?>
</body>
</html>