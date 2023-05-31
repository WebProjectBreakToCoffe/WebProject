<?php

// Conexão com o banco de dados
$pdo = new PDO("mysql:host=localhost", "root", "root");

// Verificar se o banco de dados  existe
$sql = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'cliente'";
$resultado = $pdo->query($sql)->fetch();

if (empty($resultado)) {
    // Criar o banco de dados se não existir
    $sql = "CREATE DATABASE cliente";
    $pdo->exec($sql);
}

// Selecionar o banco de dados
$pdo->exec("USE cliente");

// Verificar se a tabela  existe
$resultado = $pdo->query("SHOW TABLES LIKE 'clientes'")->fetch();

if (!$resultado) {
    // Criar a tabela  se não existir
    $sql = "CREATE TABLE clientes (
        id INT(11)auto_increment NOT NULL UNIQUE PRIMARY KEY,
        usuario VARCHAR(30) NOT NULL UNIQUE,
        nome VARCHAR(50) NOT NULL,
        email VARCHAR(50) UNIQUE NOT NULL,
        senha VARCHAR(20) NOT NULL,
    )";
    $sql = "CREATE TABLE avaliacao(
        id_clientes VARCHAR(11) NOT NULL UNIQUE FOREIGN KEY,
        avaliacoes VARCHAR(280) PRIMARY KEY,
        estrelas FLOAT(1) NOT NULL
    )";
    $pdo->exec($sql);
}   
?>