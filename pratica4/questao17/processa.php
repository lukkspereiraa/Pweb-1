<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Análise de Texto</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Resultado da Análise</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['texto_analise'])) {
        $texto = trim($_POST['texto_analise']);
        
        if (!empty($texto)) {
            echo "<div class='resultado-etapa'>";
            echo "<h3>Texto Original:</h3>";
            echo "<p class='resultado-texto'>" . htmlspecialchars($texto) . "</p>";
            echo "</div>";

            $palavras = explode(' ', $texto);
            $quantidade = count($palavras);

            echo "<div class='resultado-etapa'>";
            echo "<h3>Vetor de Palavras:</h3>";
            echo "<p class='resultado-texto'>[" . htmlspecialchars(implode('", "', $palavras)) . '"]</p>';
            echo "</div>";
            
            echo "<div class='resultado-etapa'>";
            echo "<div class='resultado-final'>";
            echo "<p>Quantidade de palavras: <strong>{$quantidade}</strong></p>";
            echo "</div>";
            echo "</div>";

        } else {
            echo "<p>Nenhum texto foi enviado.</p>";
        }

    } else {
        echo "<p>Nenhum dado foi enviado. Por favor, volte e preencha o formulário.</p>";
    }
    ?>

    <br>
    <a href="index.html">Analisar Outro Texto</a>
</body>
</html>