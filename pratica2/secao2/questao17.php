<?php
$temperaturaAtual = 28;

if ($temperaturaAtual < 0) {
    echo "<p>Alerta de Gelo!</p>";
} elseif ($temperaturaAtual <= 15) {
    echo "<p>Clima Ameno</p>";
} elseif ($temperaturaAtual <= 25) {
    echo "<p>Clima Agradável</p>";
} else {
    echo "<p>Atenção: Calor Extremo!</p>";
}
?>
