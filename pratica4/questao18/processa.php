<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Filtro</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Leituras Filtradas</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lista_leituras']) && isset($_POST['valor_limite'])) {
        $leituras_str = $_POST['lista_leituras'];
        $valor_limite = filter_input(INPUT_POST, 'valor_limite', FILTER_VALIDATE_FLOAT);

        $leituras_str_array = explode(',', $leituras_str);
        $leituras_limpas = array_map('trim', $leituras_str_array);
        $dados_sensor = array_filter($leituras_limpas, 'is_numeric');

        if ($valor_limite !== false && !empty($dados_sensor)) {
            echo "<div class='resultado-etapa'>";
            echo "<h3>Todas as Leituras Registradas:</h3>";
            echo "<p class='lista-valores'>" . htmlspecialchars(implode(', ', $dados_sensor)) . "</p>";
            echo "</div>";

            $leituras_filtradas = array_filter($dados_sensor, function($valor) use ($valor_limite) {
                return $valor > $valor_limite;
            });

            echo "<div class='resultado-etapa'>";
            echo "<h3>Leituras acima de " . htmlspecialchars($valor_limite) . ":</h3>";
            if (!empty($leituras_filtradas)) {
                echo "<p class='lista-valores'>" . htmlspecialchars(implode(', ', $leituras_filtradas)) . "</p>";
            } else {
                echo "<p class='lista-valores'>Nenhuma leitura encontrada acima do valor limite.</p>";
            }
            echo "</div>";

        } else {
            echo "<p>Dados inválidos. Por favor, verifique se a lista de leituras e o valor limite estão corretos.</p>";
        }

    } else {
        echo "<p>Nenhum dado foi enviado. Por favor, volte e preencha o formulário.</p>";
    }
    ?>

    <br>
    <a href="index.html">Filtrar Novamente</a>
</body>
</html>