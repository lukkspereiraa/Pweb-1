<?php
$produtos = [
    ['nome' => 'Smartphone XYZ', 'sku' => 'SKU12345'],
    ['nome' => 'Notebook ABC', 'sku' => 'SKU67890'],
    ['nome' => 'Fone de Ouvido Bluetooth', 'sku' => 'SKU11121'],
    ['nome' => 'Câmera Digital', 'sku' => 'SKU54321'],
    ['nome' => 'Smartwatch Pro', 'sku' => 'SKU98765'],
];

foreach ($produtos as $produto) {
    echo "Produto: {$produto['nome']} - SKU: {$produto['sku']}<br>";
}
?>
