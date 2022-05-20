<?php

// Criptografia e codificação

$senha = "1998.Ilan";

$novasenha = base64_decode($senha);
echo "base64".$novasenha."<br>";
echo "sua senha é". base64_decode($novasenha);
echo "<hr>";

echo "Md5: ". md5($senha);
echo "<hr>";

echo "Sha1: ".  sha1($senha);