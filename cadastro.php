<?php
include('conection.php');
session_start();

$usuario = $_POST['usuario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$stmt = $pdo->prepare("INSERT INTO clientes (usuario, nome, email, senha) VALUES (?, ?, ?, ?)");
$stmt->bindValue(1, $usuario);
$stmt->bindValue(1, $nome);
$stmt->bindValue(2, $email);
$stmt->bindValue(4, $senha);
$stmt->execute();

header("Location: conection.php");
?>