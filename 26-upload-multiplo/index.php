<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="arquivo[]" multiple>
            <br>
            
            <button type="submit" name="enviar-formulario">eviar</button>
        </form>
    </body>
</html>



<?php

if(isset($_POST['enviar-formulario'])):
    $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
    $quantidadeArquivos = count($_FILES['arquivo']['name']);
    $contador = 0;

    while($contador < $quantidadeArquivos):
        $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

        if(in_array($extensao, $formatosPermitidos)):
            $pasta = "arquivos/";
            $temporario = $_FILES['arquivo']['tmp_name'][$contador];
            $novoNome = uniqid().".$extensao";

            if(move_uploaded_file($temporario, $pasta.$novoNome)):
                echo "upload feito com sucesso para $pasta$novoNome<br>";
            else:
                echo "erro ao enviar o arquivo $temporario";
            endif;
        else:
            echo "$extensao não é permetida <br>";
        endif;

        $contador++;
    endwhile;

endif;

?>