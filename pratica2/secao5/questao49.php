<?php
function headerTemplate() {
    echo '
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Meu Blog Legal</title>
        <style>
            body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
            header { background: #333; color: white; padding: 20px; text-align: center; }
            main { display: flex; margin: 20px; }
            article { flex: 3; padding-right: 20px; }
            aside { flex: 1; background: #f4f4f4; padding: 15px; }
            footer { background: #333; color: white; text-align: center; padding: 10px; margin-top: 20px; }
            h2 { border-bottom: 2px solid #333; padding-bottom: 5px; }
            ul { list-style: none; padding: 0; }
            ul li { padding: 5px 0; }
            ul li a { text-decoration: none; color: #333; }
            ul li a:hover { text-decoration: underline; }
        </style>
    </head>
    <body>
    <header>
        <h1>Meu Blog Legal</h1>
    </header>
    ';
}

function articleTemplate() {
    echo '
    <article>
        <h2>Como Montar um Blog em PHP</h2>
        <p>Este é um artigo exemplo mostrando como dividir o layout de um blog em múltiplos arquivos usando PHP.</p>
        <p>Você pode organizar o seu código em arquivos reutilizáveis e incluir dinamicamente.</p>
        <p>Assim, fica fácil manter e expandir o site.</p>
    </article>
    ';
}

function sidebarTemplate() {
    echo '
    <aside>
        <h3>Categorias</h3>
        <ul>
            <li><a href="#">Tecnologia</a></li>
            <li><a href="#">Programação</a></li>
            <li><a href="#">Design</a></li>
            <li><a href="#">Tutoriais</a></li>
        </ul>
    </aside>
    ';
}

function footerTemplate() {
    echo '
    <footer>
        <p>&copy; ' . date("Y") . ' Meu Blog Legal. Todos os direitos reservados.</p>
    </footer>
    </body>
    </html>
    ';
}

headerTemplate();

echo '<main>';
articleTemplate();
sidebarTemplate();
echo '</main>';

footerTemplate();
?>
