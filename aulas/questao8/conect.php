<?php
$host = "localhost";
$user = "root";
$pass = "240220";
$db = "questao8";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>