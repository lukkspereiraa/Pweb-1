<?php
$textoAnalise = "A programação PHP é fundamental para o desenvolvimento web";

$palavras = explode(' ', $textoAnalise);
$quantidade = count($palavras);

echo "Vetor de palavras:<br>";
print_r($palavras);

echo "<br><br>Quantidade de palavras: $quantidade";
?>
