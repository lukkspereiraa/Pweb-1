<?php
$caracteresPermitidos = ['a', 'b', 'c', '1', '2', '3', '@', '#', '$', 'X', 'Y', 'Z'];

$baseSenha = implode('', $caracteresPermitidos);

echo "Base para geração de senhas: $baseSenha";
?>
