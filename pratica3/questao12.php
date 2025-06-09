<?php
$precosAntigos = [15.50, 22.00, 30.75, 8.99];
$precosNovos = [];

foreach ($precosAntigos as $preco) {
    $precosNovos[] = $preco * 1.10;
}

echo "Preços antigos:<br>";
foreach ($precosAntigos as $preco) {
    echo "R$ " . number_format($preco, 2, ',', '.') . "<br>";
}

echo "<br>Preços novos (com aumento de 10%):<br>";
foreach ($precosNovos as $preco) {
    echo "R$ " . number_format($preco, 2, ',', '.') . "<br>";
}
?>
