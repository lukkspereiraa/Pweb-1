<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Ordenação</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Resultado da Ordenação</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lista_itens'])) {
        $lista_str = $_POST['lista_itens'];
        
        $itens = array_filter(array_map('trim', explode("\n", $lista_str)));

        if (!empty($itens)) {
            echo "<div class='resultado-etapa'>";
            echo "<h3>Lista Original:</h3>";
            echo "<div class='lista-ordenada'><ul>";
            foreach ($itens as $item) {
                echo "<li>" . htmlspecialchars($item) . "</li>";
            }
            echo "</ul></div>";
            echo "</div>";

            $ordem_crescente = $itens;
            sort($ordem_crescente);

            echo "<div class='resultado-etapa'>";
            echo "<h3>Lista em Ordem Alfabética Crescente:</h3>";
            echo "<div class='lista-ordenada'><ul>";
            foreach ($ordem_crescente as $item) {
                echo "<li>" . htmlspecialchars($item) . "</li>";
            }
            echo "</ul></div>";
            echo "</div>";

            $ordem_decrescente = $itens;
            rsort($ordem_decrescente);

            echo "<div class='resultado-etapa'>";
            echo "<h3>Lista em Ordem Alfabética Decrescente:</h3>";
            echo "<div class='lista-ordenada'><ul>";
            foreach ($ordem_decrescente as $item) {
                echo "<li>" . htmlspecialchars($item) . "</li>";
            }
            echo "</ul></div>";
            echo "</div>";

        } else {
            echo "<p>A lista de itens enviada está vazia.</p>";
        }

    } else {
        echo "<p>Nenhum dado foi enviado. Por favor, volte e preencha o formulário.</p>";
    }
    ?>

    <br>
    <a href="index.html">Ordenar Outra Lista</a>
</body>
</html>