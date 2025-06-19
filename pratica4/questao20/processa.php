<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Inventário</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Inventário Atualizado</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $inventario_str = $_POST['inventario_inicial'] ?? '';
        $linhas = array_filter(array_map('trim', explode("\n", $inventario_str)));
        
        $inventario = [];
        foreach ($linhas as $linha) {
            $partes = explode(':', $linha);
            if (count($partes) === 2) {
                $produto = trim($partes[0]);
                $quantidade = filter_var(trim($partes[1]), FILTER_VALIDATE_INT);
                if (!empty($produto) && $quantidade !== false) {
                    $inventario[$produto] = $quantidade;
                }
            }
        }
        
        echo "<div class='resultado-etapa'>";
        echo "<h3>Inventário Inicial:</h3>";
        echo "<div class='lista-inventario'><ul>";
        foreach ($inventario as $produto => $quantidade) {
            echo "<li>" . htmlspecialchars($produto) . ": " . htmlspecialchars($quantidade) . "</li>";
        }
        echo "</ul></div></div>";

        $produto_atualizar = trim($_POST['produto_atualizar'] ?? '');
        $quantidade_adicionar = filter_input(INPUT_POST, 'quantidade_adicionar', FILTER_VALIDATE_INT);

        if (!empty($produto_atualizar) && $quantidade_adicionar !== false) {
            if (array_key_exists($produto_atualizar, $inventario)) {
                $inventario[$produto_atualizar] += $quantidade_adicionar;
            }
        }

        $produto_novo = trim($_POST['produto_novo'] ?? '');
        $quantidade_novo = filter_input(INPUT_POST, 'quantidade_novo', FILTER_VALIDATE_INT);

        if (!empty($produto_novo) && $quantidade_novo !== false) {
            if (!array_key_exists($produto_novo, $inventario)) {
                $inventario[$produto_novo] = $quantidade_novo;
            }
        }

        echo "<div class='resultado-etapa'>";
        echo "<h3>Inventário Final:</h3>";
        echo "<div class='lista-inventario'><ul>";
        foreach ($inventario as $produto => $quantidade) {
            echo "<li>" . htmlspecialchars($produto) . ": " . htmlspecialchars($quantidade) . "</li>";
        }
        echo "</ul></div></div>";

    } else {
        echo "<p>Nenhum dado foi enviado. Por favor, volte e preencha o formulário.</p>";
    }
    ?>

    <br>
    <a href="index.html">Gerenciar Inventário Novamente</a>
</body>
</html>