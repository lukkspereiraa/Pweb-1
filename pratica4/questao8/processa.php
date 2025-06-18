<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Embaralhamento</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Resultado do Embaralhamento</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lista_itens'])) {
        $lista_str = $_POST['lista_itens'];
        
        $itens_originais = array_filter(array_map('trim', explode("\n", $lista_str)));

        if (!empty($itens_originais)) {
            echo "<div class='resultado-etapa'>";
            echo "<h3>Lista Original:</h3>";
            echo "<div class='lista-itens'><ul>";
            foreach ($itens_originais as $item) {
                echo "<li>" . htmlspecialchars($item) . "</li>";
            }
            echo "</ul></div>";
            echo "</div>";

            $itens_embaralhados = $itens_originais;
            shuffle($itens_embaralhados);

            echo "<div class='resultado-etapa'>";
            echo "<h3>Lista Embaralhada:</h3>";
            echo "<div class='lista-itens'><ul>";
            foreach ($itens_embaralhados as $item) {
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
    <a href="index.html">Embaralhar Novamente</a>
</body>
</html>