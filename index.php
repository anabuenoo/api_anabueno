<?php
header('Content-Type: application/json');

$lojas = [
    ['marca' => 'Zara', 'modelo' => 'Camisa Social', 'preco' => 199],
    ['marca' => 'H&M', 'modelo' => 'Calça Jeans', 'preco' => 149],
    ['marca' => 'Renner', 'modelo' => 'Jaqueta', 'preco' => 249],
    ['marca' => 'C&A', 'modelo' => 'Vestido', 'preco' => 179]
];

echo json_encode($lojas);
?>
