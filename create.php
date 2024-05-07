<?php
echo "Inserindo dados abaixo... <br>";
require ('conexao.php');
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"] . '<br>';
    $email = $_POST["email"] . '<br>';
    $sexo = $_POST["sexo"] . '<br>';
    $endereco = $_POST["endereco"] . '<br>';
    $numero = $_POST["numero"] . '<br>';
    $complemento = $_POST["complemento"] . '<br>';
    $bairro = $_POST["bairro"] . '<br>';
    $cidade = $_POST["cidade"] . '<br>';
    $uf = $_POST["uf"] . '<br>';
    $modalidade = $_POST["modalidade"];
    "<hr>";
}
function inserirRegistro($pdo, $nome, $email, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $uf, $modalidade){
    $sql = "INSERT INTO alunos (nome, email, sexo, endereco, numero, complemento, bairro, cidade, uf, modalidade)
    VALUES (:nome, :email, :sexo, :endereco, :numero, :complemento, :bairro, :cidade, :uf, :modalidade)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':sexo', $sexo, PDO::PARAM_STR);
    $stmt->bindParam(':endereco', $endereco, PDO::PARAM_STR);
    $stmt->bindParam(':numero', $numero, PDO::PARAM_STR);
    $stmt->bindParam(':complemento', $complemento, PDO::PARAM_STR);
    $stmt->bindParam(':bairro', $bairro, PDO::PARAM_STR);
    $stmt->bindParam(':uf', $uf, PDO::PARAM_STR);
    $stmt->bindParam(':modalidade', $modalidade, PDO::PARAM_STR);
    return $stmt->execute();
}
if (inserirRegistro($pdo, $nome, $email, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $uf, $modalidade)){
    echo "Registro inserido com sucesso!<br>" . "<a href='cadastro.php'>HOME</a>";
} else{
    echo 'Erro ao inserir o registro';
}
?>