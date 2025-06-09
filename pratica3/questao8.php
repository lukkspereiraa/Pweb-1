<?php
$cartas = [
    'Ás de Espadas', '2 de Espadas', '3 de Espadas', '4 de Espadas',
    'Rei de Copas', 'Dama de Copas', 'Valete de Copas',
    '10 de Ouros', '9 de Ouros', '8 de Ouros',
    'Ás de Paus', 'Rei de Paus', 'Dama de Paus'
];

echo "Baralho original:<br>";
foreach ($cartas as $carta) {
    echo "- $carta<br>";
}

shuffle($cartas);

echo "<br>Baralho embaralhado:<br>";
foreach ($cartas as $carta) {
    echo "- $carta<br>";
}
?>
