<?php
function registrarEvento($mensagem) {
    $timestamp = date("Y-m-d H:i:s");
    echo "[$timestamp] $mensagem";
}
registrarEvento("Usuário acessou a página de login.");
?>
