<?php
require_once 'conect.php';

$sql = "SELECT * FROM Produto";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2 class="titulo">Produtos Cadastrados</h2>

    <table>
        <tr>
            <th>Nome</th>
            <th>Preço (R$)</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['Nome'] ?></td>
                <td><?= number_format($row['Preco'], 2, ',', '.') ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>

<?php mysqli_close($conn); ?>