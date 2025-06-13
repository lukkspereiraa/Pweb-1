<?php
$filaAtendimento = ['João Silva', 'Maria Santos', 'Pedro Costa'];

array_unshift($filaAtendimento, 'Ana Oliveira'); // Paciente prioritária
array_push($filaAtendimento, 'Luiz Fernandes'); // Paciente regular

echo "Fila atual de atendimento:<br>";
foreach ($filaAtendimento as $paciente) {
    echo $paciente . "<br>";
}
?>
