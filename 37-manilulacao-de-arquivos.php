<?php
// Manilulação de arquivos
/**
 * fopen()
 * fclose()
 * fwrite()
 * !feof()
 * fgets()
 * filesize()
*/

$arquivo = '37-arquivo.txt';
$conteudo = "conteudo de teste\r\n";
$tamanhoArquivo = filesize($arquivo);

$arquivoAberto = fopen($arquivo, 'a');
fwrite($arquivoAberto, $conteudo);
fclose($arquivoAberto);

$arquivoAberto = fopen($arquivo, 'r');

while(!feof($arquivoAberto)):
   $linha = fgetc($arquivoAberto, $tamanhoArquivo);
   echo $linha."<br>";
endwhile;

fclose($arquivoAberto);