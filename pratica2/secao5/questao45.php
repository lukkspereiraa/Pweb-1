<?php
function calcularMedia(array $notas) {
    $total = array_sum($notas);
    $quantidade = count($notas);
    return $quantidade ? $total / $quantidade : 0;
}

function formatarPreco(float $valor) {
    return "R$ " . number_format($valor, 2, ',', '.');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Uso de Biblioteca de Funções</title>
</head>
<body>

<h1>Exemplo de Biblioteca de Funções</h1>

<?php
$notasAluno = [7.5, 8.0, 6.5, 9.0];
$media = calcularMedia($notasAluno);
echo "<p>Média do aluno: " . number_format($media, 2) . "</p>";

$precoProduto = 1234.56;
echo "<p>Preço formatado: " . formatarPreco($precoProduto) . "</p>";
?>

</body>
</html>
