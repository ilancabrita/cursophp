<?php
// Criando funções

function exibirNome($nome)
{
    echo "meu nome é $nome";
}

exibirNome("thais");
echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4)
{
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if($media >= 7):
        echo "$nome foi aprovado com a média $media.";
    else:
        echo "$nome foir reprovado";
    endif;
}

calcularMedia("bob", 3, 5, 3, 10);
echo "<hr>";