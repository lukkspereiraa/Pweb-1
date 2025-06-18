<?php
$resultadoHTML = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nomes']) && isset($_POST['skus'])) {
        $nomes = $_POST['nomes'];
        $skus = $_POST['skus'];

        $resultadoHTML .= "<h2>Produtos Cadastrados</h2>";

        if (count($nomes) === count($skus)) {
            $produtosEnviados = 0;
            for ($i = 0; $i < count($nomes); $i++) {
                $nome = trim($nomes[$i]);
                $sku = trim($skus[$i]);

                if (!empty($nome) && !empty($sku)) {
                    $nomeSeguro = htmlspecialchars($nome);
                    $skuSeguro = htmlspecialchars($sku);

                    $resultadoHTML .= "<div>";
                    $resultadoHTML .= "<strong>Produto:</strong> {$nomeSeguro} - <strong>SKU:</strong> {$skuSeguro}<br>";
                    $resultadoHTML .= "</div>";
                    $resultadoHTML .= "<hr>";
                    $produtosEnviados++;
                }
            }
            if ($produtosEnviados === 0) {
                 $resultadoHTML .= "<p>Nenhum produto válido foi preenchido.</p>";
            }
        } else {
            $resultadoHTML .= "<p>Ocorreu um erro com os dados enviados.</p>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 1 - Cadastro de Produtos</title>
</head>
<body>
    <h1>Cadastro de Produtos (Arquivo Único)</h1>
    <p>Adicione quantos produtos desejar e clique em "Enviar". Os dados serão processados e exibidos nesta mesma página.</p>

    <?php if (!empty($resultadoHTML)): ?>
    <div>
        <?php echo $resultadoHTML; ?>
    </div>
    <?php endif; ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <h2>Formulário de Cadastro</h2>
        <div id="produtos-container">
            <div>
                <input type="text" name="nomes[]" placeholder="Nome do Produto" required>
                <input type="text" name="skus[]" placeholder="SKU do Produto" required>
                <button type="button" onclick="removerProduto(this)">Remover</button>
            </div>
        </div>
        <button type="button" onclick="adicionarProduto()">Adicionar Outro Produto</button>
        <br><br>
        <button type="submit">Enviar</button>
    </form>

    <script>
        function adicionarProduto() {
            const container = document.getElementById('produtos-container');
            const novoItem = document.createElement('div');
            novoItem.innerHTML = `
                <input type="text" name="nomes[]" placeholder="Nome do Produto" required>
                <input type="text" name="skus[]" placeholder="SKU do Produto" required>
                <button type="button" onclick="removerProduto(this)">Remover</button>
            `;
            container.appendChild(novoItem);
        }

        function removerProduto(button) {
            if (document.querySelectorAll('#produtos-container div').length > 1) {
                button.parentElement.remove();
            } else {
                alert('Pelo menos um produto deve ser cadastrado.');
            }
        }
    </script>
</body>
</html>