<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            Idade : <input type="text" name="idade">
            <br>
            Email: <input type="email" name="email">
            <br>
            Perso: <input type="email" name="perso">
            <br>
            IP: <input type="email" name="ip">
            <br>
            URL: <input type="email" name="URL">
            <br>
            <button type="submit" name="enviar-formulario">eviar</button>
        </form>
    </body>
</html>



<?php
// Array de erros
if(isset($_POST['enviar-formulario'])):
    $erros = array();
    
    // Validações
    if($idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
        $erros[] = "idade precissa ser ineterio";
    endif;

    if($email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
        $erros[] = "email invalido";
    endif;

    if($peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
        $erros[] = "peso precissa ser un float";
    endif;

    if($ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
        $erros[] = "IP invalido";
    endif;

    if($url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
        $erros[] = "URL invalida";
    endif;

    //Exibindo mensagens
    if(!empty($erros)):
        foreach($erros as $erro):
            echo "<li> $erro </li>";
        endforeach;
    else:
        echo "parabens, seus dados estão corretos";
    endif;
endif;
?>