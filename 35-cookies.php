<?php
// Cookies
setcookie('user', 'Rodrigo Oliveira', time()+3600);
setcookie('email', 'rodrigosantosweb@gmail.com', time()-3600);
setcookie('ultima_pequisa', 'tenis adidas', time()+3600);

var_dump($_COOKIE);
echo "<br>";
echo $_COOKIE['ultima_pequisa'];