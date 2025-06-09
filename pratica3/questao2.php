<?php
$boletim = [
    'Português'   => 8.5,
    'Matemática'  => 6.0,
    'História'    => 7.2,
    'Geografia'   => 5.9,
];

foreach ($boletim as $disciplina => $nota) {
    $status = ($nota >= 7.0) ? 'Aprovado' : 'Reprovado';
    echo "$disciplina: Nota $nota - $status<br>";
}
?>
