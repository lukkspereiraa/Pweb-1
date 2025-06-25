<?php
require_once 'conectbd.php';

$slq = "SELECT * FROM Clientes";
$result = mysqli_query($conexao, $slq);

if (!$result)
    die("Query failed: " . mysqli_error($conexao));

echo "<table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Endereço</th>
            <th>Data de nacimento</th>
        </tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nome']}</td>
            <td>{$row['email']}</td>
            <td>{$row['endreco']}</td>
            <td>{$row['data_nasc']}</td>
          </tr>";
}

echo "</table>";
?>