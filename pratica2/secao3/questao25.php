<?php
$alunos = [
    ["2023001", "Ana Silva", 8.5],
    ["2023002", "Bruno Lima", 7.8],
    ["2023003", "Carlos Souza", 9.0],
    ["2023004", "Daniela Rocha", 6.5],
    ["2023005", "Eduardo Reis", 5.2],
    ["2023006", "Fernanda Luz", 9.3],
    ["2023007", "Gabriel Torres", 7.1],
    ["2023008", "Helena Nunes", 8.7],
    ["2023009", "Igor Mendes", 6.0],
    ["2023010", "Juliana Costa", 7.5],
];

echo "<table border='1' cellpadding='8'>";
echo "<tr><th>Matrícula</th><th>Nome</th><th>Nota PWEB1</th></tr>";
foreach ($alunos as $aluno) {
    echo "<tr><td>{$aluno[0]}</td><td>{$aluno[1]}</td><td>{$aluno[2]}</td></tr>";
}
echo "</table>";
?>
