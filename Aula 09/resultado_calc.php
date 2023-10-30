
<?php
    function soma($a, $b)
    {
        return $a + $b;
    }

    function multi($a, $b)
    {
        return $a * $b;
    }

    function div($a, $b)
    {
        return $a / $b;
    }

    function sub($a, $b)
    {
        return $a - $b;
    }

    if (!(isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["operacao"]))) {
        header("Location:http://localhost:erro.php");

        exit;
    } else {
        $radio = $_GET["operacao"];
        switch ($radio) {
            case 'mult':
                echo multi($_GET["a"], $_GET["b"]);
                break;
            case 'div':
                echo div($_GET["a"], $_GET["b"]);
                break;
            case 'adic':
                echo soma($_GET["a"], $_GET["b"]);
                break;
            case 'sub':
                echo sub($_GET["a"], $_GET["b"]);
                break;
        }
    }
    // echo soma(3,5);
?>
