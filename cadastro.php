<?php
include('conection.php');
session_start();

$usuario = $_POST['usuario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$stmt = $pdo->prepare("INSERT INTO clientes (usuario, nome, email, senha) VALUES (?, ?, ?, ?)");
$stmt->bindValue(1, $usuario);
$stmt->bindValue(2, $nome);
$stmt->bindValue(3, $email);
$stmt->bindValue(4, $senha);
$stmt->execute();
try {
    $pdo = new PDO('mysql:host=localhost;dbname=clienteDB', 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erro na conexão: ' . $e->getMessage());
}


// Verificar se o cadastro foi realizado com sucesso
if ($stmt->rowCount() > 0) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar o cliente.";
}
?>
