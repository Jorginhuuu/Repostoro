<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO ALUNO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <?php 
    require ('conexao.php');
    function listarRegistros($pdo){
        $sql = "SELECT * FROM alunos";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    $registros = listarRegistros($pdo);
    echo "<table border = 1>
    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Senha</th>
    </tr>";
    foreach ($registros as $registro) {
        echo "<tr>";
        echo "<td>" . $registro['id'] . "</td>";
        echo "<td>" . $registro['nome'] . "</td>";
        echo "<td>" . $registro['email'] . "</td>";
        echo "<td>" . $registro['senha'] . "</td>";
        echo "</tr>
        <a href='edit.php?id=" . $registro['id'] . "'> Editar</a>
        <a href='delete.php?id=" . $registro['id'] . "'> Excluir</a>";
    }
    ?>
</body>
</html>