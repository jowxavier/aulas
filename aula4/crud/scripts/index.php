<?php
session_start();
// Incluindo Classe de conexão
include('../classes/Conexao.class.php');

// Incluindo Classe de Funcionario
include('../classes/Funcionario.class.php');

// Cria uma instância da Classe Funcionário
$funcionario = new Funcionario();

if ($_POST && empty($_POST['id'])) {
    // Recebe dados
    $data = $_POST;

    // Cria variáveis default
    $alert = 'danger';
    $strong = 'Erro';
    $message = 'Não foi possivel cadastrar o funcionário.';

    // Acessa o método gravar de funcionário
    // Verifica se cadastrou
    if ($funcionario->gravar($data)) {
        $alert = 'success';
        $strong = 'Sucesso';
        $message = 'Funcionário cadastrado.';
    }

    $_SESSION['alert'] = $alert;
    $_SESSION['strong'] = $strong;
    $_SESSION['message'] = $message;
} else if ($_POST['id']) {
    // Recebe dados
    $data = $_POST;

    // Cria variáveis default
    $alert = 'danger';
    $strong = 'Erro';
    $message = 'Não foi possivel alterar o funcionário.';

    // Executando a query
    // Verifica se alterou
    if ($funcionario->editar($data)) {
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
        // Cria variáveis default
        $alert = 'danger';
        $strong = 'Erro';
        $message = 'Não foi possivel remover o funcionário.';

        // Executando a query
        // Verifica se deletou
        if ($funcionario->deletar($_GET['remove'])) {
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