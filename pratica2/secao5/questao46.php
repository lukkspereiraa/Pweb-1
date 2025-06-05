<?php


function headerTemplate($siteName = "Site Exemplo") {
    echo "
    <!DOCTYPE html>
    <html>
    <head>
        <title>$siteName</title>
        <meta charset='UTF-8'>
    </head>
    <body>
        <header>
            <h1>Bem-vindo ao $siteName</h1>
        </header>
        <hr>
    ";
}

function footerTemplate() {
    echo "
        <hr>
        <footer>
            <p>&copy; " . date('Y') . " - Todos os direitos reservados.</p>
        </footer>
    </body>
    </html>
    ";
}

echo "Início do carregamento da página...<br>";

headerTemplate("Meu Site PHP");

echo "
    <main>
        <p>Essa é a página principal com HTML + PHP e tratamento de arquivos essenciais.</p>
    </main>
";

footerTemplate();

echo "<br>Fim da execução.";
?>
