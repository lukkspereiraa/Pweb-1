<?php
$dadosSensor = [15.2, 28.9, 12.0, 35.5, 20.1, 40.0, 5.8];

$leiturasFiltradas = array_filter($dadosSensor, function($valor) {
    return $valor > 25.0;
});

echo "Leituras acima de 25.0:<br>";
foreach ($leiturasFiltradas as $leitura) {
    echo $leitura . "<br>";
}
?>
