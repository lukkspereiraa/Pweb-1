<?php
$estadoCivil = "C";

switch (strtoupper($estadoCivil)) {
    case "C": echo "<p>Casado(a)</p>"; break;
    case "S": echo "<p>Solteiro(a)</p>"; break;
    case "D": echo "<p>Divorciado(a)</p>"; break;
    case "O": echo "<p>Outro</p>"; break;
    default: echo "<p>Código inválido</p>";
}
?>
