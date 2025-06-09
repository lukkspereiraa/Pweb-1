<?php
$listaParticipantes = ['Carlos', 'Ana', 'João', 'Maria', 'João', 'Pedro', 'Maria', 'Ana'];

$participantesUnicos = array_unique($listaParticipantes);

echo "Lista de participantes únicos:<br>";
foreach ($participantesUnicos as $nome) {
    echo "- $nome<br>";
}
?>
