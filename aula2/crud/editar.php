<?php
// Incluindo Conexão
include('scripts/conexao.php');

// Query que seleciona a tabela
$query = "SELECT * FROM funcionario WHERE id = {$_GET['id']}";
// Executando a query
$result = $conn->query($query);
// Guarda da execução em um array associativo
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Funcionários <?php echo $data['nome']; ?></title>
</head>
<body>
    <div class="container"><br><br>
        <form action="scripts/index.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Jonathan Xavier Ribeiro" value="<?php echo $data['nome']; ?>">
            </div>
            <br>
            <div class="form-group">
                <label for="cargo">Cargo</label>
                <input type="text" class="form-control" name="cargo" placeholder="Tech Lead"  value="<?php echo $data['cargo']; ?>">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>