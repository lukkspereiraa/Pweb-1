<?php
$template = '
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>{{titulo}}</title>
</head>
<body>
    <header>
        <h1>{{titulo}}</h1>
    </header>
    <main>
        {{conteudo}}
    </main>
    <footer>
        <p>&copy; ' . date('Y') . ' Meu Site</p>
    </footer>
</body>
</html>
';

$titulo = "Página de Exemplo - Sistema de Templates";
$conteudo = "<p>Este é o conteúdo principal da página, gerado dinamicamente via PHP.</p>
             <p>Você pode trocar o título e conteúdo facilmente usando este sistema básico.</p>";

function renderTemplate($template, $vars) {
    foreach ($vars as $key => $value) {
        $template = str_replace('{{' . $key . '}}', $value, $template);
    }
    return $template;
}

$valores = [
    'titulo' => $titulo,
    'conteudo' => $conteudo,
];

echo renderTemplate($template, $valores);
?>
