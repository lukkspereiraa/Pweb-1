<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cálculo de Média</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Resultado do Cálculo</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lista_valores'])) {
        $lista_str = $_POST['lista_valores'];
        
        $valores_str_array = explode(',', $lista_str);
        $valores_limpos = array_map('trim', $valores_str_array);
        $despesas = array_filter($valores_limpos, 'is_numeric');

        if (!empty($despesas)) {
            echo "<div class='resultado-etapa'>";
            echo "<h3>Valores Informados:</h3>";
            echo "<p class='lista-valores'>R$ " . htmlspecialchars(implode(', R$ ', $despesas)) . "</p>";
            echo "</div>";

            $soma = array_sum($despesas);
            $quantidade = count($despesas);
            $media = $soma / $quantidade;

            echo "<div class='resultado-etapa'>";
            echo "<h3>Análise Final:</h3>";
            echo "<div class='resultado-final'>";
            echo "<p>Soma das despesas: R$ " . number_format($soma, 2, ',', '.') . "</p>";
            echo "<p>Quantidade de despesas: {$quantidade}</p>";
            echo "<p>Média das despesas mensais: <strong>R$ " . number_format($media, 2, ',', '.') . "</strong></p>";
            echo "</div>";
            echo "</div>";

        } else {
            echo "<p>Nenhum valor numérico válido foi enviado.</p>";
        }

    } else {
        echo "<p>Nenhum dado foi enviado. Por favor, volte e preencha o formulário.</p>";
    }
    ?>

    <br>
    <a href="index.html">Calcular Outra Média</a>
</body>
</html>