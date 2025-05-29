<?php
$tituloPagina = "Minha Página Dinâmica";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title><?= htmlspecialchars($tituloPagina) ?></title>
</head>
<body>
    <h1>Bem-vindo à <?= htmlspecialchars($tituloPagina) ?></h1>
</body>
</html>
