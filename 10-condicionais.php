<?php
/**
 * Condicionais
 * if
 * else
 * elseif
 */

 $numero = 10;

 if($numero == 10):
    echo "é iguel a 10";
elseif($numero <= 9):
    echo "é menor ou igual a 9";
else:
    echo "é diferente de 10";
endif;
echo "<hr>";

$media = 7;
echo($media >= 7) ? "aprovado" : "reprovado";
echo "<hr>";


/**
 * Condicionais
 * switch
 * case
 */

 $cor = "amarelo";
 switch($cor):
    case "vermelho":
        echo "sua cor preferida é o vervelho";
        break;

    case "verde":
        echo "sua cor preferida é o verde";
        break;

    case "azul":
        echo "sua cor preferida é o azul";
        break;
    
    default:
        echo "sua cor preferida não é vermelho, verde ou azul.";
endswitch;
