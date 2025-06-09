<?php
$numerosSorteados = [];

for ($i = 0; $i < 10; $i++) {
    $numerosSorteados[] = rand(1, 60);
}

function ehPrimo($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i === 0) return false;
    }
    return true;
}

$quantidadePrimos = 0;

foreach ($numerosSorteados as $numero) {
    if (ehPrimo($numero)) {
        $quantidadePrimos++;
    }
}

echo "Números sorteados: " . implode(', ', $numerosSorteados) . "<br>";
echo "Quantidade de números primos: $quantidadePrimos";
?>
