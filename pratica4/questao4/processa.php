<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Verificação</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Resultado da Análise</h1>

    <?php
    function ehPrimo($n) {
        if ($n < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i === 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['numeros'])) {
        $numeros_str = $_POST['numeros'];
        
        $numeros_array_str = explode(',', $numeros_str);
        $numeros_limpos = array_map('trim', $numeros_array_str);
        $numeros_validos = array_filter($numeros_limpos, 'is_numeric');
        $numeros = array_map('intval', $numeros_validos);

        echo "<div class='resultado-etapa'>";
        echo "<h3>Números Enviados:</h3>";
        echo "<p class='lista-numeros'>" . htmlspecialchars(implode(', ', $numeros)) . "</p>";
        echo "</div>";

        $primos_encontrados = [];
        foreach ($numeros as $numero) {
            if (ehPrimo($numero)) {
                $primos_encontrados[] = $numero;
            }
        }

        $quantidade_primos = count($primos_encontrados);

        echo "<div class='resultado-etapa'>";
        echo "<h3>Análise de Primos:</h3>";
        echo "<p class='lista-numeros'>";
        echo "Foram encontrados <strong>{$quantidade_primos}</strong> números primos: ";
        echo "<strong>" . htmlspecialchars(implode(', ', $primos_encontrados)) . "</strong>";
        echo "</p></div>";

    } else {
        echo "<p>Nenhum dado foi enviado. Por favor, volte e preencha o formulário.</p>";
    }
    ?>

    <br>
    <a href="index.html">Verificar Outra Lista</a>
</body>
</html>