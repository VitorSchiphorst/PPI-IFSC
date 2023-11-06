<?php
    session_start();
    
    if(!isset($_SESSION['cod_usr'])) {
        header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div>
        <h2>Home Page</h2>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>