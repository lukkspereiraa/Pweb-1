<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado das Análises</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Melhores Resultados por Aluno</h1>

    <div class="resultado-etapa">
        <div class="lista-resultados">
            <ul>
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nomes']) && isset($_POST['resultados'])) {
                    $nomes = $_POST['nomes'];
                    $resultados_str = $_POST['resultados'];

                    if (count($nomes) === count($resultados_str)) {
                        for ($i = 0; $i < count($nomes); $i++) {
                            $nome = trim($nomes[$i]);
                            $resultados_array_str = explode(',', $resultados_str[$i]);
                            
                            $resultados_limpos = array_map('trim', $resultados_array_str);
                            $resultados_validos = array_filter($resultados_limpos, 'is_numeric');

                            if (!empty($nome) && !empty($resultados_validos)) {
                                $melhor_resultado = max($resultados_validos);

                                echo "<li>";
                                echo "<strong>Aluno:</strong> " . htmlspecialchars($nome);
                                echo " - <strong>Melhor resultado:</strong> " . htmlspecialchars($melhor_resultado);
                                echo "</li>";
                            }
                        }
                    } else {
                        echo "<li>Ocorreu um erro com os dados enviados.</li>";
                    }
                } else {
                    echo "<li>Nenhum dado foi enviado. Por favor, volte e preencha o formulário.</li>";
                }
                ?>
            </ul>
        </div>
    </div>

    <br>
    <a href="index.html">Analisar Novamente</a>
</body>
</html>