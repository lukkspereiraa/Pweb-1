<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado das Médias</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Médias de Desempenho</h1>

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
                                $soma = array_sum($resultados_validos);
                                $quantidade = count($resultados_validos);
                                $media = $soma / $quantidade;

                                echo "<li>";
                                echo "<strong>Aluno:</strong> " . htmlspecialchars($nome);
                                echo " - <strong>Média de desempenho:</strong> " . number_format($media, 2, ',', '.');
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
    <a href="index.html">Calcular Novamente</a>
</body>
</html>