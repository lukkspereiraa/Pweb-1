<?php 
    $host = "localhost";
    $user ="root";
    $pass = "240220";
    $db = "LojaPWEB";

    $conexao = mysqli_connect($host, $user, $pass, $db);

    if(!$conexao) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
         echo "Connected successfully";
    }
?>