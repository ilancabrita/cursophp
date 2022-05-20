<?php
// Constantes
define("NOME", "Ilan");
define("IDADE", 24);
define("ALTURA", 1.80);
define("CASADO", true);

define("TIMES", ['vasco', 'flamengo', 'santos']);

echo 'meu nome é '.NOME.', minha idade é '.IDADE.'e minha altura é '.ALTURA.'.';
echo "<hr>";
echo TIMES[0];

function exibeNOME()
{
    echo NOME;
}

exibeNOME();