<?php
// Funções para Numeros

$test = 2034.56;
$preco = number_format($test, 2, ",", ".");
echo "o valor do produto é R$ $preco";
echo "<hr>";

echo round(3.6);
echo "<hr>";

echo ceil(4.4);
echo "<hr>";

echo floor(4.6);
echo "<hr>";

echo rand(4, 50);
echo "<hr>";
