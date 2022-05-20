<?php
// Sessão
session_start();

// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadasdrar'])):
    $nome = myqsli_escape_string($connect, $_POST['nome']);
    $sobrenome = myqsli_escape_string($connect, $_POST['sobrenome']);
    $email = myqsli_escape_string($connect, $_POST['email']);
    $idade = myqsli_escape_string($connect, $_POST['idade']);

    $sql = "INSERT TO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "cadastrado com sucesso!";
        header('Location: ../index.php?sucesso');
    else:
        $_SESSION['mensagem'] = "erro ao cadastrar";
        header('Location: ../index.php?erro');
    endif;
endif;