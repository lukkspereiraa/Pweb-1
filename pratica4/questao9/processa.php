<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Consolidação</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Resultado da Consolidação</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lista_a']) && isset($_POST['lista_b'])) {
        $lista_a_str = $_POST['lista_a'];
        $lista_b_str = $_POST['lista_b'];
        
        $lista_a = array_filter(array_map('trim', explode("\n", $lista_a_str)));
        $lista_b = array_filter(array_map('trim', explode("\n", $lista_b_str)));

        echo "<div class='resultado-etapa'>";
        echo "<h3>Listas Originais:</h3>";
        echo "<p class='lista-ids'><strong>Lista A:</strong> " . htmlspecialchars(implode(', ', $lista_a)) . "</p>";
        echo "<p class='lista-ids'><strong>Lista B:</strong> " . htmlspecialchars(implode(', ', $lista_b)) . "</p>";
        echo "</div>";

        $todos_ids = array_unique(array_merge($lista_a, $lista_b));
        sort($todos_ids, SORT_NUMERIC);

        echo "<div class='resultado-etapa'>";
        echo "<h3>Lista Consolidada (sem duplicatas):</h3>";
        if (!empty($todos_ids)) {
            echo "<p class='lista-ids'>" . htmlspecialchars(implode(', ', $todos_ids)) . "</p>";
        } else {
            echo "<p>A lista consolidada está vazia.</p>";
        }
        echo "</div>";

    } else {
        echo "<p>Nenhum dado foi enviado. Por favor, volte e preencha o formulário.</p>";
    }
    ?>

    <br>
    <a href="index.html">Consolidar Outras Listas</a>
</body>
</html>