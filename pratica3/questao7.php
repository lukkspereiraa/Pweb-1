<?php
$precosProdutos = [
    'Arroz' => 21.90,
    'Feijão' => 7.50,
    'Macarrão' => 4.80,
    'Óleo' => 6.30,
    'Açúcar' => 3.99
];

asort($precosProdutos);

echo "Produtos ordenados por preço (do mais barato ao mais caro):<br>";
foreach ($precosProdutos as $produto => $preco) {
    echo "- $produto: R$ " . number_format($preco, 2, ',', '.') . "<br>";
}
?>
