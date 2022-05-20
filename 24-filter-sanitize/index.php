<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            Nome: <input type="email" name="nome">
            <br>
            Idade : <input type="text" name="idade">
            <br>
            Email: <input type="email" name="email">
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
    
    // Sanitize = limpar
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    if(!filter_var($email, FILTER_VALIDATE_INT)):
        $erros[] = "idade precissa ser um intero";
    endif;

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
        $erros[] = "email invalido";
    endif;

    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    if(!filter_var($email, FILTER_VALIDATE_URL)):
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