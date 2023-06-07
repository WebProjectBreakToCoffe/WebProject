<?php
// Conexão com o banco de dados
$pdo = new PDO("mysql:host=localhost;dbname=clienteDB", "root", "root");

// Verificar se a tabela "clientes" existe
$resultado = $pdo->query("SHOW TABLES LIKE 'clientes'")->fetch();

if (!$resultado) {
    // Criar a tabela "clientes" se não existir
    $sql = "CREATE TABLE clientes (
        id INT(11) NOT NULL UNIQUE PRIMARY KEY AUTO_INCREMENT,
        usuario VARCHAR(50) NOT NULL UNIQUE,
        nome VARCHAR(50) NOT NULL,
        email VARCHAR(50) UNIQUE NOT NULL,
        senha VARCHAR(20) NOT NULL
    )";
    
    $pdo->exec($sql);
}

// Verificar se a tabela "produtos" existe
$resultado = $pdo->query("SHOW TABLES LIKE 'produtos'")->fetch();

if (!$resultado) {
    // Criar a tabela "produtos" se não existir
    $sql = "CREATE TABLE produtos (
        id INT(11) NOT NULL UNIQUE PRIMARY KEY AUTO_INCREMENT,
        nome VARCHAR(50) NOT NULL
    )";
    $pdo->exec($sql);
}

// Verificar se a tabela "avaliacao" existe
$resultado = $pdo->query("SHOW TABLES LIKE 'avaliacao'")->fetch();

if (!$resultado) {
    // Criar a tabela "avaliacao" se não existir
    $sql = "CREATE TABLE avaliacao (
        id_avaliacao INT(11) PRIMARY KEY AUTO_INCREMENT,
        estrelas FLOAT NOT NULL,
        id_cliente INT(11),
        id_produto INT(11),
        FOREIGN KEY (id_cliente) REFERENCES clientes (id),
        FOREIGN KEY (id_produto) REFERENCES produtos (id)
    )";
    $pdo->exec($sql);
}
?>
