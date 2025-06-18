<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Análise de Espécies</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Resultado da Análise</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $lista_str = $_POST['lista_especies'] ?? '';
        $especie_verificar = trim($_POST['especie_verificar'] ?? '');
        
        $especies_observadas = array_filter(array_map('trim', explode("\n", $lista_str)));
        
        if (!empty($especies_observadas)) {
            echo "<div class='resultado-etapa'>";
            echo "<h3>Lista de Observações Enviada:</h3>";
            echo "<div class='lista-observacoes'>" . htmlspecialchars(implode(', ', $especies_observadas)) . "</div>";
            echo "</div>";

            if (!empty($especie_verificar)) {
                echo "<div class='resultado-etapa'>";
                echo "<h3>Verificação de Existência:</h3>";
                $especie_verificar_segura = htmlspecialchars($especie_verificar);
                if (in_array($especie_verificar, $especies_observadas)) {
                    echo "<p>A espécie '<strong>{$especie_verificar_segura}</strong>' já foi registrada na lista.</p>";
                } else {
                    echo "<p>A espécie '<strong>{$especie_verificar_segura}</strong>' ainda não foi registrada na lista.</p>";
                }
                echo "</div>";
            }

            $especies_unicas = array_unique($especies_observadas);

            echo "<div class='resultado-etapa'>";
            echo "<h3>Espécies Únicas Observadas:</h3>";
            echo "<div class='lista-observacoes'>" . htmlspecialchars(implode(', ', $especies_unicas)) . "</div>";
            echo "</div>";

        } else {
            echo "<p>A lista de espécies enviada está vazia.</p>";
        }

    } else {
        echo "<p>Nenhum dado foi enviado. Por favor, volte e preencha o formulário.</p>";
    }
    ?>

    <br>
    <a href="index.html">Analisar Outra Lista</a>
</body>
</html>