<?php
$idsFonteA = [101, 105, 102];
$idsFonteB = [103, 101, 106];

$todosIds = array_unique(array_merge($idsFonteA, $idsFonteB));

echo "IDs consolidados (sem duplicatas):<br>";
foreach ($todosIds as $id) {
    echo "- $id<br>";
}
?>
