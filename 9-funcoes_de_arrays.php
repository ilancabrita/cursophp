<?php
$nomes =array("Primo" => "Rodrigo", "Vizinho" => "Felope", "Mãe" => "Maria", "Pai" => "José");

if(is_array($nomes)):
    echo "é um array";
else:
    echo "não é um array";
endif;
echo "<hr>";

if(in_array("Felipe", $nomes)):
    echo "exite no array";
else:
    echo "não existe";
endif;
echo "<hr>";

$keys = array_keys($nomes);
print_r($keys);
echo "<hr>";

$values = array_values($nomes);
print_r($values);
echo "<hr>";

$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "50cc", "cb1000");

$veiculos = array_merge($carros, $motos);

print_r($veiculos);
echo "<hr>";

print_r($carros);
echo "<br>";
echo array_pop($carros);
echo "<br>";
print_r($carros);
echo "<hr>";

print_r($carros);
echo "<br>";
echo array_shift($carros);
echo "<br>";
print_r($carros);
echo "<hr>";

$frutas = array("uva", "laranga", "maçã");
print_r($frutas);
echo "<br>";
array_unshift($frutas, "manga", "acerola", "morango");
echo "<br>";
print_r($frutas);
echo "<hr>";

$frutas = array("uva", "laranga", "maçã");
print_r($frutas);
echo "<br>";
array_push($frutas, "manga", "acerola", "morango");
echo "<br>";
print_r($frutas);
echo "<hr>";

$keys = array("campeo", "vice", "terceiro");
$values = array("vasco", "flamengo", "botafogo");

$times = array_combine($keys, $values);
print_r($times);
echo "<hr>";

$soma = array(5, 6, 10, 8);
echo array_sum($soma);
echo "<hr>";
$total = array_sum($soma);
echo $total;
echo "<hr>";

$data = "16/05/2022";
$novaData = explode("/", $data);
print_r($novaData);
echo "<hr>";

$nomes = array("rodrigo", "carlos", "neusa", "talita");
$string = implode(", ", $nomes);
echo $string;
echo "<hr>";
