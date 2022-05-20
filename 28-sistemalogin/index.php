<?php

// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

// Botão enviar
if (isset($_POST['btn-entrar'])) :
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if (isset($_POST['lembrar-senha'])) :
        setcookie('login', $login, time() + 3600);
        setcookie('senha', md5($senha), time() + 3600);
    endif;

    if (empty($login) or empty($senha)) :
        $erros[] = "<li> o campo login/senha precissa ser preenchido </li>";
    else :
        // 105 OR 1=1 
        // 1; DROP TABLE teste

        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resutado = mysqli_query($connect, $sql);

        if (mysqli_num_rows($resutado) > 0) :
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
            $resutado = mysqli_query($connect, $sql);

            if (mysqli_num_rows($resutado) == 1) :
                $dados = mysqli_fetch_array($resutado);
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php');
            else :
                $erros[] = "<li> usuario e senha não conferem </li>";
            endif;

        else :
            $erros[] = "<li> usuario inexistente </li>";
        endif;

    endif;
endif;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script>
        function showAlert() {
            var myText = "This can be whatever text you like!";
            alert(myText);
        }
    </script>
</head>

<body>

    <h1>Login</h1>

    <?php
    if (!empty($erros)) :
        foreach ($erros as $erro) :
            echo $erro;
        endforeach;
    endif;
    ?>

    <hr>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="$_POST">
        Login: <input type="text" name="login" value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : '' ?>">
        <br>
        Senha: <input type="password" name="senha" value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '' ?>">
        <br>
        Lembrar senha: <input type="checkbox" name="lembrar-senha">
        <button type="submit" name="btn-entrar">entrar</button>
    </form>

</body>

</html>