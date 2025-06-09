<?php
$categoriasProdutos = ['Eletrônicos', 'Roupas', 'Livros', 'Brinquedos', 'Beleza'];

$ordemCrescente = $categoriasProdutos;
sort($ordemCrescente);

echo "Categorias em ordem alfabética:<br>";
foreach ($ordemCrescente as $categoria) {
    echo "- $categoria<br>";
}

$ordemDecrescente = $categoriasProdutos;
rsort($ordemDecrescente);

echo "<br>Categorias em ordem alfabética decrescente:<br>";
foreach ($ordemDecrescente as $categoria) {
    echo "- $categoria<br>";
}
?>
