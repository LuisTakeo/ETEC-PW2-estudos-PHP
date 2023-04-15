<?php 
    $servidor = "localhost";
    $user = "root";
    $banco = "dbaula";
    $senha = "";

    $pdo = new PDO("mysql:host=$servidor;dbname=$banco", $user, $senha);

?>