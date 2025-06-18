<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Boletim</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Resultados do Boletim</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['disciplinas']) && isset($_POST['notas'])) {
        $disciplinas = $_POST['disciplinas'];
        $notas = $_POST['notas'];

        echo "<h2>Situação Final:</h2>";

        if (count($disciplinas) === count($notas)) {
            $itensEnviados = 0;
            for ($i = 0; $i < count($disciplinas); $i++) {
                $disciplina = trim($disciplinas[$i]);
                $nota = filter_var($notas[$i], FILTER_VALIDATE_FLOAT); // Valida a nota

                if (!empty($disciplina) && $nota !== false) {
                    // Determina o status e a classe CSS com base na nota
                    $status = ($nota >= 7.0) ? 'Aprovado' : 'Reprovado';
                    $classe_status = ($nota >= 7.0) ? 'aprovado' : 'reprovado';

                    // Exibe o resultado formatado
                    echo "<div class='resultado-item " . $classe_status . "'>";
                    echo "<strong>" . htmlspecialchars($disciplina) . ":</strong> ";
                    echo "Nota " . number_format($nota, 1, ',') . " - <strong>Status: " . $status . "</strong>";
                    echo "</div>";
                    $itensEnviados++;
                }
            }
            if ($itensEnviados === 0) {
                echo "<p>Nenhuma disciplina válida foi preenchida.</p>";
            }
        } else {
            echo "<p>Ocorreu um erro com os dados enviados (número de disciplinas e notas não bate).</p>";
        }
    } else {
        echo "<p>Nenhum dado foi enviado. Por favor, volte e preencha o formulário.</p>";
    }
    ?>

    <br>
    <a href="index.html">Lançar Novas Notas</a>
</body>
</html>