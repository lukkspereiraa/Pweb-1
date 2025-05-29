<?php
$pageTitle = "Página Inicial Personalizada";

function renderHeader($title) {
    echo "<header>";
    echo "<h1>$title</h1>";
    echo "</header>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title><?php echo $pageTitle; ?></title>
</head>
<body>

<?php
renderHeader($pageTitle);
?>

<main>
    <p>Conteúdo principal da página.</p>
</main>

</body>
</html>
