<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Lista de Participantes</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Resultado da Filtragem</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lista_participantes'])) {
        $lista_str = $_POST['lista_participantes'];
        
        $participantes = array_filter(array_map('trim', explode("\n", $lista_str)));

        if (!empty($participantes)) {
            echo "<div class='resultado-etapa'>";
            echo "<h3>Lista de Presença Original:</h3>";
            echo "<p class='lista-nomes'>" . htmlspecialchars(implode(', ', $participantes)) . "</p>";
            echo "</div>";

            $participantes_unicos = array_unique($participantes);

            echo "<div class='resultado-etapa'>";
            echo "<h3>Lista de Participantes Únicos:</h3>";
            echo "<p class='lista-nomes'>" . htmlspecialchars(implode(', ', $participantes_unicos)) . "</p>";
            echo "</div>";

        } else {
            echo "<p>A lista de participantes enviada está vazia.</p>";
        }

    } else {
        echo "<p>Nenhum dado foi enviado. Por favor, volte e preencha o formulário.</p>";
    }
    ?>

    <br>
    <a href="index.html">Filtrar Outra Lista</a>
</body>
</html><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Lista de Participantes</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Resultado da Filtragem</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lista_participantes'])) {
        $lista_str = $_POST['lista_participantes'];
        
        $participantes = array_filter(array_map('trim', explode("\n", $lista_str)));

        if (!empty($participantes)) {
            echo "<div class='resultado-etapa'>";
            echo "<h3>Lista de Presença Original:</h3>";
            echo "<p class='lista-nomes'>" . htmlspecialchars(implode(', ', $participantes)) . "</p>";
            echo "</div>";

            $participantes_unicos = array_unique($participantes);

            echo "<div class='resultado-etapa'>";
            echo "<h3>Lista de Participantes Únicos:</h3>";
            echo "<p class='lista-nomes'>" . htmlspecialchars(implode(', ', $participantes_unicos)) . "</p>";
            echo "</div>";

        } else {
            echo "<p>A lista de participantes enviada está vazia.</p>";
        }

    } else {
        echo "<p>Nenhum dado foi enviado. Por favor, volte e preencha o formulário.</p>";
    }
    ?>

    <br>
    <a href="index.html">Filtrar Outra Lista</a>
</body>
</html>