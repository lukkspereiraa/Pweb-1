<?php
$nota1 = 6.5;
$nota2 = 7.0;
$media = ($nota1 + $nota2) / 2;

if ($media >= 7) {
    echo "<p>Aprovado</p>";
} elseif ($media >= 5) {
    echo "<p>Recuperação</p>";
} else {
    echo "<p>Reprovado</p>";
}
?>
