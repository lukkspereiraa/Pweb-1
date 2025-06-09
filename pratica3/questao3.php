<?php
$livros = [
    'Dom Casmurro',
    'O Pequeno Príncipe',
    '1984',
    'A Revolução dos Bichos',
    'Capitães da Areia'
];

$livros[] = 'Harry Potter e a Pedra Filosofal';

unset($livros[2]);

$livros = array_values($livros);

foreach ($livros as $index => $titulo) {
    echo "Livro " . ($index + 1) . ": $titulo<br>";
}
?>
