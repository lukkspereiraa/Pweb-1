<?php
$registrosTreino = [
    ["nome" => "João", "resultados" => [50, 60, 55]],
    ["nome" => "Ana", "resultados" => [30, 35, 32, 38]],
    ["nome" => "Carlos", "resultados" => [70, 68, 75]]
];

foreach ($registrosTreino as $aluno) {
    $nome = $aluno["nome"];
    $resultados = $aluno["resultados"];
    $media = array_sum($resultados) / count($resultados);
    
    echo "Aluno: $nome - Média de desempenho: " . number_format($media, 2, ',', '.') . "<br>";
}
?>
