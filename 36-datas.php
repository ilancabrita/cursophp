<?php
// Dadas
date_default_timezone_set('America/Sao_Paulo');

echo date('d');
echo "<br>";
echo date('D');
echo "<br>";
echo date('m');
echo "<br>";
echo date('M');
echo "<br>";
echo date('y');
echo "<br>";
echo date('Y');
echo "<br>";
echo date('d/m/Y');
echo "<br>";
echo date('l');
echo "<br>";
echo date('d/m/Y h');
echo "<br>";
echo date('d/m/Y H:i:s');
echo "<br>";
echo date('d/m/Y H:i:s A');
echo "<br>";
echo "<hr>";

// Date
$date = date('Y-m-d');

// Datetime
$datetime = date('Y-m-d H:i:s');
echo $datetime;
echo "<br>";
echo "<hr>";

// Time
echo time();
echo "<br>";
$time = time();
echo date('d/m/Y', $time);
echo "<hr>";

// Mktime
$data_pagamento = mktime(15, 30, 00, 02, 15, 2023);
echo date('d/m/y - h:i', $data_pagamento);
echo "<hr>";

// Strtotime
$data = '2029-04-10 13:30:00';
$data = strtotime($data);

echo date('d/m/Y', $data);