<?php
// Arrays numéricos
$carros = array(1=>"BMW", 2=>"Veloste", 3=>"Hilux");
$carro[] = "Amarok";
$carros[10] = "Camaro";
echo $carros[10];
echo "<br>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
print_r($motos);
echo "<br>";

$clientes = ["Rodrigo", "Felipe", "Bia"];
echo "<hr>";

// Count
echo count($carros);
$totalClientes = count ($clientes);
echo $totalClientes;
echo "<hr>";

// Foreach
foreach($clientes as $valor)
{
    echo $valor."<br>";
}
echo "<hr>";

// Arrays associativos
$pesoa = array("nome" => "Rodrigo", "idade"=> 23, "altura" => 1.75);
$pesoa["cidade"] = "Itabuna";

foreach($pesoa as $indice => $valor)
{
    echo $indice.":".$valor."<br>";
}
echo "<hr>";

// Arrays multidimensionais
$times = array(
    "carriocas" => array("campeao" => "vasco", "vice" => "flamengo", "terceiro" => "botafogo"),
    "paulista" => array("santos", "sao paulo", "palmeiras"),
    "baianos" => array("bahia", "victoria", "itabuna"),
);
echo $times["paulista"][1];
echo "<hr>";

foreach($times["carriocas"] as $indice => $valor)
{
    echo $indice.":".$valor."<br>";
}