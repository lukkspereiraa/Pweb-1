<?php

function renderHeader() {
    echo '<header>';
    echo '<h1>Meu Site</h1>';
    echo '</header>';
}


function renderNav() {
    echo '<nav>';
    echo '<ul>';
    echo '<li><a href="#">Home</a></li>';
    echo '<li><a href="#">Sobre</a></li>';
    echo '<li><a href="#">Contato</a></li>';
    echo '</ul>';
    echo '</nav>';
}

function renderFooter() {
    echo '<footer>';
    echo '<p>© 2025 Meu Site</p>';
    echo '</footer>';
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Página com Estrutura Reutilizável</title>
</head>
<body>

<?php
renderHeader();
renderNav();
?>

<main>
    <p>Conteúdo principal aqui.</p>
</main>

<?php
renderFooter();
?>

</body>
</html>
