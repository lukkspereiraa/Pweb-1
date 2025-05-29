<?php
function verificarElegibilidade($idade) {
    return $idade >= 18 ? "Acesso Liberado" : "Acesso Negado";
}
echo verificarElegibilidade(17);
?>
