<?php
// Expresséoes regulares
/**
 * Defina um padrão a ser usado para procurar ou substituir palavras ou grupos de palavras.
 * ^ inicio da expressão, $ final da expressão - /i - case sensitive
 * [] conjuntos de carateres
 * {} ocorencias - ?{0, 1} *{0,} +{1,}
 * /^[a-z0-9.\-\_]+@[a-z0-9.\_]+\.(com|br|com.br|net|fr)$/
 * /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/
 * 
 * [A-Z] Letras maiusculas
 * [a-z] Letras minuculas
 * [A-Za-z] Letras maiusculas e minuculas
 * [A-Za-z0-9] Letras e numeros
 * 
 * Case sensitive diferencia maiusculas de minuculas.
 * Adicionando o 'i' transformamos en case insensitive para não diferencia maiusculas de minuculas.
*/

$string = "contato@gmail.com";
$padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net|fr)$/i";

if(preg_match($padrao, $string)):
    echo "valido";
    echo "<hr>";
    echo $string;
else:
    echo "invalido";
    echo "<hr>";
endif;