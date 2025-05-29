<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuadas de 1 a 5</title>
    <style>
        body { font-family: Arial; display: flex; gap: 20px; }
        table { border-collapse: collapse; box-shadow: 0 0 5px #999; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
        th { background: #f0f0f0; }
    </style>
</head>
<body>
<?php
for ($n = 1; $n <= 5; $n++) {
    echo "<table><tr><th colspan='2'>Tabuada do $n</th></tr>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr><td>$n × $i</td><td>" . ($n * $i) . "</td></tr>";
    }
    echo "</table>";
}
?>
</body>
</html>
