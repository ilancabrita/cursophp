<?php
$nome = "ilan";
$a = 1;
$b = 3;
$c = 7;

function exibeNome() {
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";

/////////////////////////////////

function exibeCidde() {
    // Escopo local
    global $cidade;
    $cidade = "curitiba";

}

exibeCidde();
echo $cidade;
echo "<hr>";
////////////////////////////////

function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] +$GLOBALS['c'];
}

soma();