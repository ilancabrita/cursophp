<?php
/**
 * Operadores logicos
 * Nos permitem fazer comparações entre expressões
 * e (&& - and)
 * ou (|| - or)
 * ou exclusivo (xor)
 * negação (!)
 */

$idade = 25;
$nome = "Rodrigo";

if(($idade == 25) and ($nome == "Rodrigo")):
    echo "é verdadeiro";
else:
    echo "é falso";
endif;
echo "<hr>";

if(($idade == 25) or ($nome == "Rodrigo")):
    echo "é verdadeiro";
else:
    echo "é falso";
endif;
echo "<hr>";

if(($idade == 25) xor ($nome == "Rodrigo")):
    echo "é verdadeiro";
else:
    echo "é falso";
endif;
echo "<hr>";

if(($idade == 25) and ! ($nome == "Rodrigo")):
    echo "é verdadeiro";
else:
    echo "é falso";
endif;
echo "<hr>";