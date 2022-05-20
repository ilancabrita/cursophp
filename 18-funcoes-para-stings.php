<?php
// Funções para Strings
$nome = "rodrigo oliveira";
$novoNome = strtoupper($nome);
echo $novoNome;
echo "<hr>";

$nome = "RODRIGO OLIVEIRA";
$novoNome = strtolower($nome);
echo $novoNome;
echo "<hr>";

$mesagem = "Ola mundo";
echo substr($mesagem, 4);
echo "<hr>";

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7, "*", STR_PAD_LEFT);
echo $novoObjeto;
echo "<hr>";

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7, "*", STR_PAD_RIGHT);
echo $novoObjeto;
echo "<hr>";

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7, "*", STR_PAD_BOTH);
echo $novoObjeto;
echo "<hr>";

$string = str_repeat("sucesso", 5,);
echo $string;
echo "<hr>";

$mesagem = "Ola mundo";
echo strlen($mesagem);
echo "<hr>";

$texto = "a seleção Argentine sera compõa da copa do mundo 2018.";
$novoTexto = str_replace("Argentina", "Brasileira", $texto);
echo $novoTexto;
echo "<hr>";

echo strpos($texto, "copa");
echo "<hr>";