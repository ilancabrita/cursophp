<?php
// Conexão com o banco de dados
$severname = "localhost";
$username = "root";
$password = "";
$db_name = "sistemalogin";

$connect = mysqli_connect($severname, $username, $password, $db_name);

if(mysqli_connect_error()):
    echo "falha na conexão".mysqli_connect_error();
else:
    
endif;