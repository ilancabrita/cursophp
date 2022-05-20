<?php
// Sessão
session_start();

// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
    $nome = myqsli_escape_string($connect, $_POST['nome']);
    $sobrenome = myqsli_escape_string($connect, $_POST['sobrenome']);
    $email = myqsli_escape_string($connect, $_POST['email']);
    $idade = myqsli_escape_string($connect, $_POST['idade']);

    $id = myqsli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "atualizado com sucesso!";
        header('Location: index.php?sucesso');
    else:
        $_SESSION['mensagem'] = "erro ao atualizar";
        header('Location: index.php?erro');
    endif;
endif;