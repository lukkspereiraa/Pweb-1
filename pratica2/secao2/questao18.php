<?php
$corEscolhida = "Roxo";

if (in_array($corEscolhida, ["Vermelho", "Azul", "Verde"])) {
    echo "<p>Você escolheu a cor $corEscolhida</p>";
} else {
    echo "<p>Cor não disponível. Sugerimos a cor padrão: Azul</p>";
}
?>
