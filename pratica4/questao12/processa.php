<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Aumento de Preços</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Novos Preços Calculados</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lista_precos']) && isset($_POST['aumento'])) {
        $precos_str = $_POST['lista_precos'];
        $aumento_percentual = filter_input(INPUT_POST, 'aumento', FILTER_VALIDATE_FLOAT);
        
        $precos_str_array = explode("\n", $precos_str);
        $precos_limpos = array_map('trim', $precos_str_array);
        $precos_antigos = array_filter($precos_limpos, 'is_numeric');

        if (!empty($precos_antigos) && $aumento_percentual !== false) {
            $multiplicador = 1 + ($aumento_percentual / 100);
            $precos_novos = [];
            foreach ($precos_antigos as $preco) {
                $precos_novos[] = $preco * $multiplicador;
            }
            
            echo "<h2>Aumento de " . htmlspecialchars($aumento_percentual) . "% aplicado</h2>";
            echo "<div class='resultado-container'>";

            echo "<div class='resultado-etapa'>";
            echo "<h3>Preços Antigos:</h3>";
            echo "<div class='lista-precos'><ul>";
            foreach ($precos_antigos as $preco) {
                echo "<li>R$ " . number_format($preco, 2, ',', '.') . "</li>";
            }
            echo "</ul></div>";
            echo "</div>";

            echo "<div class='resultado-etapa'>";
            echo "<h3>Preços Novos:</h3>";
            echo "<div class='lista-precos'><ul>";
            foreach ($precos_novos as $preco) {
                echo "<li>R$ " . number_format($preco, 2, ',', '.') . "</li>";
            }
            echo "</ul></div>";
            echo "</div>";

            echo "</div>";

        } else {
            echo "<p>Dados inválidos. Por favor, verifique se a lista de preços e o percentual estão corretos.</p>";
        }

    } else {
        echo "<p>Nenhum dado foi enviado. Por favor, volte e preencha o formulário.</p>";
    }
    ?>

    <br>
    <a href="index.html">Calcular Novamente</a>
</body>
</html>