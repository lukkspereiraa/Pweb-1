<?php
$registrosTreino = [
    ["nome" => "João", "resultados" => [50, 60, 55]],
    ["nome" => "Ana", "resultados" => [30, 35, 32, 38]],
    ["nome" => "Carlos", "resultados" => [70, 68, 75]]
];

foreach ($registrosTreino as $aluno) {
    $nome = $aluno["nome"];
    $resultados = $aluno["resultados"];
    $melhor = max($resultados);
    
    echo "Aluno: $nome - Melhor resultado: $melhor<br>";
}
?>
