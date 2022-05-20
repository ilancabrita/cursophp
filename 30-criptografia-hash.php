<?php
// Erro 
// Senhas seguras com password hash

$senha = "1234568";
$senha_db = "$2y$10$2y$10$a6PicLkSbpZJdueIq4m4s.6nAS./FoXwxo40sFbGO3P0Buc/Ob9pq";

echo $senha_db;
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
echo $senhaSegura;
echo "<hr>";

if(password_verify($senha, $senha_db)):
    echo "senha valida";
else:
    echo "senha invalida";
endif;