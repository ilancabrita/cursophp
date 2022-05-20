<?php
session_start();

$_SESSION['cor'] = "verde";
$_SESSION['carro'] = "honda";

echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();