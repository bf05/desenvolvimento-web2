<?php
$preco = (float) trim($_GET['preco']);
$quantidade = (int) trim($_GET['quantidade']);

$total = $preco * $quantidade;

echo "Preço: " . $preco;
echo "<br>";
echo "Quantidade: " . $quantidade;
echo "<br>";
echo "Total: " . $total;
?>
