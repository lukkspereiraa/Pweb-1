<?php
$producao = [];
while (count($producao) < 5) {
    $item = "Item " . (count($producao) + 1);
    $producao[] = $item;
    echo "<p>Produzido: $item</p>";
}
?>
