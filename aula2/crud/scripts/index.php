<?php
session_start();
include('conexao.php');

if ($_POST && empty($_POST['id'])) {
    // Query que insere os dados na tabela
    $query = "
            INSERT INTO funcionario (nome, cargo)
                VALUES ('".$_POST['nome']."', '".$_POST['cargo']."')
    ";

    // Executando a query
    $conn->query($query);

    // Cria variáveis default
    $alert = 'danger';
    $strong = 'Erro';
    $message = 'Não foi possivel cadastrar o funcionário.';

    // Executando a query
    if ($conn->query($query)) {
        $alert = 'success';
        $strong = 'Sucesso';
        $message = 'Funcionário cadastrado.';
    }

    $_SESSION['alert'] = $alert;
    $_SESSION['strong'] = $strong;
    $_SESSION['message'] = $message;
} else if ($_POST['id']) {
    // Query que altera os dados na tabela
    $query = "
        UPDATE funcionario 
            SET nome = '".$_POST['nome']."', cargo = '".$_POST['cargo']."' 
                WHERE id = ".$_POST['id']
    ;

    // Cria variáveis default
    $alert = 'danger';
    $strong = 'Erro';
    $message = 'Não foi possivel alterar o funcionário.';

    // Executando a query
    if ($conn->query($query)) {
        $alert = 'success';
        $strong = 'Sucesso';
        $message = 'Funcionário alterado.';
    }

    $_SESSION['alert'] = $alert;
    $_SESSION['strong'] = $strong;
    $_SESSION['message'] = $message;

} else {
    if ($_GET['edit']) {
        header("Location: ../editar.php?id={$_GET['edit']}");
    } else if ($_GET['remove']) {
        // Query que altera os dados na tabela
        $query = "
            DELETE FROM funcionario
                WHERE id = ".$_GET['remove']
        ;

        // Executando a query
        $conn->query($query);

        // Cria variáveis default
        $alert = 'danger';
        $strong = 'Erro';
        $message = 'Não foi possivel remover o funcionário.';

        // Executando a query
        if ($conn->query($query)) {
            $alert = 'success';
            $strong = 'Sucesso';
            $message = 'Funcionário removido.';
        }

        $_SESSION['alert'] = $alert;
        $_SESSION['strong'] = $strong;
        $_SESSION['message'] = $message;
    }
}

if (!$_GET['edit']) {
    header('Location: ../index.php');
}