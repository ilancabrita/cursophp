<?php
// Sessão
session_start();

// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
    $id = myqsli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM clientes WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "deletado com sucesso!";
        header('Location: index.php?sucesso');
    else:
        $_SESSION['mensagem'] = "erro ao deletar";
        header('Location: index.php?erro');
    endif;
endif;