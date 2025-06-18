<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Análise de Temperatura</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Resultado da Análise</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lista_temperaturas'])) {
        $lista_str = $_POST['lista_temperaturas'];
        
        $temperaturas_str_array = explode(',', $lista_str);
        $temperaturas_limpas = array_map('trim', $temperaturas_str_array);
        $temperaturas = array_filter($temperaturas_limpas, 'is_numeric');

        if (!empty($temperaturas)) {
            echo "<div class='resultado-etapa'>";
            echo "<h3>Temperaturas Registradas:</h3>";
            echo "<p class='lista-valores'>" . htmlspecialchars(implode('°C, ', $temperaturas)) . "°C</p>";
            echo "</div>";

            $temperatura_maxima = max($temperaturas);
            $temperatura_minima = min($temperaturas);

            echo "<div class='resultado-etapa'>";
            echo "<h3>Análise Final:</h3>";
            echo "<div class='resultado-final'>";
            echo "<p>Temperatura máxima registrada: <strong>{$temperatura_maxima}°C</strong></p>";
            echo "<p>Temperatura mínima registrada: <strong>{$temperatura_minima}°C</strong></p>";
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
    <a href="index.html">Analisar Outra Lista</a>
</body>
</html>