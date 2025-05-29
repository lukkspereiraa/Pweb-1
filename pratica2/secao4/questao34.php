<?php
function calcularMedia($notas) {
    $soma = array_sum($notas);
    $media = $soma / count($notas);
    return $media;
}
$media = calcularMedia([7.5, 8.0, 6.5]);
echo "Média final: $media";
?>
