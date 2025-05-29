<?php
$total = 0;
for ($dia = 1; $dia <= 100; $dia++) {
    $venda = rand(5000, 500000) / 100; // R$50,00 a R$5000,00
    $total += $venda;
}
echo "<p>Total de vendas no mês: R$ " . number_format($total, 2, ',', '.') . "</p>";
?>
