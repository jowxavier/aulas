<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Funcionários</title>
</head>
<body>
    <div class="container"><br>
        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?php echo $_SESSION['alert']; ?> alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['strong']; ?>&nbsp;</strong> <?php echo $_SESSION['message'] ?>
            </div>
            <br>
        <?php } ?>
        <a class="btn btn-success" href="formulario.html">Novo Cadastro</a><br><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cargo</th>
                    <th scope="col" colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Incluindo Conexão
                    include('scripts/conexao.php');

                    // Query que seleciona a tabela
                    $query = "SELECT * FROM funcionario";

                    // Guarda o resultado da query
                    $result = $conn->query($query);

                    // Cria um array associativo, enquanto existir dados
                    while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['cargo']; ?></td>
                    <td>
                        <a href="scripts/index.php?edit=<?php echo $row['id']; ?>"><i class="fa fa-edit btn btn-info"></i></a>
                        <a href="scripts/index.php?remove=<?php echo $row['id']; ?>"><i class="fa fa-remove btn btn-danger" href="scripts/index.php"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>