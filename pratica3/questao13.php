<?php
$despesasMensais = [1200.50, 850.75, 1500.00, 920.30, 1100.20];

$soma = array_sum($despesasMensais);
$quantidade = count($despesasMensais);
$media = $soma / $quantidade;

echo "Média das despesas mensais: R$ " . number_format($media, 2, ',', '.');
?>
