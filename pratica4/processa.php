<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Manipulação</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Resultado da Lista de Livros</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // 1. Obter a lista inicial da textarea
        $lista_str = $_POST['lista_livros'] ?? '';
        // Converte a string em array, removendo linhas vazias e espaços extras
        $livros = array_filter(array_map('trim', explode("\n", $lista_str)));

        echo "<div class='resultado-etapa'>";
        echo "<h3>Lista Inicial:</h3>";
        echo "<ol>";
        foreach ($livros as $livro) {
            echo "<li>" . htmlspecialchars($livro) . "</li>";
        }
        echo "</ol></div>";

        // 2. Adicionar o novo livro
        $livro_adicionar = trim($_POST['livro_adicionar'] ?? '');
        if (!empty($livro_adicionar)) {
            $livros[] = $livro_adicionar;
            echo "<div class='resultado-etapa'>";
            echo "<p>✅ Livro adicionado: <strong>" . htmlspecialchars($livro_adicionar) . "</strong></p>";
            echo "</div>";
        }

        // 3. Remover o livro pelo índice
        $indice_remover = filter_input(INPUT_POST, 'indice_remover', FILTER_VALIDATE_INT);
        if ($indice_remover !== false && $indice_remover > 0) {
            // Converte o índice do usuário (base 1) para o índice do PHP (base 0)
            $indice_php = $indice_remover - 1;
            
            if (isset($livros[$indice_php])) {
                $livro_removido = $livros[$indice_php];
                unset($livros[$indice_php]);
                echo "<div class='resultado-etapa'>";
                echo "<p> Livro na posição <strong>{$indice_remover}</strong> removido: <strong>" . htmlspecialchars($livro_removido) . "</strong></p>";
                echo "</div>";
            } else {
                echo "<div class='resultado-etapa'>";
                echo "<p> A posição <strong>{$indice_remover}</strong> para remoção é inválida.</p>";
                echo "</div>";
            }
        }

        // 4. Reindexar o array e mostrar a lista final
        $livros_finais = array_values($livros);

        echo "<div class='resultado-etapa'>";
        echo "<h3>Lista Final:</h3>";
        if (!empty($livros_finais)) {
            echo "<ol>";
            foreach ($livros_finais as $livro) {
                echo "<li>" . htmlspecialchars($livro) . "</li>";
            }
            echo "</ol>";
        } else {
            echo "<p>A lista de livros ficou vazia.</p>";
        }
        echo "</div>";

    } else {
        echo "<p>Nenhum dado foi enviado. Por favor, volte e preencha o formulário.</p>";
    }
    ?>

    <br>
    <a href="index.html">Voltar ao Formulário</a>
</body>
</html>