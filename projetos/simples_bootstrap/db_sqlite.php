<?php
// Caminho do banco de dados SQLite (pode ser relativo ou absoluto)
$db_file = __DIR__ . '/banco.sqlite';

try {
    // Conexão usando PDO com SQLite
    $conn = new PDO("sqlite:$db_file");

    // Configurações adicionais para o banco
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Criar a tabela se não existir
    $conn->exec("
        CREATE TABLE IF NOT EXISTS usuarios (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            nome TEXT NOT NULL,
            email TEXT NOT NULL UNIQUE,
            data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )
    ");
} catch (PDOException $e) {
    // extension=pdo_sqlite
    die("Erro na conexão com o banco SQLite: " . $e->getMessage());
}
