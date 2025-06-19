<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Junção</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Resultado da Junção</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lista_itens'])) {
        $lista_str = $_POST['lista_itens'];
        $separador = $_POST['separador'] ?? '';
        
        $itens = array_map('trim', explode(',', $lista_str));

        if (!empty($itens)) {
            echo "<div class='resultado-etapa'>";
            echo "<h3>Itens Originais:</h3>";
            echo "<p>" . htmlspecialchars(implode(', ', $itens)) . "</p>";
            echo "</div>";

            $string_final = implode($separador, $itens);

            echo "<div class='resultado-etapa'>";
            echo "<h3>String Final:</h3>";
            echo "<p class='resultado-final'>" . htmlspecialchars($string_final) . "</p>";
            echo "</div>";

        } else {
            echo "<p>Nenhum item válido foi enviado.</p>";
        }

    } else {
        echo "<p>Nenhum dado foi enviado. Por favor, volte e preencha o formulário.</p>";
    }
    ?>

    <br>
    <a href="index.html">Juntar Outra Lista</a>
</body>
</html>