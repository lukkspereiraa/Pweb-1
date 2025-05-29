<?php
$usuarioAtivo = true;
$temPermissaoAdmin = false;

if ($usuarioAtivo && $temPermissaoAdmin) {
    echo "<p>Acesso Total Concedido</p>";
} else {
    echo "<p>Acesso Negado</p>";
}
?>
