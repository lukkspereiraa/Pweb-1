<?php
function formatarPreco($valor) {
    return "R$ " . number_format($valor, 2, ',', '.');
}
echo formatarPreco(1234.56);
?>
