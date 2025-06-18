<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Ordenação de Preços</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Resultado da Ordenação</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['produtos']) && isset($_POST['precos'])) {
        $produtos = $_POST['produtos'];
        $precos = $_POST['precos'];
        
        $precosProdutos = [];
        if (count($produtos) === count($precos)) {
            for ($i = 0; $i < count($produtos); $i++) {
                $produto_nome = trim($produtos[$i]);
                $produto_preco = filter_var($precos[$i], FILTER_VALIDATE_FLOAT);

                if (!empty($produto_nome) && $produto_preco !== false) {
                    $precosProdutos[$produto_nome] = $produto_preco;
                }
            }
        }

        if (!empty($precosProdutos)) {
            echo "<div class='resultado-etapa'>";
            echo "<h3>Lista Original:</h3>";
            echo "<div class='lista-produtos'><ul>";
            foreach ($precosProdutos as $produto => $preco) {
                $preco_formatado = "R$ " . number_format($preco, 2, ',', '.');
                echo "<li>" . htmlspecialchars($produto) . ": " . $preco_formatado . "</li>";
            }
            echo "</ul></div>";
            echo "</div>";

            asort($precosProdutos);

            echo "<div class='resultado-etapa'>";
            echo "<h3>Produtos Ordenados por Preço (do mais barato ao mais caro):</h3>";
            echo "<div class='lista-produtos'><ul>";
            foreach ($precosProdutos as $produto => $preco) {
                $preco_formatado = "R$ " . number_format($preco, 2, ',', '.');
                echo "<li>" . htmlspecialchars($produto) . ": " . $preco_formatado . "</li>";
            }
            echo "</ul></div>";
            echo "</div>";

        } else {
            echo "<p>Nenhum produto válido foi enviado.</p>";
        }

    } else {
        echo "<p>Nenhum dado foi enviado. Por favor, volte e preencha o formulário.</p>";
    }
    ?>

    <br>
    <a href="index.html">Ordenar Outra Lista</a>
</body>
</html>