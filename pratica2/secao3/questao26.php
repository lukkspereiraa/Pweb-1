<?php
$entradas = [5, 3, 8, 0, 7];
$index = 0;

do {
    $valor = $entradas[$index];
    echo "<p>Valor digitado: $valor</p>";
    $index++;
} while ($valor != 0 && $index < count($entradas));
?>
