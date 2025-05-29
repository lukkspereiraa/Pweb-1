<?php
$cargo = "Designer";
$salario = 0;

switch ($cargo) {
    case "Desenvolvedor": $salario = 5000; break;
    case "Designer": $salario = 4000; break;
    case "Gerente": $salario = 7000; break;
    default: $salario = 3000; // Cargo genérico
}

echo "<p>Salário para o cargo de $cargo: R$ $salario</p>";
?>
