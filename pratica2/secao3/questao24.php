<?php
echo "<h3>Processando Itens...</h3>";
for ($i = 1; $i <= 100; $i++) {
    if ($i > 50) {
        echo "<p><strong>Limite de processamento atingido.</strong></p>";
        break;
    }
    echo "<p>Item $i processado</p>";
}
?>
