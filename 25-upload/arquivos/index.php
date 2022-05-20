<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="arquivo">
            <br>
            
            <button type="submit" name="enviar-formulario">eviar</button>
        </form>
    </body>
</html>



<?php

if(isset($_POST['enviar-formulario'])):
    $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

    if(in_array($extensao, $formatosPermitidos)):
        $pasta = "arquivos/";
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid().".$extensao";

        if(move_uploaded_file($temporario, $pasta.$novoNome)):
            $mensagem = "upload feito com sucesso!";
        else:
            $mensagem = "erro, não foi possivel fazer o upload";
        endif;
    else:
        $mensagem = "formato invalido";
    endif;

endif;

?>