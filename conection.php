<?php

// Conexão com o banco de dados
$pdo = new PDO("mysql:host=LocalHost", "root", "root");

// Verificar se o banco de dados  existe
$sql = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'clienteDB'";
$resultado = $pdo->query($sql)->fetch();

if (empty($resultado)) {
    // Criar o banco de dados se não existir
    $sql = "CREATE DATABASE clienteDB";
    $pdo->exec($sql);
}

// Selecionar o banco de dados
$pdo->exec("USE clienteDB");

// Verificar se a tabela  existe
$resultado = $pdo->query("SHOW TABLES LIKE 'cliente'")->fetch();
$resultado = $pdo->query("SHOW TABLES LIKE 'avaliacao'")->fetch();
if (!$resultado) {
    // Criar a tabela  se não existir
    $sql = "CREATE TABLE clientes (
        id INT(11)  NOT NULL UNIQUE PRIMARY KEY AUTO_INCREMENT,
        usuario VARCHAR(30) NOT NULL UNIQUE,
        nome VARCHAR(50) NOT NULL,
        email VARCHAR(50) UNIQUE NOT NULL,
        senha VARCHAR(20) NOT NULL, 
    )";
    $sql_avaliacao = "CREATE TABLE avaliacao(
        id_avaliacao INT(11)  PRIMARY KEY AUTO_INCREMENT,
        avaliacoes VARCHAR(150),
        estrelas FLOAT(1) NOT NULL,
        id_clientes INT(11),
        CONSTRAINT fk_cliente_avaliacao FOREIGN KEY (id_clientes) REFERENCES clientes (id_clientes)
    )";
    $pdo->exec($sql);
}   
?>