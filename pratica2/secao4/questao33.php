<?php
function calcularCustoTotal($preco, $quantidade) {
    return $preco * $quantidade;
}
$total = calcularCustoTotal(25.50, 4);
echo "Custo total: R$ " . number_format($total, 2, ',', '.');
?>
