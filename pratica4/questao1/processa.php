<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cadastro</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Resultados do Cadastro</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nomes']) && isset($_POST['skus'])) {
        $nomes = $_POST['nomes'];
        $skus = $_POST['skus'];

        echo "<h2>Produtos Cadastrados</h2>";

        if (count($nomes) === count($skus)) {
            $produtosEnviados = 0;
            for ($i = 0; $i < count($nomes); $i++) {
                $nome = trim($nomes[$i]);
                $sku = trim($skus[$i]);

                if (!empty($nome) && !empty($sku)) {
                    $nomeSeguro = htmlspecialchars($nome);
                    $skuSeguro = htmlspecialchars($sku);

                    echo "<div class='resultado-item'>";
                    echo "<strong>Produto:</strong> {$nomeSeguro} - <strong>SKU:</strong> {$skuSeguro}";
                    echo "</div>";
                    $produtosEnviados++;
                }
            }
            if ($produtosEnviados === 0) {
                echo "<p>Nenhum produto válido foi preenchido.</p>";
            }
        } else {
            echo "<p>Ocorreu um erro com os dados enviados.</p>";
        }
    } else {
        echo "<p>Nenhum dado foi enviado. Por favor, volte e preencha o formulário.</p>";
    }
    ?>

    <br>
    <a href="index.html">Voltar ao Formulário</a>
</body>
</html>