<?php
$especiesObservadas = ['Beija-flor', 'Canário', 'Bem-te-vi', 'Sabiá', 'Beija-flor', 'Coruja'];

if (in_array('Pardal', $especiesObservadas)) {
    echo "A espécie 'Pardal' já foi registrada.<br>";
} else {
    echo "A espécie 'Pardal' ainda não foi registrada.<br>";
}

$especiesUnicas = array_unique($especiesObservadas);

echo "Espécies únicas observadas:<br>";
foreach ($especiesUnicas as $especie) {
    echo "- $especie<br>";
}
?>
