<?php
/****Escalares****/
// string
$nome = "ola mundo";
var_dump($nome);
if(is_string($nome)):
    echo "E um string";
else:
    echo "Nao e uma string";
endif;
echo "<hr>";

// int
$idade = 10;
var_dump($idade);
if(is_int($idade)):
    echo "E um interio";
else:
    echo "Nao e um interio";
endif;
echo "<hr>";

// float
$altura = 1.80;
var_dump($altura);
if(is_float($altura)):
    echo "E um float";
else:
    echo "Nao e um float";
endif;
echo "<hr>";

// boolean
$admin = false;
var_dump($admin);
if(is_bool($admin)):
    echo "E um booleano";
else:
    echo "Nao e um booleano";
endif;
echo "<hr>";

/***********Compostos************/
$carros = array("Gol", "Uno", "Camaro", 12, 20.6, true);
var_dump($carros);
if(is_array($carros)):
    echo "E um array";
else:
    echo "Nao e um array";
endif;
echo "<hr>";

// objet
class Cliente {
    public $nome;
    public function atribuirNome($nome) {
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("thais");
var_dump($cliente);
if(is_object($cliente)):
    echo "E um objecto";
else:
    echo "Nao e um objecto";
endif;
echo "<hr>";

/**************Espaciais*************/
// NULL
$cidade = NULL;
var_dump($cidade);

// Resouce
