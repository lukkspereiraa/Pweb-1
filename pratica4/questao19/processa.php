<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Fila de Atendimento</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Situação da Fila</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fila_str = $_POST['fila_inicial'] ?? '';
        $paciente_prioritario = trim($_POST['paciente_prioritario'] ?? '');
        $paciente_regular = trim($_POST['paciente_regular'] ?? '');
        
        $filaAtendimento = array_filter(array_map('trim', explode("\n", $fila_str)));

        echo "<div class='resultado-etapa'>";
        echo "<h3>Fila Inicial:</h3>";
        if (!empty($filaAtendimento)) {
             echo "<div class='lista-fila'><ol>";
            foreach ($filaAtendimento as $paciente) {
                echo "<li>" . htmlspecialchars($paciente) . "</li>";
            }
            echo "</ol></div>";
        } else {
            echo "<p>A fila inicial estava vazia.</p>";
        }
        echo "</div>";

        if (!empty($paciente_prioritario)) {
            array_unshift($filaAtendimento, $paciente_prioritario);
        }
        
        if (!empty($paciente_regular)) {
            array_push($filaAtendimento, $paciente_regular);
        }

        echo "<div class='resultado-etapa'>";
        echo "<h3>Fila Final de Atendimento:</h3>";
        if (!empty($filaAtendimento)) {
            echo "<div class='lista-fila'><ol>";
            foreach ($filaAtendimento as $paciente) {
                echo "<li>" . htmlspecialchars($paciente) . "</li>";
            }
            echo "</ol></div>";
        } else {
             echo "<p>A fila final está vazia.</p>";
        }
        echo "</div>";

    } else {
        echo "<p>Nenhum dado foi enviado. Por favor, volte e preencha o formulário.</p>";
    }
    ?>

    <br>
    <a href="index.html">Gerenciar Fila Novamente</a>
</body>
</html>